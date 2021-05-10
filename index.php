<html>
    <head>
        <?php 
            require_once('acaoJogar.php');
                        
        ?>
        <title>Jogo de Dados</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Jogo de Dados</legend>
                <label for="nome">Informe seu Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <input type="submit" value="Jogar">
                <br/>

            </fieldset>
        </form>

        <?php 

            if(isset($_POST['nome'])){
                $sNome = $_POST['nome'];
             
                    $iNumero1 = inicia();
                    $iNumero2 = inicia();

                    echo '"'.$sNome. '" somou: '. ($iNumero1 + $iNumero2) .'<br>';
                    echo '<img src="img/face_'.$iNumero1.'.png" width="60px">';    
                    echo '<img src="img/face_'.$iNumero2.'.png" width="60px"><br>';    

                    $iNumero1 = inicia();
                    $iNumero2 = inicia();

                    echo '"Computador" somou: '. ($iNumero1 + $iNumero2).'<br>';
                    echo '<img src="img/face_'.$iNumero1.'.png" width="60px">';    
                    echo '<img src="img/face_'.$iNumero2.'.png" width="60px">';    
            }
            
        ?>
    </body>
</html>
