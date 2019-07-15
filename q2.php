<?php
//echo "iniciando processo...";
$STDIN = @fopen("sampleinput.txt", "r");
if ($STDIN) {
/*******************************************/

while ($i = fgets($STDIN)){
	$num = trim($i);
    //echo "$num: ".number_format(sqrt( $num ),3)."<br>";
    //echo "$num: ".number_format(pow( $num, 1/2 ),3)."<br>";
    $resultado = 1.0;
    $precision = 0.0000000001;
    
    $raiz = $resultado * $resultado;
    while ( ($raiz - $num > $precision) or ($raiz - $num < - $precision) ) {
        $resultado = ($resultado + ($num / $resultado)) / 2;
        $raiz = $resultado * $resultado;
    }
    echo "$raiz: ".number_format($resultado,3)."<br>";
}

/*******************************************/
fclose($handle);
}
//echo "finalizando processo...";
?>
