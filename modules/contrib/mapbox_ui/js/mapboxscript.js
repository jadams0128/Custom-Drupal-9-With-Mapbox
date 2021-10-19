(function ($, Drupal, drupalSettings) {
  "use strict";

  Drupal.behaviors.mapbox_gl = {

    attach: function (context, settings) {

      // can access setting from 'drupalSettings';
      let accessToken = drupalSettings.accessToken;
      let style = drupalSettings.style;
      let centerLongitude = drupalSettings.center.longitude;
      let centerLatitude = drupalSettings.center.latitude;
      let markerLongitude = drupalSettings.marker.markerLongitude;
      let markerLatitude = drupalSettings.marker.markerLatitude;
      let popupText = drupalSettings.popupText;
      let zoom = drupalSettings.zoom;
      let navigationControl = drupalSettings.navigationControl;

      mapboxgl.accessToken = accessToken;
      let mapgl = new mapboxgl.Map({
        container: 'mapgl', // container id
        style: style,
        center: [centerLatitude, centerLongitude], // starting position
        zoom: zoom // starting zoom
      });

      // create the popup
      let popup = new mapboxgl.Popup({offset: 25})
      .setText(popupText);

      let marker = new mapboxgl.Marker({
        draggable: false
      })
        .setLngLat([markerLatitude, markerLongitude])
        .setPopup(popup) // sets a popup on this marker
        .addTo(mapgl);

      if (navigationControl === true) {
        // Add zoom and rotation controls to the map.
        mapgl.addControl(new mapboxgl.NavigationControl());
      }

    }
  };

})(jQuery, Drupal, drupalSettings);
