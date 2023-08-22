<!-- Reveal js -->
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>

<!-- Fancy -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

<!-- Mask -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- ANCORA DAS PÁGINAS -->
<script type="text/javascript">
	$('html, body').animate({
		scrollTop: $('#ancora').offset().top
	}, 1000);
</script>

<script>
// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});
</script>

<!-- MENU MOBILE FECHAMENTO AUTOMÁTICO -->
<script>
    if (screen.width < 900) {
        document.addEventListener("DOMContentLoaded", () => {
            let links = document.querySelectorAll(".nav-link");

            links.forEach(link => {
                console.log(link);
                link.onclick = () => {
                    document.querySelector("button.navbar-toggler").click();
                }
            });
        })
	}
</script>

<script>
	window.sr = ScrollReveal({
		reset: true
	});

	if (window.innerWidth >= 1024) {

		sr.reveal('header .logotipo', {
			duration: 1400,
			origin: 'left',
			distance: '80px'
		}, 80);

		sr.reveal('#banner-topo .container', {
			duration: 1300,
			origin: 'bottom',
			distance: '80px'
		}, 80);


		sr.reveal('#topicos .bloco', {
			duration: 1100,
			origin: 'top',
			distance: '80px'
		}, 80);

		sr.reveal('#dados-topo', {
			duration: 1200,
			origin: 'right',
			distance: '80px'
		}, 80);

		sr.reveal('#sobre img', {
			duration: 1300,
			origin: 'left',
			distance: '80px'
		}, 80);

		sr.reveal('#sobre .col-lg-6', {
			duration: 1100,
			origin: 'right',
			distance: '80px'
		}, 80);

		sr.reveal('#funciona img', {
			duration: 1300,
			origin: 'bottom',
			distance: '80px'
		}, 80);

		sr.reveal('#funciona .bloco', {
			duration: 1300,
			origin: 'top',
			distance: '80px'
		}, 80);

		sr.reveal('#idealizadoras img', {
			duration: 1100,
			origin: 'bottom',
			distance: '80px'
		}, 80);

		sr.reveal('#idealizadoras .bloco', {
			duration: 1400,
			origin: 'right',
			distance: '80px'
		}, 80);

		sr.reveal('#apoiadores h2', {
			duration: 1200,
			origin: 'top',
			distance: '80px'
		}, 80);

		sr.reveal('#apoiadores img', {
			duration: 1300,
			origin: 'left',
			distance: '80px'
		}, 80);

		sr.reveal('#insta .bloco', {
			duration: 1100,
			origin: 'top',
			distance: '80px'
		}, 80);

		sr.reveal('footer h6', {
			duration: 1300,
			origin: 'right',
			distance: '80px'
		}, 80);

	}
</script>