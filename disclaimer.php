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
            <h1 data-aos="fade-up">Отказ от ответственности (Дисклеймер)</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                <strong>Общая информация:</strong> Все материалы, экспертные статьи и сведения,
                опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-ознакомительный характер. Они представляют собой решения, которые меняют правила игры в сфере карьеры, но не являются и не должны
                рассматриваться как персональная инвестиционная рекомендация,
                профессиональный юридический совет или официальный финансовый план.
            </p>

            <p data-aos="fade-up" data-aos-delay="200">
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> использует методологии, доказавшие эффективность, однако не дает юридических гарантий
                относительно стопроцентной точности или актуальности представленной в блоге
                информации. Любые упоминания про карьерный апгрейд, программу пассивного дохода или прошлых
                результатов наших резидентов не гарантируют аналогичных результатов для каждого. 
                Ваш пошаговый путь и индивидуальные итоги зависят от рыночных условий в <strong>Италии и странах ЕС</strong>, а также от ваших личных навыков.
            </p>

            <p data-aos="fade-up" data-aos-delay="300">
                <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                ее экспертная поддержка и партнеры не несут ответственности за
                любые прямые или косвенные последствия, решения или действия,
                предпринятые вами на основе контента этого ресурса. Вся
                ответственность за использование предложенных AI-инструментов и стратегий роста
                лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                передовых цифровых инфраструктур и источников, считающихся надежными.
            </p>

            <p data-aos="fade-up" data-aos-delay="400">
                <strong>Предупреждение о рисках:</strong> Любая стратегия, направленная на
                изменение профессионального статуса или переосмысление подхода к развитию, сопряжена с
                определенным уровнем личной ответственности. Перед принятием
                важных карьерных решений мы рекомендуем получить бесплатную консультацию по всем вопросам у наших специалистов или независимых экспертов в Италии.
            </p>

            <p data-aos="fade-up" data-aos-delay="500">
                <strong>Подтверждение пользователя:</strong> Продолжая использовать
                сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                действуете осознанно, оцениваете перспективы проекта и принимаете все
                упомянутые условия данного отказа от ответственности.
            </p>

            <div class="pages-footer" data-aos="fade-in" data-aos-delay="600" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026</p>
                <p style="font-size: 0.8rem; opacity: 0.5;">Платформа уже доступна в Европе. Все права защищены.</p>
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