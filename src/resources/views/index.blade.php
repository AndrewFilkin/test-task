<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перечень статей</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .article {
            width: 30%;
            display: inline-block;
            margin: 10px;
            vertical-align: top;
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .metadata {
            color: #999;
            margin-top: 8px;
        }
    </style>
</head>
<body>

@foreach($articles as $article)

<div class="article">
    <a href="{{route('article.show.one', ['slug' => $article->slug])}}"><h2>{{$article->title}}</h2></a>
    <p>{{$article->description}}</p>
    <div class="metadata">
        <span>Просмотры: 999</span> | <span>Лайки: {{$article->likes_count}}</span>
    </div>
</div>

@endforeach

{{$articles->links("pagination::bootstrap-4")}}

</body>
</html>
