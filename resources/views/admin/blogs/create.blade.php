@extends('layouts.app')

@section('title','Blogs')

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
            <div class="ms-auto">
                <a href="{{ route('blogs.index') }}" class="btn btn-primary px-4"><i class="fadeIn animated bx bx-arrow-back me-2"></i>Back</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Blog Details</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Banner Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Banner Title">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Sort Content</label>
                            <textarea name="short_content" class="form-control editor" id="short_content" placeholder="Enter Short Content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Blog Content</label>
                            <textarea name="content" class="form-control editor" id="content" placeholder="Enter Blog Content"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Blog Image</div>
                    <div class="card-body">
                        <div>
                            <div class="mb-3">
                                <img class="img-thumbnail rounded me-2" id="blah" alt="" width="200" src="" data-holder-rendered="true" style="display: none;">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="image" type="file" id="imgInp">
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Publish</div>
                    <div class="card-body">
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
                        <div class="md-3">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

<!--end main wrapper-->
@endsection