@extends('layouts.app')
@section('content')
    {{-- BEGIN --}}
    <small><a href="{{ route('article_categories.create') }}">Создать категорию</a></small>
    {{-- END --}}
    <table style="border: 1px solid green; text-align: left;">
        <caption>Категории статей</caption>
        <tr>
            <th>Название</th>
            <th>Описание</th>
        </tr>
        @foreach($articles as $el)
            <tr>
                <td>{{$el['name']}}</td>
                <td>{{$el['body']}}</td>
            </tr>
        @endforeach
    </table>
@endsection
