$(function(e) {

    /*-----WidgetChart1 CHARTJS-----*/
	
	/* Circle-progress */
	/* Circle-progress closed */

	/* Circle-progress-1 closed */
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function() {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#e2e1ea',
				lineCap: 'round'
			});
		});
	}
	
	/* Donutchart */
	/* Trials end */
 });