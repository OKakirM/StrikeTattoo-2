@extends("layouts.main")
@section("title", "StrikeTattoo")
@section("content")
{{-- INTRO --}}
<div class="bg-intro">
    <div class="container py-5">
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="/img/logo-intro.png" alt="">
        </div>
    </div>
</div>

{{-- Grid/Carrosel --}}
<div class="bg-preto" id="portfolio">
    <div class="container-fluid d-sm-block d-none">
    <div class="row justify-content-center align-items-center">
        <div class="col-auto m-0 gap-0 p-0 overflow-hidden">
            <img src="/img/img1.png" alt="Arte 1" class="img-hover">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img2.png" alt="Arte 2" class="img-hover">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img3.png" class="d-lg-block d-none img-hover" alt="Arte 3">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img4.png" class="d-xl-block d-none img-hover" alt="Arte 4">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img5.png" class="d-xxl-block d-none img-hover" alt="Arte 5">
        </div>
        </div>
        <div class="row justify-content-center align-items-center">
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img6.png" alt="Arte 6" class="img-hover">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img7.png" alt="Arte 7" class="img-hover">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img8.png" class="d-lg-block d-none img-hover" alt="Arte 8">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img9.png" class="d-xl-block d-none img-hover" alt="Arte 9">
        </div>
        <div class="col-auto m-0 gap-0 overflow-hidden p-0">
            <img src="/img/img10.png" class="d-xxl-block d-none img-hover" alt="Arte 10">
        </div>
        </div>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade d-sm-none" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/img1.png" class="d-block w-100" alt="Arte 1">
        </div>
        <div class="carousel-item">
            <img src="/img/img2.png" class="d-block w-100" alt="Arte 2">
        </div>
        <div class="carousel-item">
            <img src="/img/img4.png" class="d-block w-100" alt="Arte 4">
        </div>
        <div class="carousel-item">
            <img src="/img/img5.png" class="d-block w-100" alt="Arte 5">
        </div>
        <div class="carousel-item">
            <img src="/img/img6.png" class="d-block w-100" alt="Arte 6">
        </div>
        <div class="carousel-item">
            <img src="/img/img7.png" class="d-block w-100" alt="Arte 7">
        </div>
        <div class="carousel-item">
            <img src="/img/img8.png" class="d-block w-100" alt="Arte 8">
        </div>
        <div class="carousel-item">
            <img src="/img/img9.png" class="d-block w-100" alt="Arte 9">
        </div>
        <div class="carousel-item">
            <img src="/img/img10.png" class="d-block w-100" alt="Arte 10">
        </div>
        <div class="carousel-item">
            <img src="/img/img3.png" class="d-block w-100" alt="Arte 3">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="bg-realismo">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-auto d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="text-light display-5 cabin" anim="down" style="letter-spacing: 0.2em; text-shadow: 0px 6px 15px rgba(255, 255, 255, 0.2);">REALISMO</h1>
                <p class="text-light fs-6 quicksand" anim="down2">Lorem ipsum dolor sit amet consectetur. Pellentesque non sed mus at sed sed dictum etiam amet. At nulla mattis consequat feugiat vel praesent id. </p>
            </div>
        </div>
    </div>
</div>
@endsection