function initialize() {
	var styles = [{"stylers":[{"visibility":"off"}]},{"featureType":"road","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road.arterial","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"road.highway","stylers":[{"visibility":"on"},{"color":"#fee379"}]},{"featureType":"landscape","stylers":[{"visibility":"on"},{"color":"#f3f4f4"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#7fc8ed"}]},{},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#83cead"}]},{"elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"weight":0.9},{"visibility":"off"}]}]
                
                
	
	
	var map_canvas = document.getElementById('map_canvas');
	var myLatlng = new google.maps.LatLng(49.2576930,-123.1152904);
	var map_options = {
		center: myLatlng,
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: styles
	}
	var map = new google.maps.Map(map_canvas, map_options);
	google.maps.event.addDomListener(window, "resize", function(){
	   var center = map.getCenter();
	   google.maps.event.trigger(map, "resize");
	   map.setCenter(center); 
	});
	var marker = new google.maps.Marker({
		position: myLatlng,
		title:"Pacifica Dental Center"
	});
	var contentString = "<a href='https://www.google.ca/maps/place/3135+Cambie+St,+Vancouver,+BC+V5Z+4N4/@49.2576036,-123.1153065,18z/data=!4m2!3m1!1s0x548673e8c13a3fef:0x65b53a4c1c06f9c9' target='_blank'><h4>Pacifica Dental Center</h4></a>"+
	"3135 Cambie Vancouver BC <br/>"+
	"V5Z 4N2 | 604.877.8584 <br/>"+
	"info@wdsmile.com";
	var info = new google.maps.InfoWindow({
		content: contentString,
		map: map,
		maxHeight: 300,
		position: new google.maps.LatLng(-300, 151),
		shadowStyle: 1,
		padding: 0,
		borderRadius: 4,
		borderWidth: 1,
		borderColor: '#2c2c2c',
		disableAutoPan: true
	});
	
	info.open(map,marker);
	
    google.maps.event.addListener(marker, "click", function (e) { 
		info.open(map, this); 
	});
	
	marker.setMap(map);
}
	google.maps.event.addDomListener(window, 'load', initialize);