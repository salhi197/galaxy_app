! function($) {
	"use strict";

	var VectorMap = function() {
	};

	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			scaleColors : ['#564ec1', '#ececec'],
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#e2e1ea'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#564ec1',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 9,
                    'stroke-opacity': 0.2
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : [{
				latLng : [28.0289837,1.6666663],
				name : 'Vatican City'
			}]
		});

		// $('#uk').vectorMap({
		// 	map : 'uk_mill_en',
		// 	backgroundColor : 'transparent',
		// 	regionStyle : {
		// 		initial : {
		// 			fill : '#f47b25'
		// 		}
		// 	}
		// });
		// $('#usa').vectorMap({
		// 	map : 'us_aea_en',
		// 	backgroundColor : 'transparent',
		// 	regionStyle : {
		// 		initial : {
		// 			fill : '#7673e6'
		// 		}
		// 	}
		// });
		// $('#australia').vectorMap({
		// 	map : 'au_mill',
		// 	backgroundColor : 'transparent',
		// 	regionStyle : {
		// 		initial : {
		// 			fill : '#3ebaef'
		// 		}
		// 	}
		// });

		// $('#canada').vectorMap({
		// 	map : 'ca_lcc',
		// 	backgroundColor : 'transparent',
		// 	regionStyle : {
		// 		initial : {
		// 			fill : '#31c92e'
		// 		}
		// 	}
		// });

	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap;
	$.VectorMap.init();
}(window.jQuery);

