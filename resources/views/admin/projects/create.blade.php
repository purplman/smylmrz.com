<x-admin.layouts.main title="New project">
    <x-admin.card>
        <x-admin.card-title>
            New project
        </x-admin.card-title>
        <div class="card__body">
            <form action="{{ route('dashboard.projects.store') }}" method="post" class="form">
                @csrf
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="title" type="text" value="">
                    Project title
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="category" type="text" value="">
                    Category
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='Month, Year' name="date" type="text" value="">
                    Date
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="url" type="url" value="">
                    URL
                </x-admin.form-box>
                <div class="form__box">
                    <label class="form__label">
                        <span>Description</span>
                        <span class="required">*</span>
                    </label>
                    <textarea name="description" required rows="10" class="form__textarea form__input--dark"></textarea>
                </div>

                <x-admin.form-button>
                    <span>
                        Create project 
                    </span>
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-admin.form-button>
            </form>
        </div>
    </x-admin.card>
</x-admin.layouts.main>

