<?php

namespace App\View\Components;

use Illuminate\View\Component;
use stdClass;

class Products extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $product = new stdClass;
        $product->name = 'Javascript Developer';
        $product->category = 'Classis Pullover Hoodie';
        $product->link = 'https://dev-tee-tops.creator-spring.com/listing/js-developer-collection?product=212';
        $product->image = 'https://vangogh.teespring.com/v3/image/5T9J_B4uqegSJzQxAXSMmr3hQ6E/800/800.jpg';
        
        $products = [
            $product
        ];
        return view('components.products', compact('products'));
    }
}
