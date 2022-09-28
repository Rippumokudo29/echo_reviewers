<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>心エコー検査断面レビューサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Review of Echocardiographic Image</h1>
        [<a href='/top/create'>心エコー画像の新規投稿</a>]<br>
        [<a href='/top/edit'>投稿の編集/削除</a>]<br></br>
        [<a href='/top/review'>心エコー画像の評価</a>]<br>
        <br>
        <div class='categories'>
            @foreach ($categories as $category)
                <div class='category'>
                    [<a href="/categories/{{ $category->id }}">{{ $category->name }}</a>]<br>
                    <img hight='100' width='150' src='https://echo-review-bucket.s3.us-west-1.amazonaws.com/G5CYjm78uQtU5HTLeKXUjyxujYT1Cr8lxklhTrNr.jpg'/>
                </div>
                <br>
            @endforeach
        </div>
        
    </body>
</html>