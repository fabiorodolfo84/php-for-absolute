
<?php
$x = 5; // escopo global

function myTest() {
  global $x; // declare que você está usando a variável global $x
  echo "<p>A variável x na função é: $x</p>";
}

myTest(); // chama a função para exibir o valor de $x

