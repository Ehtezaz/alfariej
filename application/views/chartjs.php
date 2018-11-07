/**
* Created by PhpStorm.
* User: Ehtezaz
* Date: 5/3/2018
* Time: 11:22 AM
*/

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo base_url('admin'); ?>">K D A F</a>
        <span class="breadcrumb-item active">Chart-JS</span>
    </nav>

    <h1 style="text-align: center;"> Chart-JS</h1>
    <div class="row" id="main_body" style="text-align: center; padding: 16px;border: 16px;">




        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <h2> Bar Graph </h2>
            <canvas id="my_canvas1"></canvas>
        </div>


        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <h2> Line Graph </h2>
            <canvas id="my_canvas2"></canvas>
        </div>


        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <h2> Radar Graph </h2>
            <canvas id="my_canvas3"></canvas>
        </div>


        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <h2> Pie Graph </h2>
            <canvas id="my_canvas4"></canvas>
        </div>


        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <h2> Doughnut Graph </h2>
            <canvas id="my_canvas5"></canvas>
        </div>

<!--
        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <h2> Mix Graph </h2>
            <canvas id="my_canvas6"></canvas>
        </div>


        <div id="chart_container" style="width: 400px;height: auto;padding: 16px;">
            <h2> polarArea Graph </h2>
            <canvas id="my_canvas7"></canvas>
        </div>-->
    </div><!-- Main body ends-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
