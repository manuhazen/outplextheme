( function( $ ) {
// talk2Rep Code.
var Selectmap = $("#map");

function initMap() {
  var location = { lat: 37.09024, lng: -95.712891 }
  var map  = new google.maps.Map(document.getElementById('map'), {
    zoom: 3,
    center: location,
    styles : [{
      "featureType" : "water",
      "elementType" : "geometry",
      "stylers" : [{
          "color" : "#24265c"
      }, {
          "lightness" : 17
      }]
  },
  {
    "featureType" : "landscape",
    "elementType" : "geometry",
    "stylers" : [{
        "color" : "#f5f5f5"
    }, {
        "lightness" : 20
    }]
}
]
   })
   //37.09024, -95.712891

   var markerList = [
    {lat:26.1871919, lng:-80.19494700000001, text: 'US - '},
    {lat:18.4789998, lng:-69.9278615, text: 'DR - '},
	{lat:4.5709, lng:-74.2973, text: 'Colombia - '}
   ];

    // { lat: 26.1871919, lng: -80.19494700000001 },

  for(var i=0; i < markerList.length; i++) {
   var marker = new google.maps.Marker({
    position: markerList[i],
    map: map,
    title: markerList[i].text + 'Outplex',
    icon: {
      url: "https://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|71b300",
      scaledSize: new google.maps.Size(25, 30)
    }

    //'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|71b300'
  });
  }
}

initMap();
} )( jQuery );