@extends('layout.mainlayout')
@section('title', 'index')
@section('content')
    @forelse ($emp as $key => $post)
        <div><b>EmployeeNo : </b>{{ $post['EmployeeNo'] }} </div>
        <div><b>Last_Name :</b>{{ $post['Last_Name'] }} </div>
        <div><b>First_Name :</b>{{ $post['First_Name'] }} </div>
        <div><b>Birthday :</b>{{ $post['Birthday'] }} </div>
        <div><b>Gender :</b> {{ $post['Gender'] }} </div>
        <hr />
    @empty
    <h1>No records</h1>
    @endforelse
@endsection