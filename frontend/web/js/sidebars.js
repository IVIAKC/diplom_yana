$(document).ready(function() {
    $("[data-toggle]").click(function() {
        var toggle_el = $(this).data("toggle");
        $(this).toggleClass("open-sidebar");
        $(toggle_el).toggleClass("open-sidebar");
    });
});