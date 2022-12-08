<?php
/* Template Name: Main Page */
get_header();
?>
<?php global $redux_demo; ?>
<section class="start">
    <div class="container" style="background: linear-gradient(89.37deg, #1C60E3 -2.53%, #D3D3D3 102.52%);">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-end start__left">
                <img src="<?php the_field('start_banner_img'); ?>" alt="marketing img">
            </div>
            <div class="col-lg-6 d-flex align-items-center strart__right p-5 p-lg-0">
                <div class="start__text">
                    <h1 class="pb-4">
                        <?php the_field('start_banner_title'); ?>
                    </h1>
                    <div class="pb-4">
                        <?php the_field('start_banner_description'); ?>
                    </div>
                    <button class="btn start__btn" style="background: #005BE2;" data-bs-toggle="modal" data-bs-target="#callBack">
                        <?php the_field('start_banner_btn'); ?>
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
                        <?php the_field('advantages_13'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="stars__card text-center align-items-center d-flex justify-content-center flex-wrap">
                    <i class="bi bi-building-up"></i>
                    <div>
                        <?php the_field('advantages_23'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="stars__card text-center align-items-center d-flex justify-content-center flex-wrap">
                    <i class="bi bi-shield-check"></i>
                    <div>
                        <?php the_field('advantages_33'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container b-modul bg-w">
        <div class="row justify-content-between align-items-center p-3 service__title">
            <h2><?php the_field('project_title'); ?></h2>
            <a href="" class="service__link"><i class="bi bi-arrow-right"></i> Ver todo</a>
        </div>
        <div class="row p-3">
            <div class="col-lg-4 p-3 p-3">
                <div class="service__card d-flex justify-content-center pe-3 ps-3 pb-3 align-items-end" style="background: linear-gradient(180.07deg, rgba(0, 25, 112, 0) 0.06%, #2B2B2B 118.89%), url(<?php the_field('project_img_1'); ?>), #D9D9D9;">
                    <p>
                        <?php the_field('project_name_1'); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 p-3 p-3">
                <div class="service__card d-flex justify-content-center pe-3 ps-3 pb-3 align-items-end" style="background: linear-gradient(180.07deg, rgba(0, 25, 112, 0) 0.06%, #2B2B2B 118.89%), url(<?php the_field('project_img_2'); ?>), #D9D9D9;">
                    <p>
                        <?php the_field('project_name_2'); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 p-3 p-3">
                <div class="service__card d-flex justify-content-center pe-3 ps-3 pb-3 align-items-end" style="background: linear-gradient(180.07deg, rgba(0, 25, 112, 0) 0.06%, #2B2B2B 118.89%), url(<?php the_field('project_img_2'); ?>), #D9D9D9;">
                    <p>
                        <?php the_field('project_name_3'); ?>
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
                <?php the_field('about_title'); ?>
            </h2>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-6 p-4">
                <div class="about__logo p-4 text-center">
                    <img src="<?php echo $redux_demo["logo"]['url']; ?>" alt="logo">
                </div>
                <div class="text-center mt-4 about__link">
                    <a href="<?php the_field('whatsapp_link'); ?>"><i class="bi bi-whatsapp"></i></a>
                    <a href="<?php the_field('facebook_link'); ?>"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
            <div class="col-lg-6 about__text p-4">
                <?php the_field('about_text'); ?>
            </div>
        </div>
    </div>
</section>
<section id="contacts">
    <div class="container b-modul bg-w">
        <div class="row">

            <div class="col-lg-6 p-4 contact__link">
                <h2>
                    <?php the_field('contacts_title'); ?>
                </h2>
                <a href="tel:<?php the_field('contacts_phone'); ?>"><?php the_field('contacts_phone'); ?></a>
                <a href="mailto:<?php the_field('contacts_mail'); ?>"><?php the_field('contacts_mail'); ?></a>
                <a href="<?php the_field('contacts_whatsapp'); ?>">WhatsApp <i class="bi bi-whatsapp ml-1"></i></a>
                <button class="btn contact__btn" style="background: #005BE2;" data-bs-toggle="modal" data-bs-target="#callBack">
                    <?php the_field('contacts_text_buttons'); ?>
                </button>
            </div>
            <div class="col-lg-6 p-0 maps">
                <?php the_field('contacts_maps'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
