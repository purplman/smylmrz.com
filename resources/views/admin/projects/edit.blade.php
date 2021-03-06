<x-admin.layouts.main title="{{ $project->title }} - Edit">
    <x-admin.card>
        <x-admin.card-title>
            {{ $project->title }}
        </x-admin.card-title>
        <div class="card__body">
            <form action="{{ route('dashboard.projects.update', $project->id) }}" method="post" class="form">
                @csrf
                @method('put')
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="title" type="text" :value="$project->title">
                    Project title
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="category" type="text" :value="$project->category">
                    Category
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='Month, Year' name="date" type="text" :value="$project->date">
                    Date
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="date" type="url" :value="$project->url">
                    URL
                </x-admin.form-box>
                <div class="form__box">
                    <label class="form__label">
                        <span>Description</span>
                        <span class="required">*</span>
                    </label>
                    <textarea name="description" required rows="10" class="form__textarea form__input--dark">{{ $project->description }}</textarea>
                </div>

                <x-admin.form-button>
                    <span>
                        Save project 
                    </span>
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-admin.form-button>
            </form>
        </div>
    </x-admin.card>
</x-admin.layouts.main>

