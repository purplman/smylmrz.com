<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('app.projects.index');
    }

    public function show(Project $project)
    {
        $nextProject = Project::where('id', '>', $project->id)->first();
        $prevProject = Project::where('id', '<', $project->id)->orderByDesc('id')->first();

        return view('app.projects.show', compact('project', 'nextProject', 'prevProject'));
    }
}
