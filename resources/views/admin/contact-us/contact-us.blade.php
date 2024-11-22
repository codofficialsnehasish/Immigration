@extends('layouts.app')

@section('title','Contact Us')

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
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('contact.contact-us-index.create',$contact->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $contact->title }}" id="title" placeholder="Enter Title">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="heading" class="form-label">Heading</label>
                                    <input type="text" name="heading" class="form-control" value="{{ $contact->heading }}" id="heading" placeholder="Enter Heading">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control editor" id="description" placeholder="Enter Description">{{ $contact->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="form_title" class="form-label">Form Title</label>
                                    <input type="text" name="form_title" class="form-control" value="{{ $contact->form_title }}" id="form_title" placeholder="Enter Form Title">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="form_heading" class="form-label">Form Heading</label>
                                    <input type="text" name="form_heading" class="form-control" value="{{ $contact->form_heading }}" id="form_heading" placeholder="Enter Form Heading">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="form_description" class="form-label">Form Description</label>
                                    <textarea name="form_description" class="form-control editor" id="form_description" placeholder="Enter Form Description">{{ $contact->form_description }}</textarea>
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