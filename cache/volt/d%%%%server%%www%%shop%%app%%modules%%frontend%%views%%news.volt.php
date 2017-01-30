<div class="news--item">
    <div class="news--image">
        <?= $this->tag->image(['files/news/' . $new->image]) ?>
    </div>
    <div class="news--text">
        <div class="news--date"><?= \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $new->updated_at)->diffForHumans() ?></div>
        <div class="news--title">
            <?= $this->tag->linkTo(['#', $new->title]) ?>
        </div>
        <div class="news--description"><?= $new->short_description ?></div>
    </div>
</div>