@foreach($posts as $post)
    <li>{{$post->id}}</li>
    <li>{{$post->title}}</li>
    <li>{{$post->content}}</li>
    <li>{{$post->created_at}}</li>
    <hr>
    <hr>
@endforeach