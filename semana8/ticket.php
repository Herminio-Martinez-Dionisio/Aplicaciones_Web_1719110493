
<?php
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");		

$carritoobt = $_GET["carrito"];
$totalp = $_GET['tot_pagar'];
$pagara = $_GET['pago'];
$num_articulo = $_GET['contador_art'];

/*echo $carritoobt."\n";
echo '<br>';
echo $totalp."\n";
echo $pagara."\n";*/

echo '<br>' ;
echo '<br>' ;
echo '<h1>Don baraton </h1>';

echo 'Fecha: '.strftime ("%d de %b del %Y");

//echo strftime("Hoy es %A y son las %H:%M");
//echo strftime("El año es %Y y el mes es %B");

echo '<br>';
echo '<br>' ;
echo 'Hora de venta: ' .strftime("%H:%M");
echo '<br>';
echo '<br>' ;
echo '
Articulos vendidos: '.$num_articulo;
echo '<br>';
echo '<textarea disabled style="width:400px; height:150px;">'.$carritoobt.'</textarea>';

echo '<br>';
echo '<br>' ;
echo '
Total de venta: '.$totalp;

echo '<br>';
echo '<br>' ;
echo '
Total pagado: ',$pagara;

echo '<br>';
echo '<br>' ;
echo '
Cambio: '.($pagara -$totalp);

?>