<?= $this->getContent() ?>
<div class="item">
    <p>sdfsaf</p>
    <h1 class="item--title"><?= $product->title ?></h1>
    <div class="item--block">
        <div class="item--images">
            <div class="big-image easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                <?= $this->tag->linkTo(['files/products/' . $product->id . '/original--' . $product->MainImage->image, $this->tag->image(['files/products/' . $product->id . '/' . $product->MainImage->image])]) ?>
            </div>
            <ul class="thumbnails">
                <?php foreach ($product->Images as $image) { ?>
                    <li>
                        <?= $this->tag->linkTo(['files/products/' . $product->id . '/original--' . $image->image, $this->tag->image(['files/products/' . $product->id . '/thumbnails/' . $image->image]), 'data-standart' => $this->url->get('files/products/' . $product->id . '/' . $image->image)]) ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="item--info">
            <div class="item--price"><?= $product->price . " руб." ?></div>
        </div>
    </div>
</div>