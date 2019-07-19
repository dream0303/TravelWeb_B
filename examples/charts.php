<?php
// include "./opendataCharts.php";
?>

<div class="container-fluid">
  <div class="header text-center">
    <h3 class="title">景點分佈</h3>
    <p class="category">新北市各地區景點的分佈數量</p>
  </div>
  <?php
  include "./opendata.php";
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

<!-- Chartist -->
<script>

 



    $(document).ready(function() {
      /*  **************** pie Chart - barchart ******************** */
      var dataPreferences = {
                labels: [<?=rtrim($chTxt,",")?>],
                series: [<?=rtrim($chVar,",")?>],
              
            };

            var optionsPreferences = {
                height: '600px'
            };
            var responsiveOptions = [
  ['screen and (min-width: 640px)', {
    chartPadding: 30,
    labelOffset: 100,
    labelDirection: 'explode',
    labelInterpolationFnc: function(value) {
      return value;
    }
  }],
  ['screen and (min-width: 1024px)', {
    labelOffset: 150,
    chartPadding: 20
  }]
  ];


    Chartist.Pie('#chartPreferences', dataPreferences, optionsPreferences,responsiveOptions);




       /*  **************** Simple Bar Chart - barchart ******************** */


       var dataMultipleBarsChart = {
                labels: [<?=rtrim($chTxt,",")?>],
                series: [
                    [<?=rtrim($chVar,",")?>],
         
                ]
            };

            var optionsMultipleBarsChart = {
                seriesBarDistance: 10,

                height: '450px'
            };

            var responsiveOptionsMultipleBarsChart = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];

              var multipleBarsChart = Chartist.Bar('#multipleBarsChart', dataMultipleBarsChart, optionsMultipleBarsChart, responsiveOptionsMultipleBarsChart);
           
           //start animation for the Emails Subscription Chart
           md.startAnimationForBarChart(multipleBarsChart);


            

    });
</script>