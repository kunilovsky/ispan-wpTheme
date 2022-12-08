<?php
/* Template Name: Main Page */
get_header();
?>
<?php global $redux_demo; ?>
<section class="start">
    <div class="container" style="background: linear-gradient(89.37deg, #1C60E3 -2.53%, #D3D3D3 102.52%);">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-end start__left">
                <img src="assets/img/start.png" alt="marketing img">
            </div>
            <div class="col-lg-6 d-flex align-items-center strart__right p-5 p-lg-0">
                <div class="start__text">
                    <h1 class="pb-4">
                        Restauración de la propiedad
                    </h1>
                    <div class="pb-4">
                        De una empresa confiable con amplia experiencia
                    </div>
                    <button class="btn start__btn" style="background: #005BE2;" data-bs-toggle="modal" data-bs-target="#callBack">
                        Información Adicional
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="stars">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-3">
                <div class="stars__card text-center align-items-center d-flex justify-content-center flex-wrap">
                    <i class="bi bi-house-heart"></i>
                    <div>
                        5 años en construcción
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="stars__card text-center align-items-center d-flex justify-content-center flex-wrap">
                    <i class="bi bi-building-up"></i>
                    <div>
                        De confianza
                        desarrollador
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="stars__card text-center align-items-center d-flex justify-content-center flex-wrap">
                    <i class="bi bi-shield-check"></i>
                    <div>
                        Estabilidad y experiencia
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container b-modul bg-w">
        <div class="row justify-content-between align-items-center p-3 service__title">
            <h2>Nuestros proyectos</h2>
            <a href="" class="service__link"><i class="bi bi-arrow-right"></i> Ver todo</a>
        </div>
        <div class="row p-3">
            <div class="col-lg-4 p-3 p-lg-0">
                <div class="service__card d-flex justify-content-center pe-3 ps-3 pb-3 align-items-end" style="background: linear-gradient(180.07deg, rgba(0, 25, 112, 0) 0.06%, #2B2B2B 118.89%), url(/assets/img/s-1.png), #D9D9D9;">
                    <p>
                        edificio de 10 pisos
                    </p>
                </div>
            </div>
            <div class="col-lg-4 p-3 p-lg-0">
                <div class="service__card d-flex justify-content-center pe-3 ps-3 pb-3 align-items-end" style="background: linear-gradient(180.07deg, rgba(0, 25, 112, 0) 0.06%, #2B2B2B 118.89%), url(/assets/img/s-2.png), #D9D9D9;">
                    <p>
                        Casa de vacaciones
                    </p>
                </div>
            </div>
            <div class="col-lg-4 p-3 p-lg-0">
                <div class="service__card d-flex justify-content-center pe-3 ps-3 pb-3 align-items-end" style="background: linear-gradient(180.07deg, rgba(0, 25, 112, 0) 0.06%, #2B2B2B 118.89%), url(/assets/img/s-3.png), #D9D9D9;">
                    <p>
                        casas adosadas
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container b-modul bg-b">
        <div class="row p-3 about__title">
            <h2>
                Acerca de la compañía
            </h2>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-6 p-4">
                <div class="about__logo p-4 text-center">
                    <img src="<?php echo $redux_demo["logo"]['url']; ?>" alt="logo">
                </div>
                <div class="text-center mt-4 about__link">
                    <a href=""><i class="bi bi-whatsapp"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 about__text p-4">
                Mucha gente piensa que Lorem Ipsum es un conjunto de palabras pseudo-latinas tomadas del techo,
                pero esto no es del todo cierto. Sus raíces se remontan a un único fragmento del latín clásico
                del año 45 d.C., es decir, hace más de dos milenios.
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container b-modul bg-w">
        <div class="row">

            <div class="col-lg-6 p-4 contact__link">
                <h2>
                    Contactos
                </h2>
                <a href="tel:+34 918 85 64 87">+34 918 85 64 87</a>
                <a href="mailto:example@example.com">example@example.com</a>
                <a href="">WhatsApp <i class="bi bi-whatsapp ml-1"></i></a>
                <button class="btn contact__btn" style="background: #005BE2;" data-bs-toggle="modal" data-bs-target="#callBack">
                    Formulario de contacto
                </button>
            </div>
            <div class="col-lg-6 p-0">
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12075.998834224723!2d-3.1654040095584075!3d40.827970069109654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd43a6833000002f%3A0xf4fc45f1df0d69e8!2sReformas%20C.B.!5e0!3m2!1sru!2sru!4v1670444208487!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();