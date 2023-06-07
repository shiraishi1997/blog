    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>
    
       <h1>Blog Name</h1>
         <div class='posts'>
             @foreach($posts as $post)
                <div class='post'>
                 <h2 class='title'>
                 <a href ="/posts/{{$post->id}}">{{ $post->title }} </a>
                 </h2>
                  <p class='body'>{{ $post->body }}  </p>
                  <p class='updated_time'>{{$post->updated_at}}</p>
                  <a href="">{{ $post->category->name }}</a>
             @endforeach
              
             </div>
             <div class='paginate'>
            {{ $posts->links() }}
             </div>
             <div>
              <a href ='/posts/create'>creat</a>
             
              
    

  </x-app-layout>
