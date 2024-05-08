<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactform</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <h1>お問い合わせフォーム</h1>
    <form method="post" action="mail_confirm.php">

        <div><label>名前</label><br>
            <input type="text" class="text" name="name" size="35">
        </div>

        <div><label>メールアドレス</label><br>
            <input type="text" class="text" name="mail" size="35">
        </div>

        <div><label>年齢</label><br>
            <select class="dropdown" name="age">
                <option>選択してください</option>
                <script>
                    for (var i = 18; i <= 65; i++) {
                        document.write("<option value=" + i + "歳" + ">" + i + "歳</option>");
                    }
                </script>
            </select>
        </div>

        <div><label>コメント</label><br>
            <textarea name="comments" rows="7" cols="35"></textarea>
        </div>

        <div><input type="submit" class="submit" value="送信する">
        </div>
    </form>

</body>

</html>