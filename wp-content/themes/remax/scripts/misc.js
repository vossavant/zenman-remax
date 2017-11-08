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

			rmxMisc.search();
		},

		search: function () {
			var options = {
				_blank: true,
				count: 10,
				autoEnter: true,
				buttonText: "Let's Go",
				placeholder: 'City and State, Address or Zip Code'
			};

			console.log('test');
			$('.remax_search').remaxseach(options);
			console.log('test 2');
		}
	};
})(jQuery);