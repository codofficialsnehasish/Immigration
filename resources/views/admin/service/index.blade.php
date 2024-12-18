@extends('layouts.app')

@section('title','Services')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10"> 
@endsection

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
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-lg me-2"></i>Add New</button>
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
                                    <th class="text-wrap">Sl. No.</th>
                                    <th class="text-wrap">Name</th>
                                    <th class="text-wrap">Description</th>
                                    <th class="text-wrap">Details Description</th>
                                    <th class="text-wrap">Price</th>
                                    <th class="text-wrap">Image</th>
                                    <th class="text-wrap">Visibility</th>
                                    <th class="text-wrap">Created At</th>
                                    <th class="text-wrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($services->isNotEmpty())
                                    @foreach ($services as $item)
                                        <tr>
                                            <td class="text-wrap">{{ $loop->iteration }}</td>
                                            <td class="text-wrap">{{ $item->name }}</td>
                                            <td class="text-wrap">{!! $item->description !!}</td>
                                            <td class="text-wrap">{!! $item->long_description !!}</td>
                                            <td class="text-wrap">{{ $item->price }}</td>
                                            <td class="text-wrap"><img class="img-thumbnail rounded me-2" src="{{ $item->getFirstMediaUrl() }}" width="200" alt=""></td>
                                            <td>{!! check_visibility($item->visibility) !!}</td>
                                            <td class="text-wrap">{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:i A') }}</td>
                                            <td>
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropedit{{ $item->id }}" style="margin-right: 10px;"> 
                                                    <i class="text-primary" data-feather="edit"></i>
                                                </button>

                                                <form action="{{ route('services.destroy', $item->id) }}" onsubmit="return confirm('Are you sure?')" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn" type="submit"><i class="text-danger" data-feather="trash-2"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">No data found.</td>
                                    </tr>
                                @endif


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="service-name" class="form-label">Service Name</label>
                                <input type="text" name="name" class="form-control" id="service-name" placeholder="Enter Service Name" required="">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="service-price" class="form-label">Service Price</label>
                                <input type="number" name="price" class="form-control" value="" id="service-price" placeholder="Enter Service Price" required="" step="0.01">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Service Description</label>
                            <textarea name="description" class="form-control editor" id="description"  placeholder="Enter Service Description"></textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="longs_description" class="form-label">Service Details Description</label>
                            <textarea name="longs_description" class="form-control editor" id="longs_description"  placeholder="Enter Service Details Description"></textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <img class="img-thumbnail rounded me-2" id="blah" alt="" width="200" src="" data-holder-rendered="true" style="display: none;">
                            </div>
                            <div class="mb-3">
                                <label for="imgInp" class="form-label">Service Image</label>
                                <input class="form-control" name="image" type="file" id="imgInp">
                            </div> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-3 d-flex">Visibility</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline1" name="visibility" class="form-check-input" value="1" checked>
                                <label class="form-check-label" for="customRadioInline1">Visible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline2" name="visibility" class="form-check-input" value="0">
                                <label class="form-check-label" for="customRadioInline2">Invisible</label>
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

        @foreach($services as $service)
        <div class="modal fade modal-lg" id="staticBackdropedit{{ $service->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('services.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="service-name" class="form-label">Service Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $service->name }}" id="service-name" placeholder="Enter Service Name" required="">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="service-price" class="form-label">Service Price</label>
                                <input type="number" name="price" class="form-control" value="{{ $service->price }}" id="service-price" placeholder="Enter Service Price" required="" step="0.01">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="service-description{{ $service->id }}" class="form-label">Service Description</label>
                            <textarea name="description" class="form-control editor" id="service-description{{ $service->id }}" style="min-height: 150px !important;" placeholder="Enter Service Description" required="">{{ $service->description }}</textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="long_description{{ $service->id }}" class="form-label">Service Details Description</label>
                            <textarea name="long_description" class="form-control editor" id="long_description{{ $service->id }}"  placeholder="Enter Service Details Description" required="">{{ $service->long_description }}</textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <img class="img-thumbnail rounded me-2" id="blahedit{{ $service->id }}" alt="" width="200" src="{{ $item->getFirstMediaUrl() }}" data-holder-rendered="true" style="display: {{ is_have_image($item->getFirstMediaUrl()) }};">
                            </div>
                            <div class="mb-3">
                                <label for="imgInpedit{{ $service->id }}" class="form-label">Service Image</label>
                                <input class="form-control" name="image" type="file" id="imgInpedit{{ $service->id }}">
                            </div> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-3 d-flex">Visibility</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline1" name="visibility" class="form-check-input" value="1" @if($service->visibility == 1) checked @endif>
                                <label class="form-check-label" for="customRadioInline1">Visible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline2" name="visibility" class="form-check-input" value="0" @if($service->visibility == 0) checked @endif>
                                <label class="form-check-label" for="customRadioInline2">Invisible</label>
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
        @endforeach

    </div>

<!--end main wrapper-->
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
    <script>
        $('input[type="file"]').on('change', function() {
            const id = $(this).attr('id').replace('imgInpedit', '');
            var input = this;
            var preview = $('#blahedit' + id);

            if (input.files && input.files[0]) {
                var file = input.files[0];

                // Check if the selected file is an image
                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        preview.attr('src', e.target.result).css('display', 'block');
                    }
                    reader.readAsDataURL(file);
                } else {
                    // If the file is not an image, hide the preview and optionally show an error message
                    preview.css('display', 'none');
                    alert('Please select a valid image file.');
                    // Clear the file input to avoid accidental submission of a non-image file
                    $(this).val('');
                }
            }
        });
    </script>

@endsection