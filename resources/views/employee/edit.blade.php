@extends('layout.mainlayout')
@section('title', 'edit')
@section('content')
<h1> Edit Record </h1>
    <form action="/employee" action="POST">
         @csrf
         <span> EmployeeNo : </span><input type="text" name="EmployeeNo" id="EmployeeNo" value="{{$post['EmployeeNo']}}" /> <br>
         <span> Last_Name : </span><input type="text" name="Last_Name" id="Last_Name"value="{{$post['Last_Name']}}" /> <br>
         <span> First_Name : </span> <input type="text" name="First_Name" id="First_Name"value="{{$post['First_Name']}}" /> <br>
         <span> Birthday : </span><input type="date" name="Birthday" id="Birthday" value="{{$post['Birthday']}}"/> <br>
         <span> Gender : </span> <input type="text" name="Gender" id="Gender" value="{{$post['Gender']}}"/> <br>
         <input type="submit" value="save" />
    </form>
     
@endsection