@extends('layout.app')
@extends('layout.sidebar')
@section('content')
    <div>
        <div class="row">
            @foreach($job as $jobs)
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 ">
                            <label>Name Job</label>
                            <h6 class="m-0 font-weight-bold text-primary">{{$jobs->title}}</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <img class="img-profile" src="/storage/job/{{$jobs->photo}}" width="300" height="300" v>
                            </div>
                            <br>
                            <br>
                            <hr>
                            {{$jobs->details}}
                            <br>
                            <br>
                            <div>
                                <a href="{{route('jobs.show',$jobs->id)}}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                          <i class="fas fa-arrow-right"></i>
                                           </span>
                                    <span class="text">Red More </span>

                                </a>

                                <a href="{{route('NewJob',$jobs->id)}}" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                          <i class="fas fa-arrow-right"></i>
                                           </span>
                                    <span class="text">Submission </span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


