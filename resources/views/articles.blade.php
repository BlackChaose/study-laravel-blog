<?php
/**
 * User: nikita.s.kalitin@gmail.com
 * Date: 13.02.20
 * Time: 17:25
 */?>
@extends('layouts.app')
@section('header','статьи')
@section('content')
    {{-- BEGIN (write your solution here) --}}
    {{Form::open(['url' => route('articles.index'), 'method' => 'GET'])}}
    {{Form::text('q', $q ?? '')}}
    {{Form::submit('push me!')}}
    {{Form::close()}}
    {{-- END --}}
    <table>
        <tr>
            <th>name</th>
            <th>body</th>
            <th>state</th>
            <th>likes</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($arts as $el)
            <tr>
                <td><a title="view article" href="{{route('article.show',[$el['id']])}}">{{$el['name']}}</a></td>
                <td>{{$el['body']}}</td>
                <td>{{$el['state']}}</td>
                <td>{{$el['likes']}}</td>
                <td>{{$el['created_at']}}</td>
                <td>{{$el['updated_at']}}</td>
            </tr>
        @endforeach
    </table>
    <hr>
    <br>
@endsection
