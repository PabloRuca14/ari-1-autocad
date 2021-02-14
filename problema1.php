 <center><b> <p>Ejercicio 1 </b> </p></center>
Se quiere construir un jardín de <b>X</b> m de ancho alrededor de una fuente circular de <b> Y</b> m de diámetro. Si los paquetes de césped fuesen de <b> Z</b> m2, ¿cuántos paquetes harían falta comprar para cubrir el jardín? <br></br>
 Datos:π=3,14<br></br>



<form>
Introduce el valor de X: 
<input id="x" name="x" onkeyup="calcular()" value="<?=$_GET['x']?>"/> <br></br>
Introduce el valor de Y:
<input id="y" name="y" onkeyup="calcular()" value="<?=$_GET['y']?>"/> <br></br>
Introduce el valor de Z:
<input id="z" name="z" onkeyup="calcular()" value="<?=$_GET['z']?>"/> <br></br>
<button>Calcular</button>

</form>
<b> El resultado con JS:</b> <div id="resultado"></div> 
paquetes

<script>
function calcular(){
		x=document.getElementById('x').value;
		y=document.getElementById('y').value;
		z=document.getElementById('z').value;
		document.getElementById('resultado').innerHTML=(3.14*[[(x-(-y/2))*(x-(-y/2))]-[(y/2)*(y/2)]]/z);
}
  calcular();
</script>
    <br></br>
	<b>El resultado con PHP:</b><br></br>
<?php
		$x=$_GET['x'];
		$y=$_GET['y'];
		$z=$_GET['z'];
		
		$a=$y/2;
		$sg=3.14*($x+$a)*($x+$a);
		$sp=3.14*$a*$a;
		$s= $sg-$sp;
		
		echo ($s/$z);
		echo (" paquetes");
?>


