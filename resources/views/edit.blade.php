@extends('layout')

@section('content')

    <form  method="post" action="{{route('customers.update',$customers->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{$customers->name}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="email" value="{{$customers->email}}">
        </div>

        <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city_id">
                @foreach($city as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">DOB</label>
            <input type="date" class="form-control" name="dob" value="{{$customers->dob}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
