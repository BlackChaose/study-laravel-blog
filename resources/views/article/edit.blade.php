@extends('layouts.app')
@section('content')
    {{-- BEGIN --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($article, ['url' => route('article.update', $article), 'method' => 'PATCH']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}
    {{-- END --}}
@endsection
