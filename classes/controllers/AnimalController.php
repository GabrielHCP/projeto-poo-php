<?php 

class AnimalController {


    function Listar() {

        $servidor = 'mysql:host=localhost;dbname=prontuario_vet';
        $usuario = 'root';
        $senha = 'Pa$$w0rd'; 
        $lista = [];

        try {

            $pdo = new PDO($servidor, $usuario, $senha);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cSQL = $pdo->prepare('SELECT cd_animal, nm_animal, cd_especie FROM animal');
            $cSQL->execute();

            while($dados = $cSQL->fetch(PDO::FETCH_ASSOC)) {

                $codigo = $dados['cd_animal'];
                $nome = $dados['nm_animal'];
                $codigoEspecie = $dados['cd_especie'];

                $animal = new Animal($codigo, $nome);
                array_push($lista, $animal);

            }

            $pdo = null;


        } catch (PDOException $e) {
            echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        }

        return $lista;

    }


}


?>