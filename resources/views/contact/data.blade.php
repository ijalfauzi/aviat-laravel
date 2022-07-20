@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table id="example" class="table table-borderless table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>WhatsApp</th>
                        <th>Email</th>
                        <th>Perusahaan</th>
                        <th>Domisili</th>
                        <th>Kebutuhan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1   
                    @endphp
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->whatsapp }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->perusahaan }}</td>
                        <td>{{ $contact->domisili }}</td>
                        <td>{{ $contact->kebutuhan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

        <!-- BEGIN: Page Vendor JS-->
        <script src="/frest/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
        <script src="/frest/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="/frest/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
        <script src="/frest/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
        <script src="/frest/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
        <script src="/frest/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
        <script src="/frest/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
        <script src="/frest/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Page JS-->
        <script src="/frest/app-assets/js/scripts/datatables/datatable.js"></script>
        <!-- END: Page JS-->

    <script type="text/javascript">
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script>

@endsection