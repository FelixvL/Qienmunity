@extends('layouts.app')

@section('content')
        <h1>Profiel bewerken</h1>
        <a href="/profiles" class="btn btn-default">< Ga terug</a><br/><br/>
        {!! Form::open(['action' => ['ProfileController@update', $profile->id],'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
            <div class='form-group'>
                {{Form::label('username', 'Username (voor- en achternaam)')}}
                {{Form::text('username', $profile->username,['class'=>'form-control', 'placeholder'=>'Username (voor- en achternaam)'])}}
            </div>
            <div class='form-group'>
                {{Form::label('email', 'E-mail')}}
                {{Form::text('email', $profile->email,['class'=>'form-control', 'placeholder'=>'example@qien.nl'])}}
            </div>
            <div class='form-group'>
                {{Form::label('dateofbirth', 'Geboortedatum')}}
                {{Form::date('dateofbirth', $profile->dateofbirth,['class'=>'form-control'])}}
            </div>
            <div class='form-group'>
                {{Form::label('position', 'Werkstatus')}}
                {{Form::text('position', $profile->position,['class'=>'form-control', 'placeholder'=>'Bijv: Trainee bij Qien'])}}
            </div>
            <div class='form-group'>
                {{Form::label('biography', 'Biografie')}}
                {{Form::textarea('biography', $profile->biography,['class'=>'form-control', 'placeholder'=>'Over mij...', 'rows'=>5])}}
            </div>
            <div class='form-group'>
                {{Form::label('image', 'Profielfoto')}}
                {{Form::text('image', $profile->image,['class'=>'form-control', 'placeholder'=>'Tijdelijk: url van afbeelding'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Wijzig profiel >', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
            
@endsection