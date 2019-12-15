@extends('layout.app')
@extends('layout.sidebar')


@section('content')



    <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Job</h6>

            </div>
            <div>

            </div>
            <div class="card-body">
                <div class="chart-area">
                    <form method="post" action="{{route('demandAdmins.store',$demand->jobs['id'])}}">
                        @csrf

                                            <table class="table" >

                                                <tr>
                                                    <th>The name of the applicant</th>
                                                    <td>
                                                        <div class="form-group" >
                                                            <select name="demand_id"  id="demand_select" class="form-control"  >
                                                                <option
                                                                    value="{{ $demand['id'] }}">{{ $demand->name}}</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{$demand->details}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td>{{$demand->phone_number}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{$demand->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Name The Job</th>
                                                    <td>
                                                        <div class="form-group" >

                                                                <select name="job_id" id="job_select" class="form-control"  required>

                                                                    <option
                                                                        value="{{ $demand['id'] }}">{{ $demand->jobs['title'] }}</option>
                                                                </select>

                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <button  type="submit" class="btn btn-primary">successful</button>
                                                    </td>
                                                </tr>
                                            </table>

                    </form>
                    <table class="table">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <form class="delete"
                                         action="{{ route('demand.destroy', $demand->id)}}"
                                         method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                            type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </table>

                </div>
                <br>
                <br>
                <br>
                <br>
                </div>
        </div>



    </div>




@endsection


