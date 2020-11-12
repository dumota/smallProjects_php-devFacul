<?php

    $produto[0] = "Bolovo";
    $produto[1] = "tibaina";
    $produto[2] = "baré cola";
    $produto[3] = "sanduiche de marba";
    $produto[4] = "corote";

   // print_r ($produto);

   foreach ( $produto as $p){
       echo "<p>produto : {$p}</p>";
   }

   $produto = array("itubaina","cristal","derby","delrey","mortadela");

   print_r($produto);

   foreach ($produto as $p){
       echo "<p>Produtos: {$p}</p>";
   }

        echo "<hr>";
        //<hr> ponha uma linha de fora a fora.

       // echo "$produto[3]";
        echo "<br>";

   $carro = array(0=>"gol",1=>"monza",2=>"elba",3=>"chevete",4=>"opala");
   echo "<hr>";
   echo array_search('opala',$carro);

   print_r ($carro);

   echo "<hr>";

   $carro =array("marca"=>"fiat","ano"=>"1980","modelo"=>"fiat 147 luxo");

   print_r($carro);
   echo "<p>".$carro["modelo"]."</p>";
