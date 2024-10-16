<?php
/* 
Доступ по ссылке
Вы унаследовали код от другого разработчика. Вы не можете изменить их код, но вам необходимо добавить некоторые дополнительные функции. Вместо использования переменной $very_bad_unclear_name, как в вашей части кода. Объявите новую переменную $order как ссылку на переменную $very_bad_unclear_name.
С помощью оператора конкатенации добавьте к переменной $order любую строку.
Распечатайте $very_bad_unclear_name
*/


/* Imagine a lot of code here */ 
 $very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order =& $very_bad_unclear_name;
$order .= " that you dont even want but still gonna consume regardless";



  
 // Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";
?>