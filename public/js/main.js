$(function () {
    $('.slider--block').bxSlider();

    $('.carousel').owlCarousel();

    $('.toggle-categories').click(function () {
        $('.categories').toggleClass('showed');
    });

    $('.toggle-menu').click(function () {
        $('nav').toggleClass('showed');
        $('body').toggleClass('no-scroll');
    });

    var $easyzoom = $('.easyzoom').easyZoom();

    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);
        var bigImgLink = $('.big-image a');
        var bigImgImage = $('.big-image a img');

        e.preventDefault();

        console.log($this);

        bigImgImage.attr('src', $this.data('standart'));

        api1.swap($this.data('standard'), $this.attr('href'));

    });
});

function addToCart(product, count)
{
    var loader = $('.loader');
    loader.show();
    $('body').addClass('no-scroll');
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'cart/add/' + product + '/' + count);
    xhr.send();
    xhr.onreadystatechange = function () {
        if(xhr.readyState != 4) return;
        if(xhr.status == 200)
        {
            document.querySelector('.header--block__cart').innerHTML = xhr.responseText;
            loader.hide();
            $('body').removeClass('no-scroll');
            flashMessage('Товар успешно добавлен', 'success');
        }
    }
}

function flashMessage(message, type)
{
    var messageBlock = document.querySelector('.alert');
    messageBlock.classList.add('alert-' + type);
    messageBlock.innerHTML = message;
    messageBlock.style.display = 'block';

    setTimeout(function () {
        messageBlock.style.display = 'none';
    }, 5000);
}