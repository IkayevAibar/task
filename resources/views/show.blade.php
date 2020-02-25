@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header h4">Add new</div>
            <div class="card-body">
                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="Number">Number:</label>
                            <label type="text" class="form-control {{ $errors->has('Number') ? ' is-invalid' : '' }}"  name="Number" id="" value="{{$item->number}}" placeholder="">
                            <div class="form-text text-danger">{{$errors->first('Number')}}</div>    
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="Invoice">Invoice Date:</label>
                            <input type="date" class="form-control {{ $errors->has('Invoice') ? ' is-invalid' : '' }}"  name="Invoice" id="" value="{{$item->invoice}}" placeholder="">    
                            <div class="form-text text-danger">{{$errors->first('Invoice')}}</div>    
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="Supply">Supply Date:</label>
                            <input type="date" class="form-control {{ $errors->has('Supply') ? ' is-invalid' : '' }}"  name="Supply" id="" value="{{$item->supply}}" placeholder="">    
                            <div class="form-text text-danger">{{$errors->first('Supply')}}</div>    
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="Description">Comment:</label>
                        <textarea class="form-control {{ $errors->has('Description') ? ' is-invalid' : '' }}" name="Description" id="Description" rows="3" placeholder="Description">{{$item->description}}</textarea>
                        <div class="form-text text-danger">{{$errors->first('Description')}}</div>    
                    </div>


                    <a href="/" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
