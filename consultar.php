<style>
	

	table{
		margin: auto;
		border-collapse: collapse;
	}


	td{
		padding: 20;
		border: 1px solid #ccc;
		text-align: center;
		font-family: 'arial';
	}

</style>

<table>

	<tr>
		<td>Nome</td>
		<td>CPF</td>
		<td>Nascimento</td>
		<td>Nota AV1</td>
		<td>Nota AV2</td>
		<td>Final</td>
		<td>Media</td>
	</tr>



<?php

// Conectando ao banco de dados: 
include_once("conectar.php");

 $resultado = mysqli_query($con,"query a ser executada");

// lista tabela
function tabela($input){
	echo "<tr>";
	foreach($input as $key => $value){
		echo "<td>$value</td>";
	}
	echo "</tr>";
}

// classe pessoa

class pessoa{
	function __construct($Nome, $CPF,$Nascimento, $NotaAV1, $NotaAV2, $Final){
		$this->Nome = $Nome;
		$this->CPF = $CPF;
		$this->Nascimento = $Nascimento;
		$this->NotaAV1 = $NotaAV1;
		$this->NotaAV2 = $NotaAV2;
		$this->Final = $Final;
		$this->Media = number_format( ($this->NotaAV1+$this->NotaAV2+$this->Final)/3 , 2 );
	}
}

// dados
$a['fulano da silva'] = new pessoa("fulano da silva","2125412300","25/01/1985",10,8,9);
$a['beltrano da silva'] = new pessoa("beltrano da silva","2147483647","01/02/1972",7,9,8);


$b = ['fulano da silva','beltrano da silva'];

//coloca em ordem
sort($b);

//lista
foreach ($b as $key => $value) {
	$v = $a[$value];
	echo tabela( [ $v->Nome , $v->CPF , $v->Nascimento , $v->NotaAV1 , $v->NotaAV2 , $v->Final , $v->Media ] );
}

?>

</table>