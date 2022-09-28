<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>新規投稿</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>心エコー画像の新規投稿</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class='img_category'>
                <h2>心エコー検査断面種：</h2>
                <select name="post[category_id]" >
                    <option value=0>未選択</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class='patient_info'>
                <h2>患者情報(公開可能な範囲でご回答ください)</h2>
                <h3>年齢：</h3>
                <select name='post[age]'>
                    <option value=0>未選択</option>
                    <option value=1>20歳未満</option>
                    <option value=2>20代</option>
                    <option value=3>30代</option>
                    <option value=4>40代</option>
                    <option value=5>50代</option>
                    <option value=6>60代</option>
                    <option value=7>70代</option>
                    <option value=8>80代</option>
                    <option value=9>90代</option>
                    <option value=10>100歳以上</option>
                </select>
                <h3>性別：</h3>
                <select name='post[sex]'>
                    <option value=0>未選択</option>
                    <option value=1>男性</option>
                    <option value=2>女性</option>
                    <option value=3>その他</option>
                </select>
                <h3>心疾患の有無：</h3>
                <select name='post[disease_condition]'>
                    <option value=0>未選択</option>
                    <option value=1>疾患なし</option>
                    <option value=2>疾患あり</option>
                </select>
            </div>
            <br>
            <div class='remarks'>
                <h2>その他備考：</h2>
                <textarea name="post[post_comment]" cols="100" rows="5" placeholder="補足情報(診断疾患名)などがあれば記載してください．"></textarea><br>
            </div>
            <br>
            <div class='img'>
                <h2>画像アップロード：</h2>
                    <input type='file' name='post[image_path]'/>
            </div>
            <br>
            <input type="submit" value="投稿"/>
        </form>
        <br></br>
        <div class="back">[<a href="/">トップページへ</a>]</div>
    </body>
</html>