<?php
    echo "<div class=\"card\" style=\"width: 18rem;\">";
    echo "\t<img src=\"img/item/$cod_item.jpg\" class=\"card-img-top\" alt=\"$descricao\">";
    echo "\t<div class=\"card-body\">";
    echo "\t\t<h5 class=\"card-title\">$descricao</h5>";
    echo "\t\t<p class=\"card-text\">Por apenas<br>
        r$<span style='font-size:56px;'>$preco</span>
    </p>";
    echo  "<a href=\"#\" class=\"btn btn-danger\">Contrate AGORA</a>";
    echo "\t</div>";
    echo "</div>";


?>