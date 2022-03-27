@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

<x-admin.layouts.main title="Products">
    <x-admin.card>
        <x-admin.card-title>
            Products
            <x-admin.add-button href="{{ route('dashboard.products.create') }}">
                Create new product
            </x-admin.add-button>
        </x-admin.card-title>
        <div class="card__body">
            <x-admin.data-table>
                <thead class="table__head">
                    <tr>
                        <td></td>
                        <td>
                            Product
                        </td>
                        <td>
                            Category
                        </td>
                       <td></td>
                    </tr>
                </thead>
                <tbody id="table-body" class="table__body">
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <img src="{{ $product->image_link }}" width="120" alt="">
                        </td>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->category }}
                        </td>
                        <td class="table__actions">
                            <a href="{{ route('dashboard.products.edit', $product->id) }}">
                                Edit
                            </a>
                            <form data-action="delete" method="post" action="{{ route('dashboard.products.destroy', $product->id) }}">
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

