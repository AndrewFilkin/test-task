<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заголовок статьи</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            padding: 20px 0;
        }

        article {
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<header>
    <h1>{{$article->title}}</h1>
    <p>Количество просмотров: <span id="views">{{$article->views_count}}</span> | Количество лайков: <span
            id="likes">{{$article->likes_count}}</span></p>
</header>

<article>
    <p>{{$article->text}}</p>
</article>

<form id="commentForm">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>

    <label for="comment">Комментарий:</label>
    <textarea id="comment" name="comment" rows="4" required></textarea>

    <button type="button" onclick="addComment()">Отправить</button>
</form>

<h1>Комментарии</h1>

@if(isset($comments))

    @foreach($comments as $comment)

    <div class="comment">
        <p><strong>{{$comment->name}}:</strong>{{$comment->comment}}</p>
        <p><em>Комментарий оставлен: 2024-01-30</em></p>
    </div>

    @endforeach
@endif

<script>
    function addComment() {
        var name = document.getElementById('name').value;
        var comment = document.getElementById('comment').value;

        // Ваш код для добавления комментария


        // Очистка полей после добавления комментария
        document.getElementById('name').value = '';
        document.getElementById('comment').value = '';

        console.log('test');
    }
</script>
</body>
</html>
