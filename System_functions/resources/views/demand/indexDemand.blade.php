@extends('layout.app')
@extends('layout.sidebar')
@section('cssHeader')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Demand</h1>
        <p class="mb-4">This is all orders currently available</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Demand</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="demand" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Details</td>
                            <td>Phone Number</td>
                            <td>Name Job</td>
                            <td>Action</td>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Details</th>
                            <th>Phone Number</th>
                            <th>Name Job</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($demand as $demands)
                            <tr>
                                <td>{{$demands->id}}</td>
                                <td>{{$demands->name}}</td>
                                <td>{{$demands->email}}</td>
                                <td>{{$demands->details}}</td>
                                <td>{{$demands->phone_number}}</td>
                                <td>{{$demands->jobs['title']}}</td>



<td>
    <a href="{{route('demands.show',$demands->id)}}"
       class="btn btn-primary btn-xs fa fa-pencil">View</a>

{{--    <form class="delete"--}}
{{--          action="{{ route('demands.destroy', $demands->id)}}"--}}
{{--          method="post">--}}
{{--        @csrf--}}
{{--        @method('DELETE')--}}
{{--        <button class="btn btn-danger btn-xs fa fa-trash-o "--}}
{{--                type="submit">Delete</button>--}}
{{--    </form>--}}

</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



@endsection
@section('jsFooter')
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#demand').DataTable();
            });
        </script>




@endsection



