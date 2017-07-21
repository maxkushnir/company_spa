@extends('layouts.header')

@section('content')

    <div class="jumbotron">
        <div class="row">
            <div class="input-group">
                
                <form method="POST" action="{{route('companyStore')}}">
                <input type="text" class="form-control" name="name" placeholder="Company Name" aria-describedby="basic-addon1">
                
                <input type="number" class="form-control" name="estimate_earn" placeholder="Estimated Earnings" aria-describedby="basic-addon1">
                
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon3">Choose parent company</span>
                  <select class="form-control" name="parent">
                    @foreach($companies as $company)
                        <option>{{$company->id}}</option>
                    @endforeach
                </select>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-default">Submit</button>
               
                    
                </form>
                
            </div>      

        </div>
    </div>

@endsection
