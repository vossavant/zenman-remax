// @codekit-append "nav.js"

// make JSHint happy
/* global console, jQuery */

var rmxGallery;

jQuery(function () {
	rmxGallery.init();
});

(function ($) {
	'use strict';

	rmxGallery = {
		init: function () {
			console.log('Gallery JS loaded');

			$('.gallery').find('figure').click(function() {
				if ($(this).hasClass('active')) {
					return;
				}

				var currentPhoto = $(this),
					currentPhotoClone = currentPhoto.find('img').clone(),
					currentPhotoDetailsClone = currentPhoto.find('figcaption').clone(),
					currentPhotoDetailsBox = $('.gallery').find('.current-photo-details');

				currentPhoto.siblings().removeClass('active');
				currentPhoto.addClass('active');

				currentPhotoDetailsBox.addClass('d-flex').removeClass('d-none');
				currentPhotoDetailsBox.find('.js-photo-box').html(currentPhotoClone);
				currentPhotoDetailsBox.find('.js-photo-details-box').html(currentPhotoDetailsClone);

				// $(this).after(currentPhotoDetails);
			});
		}
	};
})(jQuery);