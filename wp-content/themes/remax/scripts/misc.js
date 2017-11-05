// @codekit-append "gallery.js"
// @codekit-append "nav.js"

// make JSHint happy
/* global console, jQuery */

var rmxMisc;

jQuery(function () {
	rmxMisc.init();
});

(function ($) {
	'use strict';

	rmxMisc = {
		init: function () {
			console.log('Misc JS loaded');

			$('.btn-close').click(function() {
				$(this).closest('[data-js-closeable]').addClass('d-none').removeClass('d-flex');
			});
		}
	};
})(jQuery);