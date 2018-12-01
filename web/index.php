<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Painel de Controle',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
		'counterup',
		'waypoints',
		'charts-js',
		'chart-js-bundle',
		'chart-js-utility',
		'knob',
		'sparkline',
		'knob-excanvas',
    'mithril',
    'theme-widgets',
		'moment',
		'underscore',
		'clndr',
		'jqueryui',
		'morris-charts',
		'morris-raphael',
    'daterangepicker',
    'slick',
	),
	'styles' => array(
		'weather-icons',
		'weather-icons-wind',
    'daterangepicker',
		'morris-css',
    'slick',
    'slick-theme'
	)
);

get_header($config);
?>

<div class="content-wrapper">
	<?php get_template_part( $GLOBALS['sidebar_file'] ) ?>

	<main class="main-wrapper clearfix">

		<?php get_page_title($config); ?>

		<div class="widget-list">

      <!-- Counters -->
			<div class="row">

        <!-- Counter: Sales -->
  			<div class="col-md-3 col-6 widget-holder">
  				<div class="widget-bg bg-real text-inverse">
  		      <div class="widget-body">

  						<div class="widget-counter">
                <h6>
                  Total Convertido
									<small class="text-inverse">Este Ano</small>
                </h6>
                <h3 class="h1">R&dollar;<span class="counter">742</span></h3>
                <i class="material-icons list-icon">attach_money</i>
              </div><!-- /.widget-counter -->

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<!-- Counter: Subscriptions -->
        <div class="col-md-3 col-6 widget-holder">
  				<div class="widget-bg bg-color-scheme text-inverse">
  		      <div class="widget-body clearfix">

              <div class="widget-counter">
                <h6>
                  Usuários Beneficiados
                  <small class="text-inverse">Útilmo Mês</small>
                </h6>
                <h3 class="h1"><span class="counter">346</span></h3>
                <i class="material-icons list-icon">person</i>
              </div><!-- /.widget-counter -->

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<!-- Counter: Users -->
        <div class="col-md-3 col-6 widget-holder">
  				<div class="widget-bg">
  		      <div class="widget-body clearfix">

              <div class="widget-counter">
                <h6>
                  Novos Usuários
                  <small>Últimos 7 dias</small>
                </h6>
                <h3 class="h1"><span class="counter">58</span></h3>
                <i class="material-icons list-icon">person_add</i>
              </div><!-- /.widget-counter -->

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<!-- Counter: Pageviews -->
        <div class="col-md-3 col-6 widget-holder">
  				<div class="widget-bg bg-novo text-inverse">
  		      <div class="widget-body clearfix">

  						<div class="widget-counter">
                <h6>
                  Total de Usuários
                  <small>Desde o Começo</small>
                </h6>
                <h3 class="h1"><span class="counter">1873</span></h3>
                <i class="material-icons list-icon">group</i>
              </div><!-- /.widget-counter -->

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

      <!-- Chart Group 1 -->
			<div class="row">

				<div class="col-md-6 col-sm-12 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">

  						<h6 class="mr-t-0 mr-b-5 fw-700">Modal Ecológico Preferido</h6>
  						<p class="text-muted">As opções de modais ecológicos que os usuários dizem preferir</p>

  						<div id="donuteMorrisDemo" style="margin-left:-15px; margin-right:-15px; height: 270px;"></div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

					<div class="col-md-6 col-sm-12 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">

  						<h6 class="mr-t-0 mr-b-5 fw-700">Modal de Transporte Público Preferido</h6>
  						<p class="text-muted">As opções de modais de transporte público que os usuários dizem preferir</p>

  						<div id="donuteMorrisDemo1" style="margin-left:-15px; margin-right:-15px; height: 270px;"></div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<!-- Charts: Sales Statistics -->
  			<div class="col-md-12 widget-holder">
  				<div class="widget-bg">

  					<div class="widget-heading clearfix">
						<h6 class="mr-t-0 mr-b-5 fw-700">Utilização dos Modais</h6>
  					<p class="text-muted">Nível de utilização de cada modal de acordo com o horário do dia</p>

  		      </div><!-- /.widget-heading -->

  					<div class="widget-body clearfix">
  						<div id="productLineHomeMorris" style="height: 280px;"></div>
  					</div><!-- /.widget-body -->

  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->
<?php get_footer();