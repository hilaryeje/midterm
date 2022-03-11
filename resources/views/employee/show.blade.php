@extends('layout.mainlayout')
@section('title', 'show')
@section('content')
<div>
    <div>
        <div>
            <h1> Show Record </h1>
            <div>
                <h3>EmployeeNo : {{ $post['EmployeeNo'] }} </h3>
            </div>
            <div>
                <p>Last_Name :{{ $post['Last_Name'] }} </p>
            </div>
            <div>
                <p>First_Name :{{ $post['First_Name'] }} </p>
            </div>
            <div>
                <p>Birthday :{{ $post['Birthday'] }} </p>
            </div>
            <div>
                <p>Gender :{{ $post['Gender'] }} </p>
            </div>
        </div>
    </div>
</div>
@endsection
