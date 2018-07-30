(function($) {
  $(document).ready(function() {
		var path = window.location;
		var target = $('ul#main-menu-links li a[href="'+path+'"]');
		target.addClass('active');
	});
})(jQuery);
