<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Form Validation',
	'body_class' => $GLOBALS['body_class'] . '',
  'scripts' => array(
    'validator'
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
							<h5 class="box-title mr-b-0">Form Validation</h5>
	            <p class="text-muted">Bootstrap Form Validation</p>

	            <form data-toggle="validator">
	              <div class="form-group">
	                <label for="inputName" class="form-control-label">Name</label>
	                <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
	                <div class="help-block form-control-feedback with-errors"></div>
	              </div><!-- /.form-group -->

	              <div class="form-group">
	                <label for="inputTwitter" class="form-control-label">Twitter</label>
	                <div class="input-group">
	                  <span class="input-group-addon">@</span>
	                  <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
	                </div><!-- /.input-group -->
	                <div class="help-block form-control-feedback with-errors"></div>
	              </div><!-- /.form-group -->

	              <div class="form-group">
	                <label for="inputEmail" class="form-control-label">Email</label>
	                <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
	                <div class="help-block form-control-feedback with-errors"></div>
	              </div><!-- /.form-group -->

	              <div class="form-group">
	                <label for="inputPassword" class="form-control-label">Password</label>
	                <div class="row">
	                  <div class="col-sm-6">
	                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
	                    <div class="help-block form-control-feedback">Minimum of 6 characters</div>
	                  </div><!-- /.col-sm-6 -->

	                  <div class="col-sm-6">
	                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
	                    <div class="help-block form-control-feedback with-errors"></div>
	                  </div><!-- /.col-sm-6 -->
	                </div><!-- /.form-inline -->
	              </div><!-- /.form-group -->

	              <div class="form-group">
									<label>Select</label>
	                <div class="radiobox">
	                  <label>
	                    <input type="radio" name="underwear" required>
	                    <span class="label-text">Boxers</span>
	                  </label>
	                </div><!-- /.radiobox -->
	                <div class="radiobox">
	                  <label>
	                    <input type="radio" name="underwear" required>
	                    <span class="label-text">Briefs</span>
	                  </label>
	                </div><!-- /.radiobox -->
	              </div><!-- /.form-group -->

	              <div class="form-group mb-3">
	                <div class="checkbox checkbox-primary">
	                  <label>
	                    <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
	                    <span class="label-text">Check yourself</span>
	                  </label>
	                  <div class="help-block with-errors"></div>
	                </div><!-- /.checkbox -->
	              </div><!-- /.form-group -->

	              <div class="form-group">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div><!-- /.form-group -->
	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Input Masks</h5>
	            <p class="text-muted">Use the attribute <code>data-masked-input</code> to the input element.</p>

	            <form class="form-horizontal" action="javascript:void(0);">
	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="samplePhone">Phone</label>
	                <div class="col-sm-10">
	                  <input type="text" id="samplePhone" name="samplePhone" class="form-control mb-0" data-masked-input="999-999-9999" placeholder="XXX-XXX-XXXX" maxlength="12">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="samplePhoneExt">Phone Ext.</label>
	                <div class="col-sm-10">
	                  <input type="text" id="samplePhoneExt" name="samplePhoneExt" class="form-control mb-0" data-masked-input="+40 999-999-9999" placeholder="XXX-XXX-XXXX" maxlength="12">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleCellPhone">Cell Phone</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleCellPhone" name="sampleCellPhone" class="form-control mb-0" data-masked-input="(999) 999-9999" placeholder="(XXX) XXX-XXXX" maxlength="14">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleDoB">Date Of Birth</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleDoB" name="sampleDoB" class="form-control mb-0" data-masked-input="99/99/9999" placeholder="MM/DD/YYYY" maxlength="10">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleExpiryDate">Expiry Date</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleExpiryDate" name="sampleExpiryDate" class="form-control mb-0" data-masked-input="99/99" placeholder="MM/YY" maxlength="5">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleSSNField">SSN Field</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleSSNField" name="sampleSSNField" class="form-control mb-0" data-masked-input="999-99-9999" placeholder="XXX-XX-XXXX" maxlength="11">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleProductKey">Product Key</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleProductKey" name="sampleProductKey" class="form-control mb-0" data-masked-input="a*-999-a999" placeholder="a*-999-a999" maxlength="11">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleCurrency">Currency</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleCurrency" name="sampleCurrency" class="form-control mb-0" data-masked-input="$ 999,999,999.99" placeholder="$ 999,999,999.99" maxlength="19">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleDate2">Date 2</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleDate2" name="sampleDate2" class="form-control mb-0" data-masked-input="99-99-9999" placeholder="dd-mm-yyyy" maxlength="10">
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label class="form-control-label col-sm-2 mb-0 text-right" for="sampleColor">Color Input</label>
	                <div class="col-sm-10">
	                  <input type="text" id="sampleColor" name="sampleColor" class="form-control mb-0" data-masked-input="#hhhhhh" placeholder="#hhhhhh" maxlength="7">
	                </div><!-- /.col-sm-9 -->
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
