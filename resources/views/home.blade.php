@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <h1>Invoices</h1>
            </div>
            <div class="card ">
                <div class="card-header">Actions</div>
                <div class="card-body">
                    <a type="button" href="/addnew"name="" id="" class="btn btn-primary btn-lg ">Add new</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Invoices</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-3 card-header border">Create</div>
                        <div class="col-3 card-header border">No</div>
                        <div class="col-3 card-header border">Supply</div>
                        <div class="col-3 card-header border">Comment</div>
                    </div>
                        
                    @if ($items->count() > 0)
                        @foreach ($items as $item)
                            <div class="row">
                                <div class="col-3  border">{{$item->created_at}}</div>
                                <div class="col-3  border"><a href="">{{$item->number}}</a></div>
                                <div class="col-3  border">{{$item->supply}}</div>
                                <div class="col-3  border">{{$item->description}}</div>
                            </div>
                        @endforeach 
                    @else
                        <div>Пусто :(</div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
