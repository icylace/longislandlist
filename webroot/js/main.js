;(function ($) {
  $(function () {

    function setupLocationList(data) {
      var $listings = $("#listings")
      for (var i = 0; i < data.features.length; ++i) {
        var props = data.features[i].properties
        var $link = $("<span class='title'>" + props.name + "</span>")
        var $details = $("<div>" + props.address + ", " + props.city + "</div>")
        var $item = $("<li class='item' id='location-" + i + "'>").append($link).append($details)
        $item.data("position", i)
        $item.on("click", function () {
          var $this = $(this)
          var clickedItem = data.features[$this.data("position")]
          switchLocation(clickedItem, $this)
        })
        $listings.append($item)
      }
    }

    function switchLocation(currentFeature, $next) {
      map.flyTo({
        center: currentFeature.geometry.coordinates,
        zoom: 10,
      })
      createPopUp(currentFeature, $next)
      $(".active").removeClass("active")
      $next.addClass("active")
    }

    function createPopUp(currentFeature, $item) {
      $(".mapboxgl-popup").remove()
      var props = currentFeature.properties
      var markups = [
        "<h3>" + (props.website ? "<a class='location-link' href='" + props.website + "'>" + props.name + "</a>" : props.name) + "</h3>",
        "<div class='location-info'>",
        "<p>" + props.address + ", " + props.city + "</p>",
        (props.phone ? "<span class='location-phone'>" + props.phoneFormatted + "</span>" : null),
        (props.website ? "<span><a href='" + props.website + "'><img src='/img/1495139159_5381_-_Web.png'></a></span>" : null),
        (props.instagram ? "<span><a href='" + props.instagram + "'><img src='/img/1495139547_instagram.png'></a></span>" : null),
        (props.facebook ? "<span><a href='" + props.facebook + "'><img src='/img/1495139719_facebook.png'></a></span>" : null),
        (props.twitter ? "<span><a href='" + props.twitter + "'><img src='/img/1495139617_twitter.png'></a></span>" : null),
        (props.ssid ? "<p><img class='location-wifi' src='/img/1495139214_wifi_Symbol.png'> " + props.ssid + "</p><p><em>pw:</em> " + props.password + "</p>" : null),
        (props.notes ? "<p class='location-notes'><em>Notes:</em> " + props.notes + "</p>" : null),
        "<p class='location-directions'><a href='https://www.google.com/maps/dir/Current+Location/"
          + (props.address + ", " + props.city + ", " + props.state).replace(/\s/g, "+")
          + "'>Go there <img class='location-wifi' src='/img/1495142566_Google-Maps.png'></a></p>",
        "</div>",
      ]
      new mapboxgl.Popup({ closeOnClick: false })
        .setLngLat(currentFeature.geometry.coordinates)
        .setHTML(markups.join(""))
        .addTo(map)
        .on("close", function (e) {
          $item.removeClass("active")
        })
    }

    function createGeoJson(locations) {
      var features = []
      for (var i = 0; i < locations.length; ++i) {
        var location = locations[i]
        features.push({
          type: "Feature",
          geometry: {
            type: "Point",
            coordinates: [location.longitude, location.latitude],
          },
          properties: {
            // type: "coffee",
            name: location.name,
            website: location.website,
            instagram: location.instagram,
            facebook: location.facebook,
            twitter: location.twitter,
            address: location.address,
            city: location.city,
            state: location.state,
            postalCode: location.postalCode,
            phone: location.phone,
            phoneFormatted: "(" + location.phone.substr(0, 3) + ") " + location.phone.substr(3, 3) + "-" + location.phone.substr(6),
            ssid: location.ssid,
            password: location.password,
            notes: location.notes,
          },
        })
      }
      return {
        type: "FeatureCollection",
        features: features,
      }
    }

    function setupMap(locations) {
      setupLocationList(locations)

      var initLatitude = 40.789143
      var initLongitude = -73.134961

      map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/icylace/cj2tp8v4700172rqmewo892or",
        center: [initLongitude, initLatitude],
        zoom: 10,
      })

      map.on("load", function (e) {
        map.addLayer({
          id: "locations",
          type: "symbol",
          source: {
            type: "geojson",
            data: locations,
          },
          layout: {
            "icon-image": "cafe-15",
            "icon-allow-overlap": true,
          },
        })
      })

      // Use the cursor "pointer" icon when hovering over locations on the map.
      map.on("mousemove", function (e) {
        var features = map.queryRenderedFeatures(e.point, { layers: ["locations"] })
        if (!features) {
          return
        }
        map.getCanvas().style.cursor = features.length ? 'pointer' : ''
      })

      map.on("click", function (e) {
        var features = map.queryRenderedFeatures(e.point, { layers: ["locations"] })
        if (!features.length) {
          return
        }

        var spot = features[0]

        // For some reason feature `properties` that are `null` are treated
        // as `"null"`.  So, correct for this.
        var props = spot.properties
        for (prop in props) {
          if (props.hasOwnProperty(prop) && props[prop] === "null") {
            props[prop] = null
          }
        }

        var selectedFeature = spot.properties.address;
        for (var i = 0; i < locations.features.length; ++i) {
          if (selectedFeature === locations.features[i].properties.address) {
            selectedFeatureIndex = i
            break
          }
        }

        switchLocation(spot, $("#location-" + selectedFeatureIndex))

        var headingHeight = 80

        // Based on:
        // https://stackoverflow.com/a/11301878/1935675
        $(".listings-container").scrollTop($(".listings-container").scrollTop() + $("#location-" + selectedFeatureIndex).position().top - headingHeight)
      })
    }

    var map = null

    $.get("/locations.json", function (data) {
      setupMap(createGeoJson(data.locations))
    })

  })
})(window.jQuery)
