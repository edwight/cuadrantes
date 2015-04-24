<html class=" js svg"><head>

<base href="http://www.highcharts.com/demo/pie-donut">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="keywords" content="highcharts, charts, javascript charts, ajax charts, plots, line charts, bar charts, pie charts, javascript plots, ajax plots">
  <meta name="description" content="Highcharts - Interactive JavaScript charts for your web pages.">
  <meta name="generator" content="Joomla! - Open Source Content Management">
  <title>Donut chart</title>
  <link rel="stylesheet" href="/components/com_demo/assets/css/highslide.css" type="text/css">
  <link rel="stylesheet" href="/joomla/templates/highsoft_bootstrap/assets/bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,400italic" type="text/css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css">
  <link rel="stylesheet" href="/joomla/templates/highsoft_bootstrap/assets/css/template.css" type="text/css">
  <style type="text/css">
.container {
	width: 100%;
}
#hs-component {
	background-color: inherit;
	padding: 0;
}
#hs-component .container {
	padding: 0;
	width: 100%;
}
#comp-menu {
	background-color: #252530;
	z-index: 1;
	padding: 0;
}
#comp-menu .cont {
	padding: 0 50px;
}
#comp-menu h2,
#comp-menu h2 a {
	color: #eeeaea;
	font-weight: lighter;
	text-transform: inherit;
}
#comp-menu h2 a:hover {
	color: #8085e8;
}
a.btn.btn-theme {
	color: #eeeaea;
	background-color: #34343e;
	border: 1px solid #34343e;
	border-bottom: 0;
	border-radius: 0;
	font-weight: normal;
	margin: 0;
	margin-right: 5px;
}
a.btn.btn-theme:hover {
	color: #90ef7f;
}
a.btn.btn-theme.disabled {
	background-color: #FFFFFF;
	color: #313131;
	opacity: 1;
}
.demo {
	background-color: #f6f6f6;
	padding: 0 50px;
}
.demo .demo-name {
	color: #313131;
	font-weight: lighter;
	text-transform: none;
	padding-left: 15px;
	text-align: center;
	display: inline;
	margin: 0 10px;
}
#chart-switcher {
	text-align: center;
	padding: 30px 0;
}
.demo #chart-switcher #previous-example {
	font-size: 30px;
	padding: 0 10px;
	color: #888;
}
.demo #chart-switcher #next-example {
	font-size: 30px;
	padding: 0 10px;
	color: #888;
}
#demo-buttons {
	text-align: center;
	padding: 30px 0;
}
#demo-buttons a {
	background-color: #ddd;
}
#demo-buttons a:hover {
	background-color: #40818b;
}
.demo .chart-container {
	position: relative;
	background-color: white;
	padding: 30px 0;
}
.demo .chart-container #previous-example {
	position: absolute;
	top: 50%;
	left: -30px;
	font-size: 70px;
	color: #888;
}
.demo .chart-container #next-example {
	position: absolute;
	top: 50%;
	right: -30px;
	font-size: 70px;
	color: #888;
}
/* Sidebar */
.sidebar-eq-fill {
	background-color: #f6f6f6;
}
@media screen and (max-width: 400px) {
	.sidebar-wrapper .sidebar-eq {
		padding: 0;
	}
	#chart-switcher {
		padding: 0;
	}
	#small-switcher {
		text-align: center;
	}
	.demo .chart-container {
		padding: 0;
	}
	.demo #chart-switcher #previous-example,
	.demo #chart-switcher #next-example {
		font-size: 20px;
	}
	#sidebar-close {
		position: absolute;
		top: 0;
		left: 0;
		background-color: #252530;
		color: white;
		border-radius: 0;
		z-index: 100;
		cursor: pointer;
		padding: 10px;
		visibility: hidden;
	}
	.toggled #sidebar-close {
		visibility: visible;
	}	
}
@media screen and (min-width: 400px) and (max-width: 768px) {
	.demo {
		padding: 15px;
	}
	#sidebar-close {
		position: absolute;
		top: 0;
		left: 0;
		background-color: #252530;
		color: white;
		border-radius: 0;
		z-index: 100;
		cursor: pointer;
		padding: 10px;
		visibility: hidden;
	}
	.toggled #sidebar-close {
		visibility: visible;
	}
}
  </style>
  <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="/media/com_demo/highslide-full.min.js" type="text/javascript"></script>
  <script src="/media/com_demo/highslide.config.js" type="text/javascript"></script>
  <script src="/lib/jquery-1.7.2.js" type="text/javascript"></script>
  <script src="/joomla/templates/highsoft_bootstrap/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/joomla/templates/highsoft_bootstrap/assets/js/modernizr.js" type="text/javascript"></script>
  <script src="/joomla/templates/highsoft_bootstrap/assets/js/script.js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery.noConflict();

var example = 'pie-donut', 
theme = 'default';

(function($){ // encapsulate jQuery
	$(function () {

    var colors = Highcharts.getOptions().colors,
        categories = ['MSIE', 'Firefox', 'Chrome', 'Safari', 'Opera'],
        data = [{
            y: 55.11,
            color: colors[0],
            drilldown: {
                name: 'MSIE versions',
                categories: ['MSIE 6.0', 'MSIE 7.0', 'MSIE 8.0', 'MSIE 9.0'],
                data: [10.85, 7.35, 33.06, 2.81],
                color: colors[0]
            }
        }, {
            y: 21.63,
            color: colors[1],
            drilldown: {
                name: 'Firefox versions',
                categories: ['Firefox 2.0', 'Firefox 3.0', 'Firefox 3.5', 'Firefox 3.6', 'Firefox 4.0'],
                data: [0.20, 0.83, 1.58, 13.12, 5.43],
                color: colors[1]
            }
        }, {
            y: 11.94,
            color: colors[2],
            drilldown: {
                name: 'Chrome versions',
                categories: ['Chrome 5.0', 'Chrome 6.0', 'Chrome 7.0', 'Chrome 8.0', 'Chrome 9.0',
                    'Chrome 10.0', 'Chrome 11.0', 'Chrome 12.0'],
                data: [0.12, 0.19, 0.12, 0.36, 0.32, 9.91, 0.50, 0.22],
                color: colors[2]
            }
        }, {
            y: 7.15,
            color: colors[3],
            drilldown: {
                name: 'Safari versions',
                categories: ['Safari 5.0', 'Safari 4.0', 'Safari Win 5.0', 'Safari 4.1', 'Safari/Maxthon',
                    'Safari 3.1', 'Safari 4.1'],
                data: [4.55, 1.42, 0.23, 0.21, 0.20, 0.19, 0.14],
                color: colors[3]
            }
        }, {
            y: 2.14,
            color: colors[4],
            drilldown: {
                name: 'Opera versions',
                categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                data: [ 0.12, 0.37, 1.65],
                color: colors[4]
            }
        }],
        browserData = [],
        versionsData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness;


    // Build the data arrays
    for (i = 0; i < dataLen; i += 1) {

        // add browser data
        browserData.push({
            name: categories[i],
            y: data[i].y,
            color: data[i].color
        });

        // add version data
        drillDataLen = data[i].drilldown.data.length;
        for (j = 0; j < drillDataLen; j += 1) {
            brightness = 0.2 - (j / drillDataLen) / 5;
            versionsData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
    }

    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Browser market share, April, 2011'
        },
        yAxis: {
            title: {
                text: 'Total percent market share'
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%']
            }
        },
        tooltip: {
            valueSuffix: '%'
        },
        series: [{
            name: 'Browsers',
            data: browserData,
            size: '60%',
            dataLabels: {
                formatter: function () {
                    return this.y > 5 ? this.point.name : null;
                },
                color: 'white',
                distance: -30
            }
        }, {
            name: 'Versions',
            data: versionsData,
            size: '80%',
            innerSize: '60%',
            dataLabels: {
                formatter: function () {
                    // display only if larger than 1
                    return this.y > 1 ? '<b>' + this.point.name + ':</b> ' + this.y + '%'  : null;
                }
            }
        }]
    });
});
})(jQuery);
jQuery(document).ready(function () {	
	jQuery("#view-menu").click(function (e) {
		jQuery("#wrap").toggleClass("toggled");
	});
	jQuery("#sidebar-close").click(function (e) {
		jQuery("#wrap").removeClass("toggled");
	});
	// key listeners for the previous and next arrows
	jQuery(document).keydown(function(e) {
		var anchor;
		if (e.target.tagName != 'INPUT') {
			if (e.keyCode == 39) {
				anchor = document.getElementById('next-example');

			} else
			if (e.keyCode == 37) {
				anchor = document.getElementById('previous-example');
			}

			if (anchor) {
				location.href = anchor.href;
			}
		}
	});
	// Bind event to style change switcher
	jQuery('#switcher-selector').bind('change', function() {
		var url = jQuery(this).val(); // get selected value
		if (url) { // require a URL
			window.location = url; // redirect
		}
		return false;
	});
});
  </script>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
				<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-2995052-3']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<style type="text/css">.highslide img {cursor: url(http://www.highcharts.com/highslide/graphics/zoomin.cur), pointer !important;}.highslide-viewport-size {position: fixed; width: 100%; height: 100%; left: 0; top: 0}</style></head>
	<body data-feedly-mini="yes">
		<div id="menu">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				            <span class="sr-only">Toggle navigation</span>
          				</a>
						<a class="navbar-brand" href="http://www.highcharts.com/" title="Highcharts">
							<img src="/templates/highsoft_bootstrap/assets/images/logo.svg" alt="Highcharts">
						</a>
					</div>
					<div class="collapse navbar-collapse">
						<div id="menu-container">
							<div id="menu-second" class="hidden-xs">
								
<ul class="nav navbar-nav pull-right">
<li class="item-112"><a href="/about">About Us</a></li><li class="item-113 deeper dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products <span class="toggle-arrow"></span></a>
<ul class="dropdown-menu" role="menu"><li class="item-121"><a href="/products/highcharts">Highcharts</a></li><li class="item-122"><a href="/products/highstock">Highstock</a></li><li class="item-210"><a href="/products/highmaps">Highmaps</a></li><li class="item-213"><a href="http://cloud.highcharts.com/">Highcharts Cloud</a></li><li class="item-123"><a href="http://highslide.com/">Highslide JS</a></li></ul></li><li class="item-218"><a href="/blog">Blog</a></li><li class="item-114"><a href="/contact-email">Contact</a></li></ul>

								<div class="clearfix"></div>
							</div>
							<div id="menu-main">
								
<ul class="nav navbar-nav pull-right">
<li class="item-101"><a href="/">Home</a></li><li class="item-103 active deeper dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Demo <span class="toggle-arrow"></span></a>
<ul class="dropdown-menu" role="menu"><li class="item-106 current active"><a href="/demo">Highcharts demos</a></li><li class="item-107"><a href="/stock/demo">Highstock demos</a></li><li class="item-205"><a href="/maps/demo">Highmaps demo</a></li></ul></li><li class="item-108 deeper dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Docs <span class="toggle-arrow"></span></a>
<ul class="dropdown-menu" role="menu"><li class="item-128"><a href="/docs">General Documentation</a></li><li class="item-124"><a href="http://api.highcharts.com/highcharts">Highcharts API Reference</a></li><li class="item-125"><a href="http://api.highcharts.com/highstock">Highstock API Reference</a></li><li class="item-211"><a href="http://api.highcharts.com/highmaps">Highmaps API Reference</a></li><li class="item-126"><a href="/documentation/compatibility">Compatibility</a></li><li class="item-127"><a href="/documentation/changelog">Changelog</a></li></ul></li><li class="item-109 deeper dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Support <span class="toggle-arrow"></span></a>
<ul class="dropdown-menu" role="menu"><li class="item-110"><a href="/support">Support</a></li><li class="item-129"><a href="/support/roadmap">Roadmap</a></li><li class="item-201"><a href="/download">Download</a></li><li class="item-208"><a href="http://forum.highcharts.com/">Forum</a></li></ul></li><li class="item-111"><a href="/plugin-registry">Plugins</a></li><li class="item-115"><a href="http://shop.highsoft.com/">Shop</a></li></ul>

								<div class="clearfix"></div>
							</div>
							<div id="mobile-second" class="visible-xs">
								
<ul class="nav navbar-nav pull-right">
<li class="item-112"><a href="/about">About Us</a></li><li class="item-113 deeper dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products <span class="toggle-arrow"></span></a>
<ul class="dropdown-menu" role="menu"><li class="item-121"><a href="/products/highcharts">Highcharts</a></li><li class="item-122"><a href="/products/highstock">Highstock</a></li><li class="item-210"><a href="/products/highmaps">Highmaps</a></li><li class="item-213"><a href="http://cloud.highcharts.com/">Highcharts Cloud</a></li><li class="item-123"><a href="http://highslide.com/">Highslide JS</a></li></ul></li><li class="item-218"><a href="/blog">Blog</a></li><li class="item-114"><a href="/contact-email">Contact</a></li></ul>

							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div id="hs-slider">
			<div class="container">
				
			</div>
		</div>
		<div id="hs-clients">
			<div class="container">
				
			</div>
		</div>		
		<div id="hs-component">
								<div class="container">
						<div id="wrap" class="sidebar-wrapper">
	<div id="comp-menu" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-9"></div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 cont">
			<h2 class="demo-name"><a href="http://www.highcharts.com/demo/">Highcharts Demos</a> › Donut chart</h2>
			<div class="btn-group theme">
																				<a class="btn btn-theme disabled" href="#">Default</a>
																																					<a class="btn btn-theme" href="http://www.highcharts.com/demo/pie-donut/dark-unica">Dark Unica</a>
																																					<a class="btn btn-theme" href="http://www.highcharts.com/demo/pie-donut/sand-signika">Sand Signika</a>
																																					<a class="btn btn-theme" href="http://www.highcharts.com/demo/pie-donut/grid-light">Grid Light</a>
												</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-9 sidebar">
		<ul class="nav nav-sidebar">
						<li class="">
				<div class=""><span>Line charts</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/line-basic">
							Basic line						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/line-ajax">
							Ajax loaded data, clickable points						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/line-labels">
							With data labels						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/line-time-series">
							Time series, zoomable						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/spline-inverted">
							Spline with inverted axes						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/spline-symbols">
							Spline with symbols						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/spline-plot-bands">
							Spline with plot bands						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/spline-irregular-time">
							Time data with irregular intervals						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/line-log-axis">
							Logarithmic axis						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>Area charts</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/area-basic">
							Basic area						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/area-negative">
							Area with negative values						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/area-stacked">
							Stacked area						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/area-stacked-percent">
							Percentage area						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/area-missing">
							Area with missing points						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/area-inverted">
							Inverted axes						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/areaspline">
							Area-spline						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/arearange">
							Area range						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/arearange-line">
							Area range and line						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/sparkline">
							Sparkline charts						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>Column and bar charts</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/bar-basic">
							Basic bar						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/bar-stacked">
							Stacked bar						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/bar-negative-stack">
							Bar with negative stack						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-basic">
							Basic column						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-negative">
							Column with negative values						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-stacked">
							Stacked column						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-stacked-and-grouped">
							Stacked and grouped column						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-stacked-percent">
							Stacked percentage column						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-rotated-labels">
							Column with rotated labels						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-drilldown">
							Column with drilldown						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-placement">
							Fixed placement columns						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/column-parsed">
							Data defined in a HTML table						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/columnrange">
							Column range						</a>
					</li>
								</ul>
			</li>
						<li class="active">
				<div class="active"><span>Pie charts</span><icon class="toggle"></icon></div>
				<ul style="display: block;">
									<li class="">
						<a href="http://www.highcharts.com/demo/pie-basic">
							Pie chart						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/pie-legend">
							Pie with legend						</a>
					</li>
									<li class="active">
						<a href="http://www.highcharts.com/demo/pie-donut">
							Donut chart						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/pie-semi-circle">
							Semi circle donut						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/pie-drilldown">
							Pie with drilldown						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/pie-gradient">
							Pie with gradient fill						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/pie-monochrome">
							Pie with monochrome fill						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>Scatter and bubble charts</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/scatter">
							Scatter plot						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/bubble">
							Bubble chart						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/bubble-3d">
							3D bubbles						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>Dynamic charts</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/dynamic-update">
							Spline updating each second						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/dynamic-click-to-add">
							Click to add a point						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/dynamic-master-detail">
							Master-detail chart						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>Combinations</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/combo">
							Column, line and pie						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/combo-dual-axes">
							Dual axes, line and column						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/combo-multi-axes">
							Multiple axes						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/combo-regression">
							Scatter with regression line						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/combo-meteogram">
							Meteogram						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/combo-timeline">
							Advanced timeline						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>3D charts</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/3d-column-interactive">
							3D column						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/3d-column-null-values">
							3D column with null and 0 values						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/3d-column-stacking-grouping">
							3D column with stacking and grouping						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/3d-pie">
							3D pie						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/3d-pie-donut">
							3D donut						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/3d-scatter-draggable">
							3D scatter chart						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>Gauges</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/gauge-speedometer">
							Angular gauge						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/gauge-solid">
							Solid gauge						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/gauge-clock">
							Clock						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/gauge-dual">
							Gauge with dual axes						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/gauge-vu-meter">
							VU meter						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>Heat and tree maps</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/heatmap">
							Heat map						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/heatmap-canvas">
							Large heat map						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/treemap-coloraxis">
							Tree map with color axis						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/treemap-with-levels">
							Tree map with levels						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/treemap-large-dataset">
							Large tree map						</a>
					</li>
								</ul>
			</li>
						<li class="">
				<div class=""><span>More chart types</span><icon class="toggle"></icon></div>
				<ul style="display: none;">
									<li class="">
						<a href="http://www.highcharts.com/demo/polar">
							Polar chart						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/polar-spider">
							Spiderweb						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/polar-wind-rose">
							Wind rose						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/box-plot">
							Box plot						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/error-bar">
							Error bar						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/waterfall">
							Waterfall						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/funnel">
							Funnel chart						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/pyramid">
							Pyramid chart						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/polygon">
							Polygon series						</a>
					</li>
									<li class="">
						<a href="http://www.highcharts.com/demo/renderer">
							General drawing						</a>
					</li>
								</ul>
			</li>
					</ul>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-9 sidebar-fill"></div>
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 sidebar-eq demo">
		<a id="sidebar-close" class="btn-default visible-xs">« Hide Menu</a>
		<div id="chart-switcher" class="visible-xs">
					<a id="previous-example" title="Previous (arrow left)" href="http://www.highcharts.com/demo/pie-legend"><i class="fa fa-angle-left"></i></a>
					<h2 class="demo-name">Donut chart</h2>
					<a id="next-example" title="Next (arrow right)" href="http://www.highcharts.com/demo/pie-semi-circle"><i class="fa fa-angle-right"></i></a>
				</div>
		<div id="small-switcher" class="visible-xs">
			<a class="button" id="view-menu" onclick="">Menu »</a>
			<select id="switcher-selector">
				<option value="http://www.highcharts.com/demo/pie-donut" selected="">Default theme</option>
				<option value="http://www.highcharts.com/demo/pie-donut/dark-unica">Dark Unica</option>
				<option value="http://www.highcharts.com/demo/pie-donut/sand-signika">Sand Signika</option>
				<option value="http://www.highcharts.com/demo/pie-donut/grid-light">Grid Light</option>
			</select>
			<div class="clearfix"></div>
		</div>
		<div class="chart-container">
							<a id="previous-example" class="hidden-xs" title="Previous (arrow left)" href="http://www.highcharts.com/demo/pie-legend"><i class="fa fa-angle-left"></i></a>
						<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="width: 600px; height: 400px; margin: 0 auto" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 600px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="600" height="400"><desc>Created with Highcharts 4.1.5</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="580" height="332"></rect></clipPath></defs><rect x="0" y="0" width="600" height="400" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect><g class="highcharts-button" style="cursor:default;" stroke-linecap="round" transform="translate(566,10)"><title>Chart context menu</title><rect x="0.5" y="0.5" width="24" height="22" strokeWidth="1" fill="white" stroke="none" stroke-width="1" rx="2" ry="2"></rect><path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#666" stroke-width="3" zIndex="1"></path><text x="0" zIndex="1" style="color:black;fill:black;" transform="translate(0,12)"></text></g><g class="highcharts-series-group" zIndex="3"><path fill="rgba(163,255,144,0.25)" d="M 0 0"></path><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(10,53) scale(1 1)" style=""><path fill="#7cb5ec" d="M 289.98012149531934 68.4000020243594 A 97.6 97.6 0 1 1 252.69477288483216 256.1891347662552 L 290 166 A 0 0 0 1 0 290 166 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#434348" d="M 252.60460241770943 256.15178445079397 A 97.6 97.6 0 0 1 194.51190017040324 145.80636756467618 L 290 166 A 0 0 0 0 0 290 166 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#90ed7d" d="M 194.5321415435189 145.71088957757667 A 97.6 97.6 0 0 1 235.18213084270587 85.24876953845359 L 290 166 A 0 0 0 0 0 290 166 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#f7a35c" d="M 235.2629094686412 85.19399205404446 A 97.6 97.6 0 0 1 276.53630673875324 69.33310306124926 L 290 166 A 0 0 0 0 0 290 166 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#8085e9" d="M 276.6329803514269 69.3196877036764 A 97.6 97.6 0 0 1 289.8644355580442 68.4000941481905 L 290 166 A 0 0 0 0 0 290 166 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(10,53) scale(1 1)"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(10,53) scale(1 1)" style=""><path fill="rgba(175,232,255,1)" d="M 289.9741742377715 39.2000026300079 A 126.8 126.8 0 0 1 372.53671675929064 69.74029718206778 L 339.5220300555744 108.24417830924067 A 76.08 76.08 0 0 0 289.9845045426629 89.92000157800474 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(162,219,255,1)" d="M 372.63293517771035 69.82288201491833 A 126.8 126.8 0 0 1 407.7075842060857 118.84955333862428 L 360.62455052365146 137.70973200317457 A 76.08 76.08 0 0 0 339.5797611066262 108.293729208951 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(149,206,255,1)" d="M 407.7546757911015 118.9672844784338 A 126.8 126.8 0 0 1 263.5420268539099 290.00893377898535 L 274.1252161123459 240.4053602673912 A 76.08 76.08 0 0 0 360.6528054746609 137.78037068706027 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(136,193,248,1)" d="M 263.41803116978457 289.9824138057872 A 126.8 126.8 0 0 1 241.2995359945739 283.0747829622425 L 260.7797215967443 236.2448697773455 A 76.08 76.08 0 0 0 274.05081870187075 240.38944828347232 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(118,118,123,1)" d="M 241.1824855813541 283.02602396896725 A 126.8 126.8 0 0 1 239.78172181583872 282.43180208267063 L 259.8690330895032 235.8590812496024 A 76.08 76.08 0 0 0 260.70949134881243 236.21561438138036 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(107,107,112,1)" d="M 239.66531514229837 282.38152559696005 A 126.8 126.8 0 0 1 233.45713677051083 279.49513037047575 L 256.0742820623065 234.09707822228543 A 76.08 76.08 0 0 0 259.799189085379 235.828915358176 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(97,97,102,1)" d="M 233.34366993048548 279.4385307691096 A 126.8 126.8 0 0 1 222.08746379355426 273.08000479084876 L 249.25247827613256 230.24800287450927 A 76.08 76.08 0 0 0 256.0062019582913 234.06311846146576 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(87,87,92,1)" d="M 221.9804177628754 273.0120387259632 A 126.8 126.8 0 0 1 164.5785744411076 184.646876702955 L 214.74714466466455 177.188126021773 A 76.08 76.08 0 0 0 249.18825065772523 230.20722323557789 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(77,77,82,1)" d="M 164.55999027821997 184.52144597486213 A 126.8 126.8 0 0 1 165.91756601830036 139.88889934956495 L 215.55053961098022 150.33333960973897 A 76.08 76.08 0 0 0 214.735994166932 177.1128675849173 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(195,255,176,1)" d="M 165.94373915581076 139.76482999181292 A 126.8 126.8 0 0 1 166.13042321207445 138.8970860168097 L 215.67825392724467 149.73825161008583 A 76.08 76.08 0 0 0 215.56624349348647 150.25889799508775 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(188,255,169,1)" d="M 166.1575880563237 138.77323001212258 A 126.8 126.8 0 0 1 166.49321800158555 137.2891170390716 L 215.89593080095133 148.77347022344298 A 76.08 76.08 0 0 0 215.6945528337942 149.66393800727354 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(182,255,163,1)" d="M 166.5219906331472 137.16562463309796 A 126.8 126.8 0 0 1 166.72685481123096 136.30199206565075 L 216.03611288673858 148.18119523939043 A 76.08 76.08 0 0 0 215.9131943798883 148.69937477985877 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(175,255,156,1)" d="M 166.7566144507831 136.17873379001023 A 126.8 126.8 0 0 1 167.44245308226124 133.47481447391488 L 216.46547184935673 146.48488868434893 A 76.08 76.08 0 0 0 216.05396867046989 148.10724027400613 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(169,255,150,1)" d="M 167.47503954113478 133.3522732100148 A 126.8 126.8 0 0 1 168.1524547227723 130.90846669189352 L 216.89147283366339 144.9450800151361 A 76.08 76.08 0 0 0 216.48502372468087 146.41136392600887 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(163,255,144,1)" d="M 168.18760717399937 130.78663671268944 A 126.8 126.8 0 0 1 214.03286133150544 64.47545202010639 L 244.41971679890327 105.08527121206384 A 76.08 76.08 0 0 0 216.9125643043996 144.87198202761365 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(156,249,137,1)" d="M 214.1344238461308 64.39953565636883 A 126.8 126.8 0 0 1 217.42392372001956 62.0242665243353 L 246.45435423201172 103.61455991460119 A 76.08 76.08 0 0 0 244.4806543076785 105.0397213938213 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(150,243,131,1)" d="M 217.5279357242011 61.95174244801373 A 126.8 126.8 0 0 1 218.88664877688223 61.018424103000385 L 247.33198926612934 103.01105446180023 A 76.08 76.08 0 0 0 246.51676143452065 103.57104546880824 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(255,214,143,1)" d="M 218.99166589195497 60.947363254413034 A 126.8 126.8 0 0 1 252.8444553802088 44.7659061814429 L 267.7066732281253 93.25954370886573 A 76.08 76.08 0 0 0 247.39499953517299 102.96841795264783 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(255,206,135,1)" d="M 252.9657080315925 44.72881126005754 A 126.8 126.8 0 0 1 264.26354392690797 41.83931850703378 L 274.5581263561448 91.50359110422028 A 76.08 76.08 0 0 0 267.7794248189555 93.23728675603452 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(255,199,128,1)" d="M 264.3877174559345 41.813644135585676 A 126.8 126.8 0 0 1 266.1287796067256 41.467253957299576 L 275.6772677640353 91.28035237437975 A 76.08 76.08 0 0 0 274.6326304735607 91.4881864813514 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(255,192,121,1)" d="M 266.2533242676221 41.44344500725266 A 126.8 126.8 0 0 1 267.8745204402946 41.14527179856961 L 276.7247122641768 91.08716307914176 A 76.08 76.08 0 0 0 275.7519945605732 91.2660670043516 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(255,184,113,1)" d="M 267.9993862104258 41.123208750056364 A 126.8 126.8 0 0 1 269.4994557663525 40.86819874178961 L 277.69967345981155 90.92091924507376 A 76.08 76.08 0 0 0 276.7996317262555 91.07392525003382 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(255,177,106,1)" d="M 269.62459779702675 40.84776076686812 A 126.8 126.8 0 0 1 271.0024773652242 40.63120749667732 L 278.6014864191345 90.77872449800638 A 76.08 76.08 0 0 0 277.7747586782161 90.90865646012087 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(254,170,99,1)" d="M 271.1278556355933 40.6122726615998 A 126.8 126.8 0 0 1 272.1315506599808 40.465309502977746 L 279.2789303959885 90.67918570178665 A 76.08 76.08 0 0 0 278.67671338135597 90.76736359695988 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(179,184,255,1)" d="M 272.2570942637793 40.44750382395583 A 126.8 126.8 0 0 1 273.136389259027 40.32638052169844 L 279.8818335554162 90.59582831301906 A 76.08 76.08 0 0 0 279.3542565582676 90.6685022943735 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(162,167,255,1)" d="M 273.2620712893644 40.30957975057255 A 126.8 126.8 0 0 1 276.15712306960125 39.95788498168625 L 281.6942738417608 90.37473098901175 A 76.08 76.08 0 0 0 279.95724277361865 90.58574785034354 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="rgba(145,150,250,1)" d="M 276.2831720850505 39.94410512811524 A 126.8 126.8 0 0 1 289.82387734385253 39.200122315477 L 289.8943264063115 89.9200733892862 A 76.08 76.08 0 0 0 281.7699032510303 90.36646307686914 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(10,53) scale(1 1)"></g></g><text x="300" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;fill:#333333;width:536px;" y="24"><tspan>Browser market share, April, 2011</tspan></text><g class="highcharts-data-labels highcharts-tracker" visibility="visible" zIndex="6" transform="translate(10,53) scale(1 1)" opacity="1" style=""><g zIndex="1" style="" transform="translate(341,169)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: white; fill: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 0px 6px, rgb(0, 0, 0) 0px 0px 3px;" transform="translate(0,16)"><tspan>MSIE</tspan></text></g><g zIndex="1" style="" transform="translate(208,187)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: white; fill: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 0px 6px, rgb(0, 0, 0) 0px 0px 3px;" transform="translate(0,16)"><tspan>Firefox</tspan></text></g><g zIndex="1" style="" transform="translate(210,118)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: white; fill: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 0px 6px, rgb(0, 0, 0) 0px 0px 3px;" transform="translate(0,16)"><tspan>Chrome</tspan></text></g><g zIndex="1" style="" transform="translate(248,93)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: white; fill: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 0px 6px, rgb(0, 0, 0) 0px 0px 3px;" transform="translate(0,16)"><tspan>Safari</tspan></text></g></g><g class="highcharts-data-labels highcharts-tracker" visibility="visible" zIndex="6" transform="translate(10,53) scale(1 1)" opacity="1" style=""><path fill="none" d="M 349.48461228895985 18.970523282840567 C 344.48461228895985 18.970523282840567 341.7047851313598 26.472027196981358 337.88252278965984 36.78659507892494 L 334.0602604479599 47.10116296086852" stroke="rgba(175,232,255,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 422.5585211910627 74.81302904718672 C 417.5585211910627 74.81302904718672 411.0504333751921 79.46542552437107 402.1018126283701 85.86247068049956 L 393.15319188154814 92.25951583662804" stroke="rgba(162,219,255,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 414.81671693585315 267.14442319136356 C 409.81671693585315 267.14442319136356 403.70361913300343 261.9839934367022 395.2981096540852 254.88840252404273 L 386.89260017516693 247.79281161138329" stroke="rgba(149,206,255,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 238.13405827749793 315.632294330011 C 243.13405827749793 315.632294330011 245.5251777531359 307.99799359888806 248.81296703213795 297.5008300935939 L 252.10075631114 287.0036665882997" stroke="rgba(136,193,248,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 176.50115207984922 279.2 C 181.50115207984922 279.2 216.7762107099386 295.53654573904885 222.18925964939206 285.9605914169417 L 227.60230858884552 276.3846370948346" stroke="rgba(97,97,102,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 153.4568982491401 251.33845781218997 C 158.4568982491401 251.33845781218997 165.16828099153093 246.98445486258845 174.39643226231829 240.99770080688634 L 183.62458353310564 235.01094675118424" stroke="rgba(87,87,92,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 128.2764878583964 161.10298642021206 C 133.2764878583964 161.10298642021206 141.27258541664148 161.3528340518339 152.26721955922847 161.69637454531392 L 163.26185370181545 162.03991503879394" stroke="rgba(77,77,82,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 147.73893487226613 90.2 C 152.73893487226613 90.2 167.66134957424242 81.29643093703618 176.70520142023256 87.55811951023915 L 185.7490532662227 93.81980808344213" stroke="rgba(163,255,144,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 166.60067567760362 63.2 C 171.60067567760362 63.2 225.92713668665561 31.70142150108407 230.6637058832066 41.629407814848015 L 235.4002750797576 51.55739412861196" stroke="rgba(255,214,143,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 197.03296071823263 36.2 C 202.03296071823263 36.2 253.20240036311213 21.821719177390264 255.92265302444122 32.48005982959932 L 258.6429056857703 43.138400481808375" stroke="rgba(255,206,135,1)" stroke-width="1" visibility="inherit"></path><path fill="none" d="M 276.54192233972753 9.200000000000003 C 281.54192233972753 9.200000000000003 281.9734569142312 17.416640884342982 282.56681695417376 28.400625765204722 L 283.16017699411634 39.38461064606646" stroke="rgba(145,150,250,1)" stroke-width="1" visibility="inherit"></path><g zIndex="1" style="" transform="translate(354,9)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">MSIE 6.0:</tspan><tspan dx="0"> 10.85%</tspan></text></g><g zIndex="1" style="" transform="translate(428,65)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">MSIE 7.0:</tspan><tspan dx="0"> 7.35%</tspan></text></g><g zIndex="1" style="" transform="translate(420,257)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">MSIE 8.0:</tspan><tspan dx="0"> 33.06%</tspan></text></g><g zIndex="1" style="" transform="translate(141,306)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">MSIE 9.0:</tspan><tspan dx="0"> 2.81%</tspan></text></g><g zIndex="1" style="" transform="translate(66,269)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">Firefox 3.5:</tspan><tspan dx="0"> 1.58%</tspan></text></g><g zIndex="1" style="" transform="translate(36,241)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">Firefox 3.6:</tspan><tspan dx="0"> 13.12%</tspan></text></g><g zIndex="1" style="" transform="translate(18,151)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">Firefox 4.0:</tspan><tspan dx="0"> 5.43%</tspan></text></g><g zIndex="1" style="" transform="translate(26,80)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">Chrome 10.0:</tspan><tspan dx="0"> 9.91%</tspan></text></g><g zIndex="1" style="" transform="translate(64,53)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">Safari 5.0:</tspan><tspan dx="0"> 4.55%</tspan></text></g><g zIndex="1" style="" transform="translate(94,26)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">Safari 4.0:</tspan><tspan dx="0"> 1.42%</tspan></text></g><g zIndex="1" style="" transform="translate(165,-1)" visibility="inherit"><text x="5" zIndex="1" style="font-size: 11px; font-weight: bold; color: rgb(0, 0, 0); fill: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 0px 0px 6px, rgb(255, 255, 255) 0px 0px 3px;" transform="translate(0,16)"><tspan style="font-weight:bold">Opera 11.x:</tspan><tspan dx="0"> 1.65%</tspan></text></g></g><g class="highcharts-legend" zIndex="7"><g zIndex="1"><g></g></g></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(86,-9999)" opacity="0" visibility="visible"><path fill="none" d="M 3.5 0.5 L 120.5 0.5 C 123.5 0.5 123.5 0.5 123.5 3.5 L 123.5 44.5 C 123.5 47.5 123.5 47.5 120.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)" width="123" height="47"></path><path fill="none" d="M 3.5 0.5 L 120.5 0.5 C 123.5 0.5 123.5 0.5 123.5 3.5 L 123.5 44.5 C 123.5 47.5 123.5 47.5 120.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)" width="123" height="47"></path><path fill="none" d="M 3.5 0.5 L 120.5 0.5 C 123.5 0.5 123.5 0.5 123.5 3.5 L 123.5 44.5 C 123.5 47.5 123.5 47.5 120.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)" width="123" height="47"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 120.5 0.5 C 123.5 0.5 123.5 0.5 123.5 3.5 L 123.5 44.5 C 123.5 47.5 123.5 47.5 120.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="rgba(163,255,144,1)" stroke-width="1"></path><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" transform="translate(0,20)"><tspan style="font-size: 10px">Chrome 10.0</tspan><tspan style="fill:rgba(163,255,144,1)" x="8" dy="15">●</tspan><tspan dx="0"> Versions: </tspan><tspan style="font-weight:bold" dx="0">9.91%</tspan></text></g><text x="590" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395">Highcharts.com</text></svg></div></div>
							<a id="next-example" class="hidden-xs" title="Next (arrow right)" href="http://www.highcharts.com/demo/pie-semi-circle"><i class="fa fa-angle-right"></i></a>
					</div>
		<div id="demo-buttons">
			<a class="button" href="javascript:" onclick="hs.htmlExpand(this, { width: 800,
					headingText: 'Highcharts Configuration Preview', 
					wrapperClassName: 'draggable-header' })">View options »</a>
			<div class="highslide-maincontent">
				<pre>$(function () {

    var colors = Highcharts.getOptions().colors,
        categories = ['MSIE', 'Firefox', 'Chrome', 'Safari', 'Opera'],
        data = [{
            y: 55.11,
            color: colors[0],
            drilldown: {
                name: 'MSIE versions',
                categories: ['MSIE 6.0', 'MSIE 7.0', 'MSIE 8.0', 'MSIE 9.0'],
                data: [10.85, 7.35, 33.06, 2.81],
                color: colors[0]
            }
        }, {
            y: 21.63,
            color: colors[1],
            drilldown: {
                name: 'Firefox versions',
                categories: ['Firefox 2.0', 'Firefox 3.0', 'Firefox 3.5', 'Firefox 3.6', 'Firefox 4.0'],
                data: [0.20, 0.83, 1.58, 13.12, 5.43],
                color: colors[1]
            }
        }, {
            y: 11.94,
            color: colors[2],
            drilldown: {
                name: 'Chrome versions',
                categories: ['Chrome 5.0', 'Chrome 6.0', 'Chrome 7.0', 'Chrome 8.0', 'Chrome 9.0',
                    'Chrome 10.0', 'Chrome 11.0', 'Chrome 12.0'],
                data: [0.12, 0.19, 0.12, 0.36, 0.32, 9.91, 0.50, 0.22],
                color: colors[2]
            }
        }, {
            y: 7.15,
            color: colors[3],
            drilldown: {
                name: 'Safari versions',
                categories: ['Safari 5.0', 'Safari 4.0', 'Safari Win 5.0', 'Safari 4.1', 'Safari/Maxthon',
                    'Safari 3.1', 'Safari 4.1'],
                data: [4.55, 1.42, 0.23, 0.21, 0.20, 0.19, 0.14],
                color: colors[3]
            }
        }, {
            y: 2.14,
            color: colors[4],
            drilldown: {
                name: 'Opera versions',
                categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                data: [ 0.12, 0.37, 1.65],
                color: colors[4]
            }
        }],
        browserData = [],
        versionsData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness;


    // Build the data arrays
    for (i = 0; i &lt; dataLen; i += 1) {

        // add browser data
        browserData.push({
            name: categories[i],
            y: data[i].y,
            color: data[i].color
        });

        // add version data
        drillDataLen = data[i].drilldown.data.length;
        for (j = 0; j &lt; drillDataLen; j += 1) {
            brightness = 0.2 - (j / drillDataLen) / 5;
            versionsData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
    }

    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Browser market share, April, 2011'
        },
        yAxis: {
            title: {
                text: 'Total percent market share'
            }
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%']
            }
        },
        tooltip: {
            valueSuffix: '%'
        },
        series: [{
            name: 'Browsers',
            data: browserData,
            size: '60%',
            dataLabels: {
                formatter: function () {
                    return this.y &gt; 5 ? this.point.name : null;
                },
                color: 'white',
                distance: -30
            }
        }, {
            name: 'Versions',
            data: versionsData,
            size: '80%',
            innerSize: '60%',
            dataLabels: {
                formatter: function () {
                    // display only if larger than 1
                    return this.y &gt; 1 ? '&lt;b&gt;' + this.point.name + ':&lt;/b&gt; ' + this.y + '%'  : null;
                }
            }
        }]
    });
});</pre>
			</div>			
						<a class="button" href="http://jsfiddle.net/gh/get/jquery/1.9.1/highslide-software/highcharts.com/tree/master/samples/highcharts/demo/pie-donut/">Edit in jsFiddle »</a>
		</div>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 sidebar-eq-fill"></div>
	<div class="clearfix"></div>
</div>

					</div>
						</div>
		<div id="hs-below">
			<div class="container">
				
			</div>
		</div>
		<div id="hs-bottom">
			<div class="container">
				
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">								
					<div id="zt-footer-copy">
						© 2015 Highcharts. All rights reserved.					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="socials">
													<div>
<a href="https://www.facebook.com/Highcharts" title="Facebook" class="social-icon"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/Highcharts" title="Twitter" class="social-icon"><i class="fa fa-twitter"></i></a>
<a href="http://www.linkedin.com/company/highsoft-solutions-as" title="LinkedIn" class="social-icon"><i class="fa fa-linkedin"></i></a>
<a href="https://github.com/highslide-software/highcharts.com" title="Github" class="social-icon"><i class="fa fa-github"></i></a>
<a href="https://www.youtube.com/channel/UCzxXofPTQ0DoT7uIy3Fxw7A"><i class="fa fa-youtube"></i></a>
</div>
											</div>
				</div>
			</div>
		</div>
	
<div class="highslide-container" style="padding: 0px; border: none; margin: 0px; position: absolute; left: 0px; top: 0px; width: 100%; z-index: 1001; direction: ltr;"><a class="highslide-loading" title="Click to cancel" href="javascript:;" style="position: absolute; top: -9999px; opacity: 0.75; z-index: 1;">Loading...</a><div style="display: none;"></div><div class="highslide-viewport highslide-viewport-size" style="padding: 0px; border: none; margin: 0px; visibility: hidden;"></div><table cellspacing="0" style="padding: 0px; border: none; margin: 0px; visibility: hidden; position: absolute; border-collapse: collapse; width: 0px;"><tbody style="padding: 0px; border: none; margin: 0px;"><tr style="padding: 0px; border: none; margin: 0px; height: auto;"><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) 0px 0px;"></td><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) 0px -40px;"></td><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) -20px 0px;"></td></tr><tr style="padding: 0px; border: none; margin: 0px; height: auto;"><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) 0px -80px;"></td><td class="rounded-white highslide-outline" style="padding: 0px; border: none; margin: 0px; position: relative;"></td><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) -20px -80px;"></td></tr><tr style="padding: 0px; border: none; margin: 0px; height: auto;"><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) 0px -20px;"></td><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) 0px -60px;"></td><td style="padding: 0px; border: none; margin: 0px; line-height: 0; font-size: 0px; height: 20px; width: 20px; background: url(http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png) -20px -20px;"></td></tr></tbody></table><img src="http://www.highcharts.com/highslide/graphics/outlines/rounded-white.png" style="padding: 0px; border: none; margin: 0px; position: absolute; top: -9999px;"></div><div id="feedly-mini" title="feedly Mini tookit"></div></body></html>