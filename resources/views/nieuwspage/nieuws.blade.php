@extends('layouts.app')

@section('content')
        <h1>Nieuws</h1>
            @if (auth()->user()->rol == 0)
                <a href="/nieuwsposts/create" class="btn btn-default">Nieuw bericht ></a>
            @endif
            <br/><br/>
        @if(count($nieuws) >= 1)
            @foreach($nieuws as $post)
                <div class='well'>
                    <h3><a href="/nieuwsposts/{{$post->id}}">{{$post->title}}</a></h3>
                </div>
            @endforeach
        @else
            <p> No Nieuws Posts Yet</p>
        @endif

@endsection