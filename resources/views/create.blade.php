@extends('layout')

@section('content')
    <div class="container">

    </div>
  <form  method="post" action="{{route('customers.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name">
         @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
             @endif
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="email">
            @if($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
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
            <input type="date" class="form-control" name="dob">
            @if($errors->has('dob'))
                <span class="text-danger">{{$errors->first('dob')}}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
