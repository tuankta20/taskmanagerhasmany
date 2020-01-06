@extends('layout')

@section('content')

    <form  method="post" action="{{route('cities.update',$city->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{$city->name}}">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
