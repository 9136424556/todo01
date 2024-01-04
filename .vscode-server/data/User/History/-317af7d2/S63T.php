<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">
                World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="search-form__content">
         <div class="search-form__heading">
            <h2>日本と世界の時間を比較</h2>
         </div>
       </div>
       <form class="search-form" action="result.php" method="get">
        <div class="search-form_item">
            <select name="city"  class="search-form__item-select">
                <option value="シドニー">シドニー</option>
                <option value="上海">上海</option>
                <option value="モスクワ">モスクワ</option>
                <option value="ロンドン">ロンドン</option>
                <option value="ヨハネスブルク">ヨハネスブルク</option>
                <option value="ニューヨーク">ニューヨーク</option>
            </select>
        </div>
       </form>
    </main>
</body>
</html>