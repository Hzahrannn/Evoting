<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <script src="js/lazysizes.min.js" async></script>
    <title>E-Voting Husyawarah Besar Himsi Unsri</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ URL:: asset('css/vote.css') }}" rel="stylesheet">
  </head>
  <body onload = "JavaScript:AutoRefresh(60000);">
  <header>
  
  <div class="navbar navbar-dark bg-danger shadow-sm">
    <div class="container d-flex justify-content-center justify-content-md-between" style="color:white">
      <a class="navbar-brand d-flex align-items-center" >
        <i class="fas fa-person-booth"></i>
        <strong style="padding-bottom:2px">&nbspMusyawarah Besar HIMSI 2020&nbsp</strong>
      </a>
      <a class="navbar-brand" href="http://himsiunsri.org">
        <img data-src="img/himsi-unsri.png" class="lazyload" alt="" style="width:85px;">
      </a>
    </div>
  </div>
  </header>

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">PEMILIHAN BUPATI HIMSI FASILKOM UNSRI</h1>
      <p class="judul" style="color:#2793DA">Perhitungan Suara Kandidat Bupati HIMSI FASILKOM UNSRI Secara Realtime</p>
      <p></p>
    </div>
  </section>
  <hr class="red"> <hr class="blue"> <hr class="green">

<main role="main">

  <!-- Nominasi Teramah -->
  <div class="album py-5" style="background-color: #f7f7f7">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FFAEBC;">PEROLEHAN SUARA</a></h1>
      <div class="row">

        <canvas id="myChart"></canvas>

        <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FF3333;">SUARA YANG MASUK: {{ $suarasemua }}</a></h1>
        
      </div>
    </div>
  </div>
  <?php 
  $z = $banyak;
  $t = $z;
  ?>

</main>

<hr class="red"> <hr class="blue"> <hr class="green">
<footer class="text-muted">
  <div class="container">
    <p><a href="#" class="backtop">Back to top</a></p>
    <p>
      <a> Dinas Ristek PTI - HIMSI UNSRI 2020 | Hosted by&nbsp<a href="https://www.hostingan.id/">Hostingan ID </a></a>
    </p>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/Chart.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: [@foreach($hitung as $h) "{{ $h->nama }}"<?php if($t != 1){ echo ",";$t--; }else{} ?> @endforeach],
datasets: [{
label: '# of Votes',
data: [@foreach($hitung as $b) "{{ $b->suara }}"<?php if($z != 1){ echo ",";$z--; }else{} ?>@endforeach],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)',
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)',
'rgba(255, 159, 64, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'rgba(255, 159, 64, 1)'
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>

<script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>
</body>
</html>
