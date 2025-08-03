<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alice - Plantas Ornamentais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/index.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg position-sticky">

        <div class="container-fluid mx-5">

            <a class="navbar-brand" href="#hero">
                <img src="assets/imagens/alice-logo2.png" alt="Logo" class="d-inline-block align-text-top">
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#loja-fisica">Loja Física</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre nós</a>
                    </li>
                </ul>


                <div class="navbar-icons">

                    <div class="contact-info d-flex justify-content-center gap-4">
                        <div><i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/557186438392?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20os%20produtos" target="_blank">(71) 9 8643-8392</a> </div>
                        <div><i class="fa-brands fa-instagram"></i> <a href="#">@aliceplantas</a></div>
                    </div>
                    <!-- <a href="#" title="Placeholder folha">
                        <i class="fa-solid fa-leaf"></i>
                    </a> -->
                    <!-- <a href="#" title="Perfil do Usuário">
                        <i class="fa-solid fa-user"></i>
                    </a> -->
                    <!-- <a class="position-relative" href="#" title="Carrinho de Compras">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="badge bg-danger rounded-pill position-absolute">3</span>
                    </a> -->
                </div>
            </div>
        </div>
    </nav>

    <section id="hero" class="hero p-4">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 z-1 ps-md-4">
                    <h1 class="display-4 mt-5 ps-md-5">A melhor floricultura de <span class="hero-camacari">Abrantes!</span></h1>
                    <p class="lead ps-md-5">
                        Traga mais vida para sua casa com nossas plantas ornamentais. Beleza, frescor e natureza no seu dia a dia!
                    </p>
                    <a href="#produtos" class="btn btn-loja mt-5 ms-md-5">Ver Produtos</a>
                </div>

                <div class="col-md-6 text-center main-img-hero">
                    <img src="assets/imagens/alice-imagem1.png" alt="Alice Plantas Ornamentais" class="img-fluid">
                </div>
                <div class="background-img z-n1">
                    <img src="assets/imagens/png-hero-left-1.png" alt="">
                </div>
                <div class="plant-badge badge-2">
                    <i class="fas fa-truck"></i>
                    <span>Entrega para toda Abrantes</span>
                </div>
            </div>

        </div>
    </section>



    <section id="produtos" class="products-section">
        <div class="floating-leaves">
            <i class="fas fa-leaf leaf" style="left: 10%; animation-delay: 0s; font-size: 2rem;"></i>
            <i class="fas fa-seedling leaf" style="left: 20%; animation-delay: 5s; font-size: 1.5rem;"></i>
            <i class="fas fa-leaf leaf" style="left: 30%; animation-delay: 10s; font-size: 2.5rem;"></i>
            <i class="fas fa-seedling leaf" style="left: 70%; animation-delay: 3s; font-size: 1.8rem;"></i>
            <i class="fas fa-leaf leaf" style="left: 80%; animation-delay: 8s; font-size: 2rem;"></i>
            <i class="fas fa-seedling leaf" style="left: 90%; animation-delay: 12s; font-size: 1.6rem;"></i>
            <i class="fas fa-seedling leaf" style="left: 70%; animation-delay: 3s; font-size: 1.8rem;"></i>
            <i class="fas fa-leaf leaf" style="left: 50%; animation-delay: 7s; font-size: 2rem;"></i>
            <i class="fas fa-seedling leaf" style="left: 40%; animation-delay: 11s; font-size: 1.6rem;"></i>
        </div>

        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nossos Produtos</h2>
                <p class="section-subtitle">Plantas e vasos cuidadosamente selecionados para transformar seu espaço</p>
            </div>

            <div class="filter-tabs">

                <button href="#" id="todasBtn" class="filter-tab active">Todas</button>
                <button href="#" id="internaBtn" class="filter-tab">Internas</button>
                <button href="#" id="externaBtn" class="filter-tab">Externas</button>
                <button href="#" id="suculentaBtn" class="filter-tab">Suculentas</button>
                <button href="#" id="aromaticaBtn" class="filter-tab">Aromáticas</button>
            </div>

            <div id="product-list" class="row g-4"> <!-- ITEMS APARECEM AQUI --> </div>


        </div>
    </section>
    <section id="loja-fisica" class="loja-fisica p-5">
        <div class="section-header">
            <h2 class="section-title">Loja Física</h2>
            <p class="section-subtitle">Conheça nosso cantinho verde em Vila de Abrantes</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="card card-image">
                            <img src="assets/imagens/alice-imagem1.png" class="zoomable-img" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-image">
                            <img src="assets/imagens/alice-imagem1.png" class="zoomable-img" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-image">
                            <img src="assets/imagens/alice-imagem1.png" class="zoomable-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d771.932697804628!2d-38.265030367126954!3d-12.824087241109334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7163f7ab7d53db9%3A0x979706beea4e2a2e!2sR.%20dos%20Bentevis%2C%20053%20-%20Abrantes%2C%20Cama%C3%A7ari%20-%20BA!5e0!3m2!1spt-BR!2sbr!4v1753761692339!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="row store-info">
                    <div class="col-12 info-item">
                        <svg class="info-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                        <div class="info-content">
                            <h3>Endereço</h3>
                            <p>Rua das Flores, 123<br>Jardim Botânico, Salvador - BA<br>CEP: 40070-000</p>
                        </div>
                    </div>
                    <div class="col-12 info-item">
                        <svg class="info-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        <div class="info-content">
                            <h3>Contato</h3>
                            <p>WhatsApp: (71) 9 8643-8392<br>Email: contato@floraverde.com.br</p>
                        </div>
                    </div>
                    <div class="col-12 info-item">
                        <svg class="info-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                        <div class="info-content">
                            <h3>Horário de Funcionamento</h3>
                            <p>Segunda a Sexta: 8h às 18h<br>Sábado: 8h às 17h<br>Domingo: 9h às 15h</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="img-lightbox">
            <span id="close-lightbox">&times;</span>
            <img id="lightbox-img" src="" alt="Loja Alice Plantas Ornamentais">
        </div>
    </section>


    <div class="container-fluid">
        <footer class="site-footer row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5  border-top">
            <div class="col mb-3">
                <a href="#">
                    <img src="assets/imagens/alice-logo2.png" alt="Alice Plantas Ornamentais logo footer">
                </a>
                <p class="mt-3">© 2025 Alice Plantas Ornamentais. Todos os direitos reservados</p>
            </div>
            <div class="col mb-3"></div>
            <div class="col mb-3">
                <h5>Seções</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Início</a></li>
                    <li class="nav-item mb-2"><a href="#produtos" class="nav-link p-0">Produtos</a></li>
                    <li class="nav-item mb-2"><a href="#loja-fisica" class="nav-link p-0">Loja Física</a></li>
                    <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Sobre nós</a></li> -->
                </ul>
            </div>
            <div class="col mb-3">
                <h5>Contato</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><i class="fa-brands fa-instagram"></i> <a href="#">@aliceplantas</a></li>
                    <li class="nav-item mb-2"><i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/557186438392?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20os%20produtos" target="_blank">(71) 9 8643-8392</a> </li>
                </ul>
            </div>
        </footer>
    </div>



    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>