@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        @if(Auth::user())
                            <div class="col-2 card-header border">Create</div>
                            <div class="col-2 card-header border">No</div>
                            <div class="col-2 card-header border">Supply</div>
                            <div class="col-4 card-header border">Comment</div>
                            <div class="col-2 card-header border">Actions</div>
                        @else
                            <div class="col-2 card-header border">Create</div>
                            <div class="col-2 card-header border">No</div>
                            <div class="col-2 card-header border">Supply</div>
                            <div class="col-6 card-header border">Comment</div>
                        @endif
                    </div>
                    @if(Auth::user())
                        @if ($items->count() > 0)
                            @foreach ($items as $item)
                                <div class="row">
                                    <div class="col-2  border">{{$item->invoice}}</div>
                                    <div class="col-2  border"><a href="">{{$item->number}}</a></div>
                                    <div class="col-2  border">{{$item->supply}}</div>
                                    <div class="col-4  border">{{$item->description}}</div>
                                    <div class="col-1  border">
                                        <a href="/edit/{{$item->id}}">Edit</a>
                                    </div>
                                    <div class="col-1  border">
                                        @if(Auth::user()->property==1)
                                        <a href="/delete/{{$item->id}}">Delete</a>
                                        @endif
                                    </div>
                                    
                                </div>
                            @endforeach 
                        @else
                            <div>Пусто :(</div>
                        @endif
                    @else
                        @if ($items->count() > 0)
                            @foreach ($items as $item)
                                <div class="row">
                                    <div class="col-2  border">{{$item->invoice}}</div>
                                    <div class="col-2  border"><a href="">{{$item->number}}</a></div>
                                    <div class="col-2  border">{{$item->supply}}</div>
                                    <div class="col-6  border">{{$item->description}}</div>
                                </div>
                            @endforeach 
                        @else
                            <div>Пусто :(</div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
