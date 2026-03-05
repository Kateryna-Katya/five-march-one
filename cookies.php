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
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашим сайтом, обеспечить его корректную работу и
                анализировать активность пользователей, мы используем инновационные технологии, включая файлы cookie. 
                Настоящая политика подробно объясняет, как эти решения, которые меняют правила игры, помогают нам 
                строить карьеру, которая работает на вас.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой фрагмент данных, который веб-сайт сохраняет на вашем устройстве, 
                когда вы его посещаете. Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" 
                ваши действия и предпочтения (например, язык, настройки региона Италия и другие параметры) 
                в течение определенного времени, чтобы обеспечить быстрый и лёгкий старт при каждом повторном визите.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем технологии, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Строго необходимые:</strong> Критически важны для функционирования платформы 
                    и вашей безопасности при прохождении регистрации.
                </li>
                <li>
                    <strong>Аналитические:</strong> Помогают нам оценивать перспективы проекта и улучшать 
                    контент нашего карьерного блога, собирая анонимные данные.
                </li>
                <li>
                    <strong>Функциональные:</strong> Позволяют сайту запоминать ваш выбор для предоставления 
                    персонализированной стратегии роста.
                </li>
                <li>
                    <strong>Маркетинговые:</strong> Используются для доставки предложений, которые активны 
                    только в странах ЕС и релевантны вашему профессиональному профилю.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
            <p data-aos="fade-up">Основные цели <strong><?= $domainTitle ?></strong>:</p>
            <ul data-aos="fade-up">
                <li>Обеспечение стабильной работы передовой цифровой инфраструктуры.</li>
                <li>Анализ пользовательского поведения для оптимизации вашего пошагового пути.</li>
                <li>Персонализация AI-инструментов для ваших реальных задач.</li>
                <li>Поддержка программы пассивного дохода через релевантные рекомендации.</li>
            </ul>

            <h2 data-aos="fade-up">Ваш выбор и управление</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над своими данными. Вы можете в любой
                момент изменить настройки в браузере. Однако помните, что удобная адаптация без сложностей 
                возможна только при включенных функциональных файлах cookie.
            </p>

            <h2 data-aos="fade-up">Файлы cookie третьих сторон</h2>
            <p data-aos="fade-up">
                На некоторых страницах мы можем использовать решения сторонних партнеров, таких как 
                Google Analytics или GSAP для визуализации ваших достижений. Эти технологии, доказавшие 
                эффективность, работают по своим правилам конфиденциальности.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы касательно использования файлов cookie на 
                <strong><?= $domainTitle ?></strong>, наша экспертная поддержка на связи:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697638526">+39 06 9763 8526</a><br>
                <strong>Адрес:</strong> Via Dante, 14, 20121 Milano, MI, Italia
            </p>
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