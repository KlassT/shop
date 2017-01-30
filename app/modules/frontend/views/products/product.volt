{{ content() }}
<div class="item">
    <p>sdfsaf</p>
    <h1 class="item--title">{{ product.title }}</h1>
    <div class="item--block">
        <div class="item--images">
            <div class="big-image easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                {{ link_to('files/products/'~product.id~'/original--'~product.MainImage.image, image('files/products/'~product.id~'/'~product.MainImage.image)) }}
            </div>
            <ul class="thumbnails">
                {% for image in product.Images %}
                    <li>
                        {{ link_to('files/products/'~product.id~'/original--'~image.image, image('files/products/'~product.id~'/thumbnails/'~image.image), 'data-standart' : url('files/products/'~product.id~'/'~image.image)) }}
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class="item--info">
            <div class="item--price">{{ product.price|price }}</div>
        </div>
    </div>
</div>