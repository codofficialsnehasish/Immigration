{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<!--start main wrapper-->
    <div class="main-content">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
    </div>
    <!--end breadcrumb-->


    {{-- <div class="row">
        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-info bg-opacity-10 text-info">
                                <span class="material-icons-outlined fs-5">event</span>
                            </div>
                            <div>
                            <span class="text-danger d-flex align-items-center">-35%<i class="material-icons-outlined">expand_less</i></span>
                            </div>
                        </div>
                        <div>
                            <h4 class="mb-0">{{ 0 }}</h4>
                            <p class="mb-3">Total Bookings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-info bg-opacity-10 text-info">
                            <span class="material-icons-outlined fs-5">event</span>
                        </div>
                        <div><span class="text-danger d-flex align-items-center">-35%<i class="material-icons-outlined">expand_less</i></span></div>
                    </div>
                    <div>
                        <h4 class="mb-0">{{ 0 }}</h4>
                        <p class="mb-3">Today Appoinments</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->

    <div class="row">
        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary">
                            <span class="material-icons-outlined fs-5">account_circle</span>
                        </div>
                        <div>
                            <span class="text-success d-flex align-items-center">+24%
                                <i class="material-icons-outlined">expand_less</i>
                            </span>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-0">{{ 0 }}</h4>
                        <p class="mb-3">Total Employee</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 text-success">
                        <span class="material-icons-outlined fs-5">account_circle</span>
                    </div>
                    <div>
                    <span class="text-success d-flex align-items-center">+14%<i
                        class="material-icons-outlined">expand_less</i></span>
                    </div>
                </div>
                <div>
                    <h4 class="mb-0">{{ 0 }}</h4>
                    <p class="mb-3">Total Astrologer</p>
                </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 text-success">
                        <span class="material-icons-outlined fs-5">person</span>
                    </div>
                    <div>
                    <span class="text-success d-flex align-items-center">+14%<i
                        class="material-icons-outlined">expand_less</i></span>
                    </div>
                </div>
                <div>
                    <h4 class="mb-0">{{ 0 }}</h4>
                    <p class="mb-3">Total Users</p>
                </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-info bg-opacity-10 text-info">
                                <span class="material-icons-outlined fs-5">event</span>
                            </div>
                            <div>
                            <span class="text-danger d-flex align-items-center">-35%<i class="material-icons-outlined">expand_less</i></span>
                            </div>
                        </div>
                        <div>
                            <h4 class="mb-0">{{ 0 }}</h4>
                            <p class="mb-3">Total Bookings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-info bg-opacity-10 text-info">
                            <span class="material-icons-outlined fs-5">event</span>
                        </div>
                        <div><span class="text-danger d-flex align-items-center">-35%<i class="material-icons-outlined">expand_less</i></span></div>
                    </div>
                    <div>
                        <h4 class="mb-0">{{ 0 }}</h4>
                        <p class="mb-3">Today Employee Present</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 col-xxl-2 d-flex">
            <div class="card rounded-4 w-100">
                <div class="card-body">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-info bg-opacity-10 text-info">
                            <span class="material-icons-outlined fs-5">event</span>
                        </div>
                        <div><span class="text-danger d-flex align-items-center">-35%<i class="material-icons-outlined">expand_less</i></span></div>
                    </div>
                    <div>
                        <h4 class="mb-0">{{ 0 }}</h4>
                        <p class="mb-3">Today Appoinments</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row--> --}}
    

    </div>
<!--end main wrapper-->
@endsection