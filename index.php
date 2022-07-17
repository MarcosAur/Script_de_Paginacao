<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Paginação</title>
</head>
<body>
    <form action="" method="post">
        <?php
            $pagina = 1;
            if(isset($_POST['pagina'])){
                $pagina = $_POST['pagina'];
            }

            $produtos = [
                //primera
                "Maça",
                "Banana",
                "Pessego",
                "Cajá",
                //segunda 
                "Cajarana",
                "Siriguela",
                "Abacate",
                "Maracujá",
                //terceira
                "Limão",
                "Manga",
                "Abacaxi",
                "Tangerina",
                //quarta
                "Goiaba"                
            ];

            $PRODUTOS_POR_PAGINA = 4;
            $quantidade_de_paginas = ceil(count($produtos) / $PRODUTOS_POR_PAGINA);
            $MULTIPLICADOR = $pagina - 1; //Constante usada para multiplicar o indice pelo número da página.

            for ($contador=0; $contador <= 3; $contador++) { 
                $index_do_produto = $contador + ($PRODUTOS_POR_PAGINA * $MULTIPLICADOR );
                $produto_exibido = $produtos[$index_do_produto]; 
                echo "<h1>$produto_exibido</h1>";
            }

            for ($contador=1; $contador <= $quantidade_de_paginas ; $contador++) { 
                echo "<input type='submit' value='$contador' name='pagina'>";
            }
            
        ?>
        
    </form>
</body>
</html>