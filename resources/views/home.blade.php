<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Гостевая книга</title>
    </head>
    <body class="antialiased">

         <div>
             @foreach($posts as $post)
                 {{ $post['title'] }}<br>
                 {{ $post['description'] }}<br>
                 {{ $post['author']['name'] }}<br>
                 {{ $post['author']['email'] }}<br>
                 {{ $post['date_added'] }}<br>
             @endforeach

        </div>

        <div>
            {!! $links !!}
        </div>
    </body>
</html>
