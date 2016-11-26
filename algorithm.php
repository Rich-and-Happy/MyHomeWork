<?php
header("Content-Type: text/html; charset=utf-8");

echo "компьютер загадал число от 1 до 3. Как вы думаете, какое?";
$pc_rand = mt_rand (1,3); // компьютер загадывает число echo $pc_rand;

if (isset($_POST['id'])){
  $id = (int) $_POST['id'];
}
else {
  $id = 0;
}
?>
<form method="post">
  <input name="id">
  <button>Проверить</button>
</form>

<?php

if ($id>$pc_rand) {
  echo "Много";
} elseif ($id===$pc_rand) {
  echo "Вы Угадали!";
} else {
  echo "Мало";
}
