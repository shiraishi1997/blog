<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>   
    <body>
        <h1>Forms</h1>
        <form action ="/posts" metod ="POST">
          @csrf
          <div class='title' >
           <h2>title</h2>
           <input type='text' name='post[title]'/>
          </div>
          <div class='body'>
            <h2>本文</h2>
            <textarea name="post[body]"></textarea>
          </div>
          <input type="submit" value ="保存"/>
          
        </form>
         
        <div class=footer>
            <a href ='/'>トップに戻る</a>
        </div> 
        <!-- Fonts -->
    </body>
</html>