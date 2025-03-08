@extends('layouts.main')

@section('title') Index @endsection

@section('content')

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">isbn</th>
            <th scope="col">title</th>
            <th scope="col"> price</th>
            <th scope="col"> author</th>
            <th scope="col"> created at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
{{--            @dd($posts, $post)--}}
            <tr>
                <td>{{$book->isbn}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->auhtor}}</td>
                <td>{{$book->created_at->format('Y-m-d')}}</td>
                <td>
{{--                    /posts/{{$post['id']}}--}}
                    <a href="{{route('books.show',$book->isbn)}}" class="btn btn-info">View</a>
                    <a href="{{route('books.edit',$book->isbn)}}" class="btn btn-primary">Edit</a>
                    <form style="display: inline;" method="POST" action="{{route('books.destroy', $book->isbn)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{route('books.create')}}" class="btn btn-primary">create</a>
    </div>
@endsection


