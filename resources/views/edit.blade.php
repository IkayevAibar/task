@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header h4">Add new</div>
            <div class="card-body">
                <div class="container">
                <form action="{{route('edited', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-6">
                            <label for="number">Number:</label>
                            <input type="text" class="form-control {{ $errors->has('number') ? ' is-invalid' : '' }}"  name="number" id="" value="{{$item->number}}" placeholder="">
                            <div class="form-text text-danger">{{$errors->first('number')}}</div>    
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="invoice">Invoice Date:</label>
                            <input type="date" class="form-control {{ $errors->has('invoice') ? ' is-invalid' : '' }}"  name="invoice" id="" value="{{$item->invoice}}" placeholder="">    
                            <div class="form-text text-danger">{{$errors->first('invoice')}}</div>    
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="supply">Supply Date:</label>
                            <input type="date" class="form-control {{ $errors->has('supply') ? ' is-invalid' : '' }}"  name="supply" id="" value="{{$item->supply}}" placeholder="">    
                            <div class="form-date date-danger">{{$errors->first('supply')}}</div>    
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="description">Comment:</label>
                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" rows="3" placeholder="description">{{$item->description}}</textarea>
                        <div class="form-text text-danger">{{$errors->first('description')}}</div>    
                    </div>


                    <button class="btn btn-primary" type="submit" name="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
