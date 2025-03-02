@extends('layouts.app')

@section('title') Create @endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route('books.store')}}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{$book->title}}"required>
            <label class="form-label">isbn</label>
            <input name="isbn" type="text" class="form-control" value="{{$book->isbn}}"required>
            <label class="form-label">publish at</label>
            <input name="publish_at" type="number" max="2025" min="1900" class="form-control" value="{{$book->publish_year}}" required>
            <label class="form-label">author</label>
            <input name="author" type="text" class="form-control" value="{{$book->auhtor}}"required>
            <label class="form-label">price</label>
            <input name="price" type="number" min="0" class="form-control" value="{{$book->price}}"required>
            <label class="form-label">stock</label>
            <input name="stock" type="number" min="1" class="form-control" value="{{$book->stock}}"required>
            
            
            
        </div>
        <button class="btn btn-success">Submit</button>
    </form>


@endsection