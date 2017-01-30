<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->tag->stylesheetLink('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic') ?>
    <?= $this->tag->stylesheetLink('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->tag->stylesheetLink('css/owl.carousel.min.css') ?>
    <?= $this->tag->stylesheetLink('css/owl.theme.default.min.css') ?>
    <?= $this->tag->stylesheetLink('css/jquery.bxslider.css') ?>
    <?= $this->tag->stylesheetLink('css/easyzoom.css') ?>
    <?= $this->tag->stylesheetLink('css/style.css') ?>
    <?= $this->tag->getTitle() ?>
</head>
<body>
<header>
    <div class="container">
        <div class="header--block">
            <div class="header--block__logo">
                <?= $this->tag->linkTo(['/', $this->tag->image(['img/logo.png', 'alt' => ''])]) ?>
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
                <?= $this->cart->getMiniCart() ?>
            </div>
        </div>
    </div>
</header>
<button class="toggle-menu"><i class="fa fa-bars"></i></button>
<nav>
    <div class="container">
        <div class="nav--block">
            <?= $this->navigation->getMenu() ?>
            <div class="search">
                <?= $this->tag->form(['search']) ?>
                <input type="text" name="s" value="" placeholder="Введите ваш запрос">
                <button type="submit"><?= $this->tag->image(['img/icons/search.png', 'alt' => '']) ?></button>
                <?= $this->tag->endform() ?>
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
            <?php foreach ($categories as $category) { ?>
                <li>
                    <?= $this->tag->linkTo(['#', '
                            <span class="category--image">' . $this->tag->image(['files/categories/' . $category->image]) . '</span>
                            <span class="category--caption">' . $category->title . '</span>
                        ']) ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<main class="container">
    <?= $this->getContent() ?>
</main>
<footer>
    <div class="container">
        <div class="footer--block">
            <div class="logo">
                <?= $this->tag->linkTo(['/', $this->tag->image(['img/logo2.png', 'alt' => ''])]) ?>
            </div>
            <div class="footer-info">
                <div class="menu">
                    <?= $this->navigation->getMenu() ?>
                </div>
                <div class="contacts">
                    <div class="phone">8(800) 700-70-55</div>
                    <div class="email">Почта@yandex.ru</div>
                </div>
            </div>
            <div class="social">
                <div class="social--block">
                    <?= $this->tag->linkTo(['#', '<i class="fa fa-facebook"></i>', 'class' => 'facebook']) ?>
                    <?= $this->tag->linkTo(['#', '<i class="fa fa-twitter"></i>', 'class' => 'twitter']) ?>
                    <?= $this->tag->linkTo(['#', '<i class="fa fa-linkedin"></i>', 'class' => 'linkedin']) ?>
                    <?= $this->tag->linkTo(['#', '<i class="fa fa-vk"></i>', 'class' => 'vk']) ?>
                    <?= $this->tag->linkTo(['#', '<i class="fa fa-odnoklassniki"></i>', 'class' => 'odnoklassniki']) ?>
                </div>
                <?= $this->tag->linkTo(['#', 'Свяжитесь с нами']) ?>
            </div>
        </div>
    </div>
</footer>
<div class="alert"></div>
<?= $this->tag->javascriptInclude('http://code.jquery.com/jquery-latest.js') ?>
<?= $this->tag->javascriptInclude('js/jquery.bxslider.min.js') ?>
<?= $this->tag->javascriptInclude('js/owl.carousel.min.js') ?>
<?= $this->tag->javascriptInclude('js/easyzoom.js') ?>
<?= $this->tag->javascriptInclude('js/main.js') ?>
</body>
</html>
