<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title></title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body >
        <h1 class='title'>
            {{$post -> title}}
        </h1>
        <div class='body'></div>
        <h2>{{$post -> body}}</h2> 
     
       <div ='fotter'>
           <a href ='/'>トップに戻る</a>
       </div>
       
    </body>
    
        
    
</html>
