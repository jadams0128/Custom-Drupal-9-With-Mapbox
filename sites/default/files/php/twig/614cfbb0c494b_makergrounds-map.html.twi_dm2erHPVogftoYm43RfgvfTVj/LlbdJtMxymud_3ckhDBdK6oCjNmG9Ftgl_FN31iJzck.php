<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/custom_bootstrap_map/templates/custom-bootstrap-map.html.twig */
class __TwigTemplate_27980eb796f5e83df9a8bc1ce897b5b0af9eae1c7fecb922bca88d7d76d7b494 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 3
        echo "
<h1 class=\"white-text custom-block-title text-center mar-top-40\">Makers Map</h1>

<div id='map' style='width: 100%; height: 700px;'></div>

<ul class=\"map-locations-list\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 10
            echo "    <li class=\"map-list-item\" map-locations-list-slug=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["place"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["location_slug"] ?? null) : null), 10, $this->source), ["/location/" => ""]), "html", null, true);
            echo "\" onClick=\"openPopup(this)\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["place"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["location_title"] ?? null) : null), 10, $this->source), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>

<div id=\"under-map-line\" class=\"blue\"></div>

<div class=\"white-bg\" id=\"map-filter-container\">
  <div class=\"col-12 valign-wrapper\" id=\"filter\">
    <span class=\"grey-text text-darken-3\" id=\"filter\">Filter: </span>
    <a class=\"waves-effect waves-light btn indigo darken-4 map-filter-item\" data-filter=\"all\"> Show All </a>
  </div>
  <div class=\"col-12\">
    <ul class=\"map-filter-list\">
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 24
            echo "        <li class=\"map-filter-item text-center\" data-filter=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["tool"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["cat_name"] ?? null) : null), 24, $this->source), [" " => "-"])), "html", null, true);
            echo "\">
          <img src=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["tool"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["cat_image"] ?? null) : null), 25, $this->source), "html", null, true);
            echo "\" >
          <span class=\"text-content\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["tool"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["cat_name"] ?? null) : null), 26, $this->source), "html", null, true);
            echo "</span>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </ul>
  </div>
</div>

<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoic2xhYiIsImEiOiJja2lnZ2FuajAwMWIxMnpwOGliNjM2YmxuIn0.bRm0Q9RBHGIpyobJOWJ5zQ';
  var map = new mapboxgl.Map({
    container: 'map', // container ID
    center: [-78.505186, 38.035544],
    zoom: 15,
    style: 'mapbox://styles/mapbox/streets-v11',
  });

  map.scrollZoom.disable();


  // sorts list of locations created above
  var items = \$('.map-locations-list li').get();
  items.sort(function (a, b) {
    var keyA = \$(a).text().toLowerCase();
    var keyB = \$(b).text().toLowerCase();

    if (keyA < keyB) return -1;
    if (keyA > keyB) return 1;
    return 0;
  });

  var ul = \$('.map-locations-list');
  \$.each(items, function (i, li) {
    ul.append(li);
  });

  var custombootstrapJSON;
  var toolCategories;

  \$.ajax({
      url: '/location/json',
      type: \"GET\",
      async: false,
      dataType: \"json\",
      success: function (data) {
        custombootstrapJSON = data;
      },
      error: function (error) {
        console.log(`Error \${error}`);
      }
  });

  \$.ajax({
      url: '/tool-categories',
      type: \"GET\",
      async: false,
      dataType: \"json\",
      success: function (data) {
        var output = [];

        data.forEach(function(item) {
          var existing = output.filter(function(v, i) {
            return v.name == item.name;
          });
          if (existing.length) {
            var existingIndex = output.indexOf(existing[0]);
            output[existingIndex].locations = output[existingIndex].locations.concat(item.locations);
          } else {
            if (typeof item.locations == 'string'){
              item.locations = [item.locations];
            }
            output.push(item);
          }
        });

        toolCategories = output;
      },
      error: function (error) {
        console.log(`Error \${error}`);
      }
  });

  var custombootstrapData = {};
  var map, markers;

  \$.each(custombootstrapJSON, function(i, location){
    custombootstrapData[location.slug] = location;
  });

  //opens marker popup when a location is selected
  function openPopup(self) {
    //only open popup if the location is not inactive
    if (!\$(self).hasClass('inactive')) {
      var marker = custombootstrapData[\$(self).attr('map-locations-list-slug')].marker;
      console.log(custombootstrapData);
      var coordinates = marker.feature.geometry.coordinates;
      //center marker and open its popup (coordinates from geoJSON are flipped in terms of latitude and longitude)
      map.panTo([coordinates[1], coordinates[0]], marker._zIndex);
      marker.openPopup();
    }
  }


  L.mapbox.accessToken = 'pk.eyJ1Ijoic2xhYiIsImEiOiJja2lnZ2FuajAwMWIxMnpwOGliNjM2YmxuIn0.bRm0Q9RBHGIpyobJOWJ5zQ';

  map = L.mapbox.map('map', 'mapbox.streets')
  .setView([38.035544, -78.505186], 15.55)

  if (map.scrollWheelZoom) {
    map.scrollWheelZoom.disable();
  }

  //creates markers using \"features\" in the geojson

  markers = L.mapbox.featureLayer()
    .loadURL('https://custombootstrap.uvacreate.virginia.edu/location/geojson')
    .addTo(map);

  markers.on('layeradd', function (e) {
    var marker = e.layer,
      feature = marker.feature;

    var locationData = custombootstrapData[feature.properties[\"location-slug\"]];
    // //add marker object to data so the marker can be accessed later
    locationData.marker = marker;

    var locationTitle = '<h2><b><a class=\"marker-popup-title\" href=\"/location/' + feature.properties[\"location-slug\"] + '\" target=\"_blank\">' + feature.properties[\"name\"] + '</a></b></h2>';
    var websiteName = '<p><a href=\"' + feature.properties[\"URL\"] + '\" target=\"_blank\">' + feature.properties[\"URL\"] + '</a><p>';

    //adds icons to popup
    var iconsList = '<div class=\"marker-popup-icons-container\"><ul class=\"marker-popup-icons-list\">';
    toolCategories.forEach(function (t) {
      if (t.locations.includes(locationData.slug)) {
        iconsList += '<li>' +
          '<img src=\"' + t.icon + '\">' +
          '</li>'
      }
    })
    iconsList += \"</ul></div>\";

      //bind popup to marker
    var popup = L.popup({
      closeButton: false,
      className: \"marker-popup\"
    })
      .setContent(locationTitle + websiteName + iconsList)
    marker.bindPopup(popup);
  });

  //when a filter is clicked
  //\$('.map-filter-list li').click(function(e) {
  \$('.map-filter-item').click(function (e) {
    e.preventDefault()
    //all other filers become inactive
    //\$(this).parent().find('li').removeClass('active');
    \$('.map-filter-item').removeClass('active');
    //all locations in the locations list become inactive
    \$('.map-locations-list').find('li').removeClass();
    //the filter that is clicked is active
    \$(this).addClass('active');

    var filter = \$(this).data('filter');

    var filtered_locations = [];
    // only make locations active if a filter is applied
    if (filter != 'all') {
      //find locations that has tools of that category
      filtered_locations = toolCategories.filter(function (toolCategory) {
        return toolCategory.name.replace(/ /g, \"-\").toLowerCase() == filter;
      })[0].locations;

      //highlight locations on the locations list (made active)
      filtered_locations.forEach(function (l) {
        if (l) {
          \$('.map-locations-list').find('[map-locations-list-slug=' + l + \"]\").addClass('active');
        }else {
          return false;
        }
      })

      //makes all locations that are not filtered inactive
      \$('.map-locations-list li').each(function (index, li) {
        if (!\$(li).hasClass('active')) {
          \$(li).addClass('inactive')
        }
      })
    }

    if (filter == 'all') {
      //pan to original position if \"show all\" is selected
      map.panTo([38.035544, -78.505186], 15.55);
      //\$('.map-locations-list').find('li').removeClass();
      \$('.map-locations-list').find('li').removeClass();
    }

    //mapbox: show/hide location markers that are filtered
    markers.setFilter(function (f) {
      // If the data-filter attribute is set to \"all\", return
      // all (true). Otherwise, filter on the locations that are in the toolcategory.
      return (filter === 'all') ? true : filtered_locations.includes(f.properties[\"location-slug\"]);
    });

    return false;
  });

</script>";
    }

    public function getTemplateName()
    {
        return "modules/custom/custom_bootstrap_map/templates/custom-bootstrap-map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  91 => 26,  87 => 25,  82 => 24,  78 => 23,  65 => 12,  54 => 10,  50 => 9,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/custom_bootstrap_map/templates/custom-bootstrap-map.html.twig", "/home/makergro/public_html/modules/custom/custom_bootstrap_map/templates/custom-bootstrap-map.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9);
        static $filters = array("escape" => 10, "replace" => 10, "lower" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'replace', 'lower'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
