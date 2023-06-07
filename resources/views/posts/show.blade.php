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
           <a href ="/posts/{{$post->id}}/edit">edit</a>
           <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
             @csrf
             @method('DELETE')
             <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
              <script>
                 function deletePost(id) {
                  'use strict'

                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                     document.getElementById(`form_${id}`).submit();
                 }
                                         }
                </script>
           </form>
           <a href="">{{ $post->category->name }}</a>
         </div>  
           
               
           
       
       
       
    </body>
    
        
    
</html>
