<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Slaboss+27px&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contener">
            <h1 class="titulo">Mi Galeria en PHP Y MySQL</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto) :?>
            <div class="thumb">
                <a href="foto.php?id=<?php echo $foto['id'] ?>" >
                    <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
                
                </a>
            </div>
            <?php endforeach; ?>
            <div class="paginacion">
                <?php if($pagina_actual > 1):?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif ?>  
                <?php if($total_paginas != $pagina_actual ):?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif ?> 
              
                
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">Galeria practica PHP - Sebastian Laguilon</p>
    </footer>

</body>
</html>