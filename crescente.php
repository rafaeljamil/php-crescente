<?php
    // Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

    // Exemplos para teste 

    // Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
    //         -  Sequencias com apenas um elemento são consideradas como TRUE

    // [1, 3, 2, 1]  false
    // [1, 3, 2]  true
    // [1, 2, 1, 2]  false
    // [3, 6, 5, 8, 10, 20, 15] false
    // [1, 1, 2, 3, 4, 4] false
    // [1, 4, 10, 4, 2] false
    // [10, 1, 2, 3, 4, 5] true
    // [1, 1, 1, 2, 3] false
    // [0, -2, 5, 6] true
    // [1, 2, 3, 4, 5, 3, 5, 6] false
    // [40, 50, 60, 10, 20, 30] false
    // [1, 1] true
    // [1, 2, 5, 3, 5] true
    // [1, 2, 5, 5, 5] false
    // [10, 1, 2, 3, 4, 5, 6, 1] false
    // [1, 2, 3, 4, 3, 6] true
    // [1, 2, 3, 4, 99, 5, 6] true
    // [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    // [3, 5, 67, 98, 3] true


    // Esta função foi complicada de organizar.
    // Infelizmente não consegui organizar a lógica para dar o resultado desejado
    // Deixo nos comentários a sequência que chegou mais perto.
    function isCrescent($array){
        // Salvamos o array em outra variável pra poder manipular
        $b = $array;
        // Inicializamos um array vazio pra nos ajudar na lógica.
        $res = [];
        // No laço, seguimos o padrão de dar tantas voltas quanto o tamanho do array recebido
        for($i = 0; $i < count($b); $i ++){
            $b = $array;
            // Pra cada volta tiramos o elemento i do array
            array_splice($b, $i, 1);
            // Salvamos uma cópia do array
            $c = $b;
            //Então ordenamos a cópia
            sort($c);
            // Aqui comparamos a cópia com o original pra descobrir se nesta posição do laço
            // seria possível o array estar em ordem crescente
            if($b == $c){
                // Caso positivo adicionaremos 1 (ou true) ao nosso array de controle
                array_push($res, 1);
            }else{
                // Caso contrário nosso array terá apenas zeros
                array_push($res, 0);
            }
        }
        //Inicializamos o resultado como falso
        $result = "false";
        // Aqui checamos o array de controle e se tiver pelo menos um 1 (ou true) nele significa que
        // é possível remover um elemento e ter um array em sequência crescente.
        if(in_array(1, $res)){
            $result = "true";
        }else{
            $result = "false";
        }
        //var_dump($res);
        // Então retornamos o resultado com "true" ou "false"
        return $result;
        
    }


    print_r(isCrescent([1, 3, 2, 1]));
    print_r(isCrescent([1, 3, 2]));
    print_r(isCrescent([1, 2, 1, 2]));
    print_r(isCrescent([3, 6, 5, 8, 10, 20, 15]));
    print_r(isCrescent([1, 1, 2, 3, 4, 4]));
    // Devem imprimir false, true, false, false, false
?>