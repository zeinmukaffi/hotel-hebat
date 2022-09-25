@extends('layouts.after')
@section('content')
<section id="home">
    <div class="container-expand-lg">
        <div class="img">
            <img src="{{asset('template/img/lobby.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="text-1">
            <p>welcome to</p>
            <h1>hotel<span class="blue">hebat</span></h1>
            <a href="/pemesananhotel"><button type="button" class="btn btn-secondary">book now</button></a>
        </div>
    </div>
</section>

<section id="welcome">
    <div class="text-2">
        <h1>welcome to <span class="box-1">hotel<span class="blue">hebat</span></span></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, eaque placeat? Quo necessitatibus sit
            odio, esse magni modi, eaque ratione totam natus cupiditate laborum amet dignissimos voluptatibus sint
            vel. Maiores inventore modi beatae eius dolorem qui, repellat voluptate commodi assumenda itaque
            laboriosam repellendus accusantium expedita voluptatem, veritatis quidem iste perferendis in quam odit
            eum quasi labore. Similique libero eaque amet laudantium voluptate excepturi odio velit exercitationem
            cumque quasi non quae illum, at totam unde a hic maiores animi culpa ipsa deserunt? Suscipit veniam
            error rem nihil, voluptatum veritatis necessitatibus ab est provident ullam autem laboriosam
            voluptatibus ipsa velit quos earum? Voluptas esse reiciendis tenetur praesentium impedit, nisi nulla
            eaque aperiam exercitationem voluptatibus itaque? Corporis reprehenderit repellendus cum consectetur
            nulla, mollitia quasi accusantium a et animi quod odit facilis veniam rem nemo, magnam, quo vitae
            aliquid necessitatibus! Dolor architecto soluta pariatur modi cumque amet exercitationem distinctio?
            Facilis sit placeat necessitatibus nostrum.</p>
    </div>
</section>

<section id="location">
    <h1>our location</h1>
    <div class="box-2">
            <div class="background"><h3>Jakarta</h3></div>
            <div class="background-2"><h3>Bandung</h3></div>
    </div>
    <div class="box-2">
            <div class="background-3"><h3>Bali</h3></div>
            <div class="background-4"><h3>Yogyakarta</h3></div>
    </div>
</section>


@endsection
