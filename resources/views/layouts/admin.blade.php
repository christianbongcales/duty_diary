<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Duty Diary</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dropify.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="{{ asset('js/dropify.js') }}"></script>

    <!-- Sweetalert styles -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.partials._sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    @include('layouts.partials._topbar')

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Print</a>
                    </div>

                    <!-- Content Row -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            @include('layouts.partials._footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    @include('layouts.partials._scroll-up')

    <!-- Logout Modal-->

    @include('layouts.partials._logout-modal')

    <!-- Bootstrap core JavaScript-->

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>


    <script>
        function confirmDelete(id) {
            let userId = id;
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success'
                    , cancelButton: 'btn btn-danger'
                }
                , buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?'
                , text: "You won't be able to revert this!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonText: 'Yes, delete it! '
                , cancelButtonText: ' Cancel it!'
                , reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/users/${userId}`, {
                            method: 'DELETE'
                            , headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                , 'Content-Type': 'application/json'
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }

                            Swal.fire({
                                title: 'Deleted!'
                                , text: "Your file has been deleted."
                                , icon: 'success'
                                , showCancelButton: false
                                , confirmButtonColor: '#3085d6'
                                , cancelButtonColor: '#d33'
                                , confirmButtonText: 'Okay'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            })
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            // Handle any errors if necessary
                        });

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Delete Failed!'
                        , 'You have cancel the deletion process!'
                        , 'error'
                    )
                }
            })
        }

    </script>



</body>

</html>
