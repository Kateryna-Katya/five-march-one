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
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                услуг по карьерному апгрейду и консалтингу, так и для других взаимодействий в электронном
                формате. Мы обеспечиваем экспертную поддержку на всех этапах, включая техническое сопровождение 
                вашего профессионального роста в рамках нашей передовой цифровой инфраструктуры.
            </p>

            <p data-aos="fade-up" data-aos-delay="150">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения. Эти инновации в политике всегда направлены на усиление защиты ваших интересов. 
                Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние инструменты (например, AI-сервисы), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за соблюдение
                конфиденциальности сторонними компаниями. Предоставляя свои данные, вы открываете новые возможности и даете согласие
                на их обработку методами, доказавшими эффективность.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает данные исключительно с вашего согласия
                для предоставления качественного сервиса: доступа к платформе,
                участия в стратегических сессиях и реализации программ пассивного дохода. Для
                предотвращения утечки информации мы используем решения, которые меняют правила игры в сфере кибербезопасности, 
                соответствующие стандартам <strong>Италии и ЕС (GDPR)</strong>.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения данных составляет 75 лет для обеспечения преемственности ваших карьерных достижений. 
                В остальных случаях компания хранит информацию до момента официального отзыва согласия через наш пошаговый путь коммуникации.
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul data-aos="fade-up">
                <li>время доступа и IP-адрес для анализа перспектив проекта;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы, посещаемые пользователем в поисках инсайтов;</li>
                <li>просмотры рекламных блоков, адаптированных под рынок Европы;</li>
                <li>номер телефона (валидация по стандартам <strong>Италии</strong>).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации или использовании формы «Бесплатная консультация» мы собираем:
            </p>
            <ul data-aos="fade-up">
                <li>имя пользователя для персонализации стратегии;</li>
                <li>e-mail и номер телефона для оперативной связи с экспертом;</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>данные о запросах на карьерный апгрейд;</li>
                <li>сведения о полученных консультациях и выбранных методологиях;</li>
                <li>финансовая информация, предусмотренная законодательством Италии для проведения платежей в ЕС.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки данных:</h2>
            <ul data-aos="fade-up">
                <li>предоставление доступа к AI-инструментам для реальных задач;</li>
                <li>учет пожеланий при развитии цифровой инфраструктуры платформы;</li>
                <li>информирование о новых материалах блога и стратегиях роста через e-mail;</li>
                <li>обеспечение экспертной поддержки по всем вопросам.</li>
            </ul>

            <h2 data-aos="fade-up">Передача данных третьим лицам</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> гарантирует конфиденциальность. Данные могут быть переданы только:
            </p>
            <ul data-aos="fade-up">
                <li>при вашем прямом согласии;</li>
                <li>по требованию компетентных органов <strong>Италии</strong> в рамках закона;</li>
                <li>в случае стратегического развития или слияния платформы.</li>
            </ul>

            <h2 data-aos="fade-up">Использование файлов cookie</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам настраивать регион (Италия) и сохранять ваши предпочтения для 
                максимально эффективного взаимодействия с <strong><?= $fullDomain ?></strong>. Вы можете переосмыслить подход 
                к использованию Cookies и отключить их в настройках браузера.
            </p>

            <h2 data-aos="fade-up">Ваши права (GDPR)</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать данные или полностью прекратить их обработку, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                <br><br>
                <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
            </p>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026. Милан, Италия.</p>
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