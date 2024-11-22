@extends('layouts.app')

@section('title','Banner')

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
                        <li class="breadcrumb-item active" aria-current="page">Banner</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
                <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-lg me-2"></i>Add New</button>
            </div> --}}
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th class="text-wrap">Sl. No.</th> --}}
                                    <th class="text-wrap">Title</th>
                                    <th class="text-wrap">Description</th>
                                    <th class="text-wrap">Image</th>
                                    <th>Visibility</th>
                                    <th class="text-wrap">Last Updated</th>
                                    <th class="text-wrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($banners->isNotEmpty())
                                    @foreach ($banners as $item)
                                        <tr>
                                            {{-- <td class="text-wrap">{{ $loop->iteration }}</td> --}}
                                            <td class="text-wrap">{{ $item->title }}</td>
                                            <td class="text-wrap">{!! $item->description !!}</td>
                                            <td class="text-wrap"><img class="img-thumbnail rounded me-2" src="{{ $item->getFirstMediaUrl() }}" width="200" alt=""></td>
                                            <td>{!! check_visibility($item->visibility) !!}</td>
                                            <td class="text-wrap">{{ format_datetime($item->updated_at) }}</td>
                                            <td>
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropedit{{ $item->id }}" style="margin-right: 10px;"> 
                                                    <i class="text-primary" data-feather="edit"></i>
                                                </button>

                                                {{-- <form action="{{ route('banner.destroy', $item->id) }}" onsubmit="return confirm('Are you sure?')" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn" type="submit"><i class="text-danger" data-feather="trash-2"></i></button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">No data found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <!-- Add Banner Modal -->
        <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add New Banner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Banner Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Banner Title">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control editor" id="description" placeholder="Enter Description"></textarea>
                        </div>
                        <div>
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

        @foreach($banners as $banner)
        <div class="modal fade modal-lg" id="staticBackdropedit{{ $banner->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Banner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" name="title" class="form-control" value="{{ $banner->title }}" id="title" placeholder="Enter Banner Title">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control editor" id="description" placeholder="Enter Description">{{ $banner->description }}</textarea>
                        </div>
                        <div>
                            <div class="mb-3">
                                <img class="img-thumbnail rounded me-2" id="blahedit{{ $banner->id }}" alt="" width="200" src="{{ $item->getFirstMediaUrl() }}" data-holder-rendered="true" style="display: {{ is_have_image($item->getFirstMediaUrl()) }};">
                            </div>
                            <div class="mb-3">
                                <label for="imgInpedit{{ $banner->id }}" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="imgInpedit{{ $banner->id }}">
                            </div> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-3 d-flex">Visibility</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="banner-visible" name="visibility" class="form-check-input" value="1"  {{ check_uncheck($banner->visibility,1) }}>
                                <label class="form-check-label" for="banner-visible">Visible</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="banner-invisible" name="visibility" class="form-check-input" value="0" {{ check_uncheck($banner->visibility,0) }}>
                                <label class="form-check-label" for="banner-invisible">Invisible</label>
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