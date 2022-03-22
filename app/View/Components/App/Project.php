<?php

namespace App\View\Components\App;

use App\Models\Project as ModelsProject;
use Illuminate\View\Component;

class Project extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public ModelsProject $project, public string $size = '')
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
        return view('components.app.project');
    }
}
