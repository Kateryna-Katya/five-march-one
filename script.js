document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок и AOS
    lucide.createIcons();
    AOS.init({ duration: 1000, once: true });

    // 2. Мобильное меню
    const burger = document.querySelector('#burger');
    const mobileMenu = document.querySelector('#mobileMenu');
    const navLinks = document.querySelectorAll('.mobile-menu__list a');

    const toggleMenu = () => {
        burger.classList.toggle('burger--active');
        mobileMenu.classList.toggle('mobile-menu--active');
        document.body.style.overflow = mobileMenu.classList.contains('mobile-menu--active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    navLinks.forEach(link => link.addEventListener('click', toggleMenu));

// 3. GSAP Hero Анимация (Исправленная и дополненная)
    if (document.querySelector('.hero')) {
        const tl = gsap.timeline({ defaults: { ease: "power4.out" } });

        tl.to(".hero__title-line span", { 
            y: 0, 
            duration: 1.2, 
            stagger: 0.2, 
            delay: 0.5 
        })
        .to(".hero__subtitle, .hero__actions", { 
            opacity: 1, 
            y: -20, 
            duration: 0.8 
        }, "-=0.8")
        .to(".hero__img", { 
            scale: 1,      // Возвращаем масштаб в норму
            duration: 2,
            ease: "expo.out"
        }, "-=1.2"); // Начинаем чуть раньше окончания текста

        // Добавляем эффект парения для всей обертки изображения (Anime.js)
        anime({
            targets: '.hero__image-wrapper',
            translateY: [-15, 15],
            rotate: [-1, 1],
            duration: 5000,
            direction: 'alternate',
            loop: true,
            easing: 'easeInOutSine'
        });
    }

    // 4. Валидация телефона (только цифры)
    const phoneInput = document.querySelector('#phoneInput');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
    });

    // 5. Math Captcha
    const captchaLabel = document.querySelector('#captchaQuestion');
    const num1 = Math.floor(Math.random() * 10);
    const num2 = Math.floor(Math.random() * 10);
    const captchaResult = num1 + num2;
    captchaLabel.textContent = `${num1} + ${num2} = `;

    // 6. Обработка формы (AJAX имитация)
    const form = document.querySelector('#mainForm');
    const formMessage = document.querySelector('#formMessage');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const userCaptcha = document.querySelector('#captchaInput').value;

        if (parseInt(userCaptcha) !== captchaResult) {
            alert('Ошибка в капче! Попробуйте снова.');
            return;
        }

        const btn = form.querySelector('button');
        btn.disabled = true;
        btn.textContent = 'Отправка...';

        // Имитация задержки сети
        setTimeout(() => {
            form.reset();
            btn.disabled = false;
            btn.textContent = 'Отправить запрос';
            formMessage.textContent = 'Успешно! Мы свяжемся с вами в ближайшее время.';
            formMessage.classList.add('form__message--success');
            
            setTimeout(() => {
                formMessage.classList.remove('form__message--success');
                formMessage.textContent = '';
            }, 5000);
        }, 1500);
    });

    // 7. Cookie Popup
    const cookiePopup = document.querySelector('#cookiePopup');
    const acceptBtn = document.querySelector('#acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('cookie-popup--active');
    });

    // 8. Скролл-эффект хедера
    window.addEventListener('scroll', () => {
        const header = document.querySelector('#header');
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });
});