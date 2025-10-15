<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sova Shop - Магазин жидкостей и аксессуаров для вейпов</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <h1><i class="fas fa-owl"></i> Sova Shop</h1>
                </div>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="#liquids" class="nav-link">Жидкости</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Контакты</a>
                    </li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h2 class="hero-title">Премиальные жидкости для вейпа</h2>
            <p class="hero-subtitle">Откройте мир насыщенных вкусов и качественных аксессуаров</p>
            <a href="#liquids" class="cta-button">Смотреть каталог</a>
        </div>
        <div class="hero-background"></div>
    </section>

    <!-- Liquids Section -->
    <section id="liquids" class="liquids-section">
        <div class="container">
            <h2 class="section-title">Наши жидкости</h2>
            <div class="liquids-grid">
                <?php
                // Массив с жидкостями (замените эти данные на информацию из вашей таблицы)
                $liquids = [
                    [
                        'name' => 'Рик и Морти',
                        'flavor' => 'Экзотические фрукты',
                        'nicotine' => '3mg',
                        'volume' => '60ml',
                        'price' => '1200 руб.',
                        'image' => 'images/rick-morty.jpg'
                    ],
                    [
                        'name' => 'Самоубийца',
                        'flavor' => 'Красные ягоды',
                        'nicotine' => '6mg',
                        'volume' => '30ml',
                        'price' => '900 руб.',
                        'image' => 'images/suicide.jpg'
                    ],
                    [
                        'name' => 'Космический взрыв',
                        'flavor' => 'Арбуз и ментол',
                        'nicotine' => '3mg',
                        'volume' => '60ml',
                        'price' => '1100 руб.',
                        'image' => 'images/space-blast.jpg'
                    ],
                    [
                        'name' => 'Фруктовый микс',
                        'flavor' => 'Тропические фрукты',
                        'nicotine' => '0mg',
                        'volume' => '100ml',
                        'price' => '1500 руб.',
                        'image' => 'images/fruit-mix.jpg'
                    ]
                ];

                foreach ($liquids as $liquid) {
                    echo "
                    <div class='liquid-card'>
                        <div class='card-image'>
                            <img src='{$liquid['image']}' alt='{$liquid['name']}' onerror=\"this.src='https://via.placeholder.com/300x300/2c3e50/ffffff?text=SOVA+SHOP'\">
                        </div>
                        <div class='card-content'>
                            <h3 class='liquid-name'>{$liquid['name']}</h3>
                            <p class='liquid-flavor'><i class='fas fa-wine-bottle'></i> Вкус: {$liquid['flavor']}</p>
                            <p class='liquid-nicotine'><i class='fas fa-bolt'></i> Никотин: {$liquid['nicotine']}</p>
                            <p class='liquid-volume'><i class='fas fa-flask'></i> Объем: {$liquid['volume']}</p>
                            <div class='card-footer'>
                                <span class='price'>{$liquid['price']}</span>
                                <button class='buy-button' onclick='showOrderForm(\"{$liquid['name']}\")'>
                                    <i class='fas fa-shopping-cart'></i> Заказать
                                </button>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2 class="section-title">О Sova Shop</h2>
                    <p>Мы - ведущий магазин жидкостей и аксессуаров для вейпов, предлагающий только качественную продукцию от проверенных производителей.</p>
                    <div class="features">
                        <div class="feature">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Гарантия качества</h3>
                            <p>Все товары проходят строгий контроль качества</p>
                        </div>
                        <div class="feature">
                            <i class="fas fa-shipping-fast"></i>
                            <h3>Быстрая доставка</h3>
                            <p>Доставляем заказы по всему городу в течение дня</p>
                        </div>
                        <div class="feature">
                            <i class="fas fa-headset"></i>
                            <h3>Поддержка 24/7</h3>
                            <p>Всегда готовы ответить на ваши вопросы</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Контакты</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Адрес</h3>
                            <p>г. Москва, ул. Примерная, д. 123</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Телефон</h3>
                            <p>+7 (999) 123-45-67</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@sovashop.ru</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Время работы</h3>
                            <p>Пн-Вс: 10:00 - 22:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><i class="fas fa-owl"></i> Sova Shop</h3>
                    <p>Ваш надежный партнер в мире вейпинга</p>
                </div>
                <div class="footer-section">
                    <h4>Быстрые ссылки</h4>
                    <ul>
                        <li><a href="#home">Главная</a></li>
                        <li><a href="#liquids">Жидкости</a></li>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Социальные сети</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-vk"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Sova Shop. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <!-- Order Modal -->
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Заказ жидкости</h3>
            <form id="orderForm">
                <input type="hidden" id="liquidName" name="liquidName">
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Телефон:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Количество:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="10">
                </div>
                <button type="submit" class="submit-button">Отправить заказ</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>