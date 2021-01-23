 <center><b> <p>Ejercicio 2 </b> </p></center>
Halla la apotema de un hexágono regular de <b> x</b> cm de lado<br></br>

<img src="hexagono.png">

<form>
Introduce el valor de X: 
<input id="x" name="x" onkeyup="calcular()" value="<?=$_GET['x']?>"/> <br></br>

<button>Calcular</button>

</form>
<b> El resultado con JS:</b> <div id="resultado"></div> 
cm mide la apotema

<script>
function calcular(){
		x=document.getElementById('x').value;
		document.getElementById('resultado').innerHTML=Math.sqrt((x*x)-((x/2)*(x/2)));
}
  calcular();
</script>
    <br></br>
	<b>El resultado con PHP:</b><br></br>
<?php
		$x=$_GET['x'];
		$a=$x*$x;
		$h=sqrt((($x*$x)-(($x/2)*($x/2))));
		
		echo ($h);
		echo (" cm mide la apotema");
?>


