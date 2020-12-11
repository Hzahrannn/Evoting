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
      #myInput {
        background-image: url('/css/searchicon.png'); /* Add a search icon to input */
        background-position: 10px 12px; /* Position the search icon */
        background-repeat: no-repeat; /* Do not repeat the icon image */
        width: 100%; /* Full-width */
        font-size: 16px; /* Increase font-size */
        padding: 12px 20px 12px 40px; /* Add some padding */
        border: 1px solid #ddd; /* Add a grey border */
        margin-bottom: 12px; /* Add some space below the input */
      }

      #myTable {
        border-collapse: collapse; /* Collapse borders */
        width: 100%; /* Full-width */
        border: 1px solid #ddd; /* Add a grey border */
        font-size: 18px; /* Increase font-size */
      }

      #myTable th, #myTable td {
        text-align: left; /* Left-align text */
        padding: 12px; /* Add padding */
      }

      #myTable tr {
        /* Add a bottom border to all table rows */
        border-bottom: 1px solid #ddd;
      }

      #myTable tr.header, #myTable tr:hover {
        /* Add a grey background color to the table header and on hover */
        background-color: #f1f1f1;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ URL:: asset('css/vote.css') }}" rel="stylesheet">
  </head>
  <body>
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
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FFAEBC;">NAMA NAMA CALON KANDIDAT</a></h1>
      <div class="row">

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

          <table id="myTable">
            <tr class="header">
              <th style="width:60%;">Nama</th>
              <th style="width:40%;">Aksi</th>
            </tr>
            @foreach($ajukan as $n)
            <tr>
              <td>{{ $n->nama }}</td>
              <td><?php if($n->status == 'Calon'){?>
                    <a href="/ajukan/{{ $n->id }}">AJUKAN</a>
                  <?php }
                  else{?>
                    <a href="/batalkan/{{ $n->id }}">BATALKAN</a>
                  <?php } ?>
              </td>
            </tr>
            @endforeach
          </table>

        <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FF3333;">SUARA YANG MASUK:</a></h1>
        
      </div>
    </div>
  </div>
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
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>
