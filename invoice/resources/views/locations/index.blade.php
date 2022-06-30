@extends('dashboard.master')
@section('Title')
    Locations
@endsection
@section('content')
    <div class="container-fluid">
{{--        <p>{{ location_lists }}</p>--}}
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Location</a></li>
                            <li class="breadcrumb-item active">Location List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Locations</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> All Locations.</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>url</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($locations as $key=>$location)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$location->name}}</td>
                                <td>{{strip_tags(base64_decode($location->title))}}</td>
                                <td>{{$location->url}}</td>
                                <td>
                                    <a href="{{ config('app.frontend_url') .'service-areas/business-locations/'. $location->url }}" title="View Page" target="_blank"><i class="far fa-eye text-info mr-1"></i></a>
                                    <a href="{{route('locations.edit',$location->id)}}" title="Edit Location"><i class="far fa-edit text-info mr-1"></i></a>
                                    <form action="{{ route('locations.delete', $location->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link p-0"><i class="fas fa-trash-alt text-danger mr-1"></i></button>
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->
@endsection
@section('page_level_script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('message'))
        <script>
            swal("", "{{ session('message') }}", "{{ session('type') }}");
        </script>
    @endif
@endsection
