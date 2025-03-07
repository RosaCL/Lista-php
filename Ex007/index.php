<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="pergunta">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <?php for($i=0; $i<10;$i++):?>
                <div class="form-content <?php echo$i?>" >
                    <fieldset><legend><h1 class="title">Dados</h1></legend>
                    <label for="name" class="dado-label">Nome</label><br>
                    <input type="text" class="dado-input" name="name$i" id="name"><br>
                    <label for="city" class="dado-label">Cidade</label><br>
                    <input type="text" class="dado-input" name="city$i" id="city"><br>
                    <label for="sex" class="dado-label">Sexo</label><br>
                    <input type="text" class="dado-input" name="sex$i" id="sex"><br>
                    <label class="dado-label" for="age">Idade</label><br>
                    <input class="dado-input" type="number" name="age$i" id="age">                    
                </fieldset>
                
                </div>
                <?php endfor;?><br>
                
                    <input class="enviar" type="submit" value="Enviar">
                
            </form>

        </section>
        

    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset><legend> <h1 class="title">Dados Recebidos</h1></legend>
            <div class="res">
                <?php   
            $peoples = [];
            $masculino = 0;
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                for ($i = 0; $i < 10; $i++) {
                    $peoples[] = [
                        "name" => $_POST["name" . ($i + 1)],
                        "city" => $_POST["city". ($i + 1)],
                        "age" => $_POST["age". ($i + 1)],
                        "sex" => $_POST["sex". ($i + 1)],
                    ];
                }
                    echo "<h2>Listagem de Nomes e Idades:</h2>";
                    foreach ($peoples as $people) {
                        echo $people["nome"] . " - " . $people["idade"] . " anos<br>";
                    }
                    echo "<h2>Nomes de quem Mora em Santos:</h2>";
                    foreach ($peoples as $people) {
                        if (strtolower($people["cidade"]) == "santos") {
                            echo $people["nome"] . "<br>";
                        }
                    }
                    echo "<h2>Nomes de Quem Tem Mais de 18 Anos:</h2>";
                    foreach ($peoples as $people) {
                        if ($people["idade"] > 18) {
                            echo $people["nome"] . "<br>";
                        }
                    }
                    foreach ($peoples as $people) {
                        if ($people["sexo"] == "masculino" || $people["sexo"] == "m") {
                            $masculino++;
                        }
                    }
                echo "<h2>Foram registradas: " . $masculino . " Pessoas do sexo masculino</h2>";
            }
            
        
            
            ?>  
            </div>
        
            </fieldset>  
            
        </div>
    <footer>
        <a href="https://github.com/RosaCL"><img src="./costurezaa.png" alt=""></a>
    </footer>
    
    
</body>
</html>