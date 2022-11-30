<?php
/*
* Template Name: Home Page
*/

get_header(); ?>

<div class="hero">
    <div class="hero_container">
        <div class="hero_container_txt">
            <h1>Tu centro de información sobre colchones</h1>
            <p>
                Te ayudamos a encontrar el mejor colchón que se adapte a tus
                necesidades y te ofrezca el mejor descanso.
            </p>
            <p>
                ¡Conoce sus caracteristicas principales y las opiniones más
                recientes!
            </p>
        </div>
    </div>
</div>

<section class="top-colchones section">
    <h1>Los mejores colchones de México en 2022</h1>
    <div class="card top-1">
        <h2>El colchón ganador 2022</h2>
        <div class="ranking">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="card-container">
            <div class="top-1-info">
                <div class="top-1-info-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Nezt.png" alt="Nezt">
                </div>
                <div class="top-1-info-list">
                    <ul>
                        <li>Soporte ortopédico</li>
                        <li>Marca 100% mexicana</li>
                        <li>Tecnología AirFlow con flujo de aire</li>
                        <li>Certificación mundial CertiPUR-Us</li>
                        <li>Hipoalergénico y antiácaros</li>
                        <li>101 noches de prueba i envío gratis</li>
                        <li>Dos líneas: Nezt Original (premium, semifirme) y Nezt Element (gran precio, firme)</li>
                    </ul>
                </div>
            </div>
            <div class="top-1-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/colchon-nezt.jpeg" alt="">
            </div>
        </div>
    </div>

    <div class="top-5">
        <div class="card contendientes">
            <h2>Segundo lugar</h2>
            <div class="ranking">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
            </div>
            <div class="card-container-contendientes">
                <div class="top-5-info">
                    <div class="top-5-info-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/emma.png" alt="Emma">
                    </div>
                    <div class="top-5-info-list">
                        <ul>
                            <li>Soporte óptimo</li>
                            <li>Aisla el movimiento</li>
                            <li>Estructura con diferentes capas de espua</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card contendientes">
            <h2>Tercer lugar</h2>
            <div class="ranking">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
            </div>
            <div class="card-container-contendientes">
                <div class="top-5-info">
                    <div class="top-5-info-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sognare.png" alt="Sognare">
                    </div>
                    <div class="top-5-info-list">
                        <ul>
                            <li>Soporte sin puntos de presión</li>
                            <li>Tecnología Zero Gravity</li>
                            <li>Estructura con diferentes capas de espua</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card contendientes">
            <h2>Cuarto lugar</h2>
            <div class="ranking">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="card-container-contendientes">
                <div class="top-5-info">
                    <div class="top-5-info-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lunna.png" alt="Lunna">
                    </div>
                    <div class="top-5-info-list">
                        <ul>
                            <li>Soporte óptimo</li>
                            <li>Aisla el movimiento</li>
                            <li>Estructura con diferentes capas de espua</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card contendientes">
            <h2>Quinto lugar</h2>
            <div class="ranking">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
            </div>
            <div class="card-container-contendientes">
                <div class="top-5-info">
                    <div class="top-5-info-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/springair.png" alt="Spring air">
                    </div>
                    <div class="top-5-info-list">
                        <ul>
                            <li>Soporte sin puntos de presión</li>
                            <li>Tecnología Zero Gravity</li>
                            <li>Estructura con diferentes capas de espua</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>