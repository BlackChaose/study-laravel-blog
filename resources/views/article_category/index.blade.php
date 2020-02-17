@extends('layouts.app')
@section('content')
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
    {{$articles->links()}}
@endsection
