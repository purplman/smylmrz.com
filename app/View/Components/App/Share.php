<?php

namespace App\View\Components\App;

use App\Models\SharingPlatforms;
use Illuminate\View\Component;

class Share extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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
        $sharing_platforms = SharingPlatforms::all();

        return view('components.app.share', compact('sharing_platforms'));
    }
}
