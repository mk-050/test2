<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "mkuser", "mysql");
        $stmt = $pdo->query("select*from diworks_keijiban");
    ?>


    <img src="diblog_logo.jpg">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>


    </header>

    <div class="main">
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>

            <form method="post" action="insert.php">
                <div class="A">入力フォーム</div>
                <div class="B">ハンドルネーム<br>
                    <input type="text" class="text" name="handlename" size="45" value="" required>
                </div>
                <div class="B">タイトル<br>
                    <input type="text" class="text" name="title" size="45" value="" required>
                </div>
                <div class="B">コメント<br>
                    <textarea name="comments" class="text1" rows="8" cols="70" value="" required></textarea>
                </div>
                <div>
                    <input type="submit" class="button" value="投稿する">
                </div>


            </form>

            <?php

            while ($row = $stmt->fetch()) {

                echo "<div class='post'>";
                echo "<div class='title'>" . $row['title'] . "</div>";
                echo "<div class='content'>";
                echo $row['comments'];
                echo "<P>posted by" . $row['handlename'] . "</P>";
                echo "</div>";
                echo "</div>";
            }

            ?>

        </div>

        <div class="right">

            <div class="C">

                <h2>人気の記事</h2>

                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>

                <h2>オススメリンク</h2>
                <ul>
                    <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul>

                <h2>カテゴリ</h2>

                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>

            </div>

        </div>

        <footer>

            <div class="copyright">copyright diworks | diworks blog is the one which provides A to Z about programming.</div>


        </footer>
    </div>

</body>

</html>