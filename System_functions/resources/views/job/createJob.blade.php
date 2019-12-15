@extends('layout.app')



@section('content')




<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a contact</h1>
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
            <form method="post" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">First Name:</label>
                    <input type="text" class="form-control" name="title"/>
                </div>

                <div class="form-group">
                    <label for="details">Last Name:</label>
                    <input type="text" class="form-control" name="details"/>
                </div>

                <div class="form-group">
                    <label for="price">Email:</label>
                    <input type="number" class="form-control" name="price"/>
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" class="form-control" name="photo" required multiple/>
                </div>

                <button type="submit" class="btn btn-primary-outline">Add contact</button>
            </form>
        </div>
    </div>
</div>
@endsection


