@extends('layouts.app')

@section('title','Enquiry')

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
                        <li class="breadcrumb-item active" aria-current="page">Enquiry</li>
                    </ol>
                </nav>
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
                                    <th class="text-wrap">Email</th>
                                    <th class="text-wrap">Phone</th>
                                    <th class="text-wrap">Subject</th>
                                    <th class="text-wrap">Media</th>
                                    <th class="text-wrap">Message</th>
                                    <th class="text-wrap">Created At</th>
                                    <th class="text-wrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($contacts->isNotEmpty())
                                    @foreach ($contacts as $item)
                                        <tr>
                                            <td class="text-wrap">{{ $loop->iteration }}</td>
                                            <td class="text-wrap">{{ $item->name }}</td>
                                            <td class="text-wrap">{{ $item->email }}</td>
                                            <td class="text-wrap">{{ $item->phone }}</td>
                                            <td class="text-wrap">{{ $item->subject }}</td>
                                            {{-- <td class="text-wrap">{{ $item->getFirstMediaUrl() }}</td> --}}
                                            <td class="text-wrap">
                                                @php
                                                    $media = $item->getFirstMedia(); // Get the media object
                                                @endphp
                                            
                                                @if($media)
                                                    @php
                                                        $mediaUrl = $media->getUrl();
                                                        $mimeType = $media->mime_type;
                                                    @endphp
                                            
                                                    @if(Str::startsWith($mimeType, 'image/'))
                                                        <!-- Display as an image -->
                                                        <img src="{{ $mediaUrl }}" alt="Media" style="max-width: 100px; max-height: 100px;">
                                                    @elseif($mimeType === 'application/pdf')
                                                        <!-- Link to view/download the PDF -->
                                                        <a href="{{ $mediaUrl }}" target="_blank">View PDF</a>
                                                    @elseif(Str::startsWith($mimeType, 'video/'))
                                                        <!-- Embed a video player -->
                                                        <video controls style="max-width: 200px; max-height: 150px;">
                                                            <source src="{{ $mediaUrl }}" type="{{ $mimeType }}">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @else
                                                        <!-- Display as a download link for other file types -->
                                                        <a href="{{ $mediaUrl }}" target="_blank">Download File</a>
                                                    @endif
                                                @else
                                                    <!-- Display a placeholder or message when no media is available -->
                                                    <span>No media available</span>
                                                @endif
                                            </td>
                                            
                                            
                                            <td class="text-wrap">{{ $item->message }}</td>
                                            <td class="text-wrap">{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:i A') }}</td>
                                            <td>
                                                <form action="{{ route('contact.destroy', $item->id) }}" onsubmit="return confirm('Are you sure?')" method="POST" style="display:inline;">
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

@endsection