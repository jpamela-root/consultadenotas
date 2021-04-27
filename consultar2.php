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
$a['carla'] = new pessoa("carla","321654987","20/11/1992",9,9,8);
$a['ana'] = new pessoa("ana","789456123","13/10/1992",9,3,2);
$a['beatriz'] = new pessoa("beatriz","641852963","02/02/1992",9,9,8);

$b = ['carla','ana','beatriz'];

//coloca em ordem
sort($b);

//lista
foreach ($b as $key => $value) {
	$v = $a[$value];
	echo tabela( [ $v->Nome , $v->CPF , $v->Nascimento , $v->NotaAV1 , $v->NotaAV2 , $v->Final , $v->Media ] );
}

?>

</table>