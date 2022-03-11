@extends('layout.mainlayout')
@section('title', 'create')
@section('content')
<h1> Create new record </h1>
    <form action="/employee" action="POST">
        @csrf
        <span> EmployeeNo : </span><input type="text" name="EmployeeNo" id="EmployeeNo" /> <br>
        <span> Last_Name : </span><input type="text" name="Last_Name" id="Last_Name" /> <br>
        <span> First_Name : </span> <input type="text" name="First_Name" id="First_Name" /> <br>
        <span> Birthday : </span><input type="date" name="Birthday" id="Birthday" /> <br>
        <span> Gender : </span> <input type="text" name="Gender" id="Gender" /> <br>
        <input type="submit" value="save" />
    </form>

@endsection