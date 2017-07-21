@extends('layouts.header')

@section('content')
    <div class="jumbotron">
        <div class="row">
            <div class="input-group">
                <form method="POST" action="{{route('companyUpdate')}}">
                <input type="text" class="form-control" name="name" value="{{$company->name}}" aria-describedby="basic-addon1">
                
                <input type="number" class="form-control" name="estimate_earn" value="{{ $company->estimate_earn }}" aria-describedby="basic-addon1">
                
                <input type="text" class="form-control" name="parent" value="" aria-describedby="basic-addon1">
                
                <button type="submit" class="btn btn-defoult">Submit</button>
                
                {{ csrf_field() }}

                </form>

            </div>      

        </div>
    </div>

@endsection
