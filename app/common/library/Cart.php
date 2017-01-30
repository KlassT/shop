<?php
namespace App;

use Phalcon\Mvc\User\Component;
use App\Models\Cart as CartModel;

class Cart extends Component
{
    private $_products;

    public function getMiniCart()
    {

        $this->_products = CartModel::find([
            'user_id = :user:',
            'bind' => [
                'user' => $this->user->get()->id
            ]
        ]);

        $sum = 0;
        foreach($this->_products as $product)
        {
            $sum += $product->Product->price * $product->count;
        }

        echo '<div class="cart">';
            echo '<div class="cart--icon">';
                echo $this->tag->image(['img/icons/cart.png', 'alt' => '']);
            echo '</div>';
            echo '<div class="cart--caption">';
                echo $this->tag->linkTo('cart', 'Корзина <span>' . $sum . ' руб.</span>');
            echo '</div>';
        echo '</div>';
        /*echo '<div class="links">';
            echo $this->tag->linkTo('cart', '<span>Отложено:</span> 12');
            echo $this->tag->linkTo('cart', '<span>Сравнение:</span> 15');
        echo '</div>';*/
    }

    public function add($product, $count)
    {
        $cart = CartModel::findFirst([
            'user_id = :user_id: AND product_id = :product_id:',
            'bind' => [
                'user_id' => $this->user->get()->id,
                'product_id' => $product
            ]
        ]);
        if(!$cart)
        {
            $cart = new CartModel;
            $cart->user_id = $this->user->get()->id;
            $cart->product_id = $product;
            $cart->count = $count;
        }
        else
        {
            $cart->count += $count;
        }

        $cart->save();
    }

}