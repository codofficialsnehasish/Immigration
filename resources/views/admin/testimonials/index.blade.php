@extends('layouts.app')

@section('title','Testimonials')

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
                        <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
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
                                    <th class="text-wrap">Title</th>
                                    <th class="text-wrap">Description</th>
                                    <th class="text-wrap">Rating</th>
                                    <th class="text-wrap">Image</th>
                                    <th class="text-wrap">Visibility</th>
                                    <th class="text-wrap">Created At</th>
                                    <th class="text-wrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($testimonials->isNotEmpty())
                                    @foreach ($testimonials as $item)
                                        <tr>
                                            <td class="text-wrap">{{ $loop->iteration }}</td>
                                            <td class="text-wrap">{{ $item->name }}</td>
                                            <td class="text-wrap">{{ $item->title }}</td>
                                            <td class="text-wrap">{!! $item->description !!}</td>
                                            <td class="text-wrap">
                                                <div class="product-rating">
                                                    <i class="bi bi-star-fill text-warning me-2"></i><span>{{ $item->rating }}</span>
                                                </div>
                                            </td>
                                            <td class="text-wrap"><img class="img-thumbnail rounded me-2" src="{{ asset($item->image) }}" width="200" alt=""></td>
                                            <td class="text-wrap">{!! check_visibility($item->is_visible) !!}</td>
                                            <td class="text-wrap">{{ format_datetime($item->created_at) }}</td>
                                            <td>
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropedit{{ $item->id }}" style="margin-right: 10px;"> 
                                                    <i class="text-primary" data-feather="edit"></i>
                                                </button>

                                                <form action="{{ route('testimonials.destroy', $item->id) }}" onsubmit="return confirm('Are you sure?')" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn" type="submit"><i class="text-danger" data-feather="trash-2"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="9" class="text-center">No data found.</td>
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
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" name="description" class="form-control editor" id="description" style="min-height: 150px !important;" placeholder="Enter Description" required=""></textarea>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="number" name="rating" class="form-control" id="rating" placeholder="Enter Rating" min="1" max="5">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <img class="img-thumbnail rounded me-2" id="blah" alt="" width="200" src="" data-holder-rendered="true" style="display: none;">
                            </div>
                            <div class="mb-3">
                                <label for="imgInp" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="imgInp">
                            </div> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-3 d-flex">Visibility</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline1" name="is_visible" class="form-check-input" value="1" checked>
                                <label class="form-check-label" for="customRadioInline1">Visible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline2" name="is_visible" class="form-check-input" value="0">
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

        @foreach($testimonials as $testimonial)
        <div class="modal fade modal-lg" id="staticBackdropedit{{ $testimonial->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Testimonials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $testimonial->name }}" placeholder="Enter Name" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ $testimonial->title }}" placeholder="Enter Title">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" name="description" class="form-control editor" id="description" style="min-height: 150px !important;" placeholder="Enter Description" required="">{{ $testimonial->description }}</textarea>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="number" name="rating" class="form-control" value="{{ $testimonial->rating }}" id="rating" placeholder="Enter Rating" min="1" max="5">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <img class="img-thumbnail rounded me-2" id="blahedit{{ $testimonial->id }}" alt="" width="200" src="{{ asset($testimonial->image) }}" data-holder-rendered="true" style="display: {{ is_have_image($testimonial->image) }};">
                            </div>
                            <div class="mb-3">
                                <label for="imgInpedit{{ $testimonial->id }}" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="imgInpedit{{ $testimonial->id }}">
                            </div> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-3 d-flex">Visibility</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline1" name="is_visible" class="form-check-input" value="1" {{ check_uncheck($testimonial->is_visible,1) }}>
                                <label class="form-check-label" for="customRadioInline1">Visible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="customRadioInline2" name="is_visible" class="form-check-input" value="0" {{ check_uncheck($testimonial->is_visible,0) }}>
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
    {{-- <script>
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
    </script> --}}
    
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