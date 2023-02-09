<?php
echo "<H1> PHP - Aula 02 <br> </H1> " ; 
echo "<H2>Tipos de dados </H2>" ;
echo "<hr>";

$nome = "Bruce";
$idade = 40;
$altura = 1.78;
$fumante = false;

echo "Nome: " . $nome;
echo "<br>";
echo "Idade: " . $idade;
echo "<br>";
echo "Altura: " . $altura;
echo "<br>";
echo "Fumante: " . $fumante;
echo "<br>";

echo $nome . " - " .  $idade . " - " .  $altura . " - " .  $fumante;

echo "<hr>";
echo gettype($nome) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($fumante) . "<br>";
echo "<hr>";

echo "<h2> Operadores aritméticos  </h2>";
$n1 = 10;
$n2 = 2;

echo $n1 + $n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 %  2 . "<br>";
echo $n1 ** 2 . "<br>";

echo "<hr>";
echo "<h2> Operadores relacionais  </h2>";
echo ($n1 > $n2) . "<br>";
echo ($n1 >= $n2) . "<br>";
echo ($n1 < $n2) . "<br>";
echo ($n1 <= $n2) . "<br>";
echo ($n1 != $n2) . "<br>";
echo ($n1 == $n2) . "<br>";

echo "<hr>";
echo "<h2> Operadores Lógicos  </h2>";
echo(20>10) && (10>5);
echo"<br>";
echo(20>10) || (10>5);
echo"<br>";
echo !(10<5);
?>