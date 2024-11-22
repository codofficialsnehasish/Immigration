@extends('layouts.app')

@section('title','About Us')

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
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('about-us.update',$about->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">About Title</label>
                                    <input type="text" name="about_title" class="form-control" value="{{ $about->about_title }}" id="title" placeholder="Enter Title">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">About Description</label>
                                    <textarea name="about_description" class="form-control editor" id="description" placeholder="Enter Description">{{ $about->about_description }}</textarea>
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
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mission" class="form-label">Mission</label>
                                    <textarea name="mission" class="form-control editor" id="mission" placeholder="Enter Mission">{{ $about->mission }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="form_description" class="form-label">Vision</label>
                                    <textarea name="vision" class="form-control editor" id="form_description" placeholder="Enter Vision">{{ $about->vision }}</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<!--end main wrapper-->
@endsection