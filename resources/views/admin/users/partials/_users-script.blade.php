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

<script>
    $(document).ready( function () {
        $('#users-table').DataTable({
            initComplete: function(){
                $('.dataTables_filter ').append('<a href="{{ route("users.create") }}" class="btn btn-sm btn-primary ml-3">New User</a>');
            },
            processing: true,
            serverSide: true,
            ajax: '{{ route('users.index') }}',
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'index'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
                },

            ],
            "order": [[ 3, 'asc']]

        });
    } );
    </script>
