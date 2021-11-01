jQuery(function ($) {
    $(".menu-content li a").click(function(e) {
        var link = $(this);
        var item = link.parent("li");
        var href = link.attr("href");
        $('.menu-content li a.active').removeClass('active');
        link.addClass("active").parents("li").addClass("open");
    });
});