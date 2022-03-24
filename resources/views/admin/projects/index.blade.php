@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

<x-admin.layouts.main title="Projects">
    <x-admin.card>
        <x-admin.card-title>
            Projects
        </x-admin.card-title>
        <div class="card__body">
            <x-admin.data-table>
                <thead class="table__head">
                    <tr>
                        <td>
                            Project
                        </td>
                        <td>
                            Date
                        </td>
                        <td>
                            Category
                        </td>
                       <td></td>
                    </tr>
                </thead>
                <tbody id="table-body" class="table__body">
                    <tr>
                        <td>
                            Esport LLC
                        </td>
                        <td>
                            January, 2019
                        </td>
                        <td>
                            Web Application
                        </td>
                        <td class="table__actions">
                            <a href="">
                                View
                            </a>
                            <a href="">
                                Edit
                            </a>
                            <a href="">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Esport LLC
                        </td>
                        <td>
                            January, 2019
                        </td>
                        <td>
                            Web Application
                        </td>
                        <td class="table__actions">
                            <a href="">
                                View
                            </a>
                            <a href="">
                                Edit
                            </a>
                            <a href="">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Esport LLC
                        </td>
                        <td>
                            January, 2019
                        </td>
                        <td>
                            Web Application
                        </td>
                        <td class="table__actions">
                            <a href="">
                                View
                            </a>
                            <a href="">
                                Edit
                            </a>
                            <a href="">
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </x-admin.data-table>
            <div id="pagination"></div>
        </div>
    </x-admin.card>

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        });
    </script>
    @endsection
</x-admin.layouts.main>

