 <center><b> <p>Ejercicio 3 </b> </p></center>
Se quiere construir un depósito abierto de base cuadrada y paredes verticales con capacidad para <b> X</b> m3. Para ello se dispone de una chapa de acero de grosor uniforme. Calcula las dimensiones del depósito para que el gasto en chapa sea el mínimo posible<br></br>

<img src="deposito.png">

<form>
Introduce el valor de X: 
<input id="x" name="x" onkeyup="calcular()" value="<?=$_GET['x']?>"/> <br></br>


<button>Calcular</button>

</form>
<b> El resultado con JS:</b> <div id="resultado"></div> 
metros mide la base <br></br>
<b> El resultado con JS:</b> <div id="resultado1"></div> 
metros mide de altura

<script>
function calcular(){
		x=document.getElementById('x').value;
		document.getElementById('resultado').innerHTML=Math.pow(2*x,1/3);
		document.getElementById('resultado1').innerHTML=x/Math.pow(2*x,2/3);
}
  calcular();
</script>
    <br></br>
	<b>El resultado con PHP:</b><br></br>
<?php
		$x=$_GET['x'];
		$n=4*$x/2;
		$raiz=3;
		$a=pow($n,(1/$raiz));
		echo ($a);
		
	echo (" metros mide la base");
		echo "<br>";
		
		echo ($x/($a*$a));
		
		echo (" metros mide de altura");
?>

		
		
		
		



