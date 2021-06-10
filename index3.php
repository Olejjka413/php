<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $page=3;
        $title = 'Ivanova. O. PHP';
        $time = date("m.d.y").' в '.date("H:i:s");
        $seconds = date('s');
        if ($page==1) $title = $title.' | main';
        else if ($page==2) $title = $title.' | 2';
        else if ($page==3) $title = $title.' | 3';
    ?>
	<title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="icon.ico">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
	<header>
		<nav>
		<div class = "top">
	    	<img src="img/logo.png" width = 150px height = 75px alt ="лого">
	    	<h1 id ="title">Лабораторная работа 1</h1>
	    	<a href="<?= './index.php' ?>" 
                <?php 
                    echo 'class="';
                    if ($page == 0) echo 'active';
                    echo '"> Главная страница';
                ?>>
            </a>
            <a href="<?php echo './index2.php' ?>"
                <?php
                    echo 'class="';
                    if ($page == 1) echo 'active';
                    echo '">Вторая страница';
                ?>>
            </a>
            <a href="<?php echo './index3.php' ?>"
                <?php
                    echo 'class="';
                    if ($page == 2) echo ' active';
                    echo '">Третья страница';
                ?>>
            </a>
    	</div>
		</nav>
    </header>
    <main>
		<h1>Заголовок третьей страницы</h1>
		<h2> Заголовок статьи 1</h2>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
		reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
		culpa qui officia deserunt mollit.</p>
		
    	<h2> Заголовок статьи 2</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
		reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
		culpa qui officia deserunt mollit anim id est laborum.</p>
		<img class = pic src="img/1.jpg" width = 200px /><img class = pic src="img/2.jpg" width = 200px />
		<table>
  <tr>
    <th>№ п/п</th>
    <th>Наименование товара</th>
     <th>Ед. изм.</th>
     <th>Количество</th>
     <th>Цена за ед. изм., руб.</th>
     <th>Стоимость, руб.</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Томаты свежие</td><td>кг</td><td>15,20</td><td>69,00</td><td>1048,80</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Огурцы свежие</td><td>кг</td><td>2,50</td><td>48,00</td><td>120,00</td>
  </tr>
  <tr>
    <td colspan="5" style="text-align:right">ИТОГО:</td><td>1168,80</td><!-- Задаем количество ячеек по горизонтали для объединения-->
  </tr>
</table>


    </main>
    <footer>
    	<div class = "bottom">
    		<p>Иванова Ольга Сергеевна. Группа 201-321</p>
    		<p>01.02.2021</p>
    	</div>
    </footer>
</body>
</html>