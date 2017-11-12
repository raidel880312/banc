

var App = function () {
    var search = function () {
        loader(55);
        $('#myModal').modal('show');
        setTimeout(function () {
            $('.search').ajaxForm({
                dataType: 'json',
//                    beforeSubmit: validate,
                success: function (r) {
                    if (r.success) {
                        loader(100);
                        App.alert(r.message);
                        $('.page-title').html('<i class="fa fa-search fa-fw"></i><span class="menu-title">Results</span>');
                        $('.page-content').html(r.view);
                    } else {
                        loader(100);
                        App.alert(r.message);
                    }
                    $('#myModal').modal('hide');
                }
            });
        }, 1500);
    };
    var topBarAjaxLinks = function () {
        $(document).on('click', 'a.toplink', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var title = $(this).html();
            var pageTitle = $('.page-title');
            var pageContentBody = $('.page-content');
            loader(55);
            $('#myModal').modal('show');
            $.ajax({
                type: "GET",
                cache: false,
                url: url,
                dataType: "html",
                success: function (res) {
                    pageContentBody.html(res);
                    pageTitle.html(title);
                    $('#myModal').modal('hide');
                    loader(100);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    pageContentBody.html("<h4>An error occurred, content can't be loaded.</h4>");
                },
                async: false
            });
        })
    };
    var toggleSideBarMenu = function () {
        var flag;
        if ($('body').hasClass('sidebar-colors')) {
            flag = true;
        } else {
            flag = false;
        }
        $('#menu-toggle').toggle(
            function () {
                if ($('#wrapper').hasClass('right-sidebar')) {
                    $('body').addClass('right-side-collapsed')
                    $('#sidebar .slimScrollDiv').css('overflow', 'initial');
                    $('#sidebar .menu-scroll').css('overflow', 'initial');
                } else {
                    $('body').addClass('left-side-collapsed').removeClass('sidebar-colors');
                    $('#sidebar .slimScrollDiv').css('overflow', 'initial');
                    $('#sidebar .menu-scroll').css('overflow', 'initial');
                }
            }, function () {
                if ($('#wrapper').hasClass('right-sidebar')) {
                    $('body').removeClass('right-side-collapsed');
                    $('#sidebar .slimScrollDiv').css('overflow', 'hidden');
                    $('#sidebar .menu-scroll').css('overflow', 'hidden');
                } else {
                    $('body').removeClass('left-side-collapsed')
                    if (flag == true) {
                        $('body').addClass('sidebar-colors');
                    }
                    $('#sidebar .slimScrollDiv').css('overflow', 'hidden');
                    $('#sidebar .menu-scroll').css('overflow', 'hidden');
                }
            }
        );

        if ($('#wrapper').hasClass('right-sidebar')) {
            $('ul#side-menu li').hover(function () {
                if ($('body').hasClass('right-side-collapsed')) {
                    $(this).addClass('nav-hover');
                }
            }, function () {
                if ($('body').hasClass('right-side-collapsed')) {
                    $(this).removeClass('nav-hover');
                }
            });
        } else {
            $('ul#side-menu li').hover(function () {
                if ($('body').hasClass('left-side-collapsed')) {
                    $(this).addClass('nav-hover');
                }
            }, function () {
                if ($('body').hasClass('left-side-collapsed')) {
                    $(this).removeClass('nav-hover');
                }
            });
        }
    };
    var sideBarLinks = function () {
        $('#side-menu').on('click', 'li > a.link', function (e) {
            e.preventDefault();
            loader(55);
            $('#myModal').modal('show');
            var url = $(this).attr('href');
            var title = $(this).html();
            var pageTitle = $('.page-title');
            var pageContentBody = $('.page-content');
            $('#side-menu').children('li.active').removeClass('active');
            $(this).parent('li').addClass('active');
            $.ajax({
                type: "GET",
                cache: false,
                url: url,
                dataType: "html",
                success: function (res) {
                    pageContentBody.html(res);
                    pageTitle.html(title);
                    $('#grid-view').dataTable();
                    loader(100);
                    $('#myModal').modal('hide');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    pageContentBody.html("<h4>An error occurred, content can't be loaded.</h4>");
                    loader(100);
                    $('#myModal').modal('hide');
                },
                async: false
            });
        })
    };
    var newAction = function () {
        $(document).on('click', '._new', function (e) {
            e.preventDefault();
            var url = $(this).data('href');
            loader(55);
            $('#myModal').modal('show');
            execute(url);
        })
    };
    var showAction = function () {
        $(document).on('click', '._show', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            loader(55);
            $('#myModal').modal('show');
            execute(url);
        })
    };
    var editAction = function () {
        $(document).on('click', '._edit', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            loader(55);
            $('#myModal').modal('show');
            execute(url);
        })
    };
    var setPassAction = function () {
        $(document).on('click', '._set_pass', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            loader(55);
            $('#myModal').modal('show');
            execute(url);
        })
    };
    var trashAction = function () {
        $(document).on('click', '._trash', function (e) {
            e.preventDefault();
            if (confirm('You want delete the selected object ?')) {
                var url = $(this).attr('href');
                var pageContentBody = $('.page-content');
                loader(55);
                $('#myModal').modal('show');
                $.ajax({
                    type: "DELETE",
                    cache: false,
                    url: url,
                    dataType: "html",
                    success: function (r) {
                        alerts('Deleted successfully.');
                        pageContentBody.html(r);
                        $('#grid-view').dataTable();
                        $('#myModal').modal('hide');
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        pageContentBody.html("<h4>An error occurred, content can't be loaded.</h4>");
                        alerts('Sorry, an error occurred.');
                    },
                    async: false
                });
            }
        })
    };
    var clearAction = function () {
        $(document).on('click', '._clear', function (e) {
            e.preventDefault();
            if (confirm('You want delete the selected object ?')) {
                var id = $(this).data('target');
                var url = $(this).attr('href');
                var pageContentBody = $('#viewer');
                loader(55);
                $('#myModal').modal('show');
                $.ajax({
                    type: "DELETE",
                    cache: false,
                    url: url,
                    dataType: "html",
                    success: function (r) {
                        alerts('Deleted successfully.');
                        pageContentBody.empty();
                        $(id).addClass('fadeOut');
                        setTimeout(function () {
                            $(id).remove();
                        }, 1000);
                        $('#myModal').modal('hide');
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        pageContentBody.html("<h4>An error occurred, content can't be loaded.</h4>");
                        alerts('Sorry, an error occurred.');
                        $('#myModal').modal('hide');
                    },
                    async: false
                });
            }
        })
    };
    var cancelAction = function () {
        $(document).on('click', '#_cancel', function () {
            $('#viewer').empty();
        })
    };
    var execute = function (url) {
        setTimeout(function () {
            $('#viewer').load(url, function () {
                loader(100);
                goToLink('#viewer');
            })
        }, 150);
        $('#myModal').modal('hide');
    };
    var loader = function (percent) {
        var loader = $('#loader');
        if (percent == '100') {
            loader.css('width', percent + '%');
            loader.parent().toggle();
            loader.css('width', '0%');
            loader.parent().toggle();
        }
        else {
            loader.css('width', percent + '%');
        }

    };
    var alerts = function (msg) {
        loader(100);
        var alert = $('#alert');
        alert.removeClass('bounceInRight');
        alert.removeClass('bounceOutRight');
        alert.addClass('bounceInRight');
        var btn = '<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>';
        alert.html('');
        alert.append(btn);
        alert.append(msg);
        setTimeout(function () {
            alert.addClass('bounceOutRight');
        }, 3500);
    };
    var active = function (ul, target) {
        $(ul).children('li.active').removeClass('active');
        target.parent('li').addClass('active');
    };
    var goToLink = function (target) {
        $("html, body").animate({
            scrollTop: ($(target).offset().top - 75) + "px"
        }, {
            duration: 1000,
            easing: "swing"
        });
        return false;
    };
    var fancybox = function () {
        $(".fancybox").fancybox({
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
    };
    var nav = function () {
        $(document).on('click', 'nav ul > li > a.nav_link', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            goToLink(target);
            active('#nav-list', $(this));
        });
    };
    var newsletter = function (url, data) {
        $('#myModal').modal('show');
        $.ajax({
            url: url,
            data: {'newsletter': data},
            dataType: 'JSON',
            method: 'POST',
            success: function (r) {
                var nwl = $('input[name="newsletter"]');
                if (!r.success) {
                    nwl.parent().addClass('has-error');
                }
                else {
                    nwl.parent().removeClass('has-error');
                    nwl.val('');
                }
                $('#myModal').modal('hide');
                alerts(r.message);
            }

        });
    };
    var contact = function (url) {
        $('#myModal').modal('show');
        var data = $('#contact_form').serialize();
        $.ajax({
            url: url,
            data: data,
            dataType: 'JSON',
            method: 'POST',
            success: function (r) {
                $('#contact_form .form-group').each(function () {
                    $(this).removeClass('has-error');
                });
                var cnt = $(r.input);
                if (!r.success) {
                    cnt.parent().addClass('has-error');
                }
                else {
                    cnt.parent().removeClass('has-error');
                    $('#contact_form .form-control').each(function () {
                        $(this).val('');
                    });
                }
                alerts(r.message);
                $('#myModal').modal('hide');
            }

        });
    };
    var sliderHomeInit = function () {
        var h = 'height: ' + $(window).height() + 'px;';
        var w = 'width: ' + ($(window).width() + 20 ) + 'px;';
        $(document).ready(function () {
        });
        setInterval(function () {
            var active = $('#slider div.active');
            $(active).addClass('fadeOut');
            $(active).removeClass('fadeIn');
            $(active).removeClass('fadeOut');
            $(active).removeClass('active');
            var next = $(active).data('next');
            $(next).addClass('active fadeIn');
        }, 5000);
    };
    var download = function () {

        $(document).on('click', ' a.download', function (e) {
            e.preventDefault();
            window.location.href = $(this).attr('href');

        });
    };

    var sidebar = function () {
        $("#sidebar-toggle").click(function (e) {
            e.preventDefault();

            var sidebar = $('#sidebar');
            sidebar.toggleClass('open-sidebar');
            goToLink(sidebar);
        });

    };

    return {
        init: function () {
            search();
            topBarAjaxLinks();
            toggleSideBarMenu();
            sideBarLinks();
            newAction();
            showAction();
            editAction();
            setPassAction();
            trashAction();
            clearAction();
            cancelAction();
            download();
        },
        initFront: function () {
            //fancybox();
            nav();
            sliderHomeInit();
            sidebar();
        },
        alert: function (msg) {
            alerts(msg);
        },
        loader: function (percent) {
            loader(percent);
        },
        goToLink: function (target) {
            goToLink(target);
        },
        newsletter: function (url, data) {
            newsletter(url, data);
        },
        contact: function (url) {
            contact(url);
        }
    }
}();