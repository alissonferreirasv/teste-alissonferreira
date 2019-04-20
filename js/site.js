var menu_mobile = false;
function site_mobile() {
// menu mobile efeito exibir e fechar
    var menu_open = $("img#menu_open");
    var menu_close = $("img#menu_close");
    var menu_fixo = $("div#menu_fixed");
    $(menu_open).click(function () {
        if (menu_mobile) {
            menu_mobile = false;
            $(menu_fixo).stop().animate({right: "-100%"}, "slow");
        } else {
            menu_mobile = true;
            $(menu_fixo).stop().animate({right: "0"}, "slow");
        }
    });
    $(menu_close).click(function () {
        menu_mobile = false;
        $(menu_fixo).stop().animate({right: "-100%"}, "slow");
    });
}
function site_scroll() {
// scroll menu click
    var href = $("ul.menu li a, ul.menu_footer li a, ul.menu_mobile li a");
    var top = $("#top").height();
    href.click(function (event) {
        event.preventDefault();
        var selector = $(this).attr("href");
        var position = $(selector).offset().top;
        $("html, body").animate({scrollTop: position - top}, 1000);

// menu mobile
        menu_mobile = false;
        $("div#menu_fixed").stop().animate({right: "-100%"}, "slow");
    });
// scroll menu 
    $(window).scroll(function () {
        var ul_desktop = $("ul.menu li a");
        var scrollPosition = $(this).scrollTop() + 90;
        $(ul_desktop).each(function () {
            var link = $(this);
            var hrefElement = $(link.attr("href"));
            var novo = $(hrefElement).offset().top;
            if (novo <= scrollPosition) {
                $(href).removeClass("active");
                link.addClass("active");
            } else {
                link.removeClass("active");
            }
        });
    });

// inserindo div top
    var banner = $("#banner");
    var div = document.createElement("div");
    $(div).css("height", top);
    $(banner).prepend(div);
}
function site_tabs() {
// menu tab portfolio 
    $('div.tab').each(function () {
        var title = $(this).data("title");
        var current = $(this).hasClass("current") ? "current" : "";
        var newTab = $('<li class="tab_link"></li>');
        newTab.html(title).addClass(current).attr('data-tab', $(this).attr('id'));
        $('ul.tabs').append(newTab);
    });
// click menu tab
    $("ul.tabs li").click(function () {
        var tab_id = $(this).attr('data-tab');
        $('.tabs li').removeClass('current');
        $('div.tab').removeClass('current');
        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
        site_anima_port();
    });
}
function site_portfolio() {
// efeito hover lista portfolio
    var div = $('<div class="portfolio_link"><img src="img/link.png" alt=""/></div>');
    $("ul.portfolio li").append(div);
    $("ul.portfolio li").each(function () {
        $(this).hover(function () {
            $("div.portfolio_link", this).fadeIn();
        }, function () {
            $("div.portfolio_link", this).fadeOut();
        });
    });
}
function site_anima_port() {
    $("ul.portfolio li").hide();
    $("ul.portfolio li").each(function (i) {
        $(this).delay(60 * i).fadeIn(2000);
    });
}
$(document).ready(function () {
    site_mobile();
    site_scroll();
    site_tabs();
    site_portfolio();
});

