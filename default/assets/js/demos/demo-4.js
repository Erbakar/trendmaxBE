// Demo 4 Js file
$(document).ready(function () {
    'use strict';

	if ( $.fn.countdown ) {
    	// Deal of the day countdown
		$('.daily-deal-countdown').each(function () {
			var $this = $(this), 
				untilDate = $this.data('until'),
				compact = $this.data('compact');

			$this.countdown({
			    until: untilDate, // this is relative date +10h +5m vs..
			    format: 'HMS',
			    padZeroes: true,
			    labels: ['yıl', 'ay', 'hafta', 'gün', 'saat', 'dakika', 'saniye'],
			    labels1: ['yıl', 'ay', 'hafta', 'gün', 'saat', 'dakika', 'saniye']
			});
		});

		// Pause
		// $('.daily-deal-countdown').countdown('pause');


		// Offer countdown
		$('.offer-countdown').each(function () {
			var $this = $(this), 
				untilDate = $this.data('until'),
				compact = $this.data('compact');

			$this.countdown({
			    until: untilDate, // this is relative date +10h +5m vs..
			    format: 'DHMS',
			    padZeroes: true,
			    labels: ['yıl', 'ay', 'hafta', 'gün', 'saat', 'dakika', 'saniye'],
			    labels1: ['yıl', 'ay', 'hafta', 'gün', 'saat', 'dakika', 'saniye']
			});
		});

		// Pause
		// $('.offer-countdown').countdown('pause');
	}
});