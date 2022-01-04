<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receta ghormeh sabzi</title>
    <link rel="stylesheet" href="./styles/index.css">
    <head>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
</head>

</head>
<body>
    <header>
        <h1>Ghormeh Sabzi (Persian Herb Stew)</h1>
    </header>
    <main>
        <section>
            <img src="./assets/gorme_sabzi.jpg" alt="Ghormeh Sabzi (Persian Herb Stew)" class="image">
        </section>
        <section class="align">
            <div  class="ingredents" > 
            <h1 >INGREDIENTS</h1>
            <ul>
                <li>1 kg de carne para estofado de cordero o ternera, en cubos</li>
                <li>  200 g de frijoles rojos remojados durante la noche</li>
                <li>  1 cebolla picada finamente</li>
                <li> 4 manojos de perejil</li>
                <li> 1 manojo de cilantro</li>
                <li> 4 cebolletas solo tallos verdes</li>
                <li> 1 cucharada de fenogreco seco o 1 manojo de fenogreco fresco</li>
                <li> 4 limas negras secas (limoo amano 4 cucharadas de jugo de limón</li>
                <li> 1 cucharada de cúrcuma</li>
                <li> Aceite vegetal</li>
                <li>  Sal</li>
                 <li>Pimienta</li>
            </ul>
            </div>
            <div class="timeSection" >
                <h2 class="hola">Rellene le formulario y le mandaremos informacíon muy interesante</h2>
                   
                    <form method="post">
                        <label for="name">Nombre</label>
                        <input class="form" type="text" name="nombre" id="name" placeholder="nombre">
                        <label for="surname">Apellidos</label>
                        <input class="form" type="text" name="apellidos" id="surname"placeholder="apellidos">
                        <label for="email">Correo</label>
                        <input class="form" type="email" name="correo" id="correo"placeholder="correo">
                        <input type="submit" name="btn" value="registrar">
                    </form>  
                   <?php
                   include ('registrar.php');
                   ?>
                

            </div> 
        </section>
        <section class="preparation">
            <h1>PREPARATION</h1>
            <ul>
              <li> Lave las hierbas en un tazón grande, y luego séquelas y píquelas finamente.</li> 
              <li> En una sartén grande, caliente 4 cucharadas de aceite vegetal a fuego medio y saltee las hierbas frescas  durante unos 15 minutos, mientras revuelve ocasionalmente.</li>
 
              <li>En una olla grande, salteé las cebollas picadas en 2 cucharadas de aceite durante unos 10 minutos, hasta que estén doradas.</li> 
              <li>Agregue la carne, la cúrcuma, la sal y la pimienta a las cebollas y fría durante unos 6 a 8 minutos.</li>
              <li>Agregue los frijoles secos remojados, las hierbas fritas y las limas negras.</li>
              <li>Cubra con agua y hierva a fuego alto. A continuación, baje el fuego, cubra y cocine a fuego lento a medio durante aproximadamente 2 horas.</li>
              <li>Pruebe y agregue sal o pimienta si es necesario. Agregue agua y continúe cocinando a fuego lento si la carne no está lo suficientemente tierna.</li>
              <li>Sirva sobre un arroz al vapor persa.</li>

            </ul>
        </section>
        <footer>
            <p>Created by Sasha Bidardel</p>
        </footer>
    </main>
</body>
</html>