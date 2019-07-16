<?php
include "./opendataCharts.php";
?>

<div class="container-fluid">
  <div class="header text-center">
    <h3 class="title">景點分佈</h3>
    <p class="category">新北市各地區景點的分佈數量</p>
  </div>
  <?php
switch ($_GET['ch']) {
  case 'bar':
  ?>

  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">insert_chart</i>
          </div>
          <h4 class="card-title">長條圖

          </h4>
        </div>
        <div class="card-body">
          <div id="multipleBarsChart" class="ct-chart"></div>
        </div>
      </div>
    </div>
  </div>

  <?php    
break;
    case 'pie':
    ?>

  <div class="row">
    <div class="col-md-12">

      <div class="card card-chart">
        <div class="card-header card-header-icon card-header-danger">
          <div class="card-icon">
            <i class="material-icons">pie_chart</i>
          </div>
          <h4 class="card-title">圓餅圖</h4>
        </div>
        <div class="card-body">

          <div id="chartPreferences" class="ct-chart"></div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php
    break;
}
?>