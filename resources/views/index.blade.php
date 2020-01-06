@extends('layout')

@section('content')


       <div class="container">
           <a  class="btn btn-outline-success" href="{{route('customers.creates')}}">Create</a>
           <a  class="btn btn-outline-success" href="{{route('cities')}}">City</a>
       </div>

       <form class="navbar-form navbar-left" action="{{ route('customers.search') }}" method="get">
           @csrf
           <div class="row">
               <div class="col-8">
                   <div class="form-group">
                       <input type="text" class="form-control" name="keyword" placeholder="Search" value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                   </div>
               </div>
               <div class="col-4">
                   <button type="submit" class="btn btn-success">Tìm kiếm</button>
               </div>
           </div>
       </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">City</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key=>$customer)
        <tr>
            <th scope="row">{{$customer->id}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->dob}}</td>
            <td>{{$customer->city->name}}</td>

            <td>
                <form action="{{route('customers.destroy',$customer->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary" href="{{route('customers.edit',$customer->id)}}">Edit</a>
                   <button class="btn btn-danger" onclick="return confirm('ban co chac muon xoa')">Delete</button>
                </form>

            </td>
        </tr>
            @endforeach
        </tbody>

    </table>

@endsection
