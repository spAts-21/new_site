jQuery(document).ready(function(jQuery) {
    
    jQuery('#content').css('display', 'block');
});
jQuery('ul.navbar-nav li.dropdown').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
  }, function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
  });