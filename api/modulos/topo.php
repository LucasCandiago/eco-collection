<div class="bg-verde py-2"></div>

<div id="topo">

    <div class="container py-3">

        <div class="row justify-content-between text-lg-left text-center align-items-center">

            <div class="col-lg-3">
                <a href="<?= SITE ?>"><img src="<?= SITE ?>imagens/logo.png" alt="Logotipo - Eco Colletion" class="img-fluid logotipo mb-lg-0 mb-3"></a>
            </div>


        </div>

    </div>

</div>

<header class="main_h">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container py-lg-2 py-1">
            <a class="navbar-brand" href="<?php echo SITE ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-center">
                    <a class="nav-item nav-link scroll" href="<?php echo SITE ?>">Home</a>
                    <a class="nav-item nav-link scroll" href="<?php echo SITE ?>#sobre">Sobre Nós</a>
                    <a class="nav-item nav-link scroll" href="<?php echo SITE ?>#funciona">Como funciona</a>
                    <a class="nav-item nav-link scroll" href="<?php echo SITE ?>#idealizadoras">Quem somos</a>
                    <a class="nav-item nav-link scroll" href="<?php echo SITE ?>#apoiadores">Patrocinadores</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="bg-fixed pd-padrao2" id="banner-topo" style="background-image: url(<?= SITE ?>imagens/banner.png);">

    <div class="container">

        <div class="col-lg-6 text-lg-left text-center">

            <h1 class="text-green bellania">Projeto Praia Limpa!</h1>

            <p class="montserrat py-3 f-18 lh-7 fw-medium text-graya">

                "Eco collection, o descarte correto mais proximo de você!! Entre em contato conosco para obter mais informações."

            </p>

            <a href="<?= SITE ?>#sobre"><button type="button" class="btn btn-green2 rounded-pill text-grayb fw-regular px-5 f18 montserrat py-2 ls-1 effect-btn">SAIBA MAIS SOBRE NOSSAS LIXEIRAS</button></a>

        </div>

    </div>

</div>



<script>
    $(document).ready(function() {

        $('.menu-icon').click(function() {

            $('nav').toggleClass('active')

        })

    })
</script>



<!-- MENU FECHAMENTO AUTOMÁTICO -->

<script>
    document.addEventListener("DOMContentLoaded", function() {

        var links = document.querySelectorAll(".link_menu");

        for (var x = 0; x < links.length; x++) {

            links[x].onclick = function() {

                document.querySelector(".menu-icon").click();

            }

        }

    });
</script>