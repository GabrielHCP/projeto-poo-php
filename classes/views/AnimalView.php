<?php

class AnimalView {

    function ExibirTodosAnimais() {

        $animalController = new AnimalController();
        $listaAnimais = $animalController->Listar();

        for($i = 0; $i < count($listaAnimais); $i++) {

            echo "<div class='caixaAnimal'>
                    <a href='atendimento.html'>
                        <img src='images/{$listaAnimais[$i]->Nome}.png'>    
                        <div>
                            <h1>{$listaAnimais[$i]->Nome}</h1>
                            <p>{$listaAnimais[$i]->Especie->Nome}</p>
                        </div>
                    </a>
                </div>";


        }


    }

    function BuscarPeloNome($valor) {

        $animalController = new AnimalController();
        $listaAnimais = $animalController->BuscarPeloNome($valor);

        if(count($listaAnimais) == 0) {

            echo "<h2>Nenhum animal encontrado com o nome '{$valor}'</h2>";

        } else {

            for($i = 0; $i < count($listaAnimais); $i++) {

                echo "<div class='caixaAnimal'>
                        <a href='atendimento.html'>
                            <img src='images/{$listaAnimais[$i]->Nome}.png'>    
                            <div>
                                <h1>{$listaAnimais[$i]->Nome}</h1>
                                <p>{$listaAnimais[$i]->Especie->Nome}</p>
                            </div>
                        </a>
                    </div>";


            }
        }
    }
}


?>