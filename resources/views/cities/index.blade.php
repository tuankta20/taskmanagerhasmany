@extends('layout')

@section('content')
    <div class="container">
        <a class="btn btn-outline-primary" href="{{route('customers')}}">Back</a>
        <a class="btn btn-outline-success" href="{{route('cities.create')}}">Create</a>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <th scope="row">{{$city->id}}</th>
                <td>{{$city->name}}</td>

                <td>
                    <form action="{{route('cities.destroy',$city->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-success" href="{{route('cities.edit',$city->id)}}">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
