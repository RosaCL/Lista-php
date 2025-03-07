<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+/-</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="pergunta">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <?php for($i=0; $i<10;$i++):?>
                <div class="form-content <?php echo$i?>" >
                    <fieldset><legend><h1 class="title">Dados</h1></legend>
                    <label for="number" class="dado-label">Número</label><br>
                    <input class="dado-input" type="number" name="number" id="number"><br>
                    <label for="register" class="dado-label">Registro</label><br>
                    <input type="text" name="register" id="register"><br>  
                    <label for="model" class="dado-label">Modelo</label><br>
                    <input type="text" name="modelr" id="model"><br> 
                    <label for="fabricante" class="dado-label">Fabricante</label><br>
                    <input type="text" name="fabricante" id="fabricante"><br> 
                    <label for="color" class="dado-label">Cor</label><br>
                    <input type="text" name="color" id="color"><br> 
                    <label for="portas" class="dado-label">Portas</label><br>
                    <input class="dado-input" type="number" name="portas" id="portas"><br>   
                    <label for="number" class="dado-label">Ano</label><br>
                    <input class="dado-input" type="number" name="age" id="age"><br>

                
                </fieldset>
                
                </div>
                <?php endfor;?><br>
                
                    <input class="enviar" type="submit" value="Enviar">
                
            </form>

        </section>
        
    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset> <legend><h1 class="title">Dados analisados</h1></legend>
            <div class="res">
                <?php 
                
            ?>
            </div>
            </fieldset>
        </div> 

    </section>
    <footer>
        <a href="https://github.com/RosaCL"><img src="./costurezaa.png" alt=""></a>
    </footer>
    
    
</body>
</html>