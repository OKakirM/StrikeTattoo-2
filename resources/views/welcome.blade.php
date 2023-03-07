@extends("layouts.main")
@section("title", "StrikeTattoo")
@section("content")
{{-- INTRO --}}
<div class="bg-intro" id="home">
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
            <a href="http://instagram.com/_u/thx.ink/" target="_blank"><img src="/img/img1.png" alt="Arte 1" class="img-hover"></a>
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

{{-- Realismo --}}
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

{{-- No seu estilo --}}
<div class="bg-preto">
    <div class="container py-5" anim="right">
        <div class="py-3 mt-lg-5 d-lg-flex justify-content-center align-items-center gap-5">
            <div class="col-auto d-flex justify-content-center align-items-center flex-column gap-3 gap-lg-0">
                <img src="/img/estilo.png" class="img-fluid d-lg-block d-none" alt="No seu Estilo - Imagem">
                <img src="/img/estilo2.png" class="img-fluid d-lg-none d-block borda-primaria" alt="No seu Estilo - Imagem">
                <img src="/img/estilo1.png" class="img-fluid d-lg-none d-block borda-primaria" alt="No seu Estilo - Imagem">
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 text-lg-start text-center">
                <h2 class="text-light deathcrow display-5 titulo-detalhe">NO SEU ESTILO</h2>
                <p class="text-light lh-base fs-6 mt-3 quicksand">Lorem ipsum dolor sit amet consectetur. Pellentesque non sed mus at sed sed dictum etiam amet. At nulla mattis consequat feugiat vel praesent id. Lorem ipsum dolor sit amet consectetur. Pellentesque non sed mus at sed sed dictum etiam amet. At nulla mattis consequat feugiat vel praesent id. </p>
                <a href="#" class="cabin texto-decoration-none fw-bold text-light btn-dark btn py-2 px-4 mt-lg-4 mt-2 btn-detalhe">VER PREÇÁRIO</a>
            </div>
        </div>
    </div>
</div>

{{-- Sobre Nós --}}
<div class="bg-black" id="sobre">
    <div class="container py-5" anim="left">
        <div class="py-3 mt-lg-5 d-lg-flex justify-content-center align-items-center gap-5">
            <div class="col-lg-6 mt-lg-0 mt-5 text-lg-end text-center">
                <h2 class="text-light deathcrow display-5 titulo-detalhe">SOBRE NÓS</h2>
                <p class="text-light lh-base fs-6 mt-3 cabin">Lorem ipsum dolor sit amet consectetur. Pellentesque non sed mus at sed sed dictum etiam amet. At nulla mattis consequat feugiat vel praesent id. </p>
                <a href="#" class="cabin texto-decoration-none fw-bold text-light btn btn-dark py-2 px-4 mt-lg-4 mt-2 btn-detalhe">LER SOBRE</a>
            </div>
            <div class="col-auto d-flex justify-content-center align-items-center mt-lg-0 mt-5">
                <img src="/img/sobre.png" class="img-fluid d-lg-block d-none" alt="Sobre Nós - Imagem">
                <img src="/img/sobre2.png" class="img-fluid d-lg-none d-block borda-primaria" alt="Sobre Nós - Imagem">
            </div>
        </div>
    </div>
</div>

{{-- Artista --}}
<div class="bg-preto">
    <div class="container py-5" anim="right">
        <div class="py-3 mt-lg-5 d-lg-flex justify-content-center align-items-center">
            <div class="col-lg-auto col-sm-6 col-10 m-auto borda-primaria d-flex justify-content-center align-items-center flex-column">
                <img src="/img/artista.png" class="img-fluid" alt="Artista - Imagem">
                <div class="d-flex justify-content-center align-items-center text-center flex-column py-3 bg-gray w-100">
                    <h3 class="cabin text-white m-0 mb-1">Thiago Cavalcante</h3>
                    <p class="text-white m-0 quicksand">Tatuador Principal</p>
                    <div class="d-flex justify-content-center align-items-center gap-3 mt-1">
                        <a href="#" class="fs-4 texto-primario"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#" class="fs-4 texto-primario"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#" class="fs-4 texto-primario"><ion-icon name="logo-google"></ion-icon></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 text-lg-start text-center d-flex flex-column">
                <h2 class="text-light deathcrow display-5 titulo-detalhe">ARTISTA</h2>
                <p class="text-light lh-base fs-6 mt-2 quicksand">Lorem ipsum dolor sit amet consectetur. Pellentesque non sed mus at sed sed dictum etiam amet. At nulla mattis consequat feugiat vel praesent id. </p>
                <img src="/img/artista-banner.png" class="img-fluid d-lg-block d-none" alt="Banner - Artista">
                <img src="/img/artista-banner2.png" class="img-fluid d-lg-none d-block borda-primaria" alt="Banner - Artista">
            </div>
        </div>
    </div>
</div>

{{-- Avaliações --}}
<div class="bg-branco">
    <div class="container py-5">
        <div class="row pt-5 justify-content-center align-items-center">
            <div class="col text-center">
                <h1 class="cabin fw-bold display-5 titulo-detalhe" style="letter-spacing: 0.15em;" anim="down">AVALIAÇÕES</h1>
            </div>
        </div>
        <div class="row text-center justify-content-center align-items-center" anim="down2">
            <div class="col mt-2 quicksand">
                <p>Lorem ipsum dolor sit amet consectetur. Nunc duis mi in sed facilisi. Nunc fusce ullamcorper mauris amet justo pellentesque. Diam duis eu varius consequat at enim. Velit porttitor ligula lorem felis augue quisque ac. Cursus hendrerit lectus faucibus eget felis aliquam libero el it dolor. Pharetra id sapien faucibus integer habitant potenti quisque.</p>
            </div>
        </div>
        <div class="justify-content-center align-items-center d-lg-flex d-none mt-5">
            <div class="col d-flex justify-content-center align-items-center gap-2" anim="left">
                <img src="/img/user1.png" alt="Avaliação 1">
                <div class="">
                    <img src="/img/stars.svg" alt="Estrelas">
                    <h4 class="cabin">Jorge Pinto</h4>
                    <p class="quicksand">Lorem ipsum dolor sit amet consectetur. Mauris pharetra nunc lorem vulputate non aenean sagittis.</p>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center gap-2" anim="left2">
                <img src="/img/user2.png" alt="Avaliação 2">
                <div class="">
                    <img src="/img/stars.svg" alt="Estrelas">
                    <h4 class="cabin">Jorge Pinto</h4>
                    <p class="quicksand">Lorem ipsum dolor sit amet consectetur. Mauris pharetra nunc lorem vulputate non aenean sagittis.</p>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center gap-2" anim="left3">
                <img src="/img/user3.png" alt="Avaliação 3">
                <div class="">
                    <img src="/img/stars.svg" alt="Estrelas">
                    <h4 class="cabin">Jorge Pinto</h4>
                    <p class="quicksand">Lorem ipsum dolor sit amet consectetur. Mauris pharetra nunc lorem vulputate non aenean sagittis.</p>
                </div>
            </div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide mt-5 d-lg-none d-block" data-bs-ride="carousel" anim="down">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img src="/img/user1.png" alt="Avaliação 1">
                        <div class="text-center">
                            <img src="/img/stars.svg" alt="Estrelas">
                            <h4 class="cabin">Jorge Pinto</h4>
                            <p class="quicksand">Lorem ipsum dolor sit amet consectetur. Mauris pharetra nunc lorem vulputate non aenean sagittis.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img src="/img/user2.png" alt="Avaliação 2">
                        <div class="text-center">
                            <img src="/img/stars.svg" alt="Estrelas">
                            <h4 class="cabin">Jorge Pinto</h4>
                            <p class="quicksand">Lorem ipsum dolor sit amet consectetur. Mauris pharetra nunc lorem vulputate non aenean sagittis.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img src="/img/user3.png" alt="Avaliação 3">
                        <div class="text-center">
                            <img src="/img/stars.svg" alt="Estrelas">
                            <h4 class="cabin">Jorge Pinto</h4>
                            <p class="quicksand">Lorem ipsum dolor sit amet consectetur. Mauris pharetra nunc lorem vulputate non aenean sagittis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-lg-5 mt-3">
            <div class="col-auto">
                <a href="#" class="borda-primaria rounded-5 text-decoration-none py-2 px-3 cabin fw-bold" anim="top" style="color: #ceb98c">VER MAIS AVALIAÇÕES</a>
            </div>
        </div>
    </div>
</div>

{{-- Contato --}}
<div class="bg-preto" id="contato">
    <div class="container py-5">
        <div class="d-lg-flex py-5 justify-content-center align-items-center gap-5 ">
            <div class="col-lg-10 m-auto d-lg-flex justify-content-start align-items-center flex-row">
                <img src="/img/map.png" alt="Mapa" class="img-fluid d-lg-block d-none">
                <img src="/img/map.png" alt="Mapa" class="img-fluid d-lg-none d-block w-100">
                <div class="justify-content-center align-items-center d-flex flex-column bg-gray-800 p-4">
                    <h4 class="text-light cabin">Contato</h4>
                    <form action="" class="d-flex justify-content-center align-items-center flex-column gap-3 w-100">
                        <input type="text" name="nome" id="nome" class="form-control bg-light border-0 w-100" placeholder="Nome" required>

                        <input type="email" name="email" id="email" class="form-control bg-light border-0 w-100" placeholder="Email" required>

                        <textarea name="msg" id="msg" class="form-control bg-light border-0" placeholder="Mensagem" required style="width: 100%; resize: none; height: 101.2px;"></textarea>
                        <button type="submit" class="btn-primary btn py-1 px-4 cabin">ENVIAR</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 d-lg-flex d-none justify-content-end align-items-start flex-lg-column text-light footer-detalhe">
                <h5 class="cabin">Endereço:</h5>
                <p style="color: #E9E9E9; font-size: .8rem;" class="info-detalhe w-100 quicksand">Entroncamento, Rua Elias Garcia, n°10, 2330-151
                Ao lado do Café Santo António</p>

                <h5 class="cabin">Email & Telefone:</h5>
                <p style="color: #E9E9E9; font-size: .8rem;" class="info-detalhe w-100 quicksand">tigerstudio@gmail.com <br>
                123 456 789</p>

                <h5 class="cabin horario-detalhe">Horário:</h5>
                <p style="color: #E9E9E9; font-size: .8rem;" class="quicksand">De Segunda á Domingo <br>
                Das 8:00 ás 18:00</p>
            </div>
        </div>
        <div class="justify-content-center align-items-start d-sm-flex mt-4 gap-5">
            <div class="col-sm-auto col-6 m-sm-0 m-auto d-flex d-lg-none justify-content-sm-start justify-content-start align-items-start flex-lg-column text-light">
                <div class="d-flex justify-content-start align-items-start flex-column gap-2">
                    <h5 class="cabin m-0 titulo-detalhe">Endereço:</h5>
                    <p style="color: #E9E9E9; font-size: .8rem;" class="mb-2">Entroncamento,<br>Rua Elias Garcia, n°10, 2330-151 <br> Ao lado do Café Santo António</p>
                </div>
            </div>
            <div class="col-sm-auto col-6 m-sm-0 m-auto d-flex d-lg-none justify-content-sm-start justify-content-start align-items-start flex-lg-column text-light">
                <div class="d-flex justify-content-start align-items-start flex-column gap-2">
                    <h5 class="cabin m-0 mt-2 titulo-detalhe">Email & Telefone:</h5>
                    <p style="color: #E9E9E9; font-size: .8rem;" class="mb-2">tigerstudio@gmail.com <br>
                        123 456 789</p>
                </div>
            </div>
            <div class="col-sm-auto col-6 m-sm-0 m-auto d-flex d-lg-none justify-content-sm-start justify-content-start align-items-start flex-lg-column text-light">
                <div class="d-flex justify-content-start align-items-start flex-column gap-2">
                    <h5 class="cabin m-0 mt-2 horario-detalhe titulo-detalhe">Horário:</h5>
                    <p style="color: #E9E9E9; font-size: .8rem;">De Segunda á Domingo <br>
                        Das 8:00 ás 18:00</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection