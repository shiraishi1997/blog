<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title></title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
<body>
 <h1>Editer</h1>
   <form action="/posts/{{$post->id}}" method="POST">
   @csrf
   @method('PUT')
     <div class=title>
       <h2>Title</h2>
        <input type ='text' name ='post[title]' value ="{{$post->title}}">
     </div>
     <div Class="body">
         <h3>Body</h3>
          <input type ='text' name='post[body]' value ="{{$post->body}}">
     </div>
        <input type="submit" value="保存"/>
  
    </form>
      <h3>
        <a href='/'>トップに戻る</a> 
      </h3>
 </body>
</html>