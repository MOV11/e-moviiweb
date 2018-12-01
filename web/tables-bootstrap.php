<?php
include_once 'lib/init.php';

$config = array(
  'title' => 'Bootstrap Tables',
  'body_class' => $GLOBALS['body_class'] . '',
  'styles' => array(
    'bootstrap-table',
  ),
  'scripts' => array(
    'bootstrap-table',
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

            <div class="widget-heading clearfix">
              <h5>Simple Bootstrap Table</h5>
            </div><!-- /.widget-heading -->

            <div class="widget-body clearfix">
              <table class="table table-striped" data-toggle="table" data-url="assets/js/bootstrap-table/bootstrap-table.json">
                <thead>
                  <tr>
                    <th data-field="name">Name</th>
                    <th data-field="stargazers_count">Stars</th>
                    <th data-field="forks_count">Forks</th>
                    <th data-field="description">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="tr-id-1" class="tr-class-1">
                    <td id="td-id-1" class="td-class-1"> bootstrap-table </td>
                    <td>526</td>
                    <td>122</td>
                    <td>An extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. (supports twitter bootstrap v2 and v3) </td>
                  </tr>
                  <tr id="tr-id-2" class="tr-class-2">
                    <td id="td-id-2" class="td-class-2"> multiple-select </td>
                    <td>288</td>
                    <td>150</td>
                    <td>A jQuery plugin to select multiple elements with checkboxes :) </td>
                  </tr>
                  <tr id="tr-id-3" class="tr-class-3">
                    <td id="td-id-3" class="td-class-3"> bootstrap-show-password </td>
                    <td>32</td>
                    <td>11</td>
                    <td>Show/hide password plugin for twitter bootstrap. </td>
                  </tr>
                  <tr id="tr-id-4" class="tr-class-4">
                    <td id="td-id-4" class="td-class-4"> blog </td>
                    <td>13</td>
                    <td>4</td>
                    <td>my blog</td>
                  </tr>
                  <tr id="tr-id-5" class="tr-class-5">
                    <td id="td-id-5" class="td-class-5"> scutech-redmine</td>
                    <td>6</td>
                    <td>3</td>
                    <td>Redmine notification tools for chrome extension.</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg -->
        </div><!-- /.widget-holder -->

        <div class="col-md-6 widget-holder">
          <div class="widget-bg">

            <div class="widget-heading clearfix">
              <h5>Content From File</h5>
            </div><!-- /.widget-heading -->

            <div class="widget-body clearfix">
              <table class="table color-table table-color-scheme" data-toggle="table" data-url="assets/js/bootstrap-table/bootstrap-table.json">
                <thead>
                  <tr>
                    <th data-field="name">Name</th>
                    <th data-field="stargazers_count">Stars</th>
                    <th data-field="forks_count">Forks</th>
                    <th data-field="description">Description</th>
                  </tr>
                </thead>
              </table>
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg -->
        </div><!-- /.widget-holder -->

        <div class="col-md-12 widget-holder">
          <div class="widget-bg">

            <div class="widget-heading clearfix">
              <h5>Table with toolbar</h5>
            </div><!-- /.widget-heading -->

            <div class="widget-body clearfix">
              <table class="table table-striped"
                     data-height="300"
                     data-toggle="table"
                     data-sort-name="Name"
                     data-search="true"
                     data-show-refresh="true"
                     data-show-toggle="true"
                     data-show-columns="true"
                     data-url="assets/js/bootstrap-table/bootstrap-table2.json">
                <thead>
                  <tr>
                    <th data-field="Name" data-sortable="true">Name</th>
                    <th data-field="Position" data-sortable="true">Position</th>
                    <th data-field="Office" data-sortable="true">Office</th>
                    <th data-field="Age" data-sortable="true">Age</th>
                    <th data-field="Start_date" data-sortable="true">Start Date</th>
                    <th data-field="Salary" data-sortable="true">Salary</th>
                  </tr>
                </thead>
              </table>
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg -->
        </div><!-- /.widget-holder -->

        <div class="col-md-6 widget-holder">
          <div class="widget-bg">

            <div class="widget-heading clearfix">
              <h5>Table with Radio Button</h5>
            </div><!-- /.widget-heading -->

            <div class="widget-body clearfix">
              <table class="table" data-toggle="table" data-click-to-select="true" data-url="assets/js/bootstrap-table/bootstrap-table.json">
                <thead>
                  <tr>
                    <th data-field="state" data-radio="true"></th>
                    <th data-field="name">Name</th>
                    <th data-field="stargazers_count">Stars</th>
                    <th data-field="forks_count">Forks</th>
                    <th data-field="description">Description</th>
                  </tr>
                </thead>
              </table>
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg -->
        </div><!-- /.widget-holder -->

        <div class="col-md-6 widget-holder">
          <div class="widget-bg">

            <div class="widget-heading clearfix">
              <h5>Table with Radio Button</h5>
            </div><!-- /.widget-heading -->

            <div class="widget-body clearfix">
              <table class="table" data-toggle="table" data-click-to-select="true" data-url="assets/js/bootstrap-table/bootstrap-table.json">
                <thead>
                  <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="name">Name</th>
                    <th data-field="stargazers_count">Stars</th>
                    <th data-field="forks_count">Forks</th>
                    <th data-field="description">Description</th>
                  </tr>
                </thead>
              </table>
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg -->
        </div><!-- /.widget-holder -->

      </div><!-- /.row -->
    </div><!-- /.widget-list -->
  </main><!-- /.main-wrappper -->

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
