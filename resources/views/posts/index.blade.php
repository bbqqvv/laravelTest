<x-layout>
    <h1>Posts Index Page</h1>
    <div>My name is {{$username}} and my age is {{$age}}</div>
    {{-- <ul>
        <li>{{$posts[0]}}</li>
        <li>{{$posts[1]}}</li>
        <li>{{$posts[2]}}</li>
    </ul> --}}

    @foreach ($posts as $post)
        <li>{{$post}}</li>
    @endforeach
</x-layout>