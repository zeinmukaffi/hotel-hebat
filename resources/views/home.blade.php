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
              {{-- <li class="nav-item d-flex align-items-center">
              <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold px-0 btn btn-info" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="d-sm-inline d-none p-2 text-white">Log Out</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            </li> --}}
            </ul>
          </div>
        </div>
      </nav>

     <section id="home">
        <div class="container-expand-lg">
            <div class="img">
                <img src="{{asset('template/img/lobby.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="text-1">
                <p>welcome to</p>
                <h1>hotel<span class="blue">hebat</span></h1>
                <a href="/book"><button type="button" class="btn btn-secondary">book now</button></a>
            </div>
        </div>
     </section>

     <section id="welcome">
        <div class="text-2">
            <h1>welcome to <span class="box-1">hotel<span class="blue">hebat</span></span></h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, eaque placeat? Quo necessitatibus sit odio, esse magni modi, eaque ratione totam natus cupiditate laborum amet dignissimos voluptatibus sint vel. Maiores inventore modi beatae eius dolorem qui, repellat voluptate commodi assumenda itaque laboriosam repellendus accusantium expedita voluptatem, veritatis quidem iste perferendis in quam odit eum quasi labore. Similique libero eaque amet laudantium voluptate excepturi odio velit exercitationem cumque quasi non quae illum, at totam unde a hic maiores animi culpa ipsa deserunt? Suscipit veniam error rem nihil, voluptatum veritatis necessitatibus ab est provident ullam autem laboriosam voluptatibus ipsa velit quos earum? Voluptas esse reiciendis tenetur praesentium impedit, nisi nulla eaque aperiam exercitationem voluptatibus itaque? Corporis reprehenderit repellendus cum consectetur nulla, mollitia quasi accusantium a et animi quod odit facilis veniam rem nemo, magnam, quo vitae aliquid necessitatibus! Dolor architecto soluta pariatur modi cumque amet exercitationem distinctio? Facilis sit placeat necessitatibus nostrum.</p>
        </div>
     </section>

     <section id="location">
        <h1>our location</h1>
        <div class="box-2">
            <div class="location">
              <div class="background"><img src="{{asset('template/img/jakarta.jpg')}}" class="img-fluid" alt=""></div>
            <div class="text"><h3>Jakarta</h3></div>
            </div>
            <div class="location">
              <div class="background"><img src="{{asset('template/img/bali.jpg')}}" class="img-fluid" alt=""></div>
            <div class="text"><h3>Bali</h3></div>
            </div>
            <div class="location">
              <div class="background"><img src="{{asset('template/img/bandung.jpg')}}" class="img-fluid" alt=""></div>
            <div class="text"><h3>Bandung</h3></div>
            </div>
            <div class="location">
              <div class="background"><img src="{{asset('template/img/jogja.jpg')}}" class="img-fluid" alt=""></div>
             <div class="text"><h3>Yogyakarta</h3></div>
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