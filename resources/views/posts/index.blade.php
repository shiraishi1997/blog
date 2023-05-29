<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title></title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body >
       <h1>Blog Name</h1>
         <div class='posts'>
             @foreach($posts as $post)
                <div class='post'>
                 <h2 class='title'>
                 <a href ="/posts/{{$post->id}}">{{ $post->title }} </a>
                 </h2>
                  <p class='body'>{{ $post->body }}  </p>
                  <p class='updated_time'>{{$post->updated_at}}</p>
                
             @endforeach
             </div>
             <div class='paginate'>
            {{ $posts->links() }}
             </div>
             <div>
              <a href ='/posts/create'>creat</a>
        
    </body>
</html>
