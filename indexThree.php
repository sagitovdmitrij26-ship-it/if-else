/*Задача №3: Сформируйте динамичесткую html страничку, где в начале задается число $n - количество строк ячеек таблицы с какими-то данными.
*сделайте разным фоном четные и нечетные строки*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица зерновых культур</title>
    <style>
  tr:nth-child(even) { background-color: #f00; } /* красный для четных */
  tr:nth-child(odd) { background-color: #0f0; } /* зеленый для нечетных */
</style>
</head>
<body>
    <table border="2">
        <caption>Виды зерновых культур</caption>
        <tr> //строка заголовка
        <th>номер</th><th>название культуры</th><th>срок созревания</th><th>период обработки</th>
        </tr>
        <?php
      $n = 1;
      while ($n <= 10){        
        echo "<tr>";
        echo "<td>" . $n . "</td>";
        echo "<th></th>";
        echo "<th></th>";
        echo "<th></th>";
        echo "</tr>";
        $n++;
      }      
        ?>

    </table>
    
</body>
</html>