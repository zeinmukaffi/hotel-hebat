@extends('layouts.after')
@section('content')
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
@endsection
