        <script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{ asset('/') }}assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="{{ asset('/') }}assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{ asset('/') }}assets/js/app.js"></script>

        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

        <script>
           $(document).ready( function () {
          $('#dataTable').DataTable();
         } );
        </script>
        <script>
                CKEDITOR.replace( 'editor' );
        </script>