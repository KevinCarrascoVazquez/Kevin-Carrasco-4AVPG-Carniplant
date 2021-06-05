 <!DOCTYPE html>
<html>
<head>
     <title>Registrar usuario</title>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="estilo.css">
       <link rel="icon" href="A.ico">

</head>
<body background="paisaje.jpg">
            <header class="header">
        <div class="container logo-nav-container">
            <a href="#" class="logo">Carniplant</a>
            <span class="menu-icon">Ver menú</span>
        
            <nav class="navigation">
                <ul class="show">
                   <li><a href="prueba.html" id="a1">Inicio</a></li>
                    <li><a href="index.html" id="a2">Compras</a></li>
                    <li><a href="indexM.php" id="a3">Sugerencias</a></li>
                    <li><a href="index.php" id="a4">Escribe tus sugerencias</a></li>

                
                </ul>
            </nav>
        </div>
    </header>
 
 
     
                  
    <form method="post">
    
        <h1>Carniplant Sugerencias</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="suger" placeholder="Sugerencias">
        <input type="submit" name="register">
        
        </form>
        <?php 
        include("registro.php");
        ?>

          
    
 


   
</body>
</html>