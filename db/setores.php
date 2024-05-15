<?php
    include "conexao.php";


    $query = 'SELECT * FROM setor';
    $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error());
    
    while ($line = mysqli_fetch_assoc($result)) {
        
        echo "\t<li>\n";
        echo "\t\t<a class=\"dropdown-item\" href=\"javascript:loja({setor:$line[cod_setor],nome:'$line[nome]'})\">$line[nome]</a>";
        
        echo "\t</li>\n";
    }
    
    
    
    
    // Closing connection
    mysqli_close($link);
?>