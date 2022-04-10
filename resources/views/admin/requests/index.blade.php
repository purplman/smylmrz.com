@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

<x-admin.layouts.main title="Requests">
    <x-admin.card>
        <x-admin.card-title>
            Requests
        </x-admin.card-title>
        <div class="card__body">
            <x-admin.data-table>
                <thead class="table__head">
                    <tr>
                        <td>
                            Client
                        </td>
                        <td>
                            Company
                        </td>
                        <td>
                            Subject
                        </td>
                        <td>
                            Budget (USD)
                        </td>
                       <td></td>
                    </tr>
                </thead>
                <tbody id="table-body" class="table__body">
                    @foreach($requests as $request)
                    <tr>
                        <td>
                            {{ $request->name }}
                        </td>
                        <td>
                            {{ $request->company_name }}
                        </td>
                        <td>
                            {{ $request->subject }}
                        </td>
                        <td>
                            {{ $request->budget }}
                        </td>
                        <td class="table__actions">
                            <a href="{{ route('dashboard.requests.show', $request->id) }}">
                                View
                            </a>
                            <form data-action="delete" method="post" action="{{ route('dashboard.requests.destroy', $request->id) }}">
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

