<?php
      $name = "Максим";
      $age = 21;
      $mail = "deik@mail.ru";
      $city = "Санкт-Петербург";
      $about = "Студент";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <style type="text/css">
   		table {
            border: solid 1px black;
            border-collapse: collapse;
        }
        td {
            border: solid 1px black;
            padding: 5px;
        }
    </style>
</head>
<body>      
   <table>
      <caption>
         <h1>Страница пользователя</h1>
      </caption>
      <tr>
         <td>Имя</td>
         <td><?=$name ?></td>
      </tr>
      <tr>
         <td>Возраст</td>
         <td><?=$age ?></td>
      </tr>
      <tr>
         <td>Адрес электронной почты</td>
         <td><a href="#"><?=$mail ?></a></td>
      </tr>
      <tr>
         <td>Город</td>
         <td><?=$city ?></td>
      </tr>
      <tr>
         <td>О себе</td>
         <td><?=$about ?></td>
      </tr>
   </table>
</body>
</html>