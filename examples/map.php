<div class="container-fluid">
  <div class="header text-center">
    <h3 class="title">新北市</h3>
    <p class="category">請選擇要顯示的區域</p>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-body text-center">
           <?php
                    include "./img/map.svg";
                    ?>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="map_tb">
    <div class="col-md-12">
    <?php
                    include "./table.php";
                    ?>

    </div>
    </div>
</div>

  <!-- 新北向量地圖 -->
  <script>

$("path").on("click", function () {

$("#side").DataTable().search($(this).attr("value")).draw();
location.href="#map_tb";



});

$("path").mouseover(function () {

$(this).css({
    "stroke-width": "5",
    "stroke": "#ef7a11",

});
});

$("path").mouseout(function () {
// mo = 0;
$(this).css("stroke-width", "0");
});
</script>

