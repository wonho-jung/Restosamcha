$(document).ready(function () {
    $("#foodmenu li a").click(function (e) {
        e.preventDefault();
        var item = this.href.split("#")[1];
        $(".pages:visible").slideUp(function () {
            $("#" + item).slideDown();
        });
    });
    $("#appetizer").show();
});





    