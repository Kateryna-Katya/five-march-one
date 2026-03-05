<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> | Карьерный апгрейд и стратегии роста
    </title>
    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2240%22 fill=%22%23F8C8DC%22 /><path d=%22M30 50 L50 30 L70 50 L50 70 Z%22 fill=%22%23B9E2FA%22 /></svg>"
        type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@600;700&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#methods" class="nav__link">Методы</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline header__btn">Связаться</a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Условия использования</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>.
                Пожалуйста, внимательно ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                услуги по карьерному апгрейду, вы подтверждаете свое полное согласие с
                данными Условиями. Переосмыслите подход к развитию вместе с нами или прекратите использование сайта, если условия вам не подходят.
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                инновационным технологиям, статьям в блоге, экспертным консультациям и решениям, которые меняют правила игры 
                в сфере профессионального роста (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                вашего взаимодействия с нашей передовой цифровой инфраструктурой.
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">
                Вы обязуетесь использовать платформу <strong><?= $domainTitle ?></strong> исключительно в законных целях. 
                При работе с сайтом <strong>запрещается</strong>:
            </p>
            <ul data-aos="fade-up">
                <li>
                    Распространять информацию, которая нарушает законодательство <strong>Италии и ЕС</strong> 
                    или права третьих лиц.
                </li>
                <li>
                    Предпринимать действия, которые могут нарушить нормальную работу 
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong> или привести к сбоям AI-инструментов.
                </li>
                <li>
                    Использовать ботов для сбора данных или иного автоматизированного взаимодействия с 
                    контентом <strong><?= $fullDomain ?></strong> без разрешения.
                </li>
                <li>
                    Предоставлять недостоверную информацию при записи на бесплатную консультацию по всем вопросам.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
            <p data-aos="fade-up">
                Весь контент на сайте <strong><?= $fullDomain ?></strong>, включая тексты стратегий роста, графику и программный код, 
                является объектом интеллектуальной собственности Компании. Вам предоставляется ограниченная
                лицензия на доступ к материалам для личного профессионального развития. Любое копирование методологий, 
                доказавших эффективность, без письменного разрешения запрещено.
            </p>

            <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
            <p data-aos="fade-up">
                Услуги предоставляются по принципу «как есть». Мы не даем гарантий, что платформа будет работать 
                бесперебойно в контексте динамично меняющегося рынка труда в <strong>Италии</strong>.
                Компания не несет ответственности за любые прямые или косвенные убытки, возникшие в ходе реализации 
                вашей индивидуальной стратегии на базе инноваций.
            </p>

            <h2 data-aos="fade-up">5. Изменения в Условиях</h2>
            <p data-aos="fade-up">
                Мы оставляем за собой право дополнять настоящие Условия, чтобы отражать развитие технологий, 
                которые работают на вас. Все изменения вступают в силу с момента публикации на <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">6. Разрешение споров</h2>
            <p data-aos="fade-up">
                Все споры стороны будут стремиться разрешить путем переговоров. В случае недостижения согласия, 
                спор подлежит рассмотрению в соответствии с законодательством по месту регистрации Оператора в 
                <strong>Милане, Италия</strong>.
            </p>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы, свяжитесь с нашей экспертной поддержкой на всех этапах:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697638526">+39 06 9763 8526</a><br>
                <strong>Адрес:</strong> Via Dante, 14, 20121 Milano, MI, Italia
            </p>
            
            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Платформа уже доступна в Европе. Редакция: Март 2026.</p>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col footer__col--brand">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>
                <p class="footer__desc">
                    Технологии нового поколения для вашего профессионального восхождения. Постройте карьеру, которая
                    работает на вас.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategy">Стратегия роста</a></li>
                    <li><a href="./#methods">Экспертиза</a></li>
                    <li><a href="./#insights">Блог платформы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390697638526">+39 06 9763 8526</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Via Dante, 14, 20121 Milano, MI, Italia</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy;
                2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
            <div class="mobile-menu" id="mobileMenu">
                <div class="mobile-menu__content">
                    <ul class="mobile-menu__list">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#strategy">Стратегия</a></li>
                        <li><a href="./#methods">Методы</a></li>
                        <li><a href="./#insights">Инсайты</a></li>
                        <li><a href="./#reviews">Отзывы</a></li>
                        <li><a href="./#contact" class="btn btn--outline">Связаться</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="cookie-popup" id="cookiePopup">
                <div class="cookie-popup__content">
                    <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                            политике</a>.</p>
                    <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
                </div>
            </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="script.js"></script>
</body>

</html>