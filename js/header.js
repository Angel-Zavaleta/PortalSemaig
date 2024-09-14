
$(document).on('click', function (event) {
    var $target = $(event.target);
    var $navbarCollapse = $('.navbar-collapse');
    var isOpen = $navbarCollapse.hasClass('show');
    var isNavbarToggler = $target.hasClass('navbar-toggler') || $target.closest('.navbar-toggler').length;

    if (isOpen && !isNavbarToggler && !$target.closest('.navbar-collapse').length) {
        $('.navbar-toggler').click();
    }
});