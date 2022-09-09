
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template/css/tamuhome.css')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hotel Hebat</title>
  </head>
  <body>
    


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand logo" href="#">hotel<span class="blue">hebat</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">kamar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">booking</a>
              </li>
              <li class="nav-item d-flex align-items-center">
              <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold px-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="d-sm-inline d-none p-2 text-white">Log Out</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            </li>
            </ul>
          </div>
        </div>
      </nav>


      <section id="kamar">
        <div class="container">
        <h1>Tipe Kamar</h1>
        <div class="k-parent">
        <div class="k-isi">
            <div class="k-text">
            <h3 class="fw-bold">Superior <span>399k/night</span></h3>
            <p>Fasilitas :
                <br> Kamar berukuran luas 32m2
                <br> Kamar mandi shower
                <br> Coffee Maker
                <br> AC
                <br> LED TV 32 inch</p>
            </div>
            <img src="{{asset('template/img/kamar1.jpg')}}" alt="">
            </div>
            <div class="k-parent">
            <div class="k-isi">
            <div class="k-text">
            <h3 class="fw-bold">Deluxe <span>599k/night</span></h3>
            <p>Fasilitas :
                <br> Kamar berukuran luas 45m2
                <br> Kamar mandi shower & Bathub
                <br> Coffee Maker
                <br> AC
                <br> LED TV 40 inch
            <br>Sofa</p>
            </div>
            <img src="{{asset('template/img/kamar3.jpg')}}" alt="">
            </div>
            </div>
            </div>
        </div>
        </div>
      </section>

     <section id="footer">
      <div class="container-expand-lg container">
        <div class="footer">
        <div class="left">
          <p>Share Your Moment<br>#hotelhebat</p>
          <p>stay in touch</p>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="right ms-auto"><h1>hotel<br><span class="blue">hebat</span></h1></div>
        </div>
      </div>
     </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://use.fontawesome.com/your-embed-code.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
