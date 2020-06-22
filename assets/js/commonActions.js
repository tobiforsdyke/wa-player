$(document).ready(function() {
    $('.nav-show-hide').on('click', function() {
        var main = $('#mainsection-container');
        var nav = $('#sidenav-container');
        if (main.hasClass('left-padding')) {
            nav.hide();
        }
        else {
            nav.show();
        }
        main.toggleClass('left-padding');
    });
});