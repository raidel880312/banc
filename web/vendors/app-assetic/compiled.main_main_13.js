$(function(){$("#sidebar").css("min-height","100%");$("#side-menu").metisMenu();$(window).bind("load resize",function(){if($(this).width()<768){$("div.sidebar-collapse").addClass("collapse")}else{$("div.sidebar-collapse").removeClass("collapse");$("div.sidebar-collapse").css("height","auto")}if($("body").hasClass("sidebar-icons")){$("#menu-toggle").hide()}else{$("#menu-toggle").show()}});$(".dropdown-slimscroll").slimScroll({height:"250px",wheelStep:5});if($("#demo-checkbox-radio").length<=0){$('input[type="checkbox"]:not(".switch")').iCheck({checkboxClass:"icheckbox_minimal-grey",increaseArea:"20%"});$('input[type="radio"]:not(".switch")').iCheck({radioClass:"iradio_minimal-grey",increaseArea:"20%"})}$("[data-toggle='tooltip'], [data-hover='tooltip']").tooltip();$("[data-toggle='popover'], [data-hover='popover']").popover();$("#theme-setting > a.btn-theme-setting").click(function(){if($("#theme-setting").css("right")<"0"){$("#theme-setting").css("right","0")}else{$("#theme-setting").css("right","-250px")}});var b=$("#theme-setting > .content-theme-setting > select#list-style");var a=$("#theme-setting > .content-theme-setting > ul#list-color > li");var c=function(e,d){$.cookie("style",e);$.cookie("color",d);$("#theme-change").attr("href","css/themes/"+e+"/"+d+".css")};if($.cookie("style")){b.find("option").each(function(){if($(this).attr("value")==$.cookie("style")){$(this).attr("selected","selected")}});a.removeClass("active");a.each(function(){if($(this).attr("data-color")==$.cookie("color")){$(this).addClass("active")}});c($.cookie("style"),$.cookie("color"))}b.on("change",function(){a.each(function(){if($(this).hasClass("active")){color_active=$(this).attr("data-color")}});c($(this).val(),color_active)});a.on("click",function(){a.removeClass("active");$(this).addClass("active");c(b.val(),$(this).attr("data-color"))});$(".btn-fullscreen").click(function(){if(!document.fullscreenElement&&!document.mozFullScreenElement&&!document.webkitFullscreenElement&&!document.msFullscreenElement){if(document.documentElement.requestFullscreen){document.documentElement.requestFullscreen()}else{if(document.documentElement.msRequestFullscreen){document.documentElement.msRequestFullscreen()}else{if(document.documentElement.mozRequestFullScreen){document.documentElement.mozRequestFullScreen()}else{if(document.documentElement.webkitRequestFullscreen){document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}}}}}else{if(document.exitFullscreen){document.exitFullscreen()}else{if(document.msExitFullscreen){document.msExitFullscreen()}else{if(document.mozCancelFullScreen){document.mozCancelFullScreen()}else{if(document.webkitExitFullscreen){document.webkitExitFullscreen()}}}}}});$(".btn-chat").click(function(){if($("#chat-box").is(":visible")){$("#chat-form").toggle("slide",{direction:"right"},500);$("#chat-box").hide()}else{$("#chat-form").toggle("slide",{direction:"right"},500)}});$(".chat-box-close").click(function(){$("#chat-box").hide();$("#chat-form .chat-group a").removeClass("active")});$(".chat-form-close").click(function(){$("#chat-form").toggle("slide",{direction:"right"},500);$("#chat-box").hide()});$("#chat-form .chat-group a").unbind("*").click(function(){$("#chat-box").hide();$("#chat-form .chat-group a").removeClass("active");$(this).addClass("active");var e=$("> small",this).text();$(".display-name","#chat-box").html(e);var f=$(this).find("span.user-status").attr("class");$("#chat-box > .chat-box-header > span.user-status").removeClass().addClass(f);var g=$("span.user-status","#chat-box");var h=$("#chat-box > .chat-box-header > small");if(g.hasClass("is-online")){h.html("Online")}else{if(g.hasClass("is-offline")){h.html("Offline")}else{if(g.hasClass("is-busy")){h.html("Busy")}else{if(g.hasClass("is-idle")){h.html("Idle")}}}}var k=$(this).offset();var i=$("#chat-form").height();var d=$("#chat-box > .chat-box-header").height();var j=($("#chat-box").is(":visible")?(k.top-d-40):(k.top+d-20));if((j+$("#chat-box").height())>i){j=i-$("#chat-box").height()}$("#chat-box").css({top:j});if(!$("#chat-box").is(":visible")){$("#chat-box").toggle("slide",{direction:"right"},500)}$("ul.chat-box-body").scrollTop(500);$("#chat-box .chat-textarea input").focus()});$(".chat-textarea input").on("keypress",function(o){var f=$(this);var n=f.parent().parent().find("ul.chat-box-body");var q="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg";var k="https://s3.amazonaws.com/uifaces/faces/twitter/alagoon/48.jpg";if(o.which==13){var g=f.val();if(g!==""){var p=new Date();var l=p.getHours();var j=p.getMinutes();if(j<10){j="0"+j}f.val("");var s="";s+="<li>";s+="<p>";s+="<img class='avt' src='"+q+"'>";s+="<span class='user'>John Doe</span>";s+="<span class='time'>"+l+":"+j+"</span>";s+="</p>";s=s+"<p>"+g+"</p>";s+="</li>";n.append(s);var r=0;n.find("li").each(function(d,e){r+=parseInt($(this).height())});r+="";n.scrollTop(r);var i="";i+="<li class='odd'>";i+="<p>";i+="<img class='avt' src='"+k+"'>";i+="<span class='user'>Swlabs</span>";i+="<span class='time'>"+l+":"+j+"</span>";i+="</p>";i=i+"<p>Yep! It's so funny :)</p>";i+="</li>";setTimeout(function(){n.append(i);n.scrollTop(r+100)},1000)}}});$(".portlet").each(function(d,e){var f=$(this);$(">.portlet-header>.tools>i",f).click(function(g){if($(this).hasClass("fa-chevron-up")){$(">.portlet-body",f).slideUp("fast");$(this).removeClass("fa-chevron-up").addClass("fa-chevron-down")}else{if($(this).hasClass("fa-chevron-down")){$(">.portlet-body",f).slideDown("fast");$(this).removeClass("fa-chevron-down").addClass("fa-chevron-up")}else{if($(this).hasClass("fa-cog")){}else{if($(this).hasClass("fa-refresh")){$(">.portlet-body",f).addClass("wait");setTimeout(function(){$(">.portlet-body",f).removeClass("wait")},1000)}else{if($(this).hasClass("fa-times")){f.remove()}}}}}})});$(window).scroll(function(){if($(this).scrollTop()<200){$("#totop").fadeOut()}else{$("#totop").fadeIn()}});$("#totop").on("click",function(){$("html, body").animate({scrollTop:0},"fast");return false});$(".checkall").on("ifChecked ifUnchecked",function(d){if(d.type=="ifChecked"){$(this).closest("table").find("input[type=checkbox]").iCheck("check")}else{$(this).closest("table").find("input[type=checkbox]").iCheck("uncheck")}});$("#news-update").ticker({controls:false,titleText:""});$(".option-demo").hover(function(){$(this).append("<div class='demo-layout animated fadeInUp'><i class='fa fa-magic mrs'></i>Demo</div>")},function(){$(".demo-layout").remove()});$("#header-topbar-page .demo-layout").live("click",function(){var d=$(this).parent().detach();$("#header-topbar-option-demo").html(d).addClass("animated flash").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("animated flash")});$("#header-topbar-option-demo").find(".demo-layout").remove();return false});$("#title-breadcrumb-page .demo-layout").live("click",function(){var d=$(this).parent().html();$("#title-breadcrumb-option-demo").html(d).addClass("animated flash").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("animated flash")});$("#title-breadcrumb-option-demo").find(".demo-layout").remove();return false});fakewaffle.responsiveTabs(["xs","sm"])});