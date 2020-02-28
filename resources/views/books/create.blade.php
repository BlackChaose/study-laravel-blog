@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($books, ['url' => route('books.create')]) }}
    @include('books.form')
    {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection
