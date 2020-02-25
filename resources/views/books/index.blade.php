@extends('layouts.app')
@section('content')
    <small><a href="{{ route('books.create') }}">Создать книгу</a></small>
    <table style="border: 1px solid green; text-align: left;">
        <caption>книги</caption>
        <tr>
            <th>№ п.п.</th>
            <th>Автор</th>
            <th>Название</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$book['author']}}</td>
                <td>{{$book['name']}}</td>
            </tr>
        @endforeach
    </table>
@endsection
