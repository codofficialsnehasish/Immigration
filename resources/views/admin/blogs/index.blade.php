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
                <a href="{{ route('blogs.create') }}" class="btn btn-primary px-4"><i class="bi bi-plus-lg me-2"></i>Add New</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-wrap">Sl. No.</th>
                                    <th class="text-wrap">Title</th>
                                    <th class="text-wrap">Slug</th>
                                    <th class="text-wrap">Short Content</th>
                                    <th class="text-wrap">Image</th>
                                    <th>Visibility</th>
                                    <th class="text-wrap">Published At</th>
                                    <th class="text-wrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($blogs->isNotEmpty())
                                    @foreach ($blogs as $item)
                                        <tr>
                                            <td class="text-wrap">{{ $loop->iteration }}</td>
                                            <td class="text-wrap">{{ $item->title }}</td>
                                            <td class="text-wrap">{{ $item->slug }}</td>
                                            <td class="text-wrap">{!! $item->short_content !!}</td>
                                            <td class="text-wrap"><img class="img-thumbnail rounded me-2" src="{{ $item->getFirstMediaUrl() }}" width="200" alt=""></td>
                                            <td>{!! check_visibility($item->is_visible) !!}</td>
                                            <td class="text-wrap">{{ format_datetime($item->created_at) }}</td>
                                            <td>
                                                <a href="{{ route('blogs.edit',$item->id) }}" class="btn" style="margin-right: 10px;"> 
                                                    <i class="text-primary" data-feather="edit"></i>
                                                </a>

                                                <form action="{{ route('blogs.destroy', $item->id) }}" onsubmit="return confirm('Are you sure?')" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn" type="submit"><i class="text-danger" data-feather="trash-2"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8" class="text-center">No data found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!--end main wrapper-->
@endsection