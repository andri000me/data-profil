var base_url = $(location).attr("pathname");
base_url.indexOf(1);
base_url.toLowerCase();
base_url =
  window.location.origin === "http://data-profil.mi-kes.net"
    ? ""
    : base_url.split("/")[1] + "/";
var url = window.location.origin + "/" + base_url;

console.log(url);

$(function () {
  // var url = window.location.origin + "/laporkan-v2/datatables/";

  $(".datatable").DataTable();
  //Initialize Select2 Elements
  $(".select2").select2();

  
  var areaChartData = {
    labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label               : 'Digital Goods',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [28, 48, 40, 19, 86, 27, 90]
      },
      {
        label               : 'Electronics',
        backgroundColor     : 'rgba(210, 214, 222, 1)',
        borderColor         : 'rgba(210, 214, 222, 1)',
        pointRadius         : false,
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : [65, 59, 80, 81, 56, 55, 40]
      },
    ]
  }
  
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

});

// MODAL
function modalDefault(title, link) {
  $("#modal-default").modal();
  $(".modal-title").html(title);
  var origin = url + "modal/" + link;
  $.ajax({
    type: "POST",
    url: origin,
    success: function (data) {
      $(".body").html(data);
    },
  });
}

function modalXl(title, link) {
  $("#modal-xl").modal();
  $(".modal-title").html(title);
  var origin = url + "modal/" + link;
  $.ajax({
    type: "POST",
    url: origin,
    success: function (data) {
      $(".body").html(data);
    },
  });
}

// END MODAL

function positif(id, kondisi) {
  var url = window.location.origin + "/laporkan-v2/home/positif/";
  // if (kondisi == '2') {
  var cek = confirm("Yakin Pasien Positif COVID-19?");
  if (cek) {
    window.location = url + id + "/" + kondisi;
  }
  // }
}