@extends('layouts.app')

@section('content')
        <h1>Nieuwe Community Post</h1><br>

        <a href="/communitypost" class="btn btn-default">< Ga terug</a><br/><br/>

        
        {!! Form::open(['action' => 'CommunityController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data','files'=>true]) !!}
            {{Form::Label('titel')}}
                {{Form::text('titel','',['class'=>'form-control', 'placeholder' => 'Titel'])}}
                <br>
                {{Form::file('image')}}
                <br>
                {{Form::textarea('content','',['class'=>'form-control', 'placeholder' => 'Content'])}}
                {{Form::submit('Submit')}}
        {!! Form::close() !!}

@endsection
    