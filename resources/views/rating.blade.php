<?php
/**
 * User: nikita.s.kalitin@gmail.com
 * Date: 14.02.20
 * Time: 11:14
 */?>
@extends('layouts.app')
@section('content')
    <table>
        <tr>
            <th>name</th>
            <th>likes</th>
        </tr>
        @foreach($dataset as $el)
            <tr>
                <td>{{$el['name']}}</td>
                <td>{{$el['likes']}}</td>
            </tr>
        @endforeach
    </table>
@endsection
