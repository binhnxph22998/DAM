<div class="row mb10 fromadmin ">

<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Danh Mục', 'Số Lượng Sản Phẩm'],
  <?php
  $tongdm=count($listthongke);
  $i=1;
  foreach ($listthongke as $tk) {
    extract($tk);
    if ($i==$tongdm) {
        $dauphay="";
    }else {
        $dauphay=",";
    }
    echo "['".$tk['tendm']."',".$tk['countsp']."]".$dauphay;
  }
  
  ?>
  
]);

var options = {
  title:'World Wide Wine Production',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

                


        

</div>