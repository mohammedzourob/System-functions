@extends('layout.app')

@extends('layout.sidebar')

@section('content')

    <img class="img-profile" src="/storage/job/{{$job->photo}}" width="300" height="300" v>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    {{$job->id}}
    {{$job->title}}
    {{$job->details}}

@endsection


