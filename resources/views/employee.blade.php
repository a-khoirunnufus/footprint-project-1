@extends('layout')

@section('title', 'Master Data Pegawai')

@section('styles')
<style>
    .dataTables_length select {
        border: 1px solid gainsboro !important;
        width: 70px !important;
        border-radius: 6px !important;
        background-position: right .5rem center !important;
    }

    .dataTables_filter input {
        border: 1px solid gainsboro !important;
        border-radius: 6px !important;
    }

    .dataTables_info {
        font-size: 0.875rem !important;
    }

    .dataTables_paginate .page-link {
        width: 30px !important;
        height: 30px !important;
        vertical-align: middle;
        line-height: 30px;
    }

    .dropdown-menu {
        display: none !important;
    }
    .dropdown-menu.show {
        display: block !important;
    }
    .dropdown-menu::before {
        content: unset !important;
    }

</style>
@endsection

@section('content')
<div class="card">
    <div class="card-header border-bottom">
        <div class="d-flex align-items-center">
            <h6 class="opacity-8 mb-0 flex-grow-1">Data Pegawai</h6>
            <button class="btn btn-primary btn-sm mb-0">
                <i class="fa fa-plus text-white me-2"></i> Tambah Data
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table id="table-employee" class="table mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder ps-2 text-center">No</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder ps-2">Nama</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder ps-2">Email</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder ps-2">Nomor HP</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder ps-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-sm text-center">1</td>
                    <td class="text-sm">
                        <span>John Michael</span>
                    </td>
                    <td class="text-sm">
                        <span>john@creative-tim.com</span>
                    </td>
                    <td class="text-sm">
                        <span>081234567890</span>
                    </td>
                    <td class="text-sm text-center">
                        <div class="dropdown">
                            <a href="#" role="button" class="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v opacity-6 text-dark"></i>
                            </a>
                            <ul class="dropdown-menu border">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-edit opacity-6 text-dark me-2"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-trash opacity-6 text-dark me-2"></i> Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-sm text-center">1</td>
                    <td class="text-sm">
                        <span>John Michael</span>
                    </td>
                    <td class="text-sm">
                        <span>john@creative-tim.com</span>
                    </td>
                    <td class="text-sm">
                        <span>081234567890</span>
                    </td>
                    <td class="text-sm text-center">
                        <div class="dropdown">
                            <a href="#" role="button" class="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v opacity-6 text-dark"></i>
                            </a>
                            <ul class="dropdown-menu border">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-edit opacity-6 text-dark me-2"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-trash opacity-6 text-dark me-2"></i> Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-sm text-center">1</td>
                    <td class="text-sm">
                        <span>John Michael</span>
                    </td>
                    <td class="text-sm">
                        <span>john@creative-tim.com</span>
                    </td>
                    <td class="text-sm">
                        <span>081234567890</span>
                    </td>
                    <td class="text-sm text-center">
                        <div class="dropdown">
                            <a href="#" role="button" class="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v opacity-6 text-dark"></i>
                            </a>
                            <ul class="dropdown-menu border">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-edit opacity-6 text-dark me-2"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-trash opacity-6 text-dark me-2"></i> Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function(){
        $('#table-employee').DataTable({
            language: {
                search: '_INPUT_',
                searchPlaceholder: "Cari Data",
                lengthMenu: '_MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': '<i class="fa fa-chevron-right opacity-6 text-dark text-xs"></i>', 'previous': '<i class="fa fa-chevron-left opacity-6 text-dark text-xs"></i>' },
                processing: "Loading...",
                emptyTable: "Tidak ada data",
                infoEmpty:  "Menampilkan 0",
                lengthMenu: "_MENU_",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                infoFiltered: "(difilter dari _MAX_ entri)",
                zeroRecords: "Tidak ditemukan data yang cocok"
            },
            dom: `
                <"d-flex justify-content-between align-items-center px-3 pt-3 pb-2" <l> <f> >
                tr
                <"d-flex justify-content-between px-3 pt-2 pb-3" <i> <p> >
            `,
        });

        // $('a[data-bs-toggle="dropdown"]').next().addClass('show')
    })
</script>
@endsection
