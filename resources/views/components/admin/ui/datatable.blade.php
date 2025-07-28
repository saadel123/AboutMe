@props(['headers' => [], 'ajaxUrl' => null])

<div class="table-container position-relative">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle mb-0" id="dynamic-table"
            style="width: 100%">
            <thead class="table-light">
                <tr>
                    @foreach ($headers as $header)
                        <th class="{{ $header['align'] ?? '' }}">{{ $header['label'] }}</th>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
</div>

@push('styles')
    <style>
        /* Enhance table look and feel */
        table.table {
            border-collapse: separate;
            border-spacing: 0;
            background-color: #fff;
            font-size: 0.95rem;
            box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.05);
        }

        table.table thead th {
            background-color: #f8f9fa !important;
            font-weight: 600;
            text-transform: uppercase;
            color: #343a40;
            padding: 1rem;
            border-bottom: 2px solid #dee2e6 !important;
        }

        table.table tbody td {
            padding: 0.9rem;
            border-color: #e9ecef !important;
            vertical-align: middle;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fdfdfe;
        }

        table.table-hover tbody tr:hover {
            background-color: #e8f0fe !important;
            transition: background-color 0.2s ease;
        }

        /* Rounded corners for the whole table */
        .table-responsive {
            border-radius: 0.75rem;
            overflow: hidden;
        }

        /* Optional: subtle row shadows */
        table.table tbody tr {
            transition: box-shadow 0.15s ease-in-out;
        }

        table.table tbody tr:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .dataTables_wrapper {
            position: relative !important;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        /* Spinner overlay for better UX */
        div.dataTables_processing {
            position: absolute !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            z-index: 1055 !important;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            min-width: 180px;
            font-size: 1rem;
            font-weight: 500;
            margin-top: 10px;
        }

        .datatable-spinner {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .spinner-border {
            width: 2rem;
            height: 2rem;
        }

        /* Improve table appearance */
        .dataTables_wrapper .dataTables_filter input {
            border-radius: 0.375rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
            margin: 25px 0px 25px;
        }

        .dataTables_length {
            margin: 25px 0px 25px;

        }

        .dataTables_wrapper .dataTables_length select {
            border-radius: 0.375rem;
            padding: 0.3rem;
            border: 1px solid #ccc;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.4rem 0.8rem;
            margin: 0 0.2rem;
            border: 1px solid transparent;
            border-radius: 0.3rem;
            transition: all 0.2s ease-in-out;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #0d6efd;
            color: white !important;
            border-color: #0d6efd;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #0d6efd;
            ;
            border: #0d6efd;
            ;
        }
    </style>
@endpush


@push('scripts')
    <script>
        $(function() {
            $('#dynamic-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ $ajaxUrl }}',
                columns: [
                    @foreach ($headers as $header)
                        {
                            data: '{{ $header['key'] }}',
                            name: '{{ $header['key'] }}'
                        },
                    @endforeach
                ],
                responsive: true,
                autoWidth: false,
                pageLength: 10,
                lengthMenu: [
                    [10, 25, 50, 100],
                    [10, 25, 50, 100]
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Rechercher...",
                    lengthMenu: "Afficher _MENU_ entrées",
                    zeroRecords: "Aucun résultat trouvé",
                    info: "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                    infoEmpty: "Aucune donnée disponible",
                    loadingRecords: "Chargement...",
                    processing: `<div class="datatable-spinner">
                                <div class="spinner-border text-primary" role="status"></div>
                                <div>Chargement...</div>
                             </div>`,
                    paginate: {
                        first: "Premier",
                        last: "Dernier",
                        next: "Suivant",
                        previous: "Précédent"
                    }
                },
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false,
                    className: 'text-end'
                }]
            });
        });
    </script>
@endpush
