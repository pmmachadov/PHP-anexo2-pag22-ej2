<!-- 2.- Crea una página que muestre la suma de los 100 primeros números naturales y
muestre el mensaje: “La suma de los primeros 100 números naturales es: XXX”.
Implementar el cálculo empleando las tres estructuras repetitivas conocidas.  -->

<!-- for -->

<?php
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}
echo "La suma de los primeros 100 números naturales es: $suma"."<br>";
?>

<!-- while -->

<?php
$suma = 0;
$i = 1;
while ($i <= 100) {
    $suma += $i;
    $i++;
}
echo "La suma de los primeros 100 números naturales es: $suma"."<br>";
?>
<!-- do while -->

<?php
$suma = 0;
$i = 1;
do {
    $suma += $i;
    $i++;
} while ($i <= 100);
echo "La suma de los primeros 100 números naturales es: $suma";
?>