<?php
    function mostrar_comida($id_comida){
        $comidas = include '../dados/comidas.php';
        printf('<div class="content-specify-food">');
            echo "<img class='img-specify' src= {$comidas[$id_comida]['imagem']}>"; 
            echo "</br>";
            echo "</br><b>";
            echo $comidas[$id_comida]['nome'];
            echo "</br>Tamanho: </b>";
            echo $comidas[$id_comida]['tamanho'];
            echo "</br><b>Preço: </b>";
            echo $comidas[$id_comida]['preco'];
            echo "</br><b>Ingredientes: </b>";
            echo $comidas[$id_comida]['ingredientes'];
            echo "</br><b>Contato:</b> xx xxxxx-xxxx";
        printf('</div>');
        }
?>