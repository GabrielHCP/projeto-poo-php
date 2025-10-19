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
                            <p>Buldog</p>
                        </div>
                    </a>
                </div>";


        }


    }


}


?>