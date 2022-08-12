<?php
    include '../layout/cabecalho.php';
?>

<?php
    $comidas = include '../dados/comidas.php';

    printf('<nav class="flex-container">');

    for ($row = 0; $row < 3; $row++) {
        echo "<div class='content-food'>";
            printf("<img src= %s >", $comidas[$row]['imagem']);
            echo "</br>";
            echo $comidas[$row]['nome'] ;
            echo "</br>";
            printf("<a href= %s >Clique aqui para visualizar</a>", $comidas[$row]['caminho']);
        echo "</div>";
    }

    printf("</nav>");
  ?>

<?php
    include '../layout/rodape.php';
?>