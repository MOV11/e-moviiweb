<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Weather Icons Page',
	'body_class' => $GLOBALS['body_class'] . ' icons-page',
	'styles' => array(
		'weather-icons',
		'weather-icons-wind'
	)
);

get_header($config);
?>

<div class="content-wrapper">
	<?php get_template_part( $GLOBALS['sidebar_file'] ) ?>

	<main class="main-wrapper clearfix">

		<?php get_page_title($config); ?>

		<!-- =================================== -->
		<!-- Different data widgets ============ -->
		<!-- =================================== -->
		<div class="widget-list">
			<div class="row">

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<section>
								<h5 class="box-title mr-b-0">25 New 2.0 Icons!</h5>
								<p class="text-muted">Sample code: <code>&lt;i class="list-icon wi wi-vcard"&gt;&lt;/i&gt;</code></p>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-high"></i><br /><small> day-cloudy-high</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-light-wind"></i><br /><small> day-light-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sleet"></i><br /><small> day-sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-haze"></i><br /><small> day-haze</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-high"></i><br /><small> night-cloud-high</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-partly-cloudy"></i><br /><small> night-alt-partly-cloudy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sleet"></i><br /><small> sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonrise"></i><br /><small> moonrise</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonset"></i><br /><small> moonset</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sleet"></i><br /><small> night-sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sleet"></i><br /><small> night-alt-sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-raindrop"></i><br /><small> raindrop</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-barometer"></i><br /><small> barometer</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-humidity"></i><br /><small> humidity</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-na"></i><br /><small> na (no report)</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-flood"></i><br /><small> flood</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sandstorm"></i><br /><small> sandstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-tsunami"></i><br /><small> tsunami</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-earthquake"></i><br /><small> earthquake</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fire"></i><br /><small> fire</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-volcano"></i><br /><small> volcano</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-train"></i><br /><small> train</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-small-craft-advisory"></i><br /><small> small-craft-advisory</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-gale-warning"></i><br /><small> gale-warning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-warning"></i><br /><small> storm-warning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hurricane-warning"></i><br /><small> hurricane-warning</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Daytime</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sunny"></i><br /><small> wi-day-sunny</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy"></i><br /><small> wi-day-cloudy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-gusts"></i><br /><small> wi-day-cloudy-gusts</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-windy"></i><br /><small> wi-day-cloudy-windy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-fog"></i><br /><small> wi-day-fog</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-hail"></i><br /><small> wi-day-hail</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-haze"></i><br /><small> wi-day-haze</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-lightning"></i><br /><small> wi-day-lightning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-rain"></i><br /><small> wi-day-rain-mix</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-rain-wind"></i><br /><small> wi-day-rain-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-showers"></i><br /><small> wi-day-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sleet"></i><br /><small> wi-day-sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sleet-storm"></i><br /><small> wi-day-sleet-storm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-snow"></i><br /><small> wi-day-snow</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-snow-thunderstorm"></i><br /><small> wi-day-snow-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-snow-wind"></i><br /><small> wi-day-snow-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sprinkle"></i><br /><small> wi-day-sprinkle</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-storm-showers"></i><br /><small> wi-day-storm-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-sunny-overcast"></i><br /><small> wi-day-sunny-overcast</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-thunderstorm"></i><br /><small> wi-day-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-windy"></i><br /><small> wi-day-windy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-solar-eclipse"></i><br /><small> wi-solar-eclipse</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hot"></i><br /><small> wi-hot</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-cloudy-high"></i><br /><small> wi-day-cloudy-high</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-day-light-wind"></i><br /><small> wi-day-light-wind</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Nighttime</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-clear"></i><br /><small> wi-night-clear</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy"></i><br /><small> wi-night-alt-cloudy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy-gusts"></i><br /><small> wi-night-alt-cloudy-gusts</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy-windy"></i><br /><small> wi-night-alt-cloudy-windy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-hail"></i><br /><small> wi-night-alt-hail</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-lightning"></i><br /><small> wi-night-alt-lightning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-rain"></i><br /><small> wi-night-alt-rain</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-rain-mix"></i><br /><small> wi-night-alt-rain-mix</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-rain-wind"></i><br /><small> wi-night-alt-rain-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-showers"></i><br /><small> wi-night-alt-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sleet"></i><br /><small> wi-night-alt-sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sleet-storm"></i><br /><small> wi-night-alt-sleet-storm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-snow"></i><br /><small> wi-night-alt-snow</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-snow-wind"></i><br /><small> wi-night-alt-snow-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-sprinkle"></i><br /><small> wi-night-alt-sprinkle</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-storm-showers"></i><br /><small> wi-night-alt-storm-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-thunderstorm"></i><br /><small> wi-night-alt-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-snow-thunderstorm"></i><br /><small> wi-night-alt-snow-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy"></i><br /><small> wi-night-cloudy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-gusts"></i><br /><small> wi-night-cloudy-gusts</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-windy"></i><br /><small> wi-night-cloudy-windy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-fog"></i><br /><small> wi-night-fog</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-hail"></i><br /><small> wi-night-hail</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-lightning"></i><br /><small> wi-night-lightning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-partly-cloudy"></i><br /><small> wi-night-partly-cloudy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-rain"></i><br /><small> wi-night-rain</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-rain-mix"></i><br /><small> wi-night-rain-mix</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-rain-wind"></i><br /><small> wi-night-rain-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-showers"></i><br /><small> wi-night-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sleet"></i><br /><small> wi-night-sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sleet-storm"></i><br /><small> wi-night-sleet-storm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-snow"></i><br /><small> wi-night-snow</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-snow-thunderstorm"></i><br /><small> wi-night-snow-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-snow-wind"></i><br /><small> wi-night-snow-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-sprinkle"></i><br /><small> wi-night-sprinkle</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-storm-showers"></i><br /><small> wi-night-storm-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-thunderstorm"></i><br /><small> wi-night-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-lunar-eclipse"></i><br /><small> wi-lunar-eclipse</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-stars"></i><br /><small> wi-stars</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-showers"></i><br /><small> wi-storm-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thunderstorm"></i><br /><small> wi-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-cloudy-high"></i><br /><small> wi-night-alt-cloudy-high</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-cloudy-high"></i><br /><small> wi-night-cloudy-high</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-night-alt-partly-cloudy"></i><br /><small> wi-night-alt-partly-cloudy</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Neutral</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud"></i><br /><small> wi-cloud</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloudy"></i><br /><small> wi-cloudy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloudy-gusts"></i><br /><small> wi-cloudy-gusts</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloudy-windy"></i><br /><small> wi-cloudy-windy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fog"></i><br /><small> wi-fog</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hail"></i><br /><small> wi-hail</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-rain"></i><br /><small> wi-rain</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-rain-mix"></i><br /><small> wi-rain-mix</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-rain-wind"></i><br /><small> wi-rain-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-showers"></i><br /><small> wi-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sleet"></i><br /><small> wi-sleet</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snow"></i><br /><small> wi-snow</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sprinkle"></i><br /><small> wi-sprinkle</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-showers"></i><br /><small> wi-storm-showers</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thunderstorm"></i><br /><small> wi-thunderstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snow-wind"></i><br /><small> wi-snow-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snow"></i><br /><small> wi-snow</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-smog"></i><br /><small> wi-smog</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-smoke"></i><br /><small> wi-smoke</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-lightning"></i><br /><small> wi-lightning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-raindrops"></i><br /><small> wi-raindrops</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-raindrop"></i><br /><small> wi-raindrop</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-dust"></i><br /><small> wi-dust</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-snowflake-cold"></i><br /><small> wi-snowflake-cold</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-windy"></i><br /><small> wi-windy</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-strong-wind"></i><br /><small> wi-strong-wind</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sandstorm"></i><br /><small> wi-sandstorm</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-earthquake"></i><br /><small> wi-earthquake</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fire"></i><br /><small> wi-fire</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-flood"></i><br /><small> wi-flood</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-meteor"></i><br /><small> wi-meteor</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-tsunami"></i><br /><small> wi-tsunami</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-volcano"></i><br /><small> wi-volcano</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hurricane"></i><br /><small> wi-hurricane</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-tornado"></i><br /><small> wi-tornado</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-small-craft-advisory"></i><br /><small> wi-small-craft-advisory</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-gale-warning"></i><br /><small> wi-gale-warning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-storm-warning"></i><br /><small> wi-storm-warning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-hurricane-warning"></i><br /><small> wi-hurricane-warning</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind-direction"></i><br /><small> wi-wind-direction</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Miscellaneous</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-alien"></i><br /><small> wi-alien</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-celsius"></i><br /><small> wi-celsius</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-fahrenheit"></i><br /><small> wi-fahrenheit</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-degrees"></i><br /><small> wi-degrees</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thermometer"></i><br /><small> wi-thermometer</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thermometer-exterior"></i><br /><small> wi-thermometer-exterior</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-thermometer-internal"></i><br /><small> wi-thermometer-internal</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud-down"></i><br /><small> wi-cloud-down</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud-up"></i><br /><small> wi-cloud-up</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-cloud-refresh"></i><br /><small> wi-cloud-refresh</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-horizon"></i><br /><small> wi-horizon</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-horizon-alt"></i><br /><small> wi-horizon-alt</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sunrise"></i><br /><small> wi-sunrise</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-sunset"></i><br /><small> wi-sunset</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonrise"></i><br /><small> wi-moonrise</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moonset"></i><br /><small> wi-moonset</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-refresh"></i><br /><small> wi-refresh</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-refresh-alt"></i><br /><small> wi-refresh-alt</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-umbrella"></i><br /><small> wi-umbrella</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-barometer"></i><br /><small> wi-barometer</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-humidity"></i><br /><small> wi-humidity</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-na"></i><br /><small> wi-na</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-train"></i><br /><small> wi-train</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Moon Phases</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-new"></i><br /><small> wi-moon-new</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-1"></i><br /><small> wi-moon-waxing-crescent-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-2"></i><br /><small> wi-moon-waxing-crescent-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-3"></i><br /><small> wi-moon-waxing-crescent-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-4"></i><br /><small> wi-moon-waxing-crescent-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-5"></i><br /><small> wi-moon-waxing-crescent-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-crescent-6"></i><br /><small> wi-moon-waxing-crescent-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-first-quarter"></i><br /><small> wi-moon-first-quarter</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-1"></i><br /><small> wi-moon-waxing-gibbous-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-2"></i><br /><small> wi-moon-waxing-gibbous-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-3"></i><br /><small> wi-moon-waxing-gibbous-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-4"></i><br /><small> wi-moon-waxing-gibbous-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-5"></i><br /><small> wi-moon-waxing-gibbous-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waxing-gibbous-6"></i><br /><small> wi-moon-waxing-gibbous-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-full"></i><br /><small> wi-moon-full</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-1"></i><br /><small> wi-moon-waning-gibbous-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-2"></i><br /><small> wi-moon-waning-gibbous-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-3"></i><br /><small> wi-moon-waning-gibbous-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-4"></i><br /><small> wi-moon-waning-gibbous-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-5"></i><br /><small> wi-moon-waning-gibbous-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-gibbous-6"></i><br /><small> wi-moon-waning-gibbous-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-third-quarter"></i><br /><small> wi-moon-third-quarter</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-1"></i><br /><small> wi-moon-waning-crescent-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-2"></i><br /><small> wi-moon-waning-crescent-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-3"></i><br /><small> wi-moon-waning-crescent-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-4"></i><br /><small> wi-moon-waning-crescent-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-5"></i><br /><small> wi-moon-waning-crescent-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-waning-crescent-6"></i><br /><small> wi-moon-waning-crescent-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-new"></i><br /><small> wi-moon-alt-new</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-first-quarter"></i><br /><small> wi-moon-alt-first-quarter</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-1"></i><br /><small> wi-moon-alt-waxing-crescent-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-2"></i><br /><small> wi-moon-alt-waxing-crescent-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-3"></i><br /><small> wi-moon-alt-waxing-crescent-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-4"></i><br /><small> wi-moon-alt-waxing-crescent-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-5"></i><br /><small> wi-moon-alt-waxing-crescent-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-crescent-6"></i><br /><small> wi-moon-alt-waxing-crescent-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-1"></i><br /><small> wi-moon-alt-waxing-gibbous-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-2"></i><br /><small> wi-moon-alt-waxing-gibbous-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-3"></i><br /><small> wi-moon-alt-waxing-gibbous-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-4"></i><br /><small> wi-moon-alt-waxing-gibbous-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-5"></i><br /><small> wi-moon-alt-waxing-gibbous-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waxing-gibbous-6"></i><br /><small> wi-moon-alt-waxing-gibbous-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-full"></i><br /><small> wi-moon-alt-full</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-1"></i><br /><small> wi-moon-alt-waning-gibbous-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-2"></i><br /><small> wi-moon-alt-waning-gibbous-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-3"></i><br /><small> wi-moon-alt-waning-gibbous-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-4"></i><br /><small> wi-moon-alt-waning-gibbous-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-5"></i><br /><small> wi-moon-alt-waning-gibbous-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-gibbous-6"></i><br /><small> wi-moon-alt-waning-gibbous-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-third-quarter"></i><br /><small> wi-moon-alt-third-quarter</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-1"></i><br /><small> wi-moon-alt-waning-crescent-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-2"></i><br /><small> wi-moon-alt-waning-crescent-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-3"></i><br /><small> wi-moon-alt-waning-crescent-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-4"></i><br /><small> wi-moon-alt-waning-crescent-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-5"></i><br /><small> wi-moon-alt-waning-crescent-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-moon-alt-waning-crescent-6"></i><br /><small> wi-moon-alt-waning-crescent-6</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Time</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-1"></i><br /><small> wi-time-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-2"></i><br /><small> wi-time-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-3"></i><br /><small> wi-time-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-4"></i><br /><small> wi-time-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-5"></i><br /><small> wi-time-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-6"></i><br /><small> wi-time-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-7"></i><br /><small> wi-time-7</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-8"></i><br /><small> wi-time-8</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-9"></i><br /><small> wi-time-9</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-10"></i><br /><small> wi-time-10</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-11"></i><br /><small> wi-time-11</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-time-12"></i><br /><small> wi-time-12</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Directional Arrows</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-up"></i><br /><small> wi-direction-up</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-up-right"></i><br /><small> wi-direction-up-right</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-right"></i><br /><small> wi-direction-right</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-down-right"></i><br /><small> wi-direction-down-right</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-down"></i><br /><small> wi-direction-down</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-down-left"></i><br /><small> wi-direction-down-left</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-left"></i><br /><small> wi-direction-left</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-direction-up-left"></i><br /><small> wi-direction-up-left</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Wind Degree Examples</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-0-deg"></i><br /><small> towards-0-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-23-deg"></i><br /><small> towards-23-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-45-deg"></i><br /><small> towards-45-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-68-deg"></i><br /><small> towards-68-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-90-deg"></i><br /><small> towards-90-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-113-deg"></i><br /><small> towards-113-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-135-deg"></i><br /><small> towards-135-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-158-deg"></i><br /><small> towards-158-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-180-deg"></i><br /><small> towards-180-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-203-deg"></i><br /><small> towards-203-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-225-deg"></i><br /><small> towards-225-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-248-deg"></i><br /><small> towards-248-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-270-deg"></i><br /><small> towards-270-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-293-deg"></i><br /><small> towards-293-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-313-deg"></i><br /><small> towards-313-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind towards-336-deg"></i><br /><small> towards-336-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-180-deg"></i><br /><small> from-180-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-203-deg"></i><br /><small> from-203-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-225-deg"></i><br /><small> from-225-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-248-deg"></i><br /><small> from-248-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-270-deg"></i><br /><small> from-270-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-293-deg"></i><br /><small> from-293-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-313-deg"></i><br /><small> from-313-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-336-deg"></i><br /><small> from-336-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-0-deg"></i><br /><small> from-0-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-23-deg"></i><br /><small> from-23-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-45-deg"></i><br /><small> from-45-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-68-deg"></i><br /><small> from-68-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-90-deg"></i><br /><small> from-90-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-113-deg"></i><br /><small> from-135-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-135-deg"></i><br /><small> from-135-deg</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind from-158-deg"></i><br /><small> from-158-deg</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Wind Cardinal Examples</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-n"></i><br /><small> wi-towards-n</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-nne"></i><br /><small> wi-towards-nne</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ne"></i><br /><small> wi-towards-ne</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ene"></i><br /><small> wi-towards-ene</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-e"></i><br /><small> wi-towards-e</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ese"></i><br /><small> wi-towards-ese</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-se"></i><br /><small> wi-towards-se</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-sse"></i><br /><small> wi-towards-sse</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-s"></i><br /><small> wi-towards-s</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-ssw"></i><br /><small> wi-towards-ssw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-sw"></i><br /><small> wi-towards-sw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-wsw"></i><br /><small> wi-towards-wsw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-w"></i><br /><small> wi-towards-w</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-wnw"></i><br /><small> wi-towards-wnw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-nw"></i><br /><small> wi-towards-nw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-towards-nnw"></i><br /><small> wi-towards-nnw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-n"></i><br /><small> wi-from-n</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-nne"></i><br /><small> wi-from-nne</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ne"></i><br /><small> wi-from-ne</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ene"></i><br /><small> wi-from-ene</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-e"></i><br /><small> wi-from-e</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ese"></i><br /><small> wi-from-ese</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-se"></i><br /><small> wi-from-se</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-sse"></i><br /><small> wi-from-sse</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-s"></i><br /><small> wi-from-s</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-ssw"></i><br /><small> wi-from-ssw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-sw"></i><br /><small> wi-from-sw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-wsw"></i><br /><small> wi-from-wsw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-w"></i><br /><small> wi-from-w</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-wnw"></i><br /><small> wi-from-wnw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-nw"></i><br /><small> wi-from-nw</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi wi-wind wi-from-nnw"></i><br /><small> wi-from-nnw</small></div>
								</div>
							</section>
							<hr />

							<section>
								<h5 class="box-title">Beaufort Wind Scale</h5>

								<div class="row text-center">
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-0"></i><br /><small> wi-wind-beaufort-0</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-1"></i><br /><small> wi-wind-beaufort-1</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-2"></i><br /><small> wi-wind-beaufort-2</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-3"></i><br /><small> wi-wind-beaufort-3</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-4"></i><br /><small> wi-wind-beaufort-4</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-5"></i><br /><small> wi-wind-beaufort-5</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-6"></i><br /><small> wi-wind-beaufort-6</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-7"></i><br /><small> wi-wind-beaufort-7</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-8"></i><br /><small> wi-wind-beaufort-8</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-9"></i><br /><small> wi-wind-beaufort-9</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-10"></i><br /><small> wi-wind-beaufort-10</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-11"></i><br /><small> wi-wind-beaufort-11</small></div>
									<div class="col-md-2 col-sm-3 col-4"><i class="wi icon wi-wind-beaufort-12"></i><br /><small> wi-wind-beaufort-12</small></div>
								</div>
							</section>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
