@extends('layouts.before')
@section('content')
<section id="fasilitas">
  <div class="container">
<h1 class="f-judul">Fasilitas Hotel</h1>
<img src="{{asset('template/img/lobby.jpg')}}" class="f-lobby" alt="">
</div>
</section>

<section id="f-flex">
  <div class="container">
    <div class="f-parent">
    <div class="f-isi">
      <h2>Resepsionis 24/7</h2>
      <img src="{{asset('template/img/resepsionis.jpg')}}" alt="">
    </div>
    <div class="f-isi">
      <h2>Lounge</h2>
      <img src="{{asset('template/img/lounge.jpg')}}" alt="">
    </div>
    <div class="f-isi">
      <h2>Swimming Pool</h2>
      <img src="{{asset('template/img/swimmingpool.jpg')}}" alt="">
    </div>
    <div class="f-isi">
      <h2>Gym</h2>
      <img src="{{asset('template/img/gym.jpg')}}" alt="">
    </div>
    </div>
  </div>
</section>

@endsection