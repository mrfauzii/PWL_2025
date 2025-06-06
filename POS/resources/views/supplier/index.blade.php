@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <button onclick="modalAction(`{{ url('/supplier/import') }}`)" class="btn btn-info btn-sm">Import Data</button>
                <a href="{{ url('/supplier/export_excel') }}" class="btn btn-primary btn-sm"><i class="fa fa-file-excel"></i> Export Excel</a>
                <a href="{{ url('/supplier/export_pdf') }}" class="btn btn-warning btn-sm"><i class="fa fa-file-pdf"></i> Export PDF</a>
                <button onclick="modalAction(`{{ url('/supplier/create_ajax') }}`)" class="btn btn-success btn-sm">Tambah Data</button>
            </div>
        </div>
        <div class="card-body">            
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            
            <table class="table table-bordered table-sm table-striped table-hover" id="table-supplier" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat Supplier</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
@endsection 

@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }
        var tableSupplier;
        $(document).ready(function() {
            tableSupplier = $('#table-supplier').DataTable({
                processing: true,
                serverSide: true, 
                ajax: {
                    "url": "{{ url('supplier/list') }}",
                    "dataType": "json",
                    "type": "POST",
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        width: "5%",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "supplier_kode",
                        className: "",
                        width: "10%",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "supplier_nama",
                        className: "",
                        width: "37%",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "supplier_alamat",
                        className: "",
                        width: "30%",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "aksi",
                        className: "text-center",
                        width: "14%",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#table-supplier_filter input').unbind().bind().on('keyup', function(e) {
                if (e.keyCode == 13) { // enter key
                    tableSupplier.search(this.value).draw();
                }
            });
        });
    </script>
@endpush