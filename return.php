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
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <h2 data-aos="fade-up">Условия для оформления возврата</h2>
            <p data-aos="fade-up" data-aos-delay="100">
                Вы можете претендовать на полный или частичный возврат средств в рамках нашей программы экспертной поддержки в следующих ситуациях:
            </p>
            <ul data-aos="fade-up" data-aos-delay="150">
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание
                    предоставленной консультации или стратегии роста существенно отличается от программы,
                    заявленной на платформе <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности:</strong> При возникновении критических сбоев в нашей 
                    передовой цифровой инфраструктуре на <strong><?= $fullDomain ?></strong>, которые делают использование AI-инструментов невозможным.
                </li>
                <li>
                    <strong>«Период охлаждения» (Право на отказ):</strong> В соответствии с законодательством ЕС, вы
                    имеете право отказаться от услуг в течение 14 календарных
                    дней с момента оплаты, если вы еще не получили доступ
                    к значительному объему материалов (более 50% контента).
                </li>
            </ul>

            <h2 data-aos="fade-up">Процедура запроса на возврат</h2>
            <p data-aos="fade-up">
                Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong> и переосмыслить подход к сотрудничеству, выполните следующие шаги:
            </p>
            <ol class="custom-list" data-aos="fade-up">
                <li>
                    Направьте письмо на наш официальный email:
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    Укажите тему: «Запрос на возврат средств — Карьерный апгрейд».
                </li>
                <li>
                    Предоставьте данные: ФИО, email регистрации и название выбранного пакета услуг.
                </li>
                <li>
                    Опишите причину запроса — это поможет нам улучшить технологии, которые работают на вас.
                </li>
                <li>
                    Наша экспертная поддержка рассмотрит заявку и свяжется с вами в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2 data-aos="fade-up">Сроки и способ возврата</h2>
            <p data-aos="fade-up">
                После одобрения запроса возврат денежных средств производится в течение 7–14 рабочих дней. 
                Средства возвращаются тем же способом, которым была совершена транзакция. Обратите внимание, что 
                фактический срок зачисления зависит от регламента вашего банка в <strong>Италии</strong> или другой стране ЕС.
            </p>

            <h2 data-aos="fade-up">Исключения и ограничения</h2>
            <p data-aos="fade-up">Возврат не осуществляется, если:</p>
            <ul data-aos="fade-up">
                <li>Прошло более 14 дней с момента оплаты (конец периода охлаждения).</li>
                <li>Вы уже скачали или просмотрели более 50% материалов инновационной программы.</li>
                <li>Причиной являются технические проблемы на стороне пользователя (связь, ПО).</li>
                <li>Были нарушены условия использования платформы <strong><?= $domainTitle ?></strong>.</li>
            </ul>

            <h2 data-aos="fade-up">Изменения в политике</h2>
            <p data-aos="fade-up">
                Мы можем обновлять условия возврата, чтобы они соответствовали актуальным решениям, меняющим правила игры. 
                Актуальная версия всегда доступна на <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">Свяжитесь с нами</h2>
            <p data-aos="fade-up">
                По всем вопросам, связанным с возвратом средств или получением доступа к платформе:
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