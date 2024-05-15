<?php
//faz a lista dos itens para venda
include "conexao.php";

$sql = " SELECT * FROM  ITEM i
        INNER JOIN SETOR s
        ON i.cod_setor = s.cod_setor";
         //where é adicionado conforme variaveis de busca entram aqui
//colunas: descricao, preco, cod_setor



//navegação

//primeira linha é terceirizada ou temporário
$nav_tipo = 'Terceirizado';

if($_REQUEST['setor']!=''){
    $where.= "\n and s.cod_setor = $_REQUEST[setor]";
    $nav_setor = $_REQUEST['nome'];
}

//adiciona filtro a query
if($where!=''){
    $sql = $sql."\n WHERE 1=1 ".$where;
}


//navegação
echo "<nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"javascript:home()\">Home</a></li>";
if($nav_tipo!=''){
    echo         "<li class=\"breadcrumb-item active\" aria-current=\"page\">$nav_tipo</li>";
}
if($nav_setor!=''){
    echo         "<li class=\"breadcrumb-item active\" aria-current=\"page\">$nav_setor</li>";
}    
echo        "</ol>
     </nav>";

$result = mysqli_query($link, $sql) or die('Query failed: ' . mysqli_error());
$num_rows = mysqli_num_rows($result);
echo "<div class='row'>";
echo "\t<div class='col-md-12'>";
echo "Exibindo $num_rows resultados.";
echo "<div class='row row-cols-1 row-cols-md-3 g-4'>";    
while ($line = mysqli_fetch_assoc($result)) {
    
    echo "\t<div class='col'>\n";

    $descricao = $line['descricao'];
    $cod_item = $line['cod_item'];
    $preco = number_format($line['preco'],2,',','.');
    $setor = $line['nome'];
    include('descricao.php'); //card com dados da compra
    echo "\t</div>\n";
}


?>