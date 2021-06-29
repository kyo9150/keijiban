<!DOCTYPE html>
<html lang="ja">

<head>
<meta name="viewport" content="width=1024" charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="wrap">
  <?php
  mb_internal_encoding("utf8");

  $pdo = new PDO("mysql:dbname=lesson1;host=localhost;" ,"root" ,"root"); 
  $stmt = $pdo->query("select * from 4each_keijiban");
  ?>
    <header>
      <img src="4eachblog_logo.jpg">
      <ul class="head_menu">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
    <main>
      <div class="left">
        <h1 class="midasi">プログラミングに役立つ掲示板</h1>
        
        <form method="post" action="insert.php">
          <h3 class="title1">入力フォーム</h3>
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input name="handlename" class="text" type="text" size="35px">
          </div>
    
          <div>
            <label>タイトル</label>
            <br>
            <input name="title" class="text" type="text" size="35px">
          </div>
    
          <div>
            <label>コメント</label>
            <br>
            <textarea name="comments" cols="70" rows="7"></textarea>
          </div>
    
          <div>
            <input name="submit" class="submit" type="submit" value="投稿する">
          </div>
        
        </form>

        <?php
        while($row = $stmt->fetch()){
          echo "<div class='kiji'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='content'>";
          echo $row['comments'];
          echo "</div>";
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
        }
        ?>

      </div>

      <div class="right">
        <ul class="main">
          <li class="menu">
            <h2>人気の記事</h2>
            <div>PHPオススメ本</div>
            <div>PHP MyAdminの使い方</div>
            <div>今人気のエディタ Top5</div>
            <div>HTMLの基礎</div>
          </li>
          <li class="menu">
            <h2>オススメリンク</h2>
            <div>インターノウス株式会社</div>
            <div>XAMPPのダウンロード</div>
            <div>Eclipseのダウンロード</div>
            <div>Bracketsのダウンロード</div>
          </li>
          <li class="menu">
            <h2>カテゴリ</h2>
            <div>HTML</div>
            <div>PHP</div>
            <div>MySQL</div>
            <div>JavaScript</div>
          </li>
        </ul>
      </div>

    </main>

  <footer>
    copyrighy ©︎ internous | 4each blog the ehich provideos A to Z about programming.
  </footer>
</div>

</body>
</html>