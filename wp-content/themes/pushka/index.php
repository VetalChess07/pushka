<?php get_header(); ?>

<aside>
        <nav class="mobile-menu">
            <div class="container">
                <div class="mobile-menu__header">
                    <img class="mobile-menu__logo" src="<?php bloginfo('template_url'); ?>/assets/img/logodark.png" alt="">
                    <div class="mobile-menu__close">
                    <img class="header__logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/menuMobile.svg" alt="">
                    </div>
                </div>
                <div class="mobile-menu__body">
                    <nav class="mobile-menu__items">
                        <div class="mobile-menu__item">
                            <a class="mobile-menu__item-link" href="#main">Выбрать квартиру</a>
                        </div>
                        <div class="mobile-menu__item">
                            <a class="mobile-menu__item-link" href="#gallery">О комплексе</a>
                        </div>
                        <div class="mobile-menu__item">
                            <a class="mobile-menu__item-link" href="#buy">Как купить</a>
                        </div>
                        <div class="mobile-menu__item">
                            <a class="mobile-menu__item-link" href="#contacts">Контакты</a>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>
    </aside>
    <!-- mobile-menu end -->

    <!-- main -->
    <main class="main">
        <!-- main-banner section -->
        <section id="main" class="main-banner">
            <div class="main-banner__inner">
                <div class="container">
                    <div class="main-banner__title-wrapper">
                        <h1 class="main-banner__title">Жилой комплекс <span class="main-banner__title--colored">“пушка”</span></h1>
                        <p class="main-banner__subtitle">Твой новый уровень комфорта и уюта.</p>
                    </div>
                    <button class="button">Подбор квартир</button>
                </div>
            </div>
        </section>
        <!-- main-banner section end -->

        <!-- grid-gallery section -->
        <section id="gallery" class="grid-gallery">
            <div class="container">
                <div class="grid-gallery__inner">
                    <div class="grid-gallery__item">
                        <h3 class="grid-gallery__title">уЮТНЫЙ ЦЕНТР ГОРОДА</h3>
                        <img class="grid-gallery__img" src="<?php bloginfo('template_url'); ?>/assets/img/gallery/Rectangle 10 (1).jpg" alt="">
                    </div>
                    <div class="grid-gallery__item">
                        <h3 class="grid-gallery__title">ЗАКРЫТАЯ ТЕРРИТОРИЯ
                            С ВИДЕОНАБЛЮДЕНИЕМ</h3>
                        <img class="grid-gallery__img" src="<?php bloginfo('template_url'); ?>/assets/img/gallery/Rectangle 10.jpg" alt="">
                    </div>
                    <div class="grid-gallery__item">
                        <h3 class="grid-gallery__title">ПОДЗЕМНАЯ ПАРКОВКА</h3>
                        <img class="grid-gallery__img" src="<?php bloginfo('template_url'); ?>/assets/img/gallery/Rectangle 11 (1).jpg" alt="">
                    </div>
                    <div class="grid-gallery__item">
                        <h3 class="grid-gallery__title">ПАНОРАМНЫЙ ВИД НА ГОРОД</h3>
                        <img class="grid-gallery__img" src="<?php bloginfo('template_url'); ?>/assets/img/gallery/Rectangle 11.jpg" alt="">
                    </div>
                    <div class="grid-gallery__item">
                        <h3 class="grid-gallery__title">ДЕТСКАЯ ПЛОЩАДКА
                            И СПОРТИВНЫЙ КОМПЛЕКС</h3>
                        <img class="grid-gallery__img" src="<?php bloginfo('template_url'); ?>/assets/img/gallery/Rectangle 9 (1).jpg" alt="">
                    </div>
                    <div class="grid-gallery__item">
                        <h3 class="grid-gallery__title">РЯДОМ ПАРКИ
                            И ПЕШЕХОДНЫЕ АЛЛЕИ</h3>
                        <img class="grid-gallery__img" src="<?php bloginfo('template_url'); ?>/assets/img/gallery/Rectangle 9.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- grid-gallery section end -->

         <!-- how-buy section -->
         <section id="buy" class="how-buy">
            <div class="container">
                <h2 class="section__title">Как купить?</h2>
                <div class="how-buy__inner">
                    <div class="how-buy__folders">
                        <div class="how-buy__folder">
                            <div class="how-buy__folder-body">
                                <div class="how-buy__folder-item">
                                    <h6 class="how-buy__folder-title">Ипотека от застройщика</h6>
                                    <p class="how-buy__folder-procent how-buy__folder-procent--yelloy">12%</p>
                                </div>
                                <img class="how-buy__folder-ico" src="<?php bloginfo('template_url'); ?>/assets/img/homeico.svg" alt="">
                            </div>
                        </div>
                        <div class="how-buy__folder how-buy__folder--ligth-blue">
                            <div class="how-buy__folder-body">
                                <div class="how-buy__folder-item">
                                    <h6 class="how-buy__folder-title how-buy__folder-title--black">Рассрочка до</h6>
                                    <p class="how-buy__folder-procent how-buy__folder-procent--blue">18 месяцев</p>
                                </div>
                                <div class="how-buy__folder-item">
                                    <h6 class="how-buy__folder-title how-buy__folder-title--black">Первоначальный взнос</h6>
                                    <p class="how-buy__folder-procent how-buy__folder-procent--blue">30%</p>
                                </div>
                                <img class="how-buy__folder-ico" src="<?php bloginfo('template_url'); ?>/assets/img/lampico.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="how-buy__conditions">
                        <p class="how-buy__conditions-title">Приобрести квартиру можно
                            по государственным программам</p>
                        <div class="how-buy__conditions-wrapper">
                            <div class="how-buy__conditions-item how-buy__conditions-item--ligth">
                                <p class="how-buy__conditions-item-title">Семейная ипотека</p>
                                <p class="how-buy__conditions-item-data">от 6%</p>
                            </div>
                            <div class="how-buy__conditions-item how-buy__conditions-item--ligth">
                                <p class="how-buy__conditions-item-title">IT ипотека</p>
                                <p class="how-buy__conditions-item-data">от 6%</p>
                            </div>
                            <div class="how-buy__conditions-item">
                                <p class="how-buy__conditions-item-title">Военная ипотека</p>
                                <p class="how-buy__conditions-item-data">от 16%</p>
                            </div>
                            <div class="how-buy__conditions-item">
                                <p class="how-buy__conditions-item-title">Жилищные
                                    сертификаты</p>
                                <p class="how-buy__conditions-item-data how-buy__conditions-item-data--small">(материнский капитал
                                    и др.)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- how-buy section end -->

        <!-- partners section -->
        <section id="partners" class="partners">
            <div class="container">
                <h2 class="section__title">Банки партнеры</h2>
                <div class="partners__inner">
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/sberbank.svg" alt="sberbank"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/vtb.svg" alt="vtb"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/gazprom.svg" alt="gazprom"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/psb.svg" alt="psb"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/alfa.svg" alt="alfa"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/otkritie.svg" alt="otkritie"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/levoberej.svg" alt="levoberej"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/rosbank.svg" alt="rosbank"></div>
                    <div class="partners__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/partners/bank.svg" alt="bank"></div>
                </div>
            </div>
        </section>
        <!-- partners section end -->

        <!-- feedback section -->
        <section id="feedback" class="feedback">
            <div class="container">
                <div class="feedback__inner">
                    <h5 class="feedback__title">Не нашли нужную информацию?</h5>
                    <p class="feedback__subtitle">Оставьте ваши контактные данные и наши менеджеры свяжутся с вами в ближайшее время</p>
                    
                    <?php   
    echo  do_shortcode('[contact-form-7 id="364835d" title="Contact form 1"]');
     ?>
                    <div class="feedback__form-policy">
                        Нажимая кнопку Вы даете согласие на <a href="#">обработку персональных данных</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- feedback section end -->

        <!-- contacts section -->
        <section id="contacts" class="contacts">
            <div class="container">
                <h2 class="section__title">Контакты</h2>
                <div class="contacts__inner">
                    <div class="contacts__item">
                        <h5 class="contacts__item-title">Узнайте больше<br> про жилищный комплекс<br> «ПУШКА»</h5>
                        <div class="contacts__item-body">
                            <a class="contacts__number" href="tel:+7(912)235-17-43">+7 (912) 235-17-43</a>
                            <a class="contacts__mail" href="mailto:arbat-nt@mail.ru">arbat-nt@mail.ru</a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <h5 class="contacts__item-title">Офисы продаж</h5>
                        <div class="contacts__item-body">
                            <a class="contacts__address" href="">г.каменск-уральский,<br>
                            ул. октябрьская 41/5,
                            офис 19</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contacts section end -->
        <!-- copyright section -->
        <section class="copyright">
            <div class="container">
                <p>
                    ООО «Специализированный застройщик  «ПушкинЪ»,
                    Сайт носит информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями статьи 437 гражданского кодекса Российской федерации. Для получения подробной информации о наличии, стоимости указанных квартир, машиномест, коммерческих помещений пожалуйста, обращайтесь к специалистам ООО «Специализированный застройщик  «ПушкинЪ», с помощью специальной формы связи или по телефону 8 (3822) 280-973.
                    Пользуясь сайтом вы соглашаетесь с политикой конфиденциальности (эти слова активный по ссылке на документ)
                </p>
            </div>
        </section>
        <!-- copyright section end -->
    </main>

<?php get_footer(); ?>
