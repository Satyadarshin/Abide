jQuery(document).ready(function() {
    //Mobile main navigation
    jQuery('.main-navigation').addClass('hide');
    jQuery('#hamburger').click(
        function() {
            event.preventDefault();
            jQuery('.main-navigation').slideToggle();
        }
    );
    //Mobile navigation Sub-menu
    jQuery('.menu-item-has-children ul').addClass('hide');
    jQuery('.menu-item-has-children > a:first-of-type').click(
        function() {
            event.preventDefault();
            jQuery('.menu-item-has-children ul').slideToggle();
        }
    );
});