<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{ stylesheet_link('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic') }}
    {{ stylesheet_link('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}
    {{ stylesheet_link('css/owl.carousel.min.css') }}
    {{ stylesheet_link('css/owl.theme.default.min.css') }}
    {{ stylesheet_link('css/jquery.bxslider.css') }}
    {{ stylesheet_link('css/easyzoom.css') }}
    {{ stylesheet_link('css/style.css') }}
    {{ get_title() }}
</head>
<body>
<header>
    <div class="container">
        <div class="header--block">
            <div class="header--block__logo">
                {{ link_to('/', image('img/logo.png', 'alt' : '')) }}
            </div>
            <div class="header--block__contacts">
                <div class="phone"><span>8(800)</span> 700-70-55</div>
                <div class="email">Почта@yandex.ru</div>
            </div>
            <div class="header--block__order">
                <p>Не смогли дозвониться?</p>
                <a href="#">Закажите звонок</a>
            </div>
            <div class="header--block__cart">
                {{ cart.getMiniCart() }}
            </div>
        </div>
    </div>
</header>
<button class="toggle-menu"><i class="fa fa-bars"></i></button>
<nav>
    <div class="container">
        <div class="nav--block">
            {{ navigation.getMenu() }}
            <div class="search">
                {{ form('search') }}
                <input type="text" name="s" value="" placeholder="Введите ваш запрос">
                <button type="submit">{{ image('img/icons/search.png', 'alt' : '') }}</button>
                {{ endform() }}
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <button class="toggle-categories">Категории <i class="fa fa-bars"></i></button>
</div>
<div class="categories">
    <div class="container">
        <ul class="categories--block">
            {% for category in categories %}
                <li>
                    {{ link_to(
                        '#',
                        '
                            <span class="category--image">'~image('files/categories/'~category.image)~'</span>
                            <span class="category--caption">'~category.title~'</span>
                        '
                    ) }}
                </li>
            {% endfor %}
        </ul>
    </div>
</div>
<main class="container">
    {{ content() }}
</main>
<footer>
    <div class="container">
        <div class="footer--block">
            <div class="logo">
                {{ link_to('/', image('img/logo2.png', 'alt' : '')) }}
            </div>
            <div class="footer-info">
                <div class="menu">
                    {{ navigation.getMenu() }}
                </div>
                <div class="contacts">
                    <div class="phone">8(800) 700-70-55</div>
                    <div class="email">Почта@yandex.ru</div>
                </div>
            </div>
            <div class="social">
                <div class="social--block">
                    {{ link_to('#', '<i class="fa fa-facebook"></i>', 'class' : 'facebook') }}
                    {{ link_to('#', '<i class="fa fa-twitter"></i>', 'class' : 'twitter') }}
                    {{ link_to('#', '<i class="fa fa-linkedin"></i>', 'class' : 'linkedin') }}
                    {{ link_to('#', '<i class="fa fa-vk"></i>', 'class' : 'vk') }}
                    {{ link_to('#', '<i class="fa fa-odnoklassniki"></i>', 'class' : 'odnoklassniki') }}
                </div>
                {{ link_to('#', 'Свяжитесь с нами') }}
            </div>
        </div>
    </div>
</footer>
<div class="alert"></div>
{{ javascript_include('http://code.jquery.com/jquery-latest.js') }}
{{ javascript_include('js/jquery.bxslider.min.js') }}
{{ javascript_include('js/owl.carousel.min.js') }}
{{ javascript_include('js/easyzoom.js') }}
{{ javascript_include('js/main.js') }}
</body>
</html>
