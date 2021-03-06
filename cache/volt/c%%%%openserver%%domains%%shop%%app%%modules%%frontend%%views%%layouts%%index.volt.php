<div class="slider">
    <div class="slider--block">
        <div>
            <?= $this->tag->image(['files/slides/asdfasdg.jpg', 'alt' => '']) ?>
            <?= $this->tag->linkTo(['#', 'Узнать больше', 'class' => 'more']) ?>
        </div>
        <div>
            <?= $this->tag->image(['files/slides/asdfasdg.jpg', 'alt' => '']) ?>
            <?= $this->tag->linkTo(['#', 'Узнать больше', 'class' => 'more']) ?>
        </div>
    </div>
</div>
<div class="services">
    <div class="services--item">
        <div class="icon"><?= $this->tag->image(['img/icons/installation.png', 'alt' => '']) ?></div>
        <div class="caption">Монтаж оборудования</div>
    </div>
    <div class="services--item">
        <div class="icon"><?= $this->tag->image(['img/icons/delivery.png', 'alt' => '']) ?></div>
        <div class="caption">Доставка заказов</div>
    </div>
    <div class="services--item">
        <div class="icon"><?= $this->tag->image(['img/icons/service.png', 'alt' => '']) ?></div>
        <div class="caption">Сервисное обслуживание</div>
    </div>
    <div class="services--item">
        <div class="icon"><?= $this->tag->image(['img/icons/book.png', 'alt' => '']) ?></div>
        <div class="caption">Объекты под ключ</div>
    </div>
</div>
<section class="products">
    <div class="section--header">
        <h2 class="section--title">Распродажа</h2>
        <div class="section--more"><?= $this->tag->linkTo(['#', 'Показать все предложения']) ?></div>
    </div>
    <div class="section--body">
        <?php foreach ($saleProducts as $product) { ?>
            <?= $this->partial('product') ?>
        <?php } ?>
    </div>
</section>
<section class="row">
    <div class="section--block">
        <div class="section--header">
            <h2 class="section--title">Новости</h2>
            <div class="section--more"><?= $this->tag->linkTo(['#', 'Все новости']) ?></div>
        </div>
        <div class="news">
            <?php foreach ($news as $new) { ?>
                <?= $this->partial('news') ?>
            <?php } ?>
        </div>
    </div>
    <div class="section--block">
        <div class="section--header">
            <h2 class="section--title">Акции</h2>
            <div class="section--more"><?= $this->tag->linkTo(['#', 'Все акции']) ?></div>
        </div>
        <div class="news">
            <?php foreach ($stocks as $new) { ?>
                <?= $this->partial('news') ?>
            <?php } ?>
        </div>
    </div>
</section>
<section class="info">
    <div class="section--header">
        <h2 class="section--title">Кондиционеры, вентиляция, котлы и другая климатическая техника в "Технологии Климата"</h2>
    </div>
    <p>Компания «Технологии Климата» специализируется на продаже, монтаже и сервисном обслуживании климатической техники и является одной из ведущих организаций на климатическом рынке России. Отделения компании расположены в Москве, Санкт-Петербурге и Ростове-на-Дону, так же осуществляется поставка оборудования во все регионы РФ. Ассортимент каталога насчитывает более 20 000 позиций, от бытовой техники до тяжелого промышленного оборудования. Для удобства клиентов сайт компании выполнен в формате удобного интернет-магазина кондиционеров и другой климатической техники, в котором можно легко подобрать и заказать необходимое Вам оборудование. Помимо этого при офисах компании открыты магазины с выставочными залами, в которых клиенты могут детально ознакомится с продукцией и получить подробную консультацию специалистов.</p>
    <h3>Продажа кондиционеров. Монтаж и сервисное обслуживание.</h3>
    <p>Кондиционер уже давно стал привычным и необходимым прибором для создания комфорта в квартире, офисе и производственном здании. Компания «Технологии Климата» специализируется на кондиционерах всех типов от настенных сплит-систем до VRF систем и установок центрального кондиционирования. Цена кондиционера все чаще играет решающую роль в выборе поставщика. Наша компания сотрудничает с производителями оборудования на прямую, поэтому у нас вы можете купить кондиционер по очень привлекательной стоимости. При этом мы обеспечиваем высокое качество обслуживания клиентов и предоставляем полный комплекс услуг по монтажу и сервисному обслуживанию кондиционеров воздуха.</p>
    <h3>Поставка и монтаж систем отопления, вентиляции и других инженерных систем.</h3>
    <p>Поставка и монтаж систем отопления, вентиляции и других инженерных систем.</p>
    <p>Нужна консультация специалиста? Хотите заказать оборудование или монтаж? Позвоните нам по единому бесплатному телефону 8-800-700-70-55 или обращайтесь в подразделение компании в своем регионе. Мы всегда рады Вам помочь !</p>
</section>
<section class="brands">
    <?= $this->tag->image(['img/brands/daikin.png']) ?>
    <?= $this->tag->image(['img/brands/electrolux.png']) ?>
    <?= $this->tag->image(['img/brands/lessar.png']) ?>
    <?= $this->tag->image(['img/brands/toshiba.png']) ?>
    <?= $this->tag->image(['img/brands/fujitsu.png']) ?>
    <?= $this->tag->image(['img/brands/airwell.png']) ?>
</section>