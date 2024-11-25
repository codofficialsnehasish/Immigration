@extends('layouts.app')

@section('title','Home Data')

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
                        <li class="breadcrumb-item active" aria-current="page">Home Data</li>
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
                    <ul class="nav nav-pills nav-pills-warning mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="pill" href="#warning-pills-home" role="tab" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bi bi-house-door me-1 fs-6"></i>
                                    </div>
                                    <div class="tab-title">Banner</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#warning-pills-about" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bi bi-person me-1 fs-6"></i>
                                    </div>
                                    <div class="tab-title">About</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#warning-pills-choose-us" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bi bi-headset me-1 fs-6'></i>
                                    </div>
                                    <div class="tab-title">Why Choose Us</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#warning-pills-services" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bi bi-headset me-1 fs-6'></i>
                                    </div>
                                    <div class="tab-title">Our Services</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#warning-pills-eligibility" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class='bi bi-headset me-1 fs-6'></i>
                                    </div>
                                    <div class="tab-title">Eligibility Assessment</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="warning-pills-home" role="tabpanel">
                            <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

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
                                        <img class="img-thumbnail rounded me-2" id="blahedit{{ $banner->id }}" alt="" width="200" src="{{ $banner->getFirstMediaUrl() }}" data-holder-rendered="true" style="display: {{ is_have_image($banner->getFirstMediaUrl()) }};">
                                    </div>
                                    <div class="mb-3">
                                        <label for="imgInpedit{{ $banner->id }}" class="form-label">Image</label>
                                        <input class="form-control" name="image" type="file" id="imgInpedit{{ $banner->id }}">
                                    </div> 
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label mb-3 d-flex">Visibility</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="banner-visible" name="visibility" class="form-check-input" value="1"  {{ check_uncheck($banner->visibility,1) }}>
                                        <label class="form-check-label" for="banner-visible">Visible</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="banner-invisible" name="visibility" class="form-check-input" value="0" {{ check_uncheck($banner->visibility,0) }}>
                                        <label class="form-check-label" for="banner-invisible">Invisible</label>
                                    </div>
                                </div> --}}
                                <div class="mb-3">
                                    <button type="reset" class="btn btn-secondary">Close</button>
                                    <button type="submit" class="btn btn-info">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="warning-pills-about" role="tabpanel">
                            <form action="{{ route('home-about.update',$home_about->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading</label>
                                    <input type="text" value="{{ $home_about->heading }}" name="heading" class="form-control" id="heading" placeholder="Enter Heading" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control editor" id="description" placeholder="Enter Description">{{ $home_about->description }}</textarea>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" value="{{ $home_about->title }}" name="title" class="form-control" id="title" placeholder="Enter Title" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="left_description" class="form-label">Left Description</label>
                                        <textarea name="left_description" class="form-control editor" id="left_description" placeholder="Enter Left Description">{{ $home_about->left_description }}</textarea>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="right_description" class="form-label">Right Description</label>
                                        <textarea name="right_description" class="form-control editor" id="right_description" placeholder="Enter Right Description">{{ $home_about->right_description }}</textarea>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="warning-pills-choose-us" role="tabpanel">
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-3">
                                    <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-lg me-2"></i>Add New</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-wrap">Sl. No.</th>
                                            <th class="text-wrap">Title</th>
                                            <th class="text-wrap">Description</th>
                                            <th class="text-wrap">Visibility</th>
                                            <th class="text-wrap">Created At</th>
                                            <th class="text-wrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($why_choose_us->isNotEmpty())
                                            @foreach ($why_choose_us as $item)
                                                <tr>
                                                    <td class="text-wrap">{{ $loop->iteration }}</td>
                                                    <td class="text-wrap">{{ $item->title }}</td>
                                                    <td class="text-wrap">{!! $item->description !!}</td>
                                                    <td class="text-wrap">{!! check_visibility($item->is_visible) !!}</td>
                                                    <td class="text-wrap">{{ format_datetime($item->created_at) }}</td>
                                                    <td>
                                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropedit{{ $item->id }}" style="margin-right: 10px;"> 
                                                            <i class="text-primary" data-feather="edit"></i>
                                                        </button>
        
                                                        <form action="{{ route('why-choose-us-store.destroy', $item->id) }}" onsubmit="return confirm('Are you sure?')" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn" type="submit"><i class="text-danger" data-feather="trash-2"></i></button>
                                                        </form>
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
                        <div class="tab-pane fade" id="warning-pills-services" role="tabpanel">
                            <form action="{{ route('our-services.store',$ourservices->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="heading" class="form-label">Heading</label>
                                        <input type="text" value="{{ $ourservices->heading }}" name="heading" class="form-control" id="heading" placeholder="Enter Heading" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" value="{{ $ourservices->title }}" name="title" class="form-control" id="title" placeholder="Enter Title" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control editor" id="description" placeholder="Enter Description">{{ $ourservices->description }}</textarea>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <img class="img-thumbnail rounded me-2" id="blah" alt="" width="200" src="{{ $ourservices->getFirstMediaUrl() }}" data-holder-rendered="true" style="display: {{ is_have_image($ourservices->getFirstMediaUrl()) }};">
                                    </div>
                                    <div class="mb-3">
                                        <label for="imgInp" class="form-label">Image</label>
                                        <input class="form-control" name="image" type="file" id="imgInp">
                                    </div> 
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="warning-pills-eligibility" role="tabpanel">
                            <form action="{{ route('update-eligibility-assessment.update',$eligibility_assessment->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading</label>
                                    <input type="text" value="{{ $eligibility_assessment->heading }}" name="heading" class="form-control" id="heading" placeholder="Enter Heading" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description{{ $eligibility_assessment->id }}" class="form-label">Description</label>
                                    <textarea name="description" class="form-control editor" id="description{{ $eligibility_assessment->id }}" placeholder="Enter Description">{{ $eligibility_assessment->description }}</textarea>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                
                                <hr>
                                <h1 class="text-center"> Add New </h1>
                                <table width="100%" cellpadding="5" cellspacing="5" id="table_repeter">
                                    <tr>
                                        <th width="20%">Title</th>
                                        <th width="30%">Description</th>
                                        <th width="4%">&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="mb-3">
                                                <input type="text" value="" name="title[]" class="form-control" id="heading" placeholder="Enter Title">
                                            </div>
                                        </td>
                                        <td>
                                            <textarea name="data_description[]" class="form-control editor" placeholder="Enter Description"></textarea>
                                        </td>
                                    </tr>
                                </table>
                                <div  id="more1"><a class="btn btn-success btn-sm float-end" href="javascript:;" onClick="showMore_edit('field_1');"><i class="fa fa-plus"></i>Add More</a></div>
                                <p>&nbsp;</p>
                                <input type="hidden" name="cont" id="cont" value="1" />
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Save</button>
                                </div>
                            </form>
                            <hr>
                                <h1 class="text-center"> Details </h1>
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-wrap">Sl. No.</th>
                                                <th class="text-wrap">Title</th>
                                                <th class="text-wrap">Description</th>
                                                <th class="text-wrap">Created At</th>
                                                <th class="text-wrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($eligibility_assessment->assessment_details->isNotEmpty())
                                                @foreach ($eligibility_assessment->assessment_details as $item)
                                                    <tr>
                                                        <td class="text-wrap">{{ $loop->iteration }}</td>
                                                        <td class="text-wrap">{{ $item->title }}</td>
                                                        <td class="text-wrap">{!! $item->description !!}</td>
                                                        <td class="text-wrap">{{ format_datetime($item->created_at) }}</td>
                                                        <td>
                                                            <form action="{{ route('delete-eligibility-assessment-details.destroy', $item->id) }}" onsubmit="return confirm('Are you sure?')" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn" type="submit"><i class="text-danger" data-feather="trash-2"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center">No data found.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end main wrapper-->

    <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('why-choose-us-store.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control editor" id="description" placeholder="Enter Description"></textarea>
                        <div class="valid-tooltip">
                            Looks good!
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
    @foreach($why_choose_us as $why_choose)
    <div class="modal fade modal-lg" id="staticBackdropedit{{ $why_choose->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('why-choose-us-store.update',$why_choose->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" value="{{ $why_choose->title }}" class="form-control" id="title" placeholder="Enter Title" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control editor" id="description" placeholder="Enter Description">{{ $why_choose->description }}</textarea>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-3 d-flex">Visibility</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="customRadioInline1" name="is_visible" class="form-check-input" value="1" {{ check_uncheck($why_choose->is_visible,1) }}>
                            <label class="form-check-label" for="customRadioInline1">Visible</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="customRadioInline2" name="is_visible" class="form-check-input" value="0" {{ check_uncheck($why_choose->is_visible,0) }}>
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

@endsection

@section('script')
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

    <script>
        function showMore_edit(id){
            var idd = id.split("_");
            var idty = parseInt(idd[1]);
            idty = idty + 1;
            var table = document.getElementById("table_repeter");
            console.log(table);
            var rowCount = table.rows.length;
            
            var row = table.insertRow(rowCount);
            var cell0 = row.insertCell(0);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            // console.log(cell0,cell1, cell2, cell3);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            document.getElementById("cont").value = idty;
            
                
            cell1.innerHTML = '<input type="text" value="" name="title[]" class="form-control" id="heading" placeholder="Enter Title">';
                
            cell2.innerHTML = '<textarea name="data_description[]" class="form-control editor" id="description_${idty}" placeholder="Enter Description"></textarea>';
                
            cell3.innerHTML = "<a  href=\"javascript:;\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Remove this Item\" onClick=\"deleteRow(this)\"><i class=\"text-danger\" data-feather=\"trash-2\"></i>Del</a>";

                
            document.getElementById("more1").innerHTML = "<a class=\"btn btn-success btn-sm float-end\" href=\"javascript:;\" onClick=\"showMore_edit('field_" + idty + "');\"><i class=\"fa fa-plus\"></i>Add More</a>";
                
            // Reinitialize TinyMCE for new elements
            reinitializeTinyMCE();
                
        }
    
    
        function setoptionval(valu,id){
            // console.log(valu);
            if(valu=='select' || valu=='radio' || valu=='checkbox'){
                $('#option_'+id).show();
            }
            // if(valu == 'color'){
            //     $('#coption_'+id).show();
            // }
            else{
                $('#option_'+id).hide();
            }
        }

        function deleteRow(btn) {
            if (confirm("Are You Sure?") == true) {
                var row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);
            } else { }
        }
    </script>
    <script>
        $(document).ready(function () {
            reinitializeTinyMCE(); // Initialize TinyMCE for the first load
        });
    </script>
@endsection