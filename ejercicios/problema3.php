 <center><b> <p>Ejercicio 3 </b> </p></center>
La edad de Sara  es el triple que la de su hija. Dentro de<b> X </b>años será el doble. ¿Qué edades tienen Sara y su hija?<br></br>

<img src="edades.png">

<form>
Introduce el valor de X: 
<input id="x" name="x" onkeyup="calcular()" value="<?=$_GET['x']?>"/> <br></br>


<button>Calcular</button>

</form>
<b> El resultado con JS:</b> <div id="resultado"></div> 
años tiene la hija <br></br>
<b> El resultado con JS:</b> <div id="resultado1"></div> 
años tiene Sara

<script>
function calcular(){
		x=document.getElementById('x').value;
		document.getElementById('resultado').innerHTML=x;
		document.getElementById('resultado1').innerHTML=3*x;
}
  calcular();
</script>
    <br></br>
	<b>El resultado con PHP:</b><br></br>
<?php
		$x=$_GET['x'];
		$a=3*$x;
		
		
		echo ($x);
		echo (" años tiene la hija");
		echo "<br>";
		
		echo ($a);
		echo (" años tiene Sara");
?>


