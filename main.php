<?php
/* Доступ по ссылке
Вы унаследовали код от другого разработчика. Вы не можете изменить их код, но вам необходимо добавить некоторые дополнительные функции. Вместо использования переменной $very_bad_unclear_name, как в вашей части кода. Объявите новую переменную $order как ссылку на переменную $very_bad_unclear_name.
С помощью оператора конкатенации добавьте к переменной $order любую строку.
Распечатайте $very_bad_unclear_name */
/* Imagine a lot of code here */ 
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order =& $very_bad_unclear_name;
$order .= " that you dont even want but still gonna consume regardless";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/* task 2 */
$ll = 42;
echo "$\n\n$ll\n";
$ld = 4.20;
echo "$ld\n";

echo $ll-30 . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month . "\n\n";

/* task 11 */
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $num_languages . "\n\n";

/* task 12 */
echo 8 ** 2 . "\n\n";

/* task 13 */
$my_num = 42;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -=2;
$answer /=2;
$answer -= $my_num;
echo "$answer\n\n";


?>