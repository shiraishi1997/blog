<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>   
    <body>
        <h1>Forms</h1>
        <form action ="/posts" method ="POST">
          
          @csrf
          <div class='title' >
           <h2>title</h2>
           <input type='text' name='post[title]' value="{{old('post.title')}}"/>
           <p calss= 'return_error' style ="color:red">{{$errors->first('post.title')}}</p>
          </div>
          <div class='body'>
            <h2>本文</h2>
            <textarea name="post[body]"></textarea value="{{old('post.body')}}">
            <p class='return_error' style="color:red">{{$errors->first('post.body')}}</p>
          </div>
         <div class='category'>
            <h3>category</h3>
             <select name ="post[category_id]">
             @foreach($categories as $category)
              <option value ="{{$category->id}}">"{{$category->name}}"</option>
             @endforeach
             </select>
         </div> 
         
          <input type="submit" value ="保存"/>
          
        </form>
         
        <div class=footer>
            <a href ='/'>トップに戻る</a>
        </div> 
        <!-- Fonts -->
    </body>
</html>