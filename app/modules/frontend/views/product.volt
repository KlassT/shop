<div class="product--item">
    <div class="product--image">
        {{ link_to('#', image('files/products/'~product.id~'/small--'~product.MainImage.image, 'alt' : '')) }}
    </div>
    <div class="product--title">
        {{ link_to('#', product.title) }}
    </div>
    <div class="product--description">
        {{ product.short_description }}
    </div>
    <div class="product--buttons">
        <div class="product--price">{{ product.price }} руб.</div>
        <a href="#" class="product--buy" onclick="addToCart({{ product.id }}, 1); return false;">Купить</a>
    </div>
</div>