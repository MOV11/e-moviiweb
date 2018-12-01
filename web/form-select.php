<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Select and MultiSelect',
	'body_class' => $GLOBALS['body_class'] . '',
  'scripts' => array(
    'select2',
    'selectpicker',
    'multiselect',
  ),
  'styles' => array(
    'select2',
    'selectpicker',
    'multiselect',
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

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<h5 class="box-title mr-b-0">Select2</h5>
	            <p class="text-muted">Select2 for custom search and select. Use <code>data-toggle="select2"</code></p>

	            <form action="javascript:void(0);">
	              <div class="form-group">
	                <label class="form-control-label">Select a State</label>
	                <select class="m-b-10 form-control" data-placeholder="Choose" data-toggle="select2">
	                  <optgroup label="Alaskan/Hawaiian Time Zone">
	                    <option value="AK">Alaska</option>
	                    <option value="HI">Hawaii</option>
	                  </optgroup>
	                  <optgroup label="Pacific Time Zone">
	                    <option value="CA">California</option>
	                    <option value="NV">Nevada</option>
	                    <option value="OR">Oregon</option>
	                    <option value="WA">Washington</option>
	                  </optgroup>
	                  <optgroup label="Mountain Time Zone">
	                    <option value="AZ">Arizona</option>
	                    <option value="CO">Colorado</option>
	                    <option value="ID">Idaho</option>
	                    <option value="MT">Montana</option>
	                    <option value="NE">Nebraska</option>
	                    <option value="NM">New Mexico</option>
	                    <option value="ND">North Dakota</option>
	                    <option value="UT">Utah</option>
	                    <option value="WY">Wyoming</option>
	                  </optgroup>
	                  <optgroup label="Central Time Zone">
	                    <option value="AL">Alabama</option>
	                    <option value="AR">Arkansas</option>
	                    <option value="IL">Illinois</option>
	                    <option value="IA">Iowa</option>
	                    <option value="KS">Kansas</option>
	                    <option value="KY">Kentucky</option>
	                    <option value="LA">Louisiana</option>
	                    <option value="MN">Minnesota</option>
	                    <option value="MS">Mississippi</option>
	                    <option value="MO">Missouri</option>
	                    <option value="OK">Oklahoma</option>
	                    <option value="SD">South Dakota</option>
	                    <option value="TX">Texas</option>
	                    <option value="TN">Tennessee</option>
	                    <option value="WI">Wisconsin</option>
	                  </optgroup>
	                  <optgroup label="Eastern Time Zone">
	                    <option value="CT">Connecticut</option>
	                    <option value="DE">Delaware</option>
	                    <option value="FL">Florida</option>
	                    <option value="GA">Georgia</option>
	                    <option value="IN">Indiana</option>
	                    <option value="ME">Maine</option>
	                    <option value="MD">Maryland</option>
	                    <option value="MA">Massachusetts</option>
	                    <option value="MI">Michigan</option>
	                    <option value="NH">New Hampshire</option>
	                    <option value="NJ">New Jersey</option>
	                    <option value="NY">New York</option>
	                    <option value="NC">North Carolina</option>
	                    <option value="OH">Ohio</option>
	                    <option value="PA">Pennsylvania</option>
	                    <option value="RI">Rhode Island</option>
	                    <option value="SC">South Carolina</option>
	                    <option value="VT">Vermont</option>
	                    <option value="VA">Virginia</option>
	                    <option value="WV">West Virginia</option>
	                  </optgroup>
	                </select>
	              </div><!-- /.form-group -->
                
                <div class="form-group">
	                <label class="form-control-label">Multiple Select</label>
                  <select class="form-control" multiple data-toggle="select2" data-plugin-options='{"minimumResultsForSearch": -1}'>
                    <option selected>Mustard</option>
                    <option selected>Ketchup</option>
                    <option>Relish</option>
                  </select>
                </div><!-- /.form-group -->

                <div class="form-group">
	                <label class="form-control-label">Disable Search</label>
                  <select class="form-control" data-toggle="select2" data-plugin-options='{"minimumResultsForSearch": -1}'>
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                  </select>
                </div><!-- /.form-group -->
	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->


	      <div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
							<h5 class="box-title mr-b-0">Bootstrap Select Boxes</h5>
	            <p class="text-muted">Just add bootstrap-select-min.js and same css &amp; add class <code>.selectpicker</code></p>

              <form action="javascript:void(0);">
                <div class="form-group">
                  <label for="selectpicker1" class="form-control-label">Select Box</label>
                  <select id="selectpicker1" class="form-control selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                  </select>
                </div><!-- /.form-group -->

                <div class="form-group">
                  <label for="selectpicker1" class="form-control-label">Multiple Selection</label>
                  <select class="selectpicker form-control" multiple>
                    <option selected>Mustard</option>
                    <option selected>Ketchup</option>
                    <option>Relish</option>
                  </select>
                </div><!-- /.form-group -->

                <div class="form-group">
                  <label class="form-control-label">With coloured Button classes</label>
                  <select class="selectpicker form-control" data-live-search="true" data-style="btn btn-primary">
                    <option>Hot Dog, Fries and a Soda</option>
                    <option>Burger, Shake and a Smile</option>
                    <option>Sugar, Spice and all things nice</option>
                  </select>
                </div><!-- /.form-group -->
              </form>
	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-12">
	        <div class="widget-bg">
	          <div class="widget-body">
							<h5 class="box-title mr-b-0">Bootstrap Multi Select</h5>
	            <p class="text-muted">Use a <code>data-toggle="multiselect"</code> as your input element.</p>

	            <div class="row">
	              <div class="col-md-4">
									<p class="fw-700">Pre-selected Options</p>
	                <select id='pre-selected-options' class="form-control" data-toggle="multiselect" multiple='multiple'>
	                  <option value='elem_1'>elem 1</option>
	                  <option value='elem_2'>elem 2</option>
	                  <option value='elem_3'>elem 3</option>
	                  <option value='elem_4' selected>elem 4</option>
	                  <option value='elem_5' selected>elem 5</option>
	                  <option value="elem_6">elem 6</option>
	                  <option value="elem_7">elem 7</option>
	                  <option value="elem_8">elem 8</option>
	                  <option value="elem_9">elem 9</option>
	                  <option value="elem_10">elem 10</option>
	                  <option value="elem_11">elem 11</option>
	                  <option value="elem_12">elem 12</option>
	                  <option value="elem_13">elem 13</option>
	                  <option value="elem_14">elem 14</option>
	                  <option value="elem_15">elem 15</option>
	                  <option value="elem_16">elem 16</option>
	                  <option value="elem_17">elem 17</option>
	                  <option value="elem_18">elem 18</option>
	                  <option value="elem_19">elem 19</option>
	                  <option value="elem_20">elem 20</option>
	                </select>
	              </div><!-- /.col-md-4 -->

	              <div class="col-md-4">
									<p class="fw-700">Optgroup</p>

	                <select multiple id="optgroup" data-toggle="multiselect" name="optgroup[]">
	                  <optgroup label="Friends">
	                    <option value="1">Yoda</option>
	                    <option value="2" selected disabled>Obiwan</option>
	                  </optgroup>
	                  <optgroup label="Enemies">
	                    <option value="3">Palpatine</option>
	                    <option value="4" disabled>Darth Vader</option>
	                  </optgroup>
	                </select>
	              </div><!-- /.col-md-4 -->

	              <div class="col-md-4">
									<p class="fw-700">Public Methods</p>
	                <select multiple id="public-methods" data-toggle="multiselect" name="public-methods[]">
	                  <option value="elem_1">elem 1</option>
	                  <option value="elem_2" disabled>elem 2</option>
	                  <option value="elem_3">elem 3</option>
	                  <option value="elem_4">elem 4</option>
	                  <option value="elem_5">elem 5</option>
	                  <option value="elem_6">elem 6</option>
	                  <option value="elem_7">elem 7</option>
	                  <option value="elem_8">elem 8</option>
	                  <option value="elem_9">elem 9</option>
	                  <option value="elem_10">elem 10</option>
	                  <option value="elem_11">elem 11</option>
	                  <option value="elem_12">elem 12</option>
	                  <option value="elem_13">elem 13</option>
	                  <option value="elem_14">elem 14</option>
	                  <option value="elem_15">elem 15</option>
	                  <option value="elem_16">elem 16</option>
	                  <option value="elem_17">elem 17</option>
	                  <option value="elem_18">elem 18</option>
	                  <option value="elem_19">elem 19</option>
	                  <option value="elem_20">elem 20</option>
	                </select>

	                <div class="button-box mr-t-20">
	                  <a id="select-all" data-multiselect-target="#public-methods" data-multiselect-method="select_all" data-event="click" class="btn btn-outline-danger mr-r-10 mr-b-10" href="#">Select all</a>
	                  <a id="deselect-all" data-multiselect-target="#public-methods" data-multiselect-method="deselect_all" data-event="click" class="btn btn-outline-info mr-r-10 mr-b-10" href="#">Deselect all</a>
	                  <a id="add-option" data-multiselect-target="#public-methods" data-multiselect-method="addOption" data-event="click" class="btn btn-outline-success mr-r-10 mr-b-10" href="#">Add option</a>
	                  <a id="refresh" data-multiselect-target="#public-methods" data-multiselect-method="refresh" data-event="click" class="btn btn-outline-warning mr-r-10 mr-b-10" href="#">Refresh</a>
	                </div><!-- /.button-box -->
	              </div><!-- /.col-md-4 -->

	            </div><!-- /.row -->
	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
