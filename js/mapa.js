$(document).ready(function(){

//Gmap
	
	var map;
	var myPlace = new google.maps.LatLng(48.7820517, 31.9718217);
	var myPlace1 = new google.maps.LatLng(46.472888, 30.750612);
	var myPlace2 = new google.maps.LatLng(50.438971, 30.515428);
	

	var MY_MAPTYPE_ID = 'custom_style';

	
	function initialize() {

		var featureOpts = [
		{
		featureType: 'water',
		elementType: 'all',
		stylers: [
			{ hue: '#1b1f24' },
			{ saturation: -90 },
			{ lightness: -85 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'landscape',
		elementType: 'all',
		stylers: [
			{ hue: '#ffffff' },
			{ saturation: -80 },
			{ lightness: -2 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'poi',
		elementType: 'all',
		stylers: [
			{ hue: '#e6e6e6' },
			{ saturation: -90 },
			{ lightness: -13 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'administrative.country',
		elementType: 'all',
		stylers: [
			{ hue: '#ffcb08' },
			{ saturation: 100 },
			{ lightness: -0 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'road',
		elementType: 'all',
		stylers: [
			{ hue: '#d8322b' },
			{ saturation: -50 },
			{ lightness: -6 },
			{ visibility: 'on' }
		]
	}
		];

		var mapOptions = {
			zoom: 5,
			scrollwheel: false,
			center: myPlace,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
			},
			mapTypeId: MY_MAPTYPE_ID
		};

		map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);

		var styledMapOptions = {
			name: 'Custom Style'
		};
		
		var marker1 =  new google.maps.Marker({
		position:myPlace1,
		title: 'Одесский офис',
		map:map
		})

		var marker2 =  new google.maps.Marker({
		position:myPlace2,
		title: 'Киевский офис',
		map:map
		})

		var user_content = '<div style="padding: 20px"><p>"Traffic" IMA</p></div>';
		var infowindow = new google.maps.InfoWindow({
			content: user_content
		})
		google.maps.event.addListener(marker1,'click', function(){
			infowindow.open(map, marker1);
		});
		google.maps.event.addListener(marker2,'click', function(){
			infowindow.open(map, marker2);
		});
		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
	}

	google.maps.event.addDomListener(window, 'load', initialize);

	//Gmap END


})


