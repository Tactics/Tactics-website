function initialize() {
    var tacticsLocation = new google.maps.LatLng(51.303311,4.395891);
    var mapOptions = {
        center: tacticsLocation,
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true,
        scrollwheel: false,
        disableDefaultUI: false
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var pinColor = "df8505";
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));

    var marker = new google.maps.Marker({
        map: map,
        position: tacticsLocation,
        icon: pinImage,
    });
    map.set('styles', [{"stylers":[{"visibility":"on"},{"saturation":-100},{"gamma":0.54}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#4d4946"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"gamma":0.48}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"gamma":7.18}]},
        // Remove this to clear tactics orange roads
        {"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#df8505"}]}
    ]);

    // Append card when map renders
    google.maps.event.addListener(map, 'idle', function(e) {

        // Prevents card from being added more than once (i.e. when page is resized and google maps re-renders)
        if ( $( ".place-card" ).length === 0 ) {
            $(".gm-style").append(
                '<div style="position: absolute; left: 0px; top: 0px;"> ' +
                '<div style="margin: 10px; padding: 1px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; background-color: white;"> ' +
                '<div> ' +
                '<div class="place-card place-card-large"> ' +
                '<div class="place-desc-large"> ' +
                '<div class="place-name"> Tactics bvba </div>' +
                '<div class="address"> Kerkstraat 115, 2940 Hoevenen </div>' +
                '</div>' +
                '<div class="navigate"> <div class="navigate"> ' +
                '<a class="navigate-link" href="https://www.google.com/maps/dir//Kerkstraat+115,+2940+Stabroek,+Belgium/@51.3034768,4.3920049,16z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x47c4099c48e7c675:0x89436e7fd15d0ff9!2m2!1d4.3966183!2d51.3034769!3e0?hl=en-US" target="_blank"> ' +
                '<div class="icon navigate-icon">' +
                '</div><div class="navigate-text"> Directions </div></a> </div></div>');
        }
    });

}
google.maps.event.addDomListener(window, 'load', initialize);