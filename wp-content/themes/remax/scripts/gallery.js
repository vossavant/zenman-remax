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
					currentPhotoDetailsBox = $('.gallery').find('.current-photo-details'),
					nextPhoto;

				currentPhoto.siblings().removeClass('active');
				currentPhoto.addClass('active');

				currentPhotoDetailsBox.addClass('d-flex').removeClass('d-none');
				currentPhotoDetailsBox.find('.js-photo-box').html(currentPhotoClone);
				currentPhotoDetailsBox.find('.js-photo-details-box').html(currentPhotoDetailsClone);

				/**
				 * Gets vertical offset of each photo after the one just clicked.
				 * When the vertical offset is greater than that of the photo just
				 * clicked, it must be a photo on the following row; insert the
				 * photo details box just before the first photo on the next row.
				 */
				currentPhoto.nextAll().each(function() {
					nextPhoto = $(this);

					if (nextPhoto.position().top > currentPhoto.position().top) {
						nextPhoto.before(currentPhotoDetailsBox);
						return false;
					}
				});
			});
		}
	};
})(jQuery);