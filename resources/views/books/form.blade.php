{{--
/**
 * User: nikita.s.kalitin@gmail.com
 * Date: 25.02.20
 * Time: 17:24
 */
 --}}
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('author', 'автор') }}
{{ Form::text('author') }}<br>
{{ Form::label('name', 'Название') }}
{{ Form::textarea('name') }}<br>

