<?php
require_once __DIR__ . '/http/check_authorization.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Острогожский РАЙПО - Главная</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="Логотип Острогожский РАЙПО" class="logo-img">
                <div class="logo-text">
                    <h1>Острогожский РАЙПО</h1>
                    <p class="logo-subtitle">Районный потребительский кооператив</p>
                </div>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="/" class="active">Главная</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/vacancies">Вакансии</a></li>
                    <li><a href="/suppliers">Для поставщиков</a></li>
                    <?php if ($auth) if ($role === 'admin') echo '<li><a href="/vacancies-list">Управление</a></li>';
                    if ($auth) echo '<li><a href="/http/logout.php">Выход</a></li>';
                    else echo '<li><a href="/login">Вход</a></li>'; ?>
                </ul>
            </nav>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="hero">
        <div id="particles-js"></div>
        <div class="hero-content">
            <h1>Острогожский районный потребительский кооператив</h1>
            <p>Надежность и качество с 1965 года</p>
            <a href="/about" class="btn">Подробнее о нас</a>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h2>Наши преимущества</h2>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3>Опыт работы</h3>
                    <p>Более 55 лет успешной работы на рынке потребительских услуг</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Индивидуальный подход</h3>
                    <p>Мы ценим каждого клиента и предлагаем индивидуальный подход</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Качество продукции</h3>
                    <p>Работаем только с проверенными поставщиками и производителями</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Широкая сеть</h3>
                    <p>Предприятия кооператива расположены по всему Острогожскому району</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-short">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>О нашем кооперативе</h2>
                    <p>Острогожский районный потребительский кооператив - это объединение граждан и юридических лиц, созданное для удовлетворения материальных и иных потребностей своих членов.</p>
                    <p>Наш кооператив успешно работает с 1965 года, предоставляя населению качественные товары и услуги по доступным ценам.</p>
                    <a href="/about" class="btn btn-outline">Узнать больше</a>
                </div>
                <div class="about-image">
                    <img src="images/coop-building.jpg" alt="Здание РАЙПО">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>Острогожский РАЙПО</h3>
                    <p>Районный потребительский кооператив, работающий для вас с 1965 года.</p>
                </div>
                <div class="footer-column">
                    <h3>Контакты</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Воронежская обл., г. Острогожск</p>
                    <p><i class="fas fa-phone"></i> +7 (47375) 4-12-34</p>
                    <p><i class="fas fa-envelope"></i> info@ostrogozhsk-raipo.ru</p>
                </div>
                <div class="footer-column">
                    <h3>Меню</h3>
                    <ul>
                        <li><a href="/" class="active">Главная</a></li>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/vacancies">Вакансии</a></li>
                        <li><a href="/suppliers">Для поставщиков</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Острогожский РАЙПО. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
    
   <!-- Подключаем библиотеку particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<!-- Инициализация частиц -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('particles-js')) {
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 60,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.2,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                }
            },
            "retina_detect": true
        });
    }
});
</script>

</body>
</html>