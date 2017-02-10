<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->tag->getTitle() ?>
    <?= $this->tag->stylesheetLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->tag->stylesheetLink('css/admin.css') ?>
</head>
<body>
    <aside>
        <div class="logo">
            АдминПанель
            <?= $this->tag->linkTo(['#', '', 'class' => 'fa fa-angle-left']) ?>
        </div>
        <nav>
            <ul>
                <li>
                    <?= $this->tag->linkTo(['/', '<i class="fa fa-dashboard"></i> Панель управления']) ?>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="wrapper">
        
    </div>
</body>
</html>