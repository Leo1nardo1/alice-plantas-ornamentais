<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alice - Plantas Ornamentais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/sobre.css">
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
                        <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#loja-fisica">Loja Física</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#sobre-nos">Sobre nós</a>
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
    <section class="hero d-flex flex-column text-center align-items-center justify-content-center">
        <div class="container ">
            <h1 class="display-3">Alice - Plantas Ornamentais</h1>
            <p class="lead">Trazendo a natureza para o seu lar com beleza e sustentabilidade</p>
        </div>
    </section>

    <div class="container">
        <section class="sobre-nos my-5 py-5 px-3">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="about-text">
                        <h1>Nossa História</h1>
                        <p>A Alice - Plantas Ornamentais nasceu em 2020, no coração de Abrantes, pelas mãos cuidadosas de Dona Alice, uma senhora apaixonada por plantas desde a juventude. O que começou como um simples hobby no quintal de casa, cultivando flores e folhagens para enfeitar o lar, se transformou em um pequeno negócio cheio de carinho e dedicação.</p>
                        <p>Dona Alice cultiva pessoalmente cada muda e planta ornamental que oferece em sua loja. Com paciência e amor pela natureza, ela prepara a terra, acompanha o crescimento das plantas e escolhe cada detalhe que compõe o charme das suas peças. Além das plantas, a loja também oferece vasos de diversos estilos, enfeites delicados para jardins e arranjos, terra vegetal de qualidade e adubos selecionados para quem deseja ver suas plantas sempre bonitas e saudáveis.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1560840067-ddcaeb7831d2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Estufa de plantas">
                    </div>
                </div>
            </div>
        </section>
        <section class="nossos-produtos py-5">

            <h1 class="mb-3">Nossos Produtos</h1>
            <p class="lead mb-5">Trabalhamos com produtos de alta qualidade, combinando beleza, durabilidade e responsabilidade ambiental para transformar seus ambientes com elegância e consciência.</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-leaf"></i> Sustentabilidade</h5>
                            <p class="card-text">Nossos produtos são desenvolvidos com materiais ecologicamente corretos, priorizando práticas sustentáveis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-heart"></i> Qualidade</h5>
                            <p class="card-text">Oferecemos plantas e vasos com rigoroso controle de qualidade, garantindo beleza e durabilidade em cada detalhe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa-solid fa-star"></i> Excelência</h5>
                            <p class="card-text">Estamos sempre buscando novas tendências para oferecer um padrão de excelência para nossos clientes.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container-fluid ">
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
                    <li class="nav-item mb-2"><a href="index.php#produtos" class="nav-link p-0">Produtos</a></li>
                    <li class="nav-item mb-2"><a href="index.php#loja-fisica" class="nav-link p-0">Loja Física</a></li>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>