<?php

namespace App\View\Components\App;

use Illuminate\View\Component;

class FormBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public bool $required,
        public string $type,
        public string $name,
        public string $placeholder
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app.form-box');
    }
}
