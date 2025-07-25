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
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="assets/imagens/logo3.png" alt="Logo" class="d-inline-block align-text-top">
            </a>

            <!-- Botão toggle para mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>

                <!-- Ícones à direita -->
                <div class="navbar-icons">
                    <a href="#" title="Placeholder folha">
                        <i class="fa-solid fa-leaf"></i>
                    </a>
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

    <section class="hero p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 z-1 ps-4">
                    <h1 class="display-4 mt-5">A melhor floricultura de Camaçari!</h1>
                    <p class="lead">
                        Traga mais vida para sua casa com nossas plantas ornamentais. Beleza, frescor e natureza no seu dia a dia!
                    </p>
                    <button href="#produtos" class="btn btn-loja  mt-5">Ver Produtos</button>
                </div>

                <div class="col-md-6 text-center main-img-hero">
                    <img src="assets/imagens/alice-imagem1.png" alt="Alice Plantas Ornamentais" class="img-fluid">
                </div>
                <div class="background-img z-n1">
                    <img src="assets/imagens/png-hero-left-1.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <div class="hero-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#67ad87" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,154.7C384,128,480,96,576,117.3C672,139,768,213,864,218.7C960,224,1056,160,1152,112C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>




    <section class="products-section">
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
                <p class="section-subtitle">Plantas cuidadosamente selecionadas para transformar seu espaço</p>
            </div>

            <div class="filter-tabs">
                <!-- "Todas" mostra apenas as principais de cada seção -->
                <button href="#" class="filter-tab active">Todas</button>
                <button href="#" class="filter-tab">Internas</button>
                <button href="#" class="filter-tab">Externas</button>
                <button href="#" class="filter-tab">Suculentas</button>
                <button href="#" class="filter-tab">Aromáticas</button>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-badge">Destaque</div>
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400&h=280&fit=crop" alt="Monstera Deliciosa">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Monstera Deliciosa</h3>
                                <p class="product-scientific">Monstera deliciosa</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 85,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Fácil cuidado">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                </div>
                            </div>
                            <div>

                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.tcdn.com.br/img/img_prod/743239/ficus_lyrata_bambino_591_4_be51cc64451d9dd8c51ced70285a13f0_20210709152720.jpg" alt="Ficus Lyrata">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Ficus Lyrata</h3>
                                <p class="product-scientific">Ficus lyrata</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 120,00</div>
                                    <div class="care-icon" title="Luz direta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega regular">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Cuidado intermediário">
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                            
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=400&h=280&fit=crop" alt="Suculenta Mix">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Suculenta Mix</h3>
                                <p class="product-scientific">Echeveria elegans</p>
                                <div class="care-icons align-items-center">
                                    <div class="product-price">R$ 35,00</div>
                                    <div class="care-icon" title="Luz direta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Pouca água">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Muito fácil">
                                        <i class="fas fa-smile"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1463154545680-d59320fd685d?w=400&h=280&fit=crop" alt="Samambaia Boston">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Samambaia Boston</h3>
                                <p class="product-scientific">Nephrolepis exaltata</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 45,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <div class="care-icon" title="Muita água">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Umidade alta">
                                        <i class="fas fa-spa"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-badge">Novo</div>
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=400&h=280&fit=crop" alt="Espada de São Jorge">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Espada de São Jorge</h3>
                                <p class="product-scientific">Sansevieria trifasciata</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 55,00</div>
                                    <div class="care-icon" title="Pouca luz">
                                        <i class="fas fa-moon"></i>
                                    </div>
                                    <div class="care-icon" title="Pouca água">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Muito fácil">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://pt.plantsfarm.com/uploads/202237056/pothos-golden23158383277.jpg" alt="Pothos Dourado">
                        </div>
                        <div class="product-info">
                            <div>
                                <h3 class="product-name">Pothos Dourado</h3>
                                <p class="product-scientific">Epipremnum aureum</p>
                                <div class="care-icons">
                                    <div class="product-price">R$ 40,00</div>
                                    <div class="care-icon" title="Luz indireta">
                                        <i class="fas fa-sun"></i>
                                    </div>
                                    <div class="care-icon" title="Rega moderada">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div class="care-icon" title="Purifica o ar">
                                        <i class="fas fa-wind"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                
                                <button class="add-to-cart-btn w-100">
                                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>