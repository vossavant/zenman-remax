// make JSHint happy
/* global console, jQuery */

var rmxNav;

jQuery(function () {
	rmxNav.init();
});

(function ($) {
	'use strict';

	rmxNav = {
		init: function () {
			console.log('Nav JS loaded');

			rmxNav.toggleMegaMenuOnClick();
		},

		toggleMegaMenuOnClick: function () {
			$('.nav-link').click(function (e) {
				var clicked = $(this);
				e.preventDefault();

				clicked
					.closest('.nav-item')
					.siblings()
					.find('.nav-link')
					.removeClass('active');
				clicked
					.closest('.nav-item')
					.siblings()
					.find('.mega-menu')
					.removeClass('shown');

				clicked.toggleClass('active');
				clicked.next().toggleClass('shown');
			});

			// keep mega menu open when hovering over mega menu panel
			$('.mega-menu').mouseenter(function () {
				clearTimeout($(this).data('timeoutId'));
			}).mouseleave(function () {
				var someElement = $(this);
				var timeoutId = setTimeout(function () {
					if (someElement.parent().find(".active:hover").length !== 1) {
						someElement.prev().removeClass('active');
						someElement.removeClass('shown');
					}
				}, 500);
				someElement.data('timeoutId', timeoutId);
			});
		}
	};
})(jQuery);