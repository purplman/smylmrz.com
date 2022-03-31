<x-admin.layouts.main title="{{ $post->title }} - Edit">
    <x-admin.card>
        <x-admin.card-title>
            {{ $post->title }}
        </x-admin.card-title>
        <div class="card__body">
            <form action="{{ route('dashboard.posts.update', $post->id) }}" method="post" class="form">
                @csrf
                @method('put')
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="title" type="text" :value="$post->title">
                    Post title
                </x-admin.form-box>
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="image" type="text" :value="$post->image">
                    Image
                </x-admin.form-box>
                <div class="form__box">
                    <label class="form__label">
                        <span>Description</span>
                        <span class="required">*</span>
                    </label>
                    <textarea name="content" required rows="10" class="form__textarea form__input--dark">{{ $post->content }}</textarea>
                </div>

                <x-admin.form-button>
                    <span>
                        Save post 
                    </span>
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-admin.form-button>
            </form>
        </div>
    </x-admin.card>
</x-admin.layouts.main>

