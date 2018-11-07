/**
* Created by PhpStorm.
* User: Ehtezaz
* Date: 5/7/2018
* Time: 1:28 PM
*/
<!-- CanvasJS CDN -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/my_canvasjs.js"></script>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo base_url('admin'); ?>">K D A F</a>
        <span class="breadcrumb-item active">Canvas-JS</span>
    </nav>

    <h1 style="text-align: center;"> Canvas-JS</h1>
    <div class="container row" id="main_body" style="text-align: center; padding: 16px;border: 16px;">

        <div style="width: 400px;height: 500px;padding: 16px;">
        <div id="my_canvas1"></div>
        </div>

        <div id="chart_container" style="width: 400px;height: 500px;padding: 16px;">
            <div id="my_canvas2">
            </div>
        </div>


        <div id="chart_container" style="width: 400px;height: 500px;padding: 16px;">
            <div id="my_canvas3">
            </div>
        </div>


        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <div id="my_canvas4">
            </div>
        </div>


        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <div id="my_canvas5">
            </div>
        </div>
    </div><!-- Main body ends-->
