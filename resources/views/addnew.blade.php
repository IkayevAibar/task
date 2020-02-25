@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header h4">Add new</div>
            <div class="card-body">
                <div class="container">
                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-6">
                            <label for="Number">Number:</label>
                            <input type="text" class="form-control {{ $errors->has('Number') ? ' is-invalid' : '' }}"  name="Number" id="" value="INV-000000" placeholder="">
                            <div class="form-text text-danger">{{$errors->first('Number')}}</div>    
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="Invoice">Invoice Date:</label>
                            <input type="date" class="form-control {{ $errors->has('Invoice') ? ' is-invalid' : '' }}"  name="Invoice" id="" value="" placeholder="">    
                            <div class="form-text text-danger">{{$errors->first('Invoice')}}</div>    
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="Supply">Supply Date:</label>
                            <input type="date" class="form-control {{ $errors->has('Supply') ? ' is-invalid' : '' }}"  name="Supply" id="" value="" placeholder="">    
                            <div class="form-text text-danger">{{$errors->first('Supply')}}</div>    
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="Description">Comment:</label>
                        <textarea class="form-control {{ $errors->has('Description') ? ' is-invalid' : '' }}" name="Description" id="Description" rows="3" placeholder="Description"></textarea>
                        <div class="form-text text-danger">{{$errors->first('Description')}}</div>    
                    </div>


                    <button class="btn btn-primary" type="submit" name="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
