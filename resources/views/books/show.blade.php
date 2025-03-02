@extends('layouts.app')

@section('title') Show @endsection

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            book Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title:  {{$book->title}}</h5>
            <p class="card-text">isbn:  {{$book->isbn}}</p>
            <p class="card-text">author:  {{$book->auhtor}}</p>
            <p class="card-text">count:  {{$book->stock}}</p>
            <p class="card-text">price:  {{$book->price}}</p>
            <p class="card-text">publish at:  {{$book->publish_year}}</p>

        </div>
    </div>
@endsection