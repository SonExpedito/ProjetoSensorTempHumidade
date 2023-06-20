<?php

    include("Conexao.php");

    $umidade = $_GET['umidade'];
    $temperatura = $_GET['temperatura'];

    $sql = "INSERT INTO dados(umidade,temperatura) VALUES(:umidade, :temperatura);";

    $stmt = $PDO->prepare($sql);

    $stmt->bindParam(':umidade', $umidade);
    $stmt->bindParam(':temperatura', $temperatura);

    if($stmt->execute()){
        echo "Dados Gravados com Sucesso";

    }

    else{
        echo "Erro ao Gravar os Dados";
    }










?>