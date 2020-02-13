<?php
/**
 * User: nikita.s.kalitin@gmail.com
 * Date: 13.02.20
 * Time: 17:25
 */
@extends('layouts.app);
@section('content')
    <table>
        {{--{{print_r($arts)}}--}}
        <tr>
            <th>name</th>
            <th>body</th>
        </tr>
        @foreach($arts as $el)
            <tr>
                <td>{{$el['name']}}</td>
                <td>{{$el['body']}}</td>
            </tr>
        @endforeach
    </table>
@endsection

