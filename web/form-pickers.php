<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Form Pickers',
  'body_class' => $GLOBALS['body_class'] . '',
  'scripts' => array(
    'clockpicker',
    'colorpicker',
    'maskedinput',
    'moment',
    'daterangepicker',
    'datepicker',
  ),
  'styles' => array(
    'clockpicker',
    'colorpicker',
    'daterangepicker',
    'datepicker',
  ),
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

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Clock Pickers</h5>
	            <p class="text-muted">Use <code>.clockpicker</code> to create it.</p>

	            <form action="javascript:void(0);">
                <div class="form-group">
                  <label for="sampleClockPicker1" class="form-control-label">Default ClockPicker</label>
                  <div class="input-group clockpicker">
                    <input type="text" class="form-control" data-masked-input="99:99" id="sampleClockPicker1" />
                    <span class="input-group-addon">
                      <span class="material-icons list-icon">watch_later</span>
                    </span>
                  </div><!-- /.input-group -->
                </div><!-- /.form-group -->

                <div class="form-group">
                  <label for="sampleClockPicker3" class="form-control-label">Autoclose right aligned clockpicker</label>
                  <div class="input-group clockpicker" data-placement="right" data-autoclose="true">
                    <input type="text" class="form-control"  data-masked-input="99:99" id="sampleClockPicker3" />
                    <span class="input-group-addon">
                      <span class="material-icons list-icon">watch_later</span>
                    </span>
                  </div><!-- /.input-group -->
                </div><!-- /.form-group -->
	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Color Pickers</h5>
	            <p class="text-muted">Use <code>.colorpicker</code> to create it.</p>

	            <form action="javascript:void(0);">
                <div class="form-group">
                  <label for="sampleColorPicker1" class="form-control-label">Default ColorPicker</label>
                  <div class="input-group colorpicker">
                    <input type="text" class="form-control" value="#7ab2fa" id="sampleColorPicker1" />
                    <span class="input-group-addon"><i></i></span>
                  </div><!-- /.input-group -->
                </div><!-- /.form-group -->

                <div class="form-group mr-b-30">
                  <label for="sampleColorPicker2" class="form-control-label">ColorPicker with Pallete</label>
                  <div class="input-group colorpicker" data-plugin-options='{"showPalette": true}'>
                    <input type="text" class="form-control" value="#fa7a7a" id="sampleColorPicker2" />
                    <span class="input-group-addon"><i></i></span>
                  </div><!-- /.input-group -->
                </div><!-- /.form-group -->
	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
							<h5 class="box-title mr-b-0">Date Range Picker</h5>
							<p class="text-muted">Use <code>.daterange</code> to create it.</p>

	            <form action="javascript:void(0);">
                <div class="form-group">
                  <label class="form-control-label">Pre Selected Date Range</label>
                  <div class="clearfix"></div>
                  <div class="predefinedRanges mr-tb-10" style="cursor: pointer;">
                    <span></span>
                    <i class="list-icon material-icons">expand_more</i>
                  </div>
                </div><!-- /.form-group -->

                <div class="form-group">
                  <label class="form-control-label">Default DateRangePicker</label>
                  <input type="text" class="form-control daterange" value="01/01/2015 - 01/31/2015"/>
                </div><!-- /.form-group -->

                <div class="form-group mr-b-40">
                  <label class="form-control-label">Default DateRangePicker</label>
                  <input class="form-control daterange" value="01/01/2015 - 01/31/2015" data-plugin-options='{"timePicker": true, "timePickerIncrement": 30, "locale": { "format": "MM/DD/YYYY h:mm A" }}'/>
                </div><!-- /.form-group -->
	            </form>

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
							<h5 class="box-title mr-b-0">Datepicker</h5>
							<p class="text-muted">just add class <code>.datepicker</code> to create it.</p>

	            <form>
                <div class="form-group">
                  <label class="form-control-label">Default Datepicker</label>
                  <div class="input-group">
                    <input type="text" class="form-control datepicker" value="06/13/2017" />
                    <span class="input-group-addon">
                      <i class="list-icon material-icons">date_range</i>
                    </span>
                  </div><!-- /.input-group -->
                </div><!-- /.form-group -->

                <div class="form-group">
                  <label class="form-control-label">Autoclose Datepicker</label>
                  <div class="input-group">
                    <input type="text" class="form-control datepicker" value="06/13/2017" data-plugin-options='{"autoclose": true}' />
                    <span class="input-group-addon">
                      <i class="list-icon material-icons">date_range</i>
                    </span>
                  </div><!-- /.input-group -->
                </div><!-- /.form-group -->

                <div class="form-group">
                  <label class="form-control-label">Date Range Selector</label>
                  <div class="input-daterange input-group datepicker">
                    <input type="text" class="form-control" name="start" />
                    <span class="input-group-addon bg-info text-inverse">to</span>
                    <input type="text" class="form-control" name="end" />
                  </div>
                </div><!-- /.form-group -->

	            </form>
	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
