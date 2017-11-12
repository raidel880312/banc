

(function ($, d) {

    $.fn.paginate = function (extra, options) {

        var defaults = {
            prev: '.prev',
            next: '.next',
            target: '#items',
            viewer: '#view'
        };
        var ctrl = $.extend({}, defaults, options);

        //Paginate (next)
        $(d).on('click', ctrl.next, function (e) {
            e.preventDefault();
            $('#myModal').modal('show');
            paginate($(ctrl.viewer), $(ctrl.target).data('url'), $(ctrl.next).data('offset'), extra);
            updateOffset('next', $(ctrl.next).data('offset'), $(ctrl.target).data('per_page'), ctrl);
            togglePrevNext('next', $(ctrl.next).data('offset'), $(ctrl.target).data('total'),
                $(ctrl.target).data('per_page'), ctrl);
        });

        //Paginate (previous)
        $(d).on('click', ctrl.prev, function (e) {
            e.preventDefault();
            $('#myModal').modal('show');
            paginate($(ctrl.viewer), $(ctrl.target).data('url'), $(ctrl.prev).data('offset'), extra);
            updateOffset('prev', $(ctrl.prev).data('offset'), $(ctrl.target).data('per_page'), ctrl);
            togglePrevNext('prev', $(ctrl.prev).data('offset'), $(ctrl.target).data('total'),
                $(ctrl.target).data('per_page'), ctrl);
        });

        $(d).on('click', '.num-item', function (e) {
            e.preventDefault();
            $('#myModal').modal('show');
            paginate($(ctrl.viewer), $(ctrl.target).data('url'), $(this).attr('id'), extra);
            updateOffset('number', $(this).data('offset'), $(ctrl.target).data('per_page'), ctrl);
            if (!($(this).parent().hasClass('active')))
                toggleByNumberAction($(ctrl.next).data('offset'), $(ctrl.prev).data('offset'),
                    $(ctrl.target).data('total'), $(ctrl.target).data('per_page'), ctrl);
        });

    };

    function paginate(viewer, url, current_offset, extra) {
        //Find items
        var data = {'offset': current_offset, 'extra': extra};
        $.ajax({
            url: url,
            data: data,
            type: 'POST',
            success: function (response) {
                //Insert items founded
                $(viewer).empty();
                $(viewer).html(response);

                //1:- Check active page
                var p = $('.pagination');
                p.find('li.active').removeClass('active');
                p.find('a#' + current_offset).parent().addClass('active');

                $("html, body").animate({
                    scrollTop: ($(viewer).offset().top - 75) + "px"
                }, {
                    duration: 1000,
                    easing: "swing"
                });
                $('#myModal').modal('hide');
            }
        });
    }

    function updateOffset(action, current_offset, count_result_per_page, ctrl) {
        var offset_next = 0;
        var offset_prev = 0;
        if (action == 'next') {
            offset_next = current_offset + count_result_per_page;
            offset_prev = offset_next - (count_result_per_page * 2);
        }
        else if (action == 'prev') {
            var next = $(ctrl.next).data('offset');
            offset_next = next - count_result_per_page;
            offset_prev = offset_next - (count_result_per_page * 2);
        }
        else {
            offset_next = current_offset + count_result_per_page;
            offset_prev = current_offset - count_result_per_page;
        }
        $(ctrl.next).data('offset', offset_next);
        $(ctrl.prev).data('offset', offset_prev);
    }

    function togglePrevNext(action, current_offset, total_result, count_result_per_page, ctrl) {
        var next = $(ctrl.next);
        var prev = $(ctrl.prev);
        if (action == 'next') {
            if (current_offset >= total_result) {
                //Disable next
                next.toggle();
                next.data('enabled', 0);
            }
            //Check to enable or no the prev
            var enabled = parseInt(prev.data('enabled'));
            if (current_offset > 0 && enabled == 0) {
                //Enable prev
                prev.toggle();            //Enable
                prev.data('enabled', 1);  //Modify enabled
            }
        }
        else if (action == 'prev') {
            if (current_offset <= (0 - count_result_per_page)) {
                //Disable prev
                prev.toggle();
                prev.data('enabled', 0);
            }
            //Check to enable or no the next
            if (current_offset < total_result && parseInt(next.data('enabled')) == 0) {
                //Enable next
                next.toggle();            //Enable
                next.data('enabled', 1);  //Modify enabled
            }
        }
    }

    function toggleByNumberAction(current_next_offset, current_prev_offset, total_result, count_result_per_page, ctrl) {
        var next = $(ctrl.next);
        var prev = $(ctrl.prev);

        if (current_next_offset >= total_result) {
            //Disable next
            next.toggle();
            next.data('enabled', 0);
        }
        //Check to enable or no the prev
        var enabled = parseInt(prev.data('enabled'));
        if (current_prev_offset >= 0 && enabled == 0) {
            //Enable prev
            prev.toggle();            //Enable
            prev.data('enabled', 1);  //Modify enabled
        }
        if (current_prev_offset <= (0 - count_result_per_page)) {
            //Disable prev
            prev.toggle();
            prev.data('enabled', 0);
        }
        //Check to enable or no the next
        if (current_next_offset < total_result && parseInt(next.data('enabled')) == 0) {
            //Enable next
            next.toggle();            //Enable
            next.data('enabled', 1);  //Modify enabled
        }
    }

}(jQuery, document));