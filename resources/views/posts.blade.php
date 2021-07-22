<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>My Blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>

    <body>
        @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h1>
            <div>
                <p>{!!$post->excerpt!!}</p>
            </div>
        </article>
        @endforeach

    </body>

</html>