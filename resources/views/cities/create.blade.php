@extends('layout')

@section('content')
    <div class="container">

    </div>
    <form  method="post" action="{{route('cities.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name">
            @if ($errors->any())
                <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
