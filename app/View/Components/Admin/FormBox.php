<?php

namespace App\View\Components\Admin;

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
        public string $placeholder,
        public string $value = '',
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
        return view('components.admin.form-box');
    }
}
