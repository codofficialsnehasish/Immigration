@extends('layouts.app')

@section('title','Dashboard')

@section('content')

    <div class="main-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
        </div>
        <!--end breadcrumb-->


        <div class="row">

            <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                <div class="card rounded-4 w-100 bg-info">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <h4 class="mb-0 text-light">{{ 0 }}</h4>
                            <h5 class="mt-3 text-light">Enquiry</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    </div>
@endsection