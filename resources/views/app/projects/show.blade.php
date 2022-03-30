<x-app.layouts.master>
    <div class="case">
        <div class="case__grid">
            <div class="case__gallery case__col">
                <div>
                    <img src="{{ asset('img/projects/esport.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/projects/esport.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/projects/esport.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/projects/esport.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/projects/esport.jpg') }}" alt="">
                </div>
            </div>
            <div class="case__info case__col">
                <div class="case__subtitle">
                    <h4>{{ $project->category }}</h4>
                    <p>{{ $project->date }}</p>
                </div>
                <div class="case__title">
                    <h1>{{ $project->title }}</h1>
                </div>
                <div class="case__description">
                    <p class="mb-5">
                        {{ $project->description }}
                    </p>
                    <h3>Task</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Suscipit repudiandae maxime enim explicabo velit perspiciatis iusto amet eius quod natus,
                        nobis sint excepturi exercitationem, quas earum, debitis numquam dolor fugit.
                    </p>
                </div>
                <div class="case__cta">
                    <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer">
                        <span>Open project</span>
                        <ion-icon name="open-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card card--floating">
        <div class="d-flex mb-4 items-center">
            @if ($prevProject)
            <a class="trigger mr-2" href="{{ route('projects.show', $prevProject->id) }}">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </a>
            @endif
            @if ($nextProject)
            <a class="trigger mr-4" href="{{ route('projects.show', $nextProject->id) }}">
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
            @endif
            <h3>{{ ($nextProject || !$prevProject) ? 'Next Project' : 'Previous Project' }}</h3>
        </div>
        <h2>
            @if ($nextProject || !$prevProject)
                {{ $nextProject->title.'-'.$nextProject->id }}
            @else
                {{ $prevProject->title.'-'.$prevProject->id }}
            @endif
        </h2>
    </div>
    
</x-app.layouts.master>