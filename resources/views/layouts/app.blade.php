<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="semi-dark">
<!-- <html lang="en" data-bs-theme="light"> -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="{{ optional(general_settings())->site_description ?? '' }}" name="description">
    <title>@yield('title') | {{ optional(general_settings())->site_title ?? '' }}</title>
    <!--favicon-->
    <link rel="icon" href="{{ optional(general_settings())->getFirstMediaUrl('favicon') ?? '' }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('assets/dashboard_asset/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/dashboard_asset/assets/js/pace.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/dashboard_asset/assets/css/extra-icons.css') }}">
    <!--plugins-->
    <link href="{{ asset('assets/dashboard_asset/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard_asset/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard_asset/assets/plugins/metismenu/mm-vertical.css') }}">
    
    <link href="{{ asset('assets/dashboard_asset/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <!-- select 2 js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard_asset/assets/plugins/simplebar/css/simplebar.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dashboard_asset/assets/plugins/notifications/css/lobibox.min.css') }}">

    <!--bootstrap css-->
    <link href="{{ asset('assets/dashboard_asset/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/dashboard_asset/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/responsive.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10"> 

    @yield('css')

</head>

<body>

    @include('layouts.header')

    @include('layouts.sidebar')

    <main class="main-wrapper">
        @yield('content')
    </main>


    @include('layouts.footer')

    <!--bootstrap js-->
    <script src="{{ asset('assets/dashboard_asset/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('assets/dashboard_asset/assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <script>
        $(".data-attributes span").peity("donut")
    </script>
    <script src="{{ asset('assets/dashboard_asset/assets/js/dashboard2.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/validation/validation-script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/notifications.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
    
    <!--plugins-->
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard_asset/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <!-- select 2 js -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="{{ asset('assets/dashboard_asset/assets/plugins/select2/js/select2-custom.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ asset('assets/dashboard_asset/assets/js/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/dashboard_asset/assets/js/form-editor.init.js') }}"></script>

    @include('layouts.notification')

    <script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
        })()
	</script>

    <!-- for choosed image show -->
    <script>
        $('#imgInp').on('change', function() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result).css('display', 'block');
                }
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
    <script>
		
		$(".datepicker").flatpickr();

		$(".time-picker").flatpickr({
				enableTime: true,
				noCalendar: true,
				dateFormat: "Y-m-d H:i",
			});

		$(".date-time").flatpickr({
				enableTime: true,
				dateFormat: "Y-m-d H:i",
		});

		$(".date-format").flatpickr({
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-range").flatpickr({
			mode: "range",
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-inline").flatpickr({
			inline: true,
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

	</script>

    <script>
        $(document).ready(function() {
            $('.delete-alert').on('click', function(e) {
                e.preventDefault();
                
                var form = $(this).closest('.delete-form'); // Find the closest form with class 'delete-form'
                var deleteUrl = form.attr('action'); // Get the form's action URL
                console.log(form);

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you really want to delete this?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: deleteUrl,
                            type: 'POST',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                _method: 'DELETE'
                            },
                            success: function(response) {
                                Swal.fire({
                                    title: 'Deleted!',
                                    text: response.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload(); // Reload page after success
                                });
                            },
                            error: function(xhr) {
                                var errorMsg = xhr.responseJSON?.error || 'There was an error deleting the item.';
                                Swal.fire({
                                    title: 'Error!',
                                    text: errorMsg,
                                    icon: 'error',
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>

    
    @yield('script')
</body>

</html>
