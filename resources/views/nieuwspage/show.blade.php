<<<<<<< HEAD:resources/views/nieuws.blade.php
<html>
    <body>
    <head>
        <script>
            function schrijfin(){
                var data = {};
                data.titel = document.getElementById("nieuws_id").value;
                data.content = document.getElementById("content").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(this.readyState === 4 && this.status === 200){
                        console.log(this.responseText);
                    
                    }
                };
                
        </script>
    </head>
        <h1>Nieuws</h1><br>
=======
@extends('layouts.app')

@section('content')
        
>>>>>>> test:resources/views/nieuwspage/show.blade.php

        <a href="http://localhost:8000/">Home</a><br>
        <a href="http://localhost:8000/profiel">Profiel</a><br>
        <a href="http://localhost:8000/dashboard">Dashboard</a><br>
        <a href="http://localhost:8000/community">Community</a><br>
        <a href="http://localhost:8000/contact">Contact</a><br>
        <a href="http://localhost:8000/resources">Resources</a><br>
<<<<<<< HEAD:resources/views/nieuws.blade.php
        
        <input type="text" placeholder="Titel" id="nieuws_id"><br>
        <textarea rows="15" cols="75" id="content"></textarea><br>
        <input type="file" value="Afbeelding uploaden" id="foto"><br>
        <input type="submit" value="Post" id="Post" onclick="up()"><br>
        <br><br>
    </body>
</html>

=======
  
        
        <h1>{{$post->titel}}</h1><br>
        <p>{{$post->content}}</p>
        <small>Geschreven op {{$post->created_at}}</small>
        
        
@endsection
    
>>>>>>> test:resources/views/nieuwspage/show.blade.php
