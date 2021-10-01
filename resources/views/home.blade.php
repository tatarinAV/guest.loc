<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Гостевая книга</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <h1>Гостевая книга</h1>
        Оставить сооб
    @foreach($posts as $post)
    <div style="margin-bottom:35px;" class="col-xs-12">
            <h4>{{ $post['title'] }}</h4>
            <a href = "author/{{$post['author']['id'] }}">{{$post['author']['name'] }}</a> - <span>{{ $post['author']['email'] }}</span> - <span>{{ $post['date_added'] }}</span>
            <p class="card-text">{{ $post['description'] }}</p>
    </div>
    @endforeach

        <div>
            {!! $links !!}
        </div>
    </div>
    </body>
</html>
