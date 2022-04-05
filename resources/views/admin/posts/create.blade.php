@section('styles')
<link href="{{ asset('css/admin/froala-editor.css') }}" rel="stylesheet" type="text/css" />
@endsection

<x-admin.layouts.main title="New post">
    <x-admin.card>
        <x-admin.card-title>
            New post
        </x-admin.card-title>
        <div class="card__body">
            <form action="{{ route('dashboard.posts.store') }}" method="post" class="form">
                @csrf
                <x-admin.form-box class="form__input--dark" required="true" placeholder='' name="title" type="text" value="">
                    Post title
                </x-admin.form-box>
                <div class="form__box">
                    <label class="form__label">
                        <span>Content</span>
                        <span class="required">*</span>
                    </label>
                    <textarea id="content" name="content" required rows="10" class="form__textarea form__input--dark"></textarea>
                </div>

                <x-admin.form-button>
                    <span>
                        Publish post 
                    </span>
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-admin.form-button>
            </form>
        </div>
    </x-admin.card>

    @section('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/froala-editor.js') }}"></script>

    <script>
        const editor = new FroalaEditor('#content');
    </script>
    @endsection
</x-admin.layouts.main>

