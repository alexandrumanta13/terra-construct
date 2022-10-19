		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "44.5216773", "longitude":"26.1943575", "icon": "img/map-marker2.png"}
			]
		};
		
		//set up map options
		$("#map").mapmarker({
			zoom	: 14,
			center	: 'Covent Garden London',
			markers	: myMarkers
		});

