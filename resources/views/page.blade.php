@extends('layouts.header')

@section('content')

    <div class="container">
        <div class="row">

            <br/>

            <a href="/create" class="btn btn-default back"><i class="fa fa-plus"></i>Add company</a>
            
            <h4></h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>Name</th>
                    <th>Parent</th>
                    <th>Company Estimated Earnings</th>
                    <th>All Estimated Earnings</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                @foreach($companies as $company)
										<tr>
		                    <th>{{$company->name}}</th>
		                    <th>Company {{$company->parent}}</th>
		                    <th>{{$company->estimate_earn}}K $</th>
		                    <th>{{$company->total}}K $</th>
		                    <th><form action="{{ route('companyEdit', ['company' => $company->id]) }}" method="POST">{{method_field('EDIT')}} {{ csrf_field() }}<button type="submit" class="btn btn-success">Edit</button></form></th>
		                    <th><form action="{{ route('companyDelete', ['company' => $company->id]) }}" method="POST">{{method_field('DELETE')}} {{ csrf_field() }}<button type="submit" class="btn btn-danger">Delete</button></form></th>
                		</tr>
                @endforeach

            </table>

        </div>
    </div>

@endsection
