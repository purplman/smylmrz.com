@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

<x-admin.layouts.main title="Projects">
    <x-admin.card>
        <x-admin.card-title>
            Projects
            <x-admin.add-button href="{{ route('dashboard.projects.create') }}">
                Create new project
            </x-admin.add-button>
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
                    @foreact($projects as $project)
                    <tr>
                        <td>
                            {{ $project->title }}
                        </td>
                        <td>
                            {{ $project->date }}
                        </td>
                        <td>
                            {{ $project->category }}
                        </td>
                        <td class="table__actions">
                            <a href="{{ route('dashboard.projects.show', $project->id) }}">
                                View
                            </a>
                            <a href="{{ route('dashboard.projects.edit', $project->id) }}">
                                Edit
                            </a>
                            <a href="{{ route('dashboard.projects.destroy', $project->id) }}">
                                Delete
                            </a>
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

