
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
        <span class="breadcrumb-item active">HighCharts</span>
    </nav>


   <div class="container row" id="main_body" style="text-align: center; padding: 16px;border: 16px; background-color: white;">
       <h2 style="text-align: center;"> HighCharts Dynamic</h2>
       <div class="container row">
           <div class="col-md-6" id="container1"></div>
           <div class="col-md-6" id="container2"></div>
       </div>
       <div class="container row">
           <div class="col-md-6" id="container7"></div>
           <div class="col-md-6" id="container8"></div>
       </div>
       <div class="container row"> <hr>
       </div>
       <div class="container row">
           <div class="col-md-4" id="container4"></div>
           <div class="col-md-4" id="container4a"></div>
           <div class="col-md-4" id="container5"></div>
       </div>
       <div class="container row">
           <div class="col-md-3" id="container3"></div>
           <div class="col-md-9" id="container6"></div>
       </div>
</div><!-- Main body ends-->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/my_high_charts.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>

    <script src="https://code.highcharts.com/modules/series-label.js"></script><!-- Extra One for container2 -->

    <!-- AJAX SAVE-->
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>

    <!-- Additional files for the Highslide popup effect -->
    <script src="https://www.highcharts.com/media/com_demo/js/highslide-full.min.js"></script>
    <script src="https://www.highcharts.com/media/com_demo/js/highslide.config.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="https://www.highcharts.com/media/com_demo/css/highslide.css" />