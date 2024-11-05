@extends('layouts.app')

@section('title','Legal Information')

@section('content')
<!--start main wrapper-->

    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Legal Information</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-wrap">Privacy Policy</th>
                                    <th class="text-wrap">Data Security Measures</th>
                                    <th class="text-wrap">Terms Conditions</th>
                                    <th class="text-wrap">Last Updated At</th>
                                    <th class="text-wrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-wrap">{!! $legal_information->privacy_policy !!}</td>
                                    <td class="text-wrap">{!! $legal_information->data_security_measures !!}</td>
                                    <td class="text-wrap">{!! $legal_information->terms_conditions !!}</td>
                                    <td class="text-wrap">{{ format_datetime($legal_information->updated_at) }}</td>
                                    <td>
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropedit{{ $legal_information->id }}" style="margin-right: 10px;"> 
                                            <i class="text-primary" data-feather="edit"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-lg" id="staticBackdropedit{{ $legal_information->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Update Legal Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('legal-information.update', $legal_information->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="privacy_policy" class="form-label">Privacy Policy</label>
                            <textarea name="privacy_policy" class="form-control editor" id="privacy_policy" placeholder="Enter Privacy Policy">{{ $legal_information->privacy_policy }}</textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="data_security_measures" class="form-label">Data Security Measures</label>
                            <textarea name="data_security_measures" class="form-control editor" id="data_security_measures" placeholder="Enter Data Security Measures">{{ $legal_information->data_security_measures }}</textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="terms_conditions" class="form-label">Terms Conditions</label>
                            <textarea name="terms_conditions" class="form-control editor" id="terms_conditions" placeholder="Enter Terms Conditions">{{ $legal_information->terms_conditions }}</textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

    </div>

<!--end main wrapper-->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <script>
        $('#imgInpedit').on('change', function() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blahedit').attr('src', e.target.result).css('display', 'block');
                }
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>

@endsection