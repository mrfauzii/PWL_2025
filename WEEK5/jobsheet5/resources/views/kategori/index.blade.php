@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
            <a href="../kategori/create" class="btn btn-primary mb-3">Add Kategori</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}

    {{-- Tambahkan script untuk kolom Action di DataTables --}}
    <script>
        $(document).ready(function () {
            $('#kategoriTable').on('draw.dt', function () {
                $('.btn-edit').on('click', function () {
                    var id = $(this).data('id');
                    window.location.href = "{{ url('kategori') }}/" + id + "/edit";
                });
            });
        });
    </script>
@endpush

