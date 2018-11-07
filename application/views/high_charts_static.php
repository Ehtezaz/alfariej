
/**
* Created by PhpStorm.
* User: Ehtezaz
* Date: 9/4/2018
* Time: 2:41 PM
*/

/**
* Created by PhpStorm.
* User: Ehtezaz
* Date: 5/7/2018
* Time: 1:28 PM
*/
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo base_url('admin'); ?>">K D A F</a>
        <span class="breadcrumb-item active">High Charts</span>
    </nav>


    <div class="container row" id="main_body" style="text-align: center;background-color: white;">
        <h2 style="text-align: center;"> High Charts Static</h2>
        <div class="container row">
            <div class="col-md-6" id="container1"></div>
            <div class="col-md-6" id="container2"></div>
        </div>
        <div class="container row"> <hr>
        </div>
        <div class="container row">
            <div class="col-md-6" id="container7"></div>
            <div class="col-md-6" id="container8"></div>
        </div>
        <div class="container row"> <hr>
        </div>
        <div class="container row">
            <div class="col-md-3" id="container9"></div>
            <div class="col-md-9" id="container4"></div>
        </div>
        <div class="container row"> <hr>
        </div>
        <div class="container row">

            <div class="col-md-9" id="container4a"></div>
            <div class="col-md-3" id="container5"></div>
        </div>
        <div class="container row"> <hr>
        </div>
        <div class="container row">
            <div class="col-md-3" id="container3"></div>
            <div class="col-md-9" id="container6"></div>
        </div>
        <div class="container row"> <hr>
        </div>
        <div class="container row">
            <div class="col-md-6" id="container10"></div>
            <div class="col-md-6" id="container11"></div>
        </div>
        <div class="container row"> <hr>
        </div>
        <div class="container row">
            <div class="col-md-4" id="container12"></div>
            <div class="col-md-4" id="container14"></div>
            <div class="col-md-4" id="container13"></div>
        </div>
    </div><!-- Main body ends-->

    <script src="<?php echo base_url(); ?>/assets/js/my_highchart_static.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/highcharts/highcharts.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/exporting.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/export-data.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/series-label.js"></script><!-- Extra One for container2 -->
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/highcharts-3d.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/highcharts-more.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/solid-gauge.js"></script>


    <!-- AJAX SAVE-->
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/data.js"></script>

    <!-- Additional files for the Highslide popup effect -->
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/highslide-full.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/highcharts/highslide.config.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/highslide.css" />