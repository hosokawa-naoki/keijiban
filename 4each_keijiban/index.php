<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
  <?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson1001;host=localhost;","root","mysql");
$stmt=$pdo->query("select*from 4each_keijiban");
?>
 <img src="4eachblog_logo.jpg">  
  <header>
    <ul>
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
     <h1>プログラミングに役立つ掲示板</h1>
    <form method="post" action="insert.php">
    <h3>入力フォーム</h3>
    <div>
        <lavel>ハンドルネーム</lavel>
        <br>
        <input type="text" class="text" size="35" name="handlename">
    </div> 
     <br> 
    <div>
        <lavel>タイトル</lavel>
        <br>
        <input type="text" class="text" size="35" name="title">
    </div> 
      <br> 
    <div>
        <lavel>コメント</lavel>
        <br>
        <textarea cols="80" rows="10" name="comments"></textarea>
    </div>
    <div>
        <input id="submit" type="submit" class="submit" value="投稿する">
    </div>   
    </form>
     <?php
     while($row=$stmt->fetch()){
     echo "<div class='kiji'>";
     echo "<h3>".$row['title']."</h3>";
     echo "<div class='contents'>";
     echo $row['comments'];
     echo "<div class='handlername'>posted by".$row['handlename']."</div>";
     echo "</div>";
     echo "</div>";
     }
    ?>
    </div>
      <div class="right">
        <h1>人気の記事</h1>
        <ul>
          <p>PHPオススメ本</p>
          <p>PHP MyAdminの使い方</p>
          <p>今人気のエディタTop5</p>
          <p>HTMLの基礎</p>
        </ul>
        <h1>オススメリンク</h1>
        <ul>
          <p>インターノウス株式会社</p>
          <p>XMAPPのダウンロード</p>
          <p>Eclipseのダウンロード</p>
          <p>Bracketsのダウンロード</p>
        </ul> 
        <h1>カテゴリ</h1>
        <ul>
          <p>HTML</p>
          <p>PHP</p>
          <p>MySQL</p>
          <p>JavaScript</p>
        </ul>
      </div>
  </main>
  <footer>
    copylight c internous / 4each blog is the one which provides A to Z about programming.
  </footer>
</body>