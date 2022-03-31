@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

<x-admin.layouts.main title="Posts">
    <x-admin.card>
        <x-admin.card-title>
            Posts
            <x-admin.add-button href="{{ route('dashboard.posts.create') }}">
                Create new post
            </x-admin.add-button>
        </x-admin.card-title>
        <div class="card__body">
            <x-admin.data-table>
                <thead class="table__head">
                    <tr>
                        <td></td>
                        <td>
                            Title
                        </td>
                       <td></td>
                    </tr>
                </thead>
                <tbody id="table-body" class="table__body">
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            @if ($post->image)
                            <img src="{{ $post->image }}" alt="" class="table__image">
                            @endif
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td class="table__actions">
                            <a href="{{ route('dashboard.posts.edit', $post->id) }}">
                                Edit
                            </a>
                            <form data-action="delete" method="post" action="{{ route('dashboard.posts.destroy', $post->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </x-admin.data-table>
        </div>
    </x-admin.card>

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/admin/datatable.js') }}"></script>

    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        });
    </script>
    @endsection
</x-admin.layouts.main>

