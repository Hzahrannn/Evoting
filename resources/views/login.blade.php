<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Voting Husyawarah Besar Himsi Unsri</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <section class="container">
    <div class="columns is-multiline">
      <div class="column is-8 is-offset-2 register">
        <div class="columns">
          <div class="column left">
            <img src="img/himsi-unsri.png" style="width:45%;" alt="HIMSI">
            <h1 class="title is-1">E-Voting</h1>
            <h2 class="subtitle colored is-4">Musyawarah Besar HIMSI 2020</h2>
            <p></p>
          </div>
          <div class="column right has-text-centered">
            <h1 class="title is-4">:)</h1>
            <p class="description">Silahkan masukkan NIM anda</p>
            <form method="post" id="myForm" action="/login/masuk">
              @csrf
              <div class="field">
                <div class="control">
                  <input required class="input is-medium" type="text" id="nim" name="nim" placeholder="NIM" >
                </div>
                <div class="control">
                  <input required class="input is-medium" type="password" id="password" name="password" placeholder="PASSWORD" >
                </div>
              </div>
              <input type="button" class="button is-block is-info is-fullwidth is-medium" onclick="confirmNIM()" 
                     value="Lanjut">
              <!-- <button class="button is-block is-info is-fullwidth is-medium" id="confirm-alert">Lanjut</button> -->
              <br />
              <small><em>*Satu NIM hanya bisa vote 1x</em></small>
            </form>
          </div>
        </div>
      </div>
      <div class="column is-8 is-offset-2">
        <br>
        <nav class="level">
          <div class="level-left">
            <div class="level-item">
              <span class="icon">
                <a href="http://himsiunsri.org" target="_blank"><i class="fas fa-link"></i></a>
              </span> &emsp;
              <span class="icon">
              <a href="https://www.instagram.com/himsiunsri/" target="_blank"><i class="fab fa-instagram"></i></a>
              </span>
            </div>
          </div>
          <div class="level-right">
            <small class="level-item" style="color: var(--textLight)">
              Dinas Ristek PTI - HIMSI UNSRI 2020 | Hosted by&nbsp<a href="https://www.hostingan.id/">Hostingan ID </a>
            </small>
          </div>
        </nav>
      </div>
    </div>
  </section>
</body>
<script>
document.getElementById("myForm").addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      event.preventDefault();
      confirmNIM();
    }
});

function confirmNIM() {
  var inputVal = document.getElementById("nim").value;
  if (!inputVal) {
    return;
  }
  Swal.fire({
    title: '<strong></strong>',
    icon: 'info',
    title: inputVal,
    html:
      'Pastikan NIM yang anda masukkan benar dan merupakan NIM anda.',
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: 'Lanjut',
    reverseButtons: true,
    showCancelButton: true
  }).then((result) => {
    if (result.isConfirmed) {
        document.getElementById("myForm").submit();
    }
  });
}
</script>
</html>