@extends('layout.app')

@extends('layout.sidebar')

@section('content')




<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a your information</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

{{--                <img class="img-profile" src="/storage/job/{{$demand->jobs['photo']}}" width="300" height="300" v>--}}
                <br>
                <br>
            <form method="post" action="{{ route('demands.store',$demand) }}">
                @csrf



                <div class="form-group" >
                    <label for="title">Name:</label>
                    <select name="job_id"  id="job_select" class="form-control" >

                        <option
                            class="form-control"   value="{{ $demand->id}}" >{{ $demand->title}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">First Name:</label>
                    <input type="text" class="form-control" name="name" required/>
                </div>

                <div class="form-group">
                    <label for="phone_number">phone_number :</label>
                    <input type="number" class="form-control" name="phone_number" required/>
                </div>

                <div class="form-group">
                    <label for="price">Email:</label>
                    <input type="email" class="form-control" name="email" required/>
                </div>
                <div class="form-group">
                    <label for="details">details:</label>
                    <input type="text" class="form-control" name="details" required />
                </div>

                <button type="submit" class="btn btn-success btn-icon-split ">Add contact</button>
            </form>
        </div>
    </div>
</div>
@endsection


