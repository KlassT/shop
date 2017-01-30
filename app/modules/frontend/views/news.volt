<div class="news--item">
    <div class="news--image">
        {{ image('files/news/'~new.image) }}
    </div>
    <div class="news--text">
        <div class="news--date">{{ new.updated_at|newsDate }}</div>
        <div class="news--title">
            {{ link_to('#', new.title) }}
        </div>
        <div class="news--description">{{ new.short_description }}</div>
    </div>
</div>