
<?php
$name_user = 'Timur ';
$age_user = '30 ';
$mail_user = 'ya@ya.ru ';
$city_user = 'Saint-Petersburg ';
$about_user = 'noob ';
?>

<html>
    <head>
        <title>Home Work</title>
    </head>
    <body>
      <h1> About User </h1>
      <table>
        <tr>
          <td>name: </td>
          <td><?= $name_user ?></td>
        </tr>
        <tr>
          <td>age: </td>
          <td><?= $age_user ?></td>
        </tr>
        <tr>
          <td>mail: </td>
          <td><?= $mail_user ?></td>
        </tr>
        <tr>
          <td>city: </td>
          <td><?= $city_user ?></td>
        </tr>
        <tr>
          <td>about: </td>
          <td><?= $about_user ?></td>
        </tr>
      </table>
    </body>
</html>
