<?php

    require_once 'Jogos.php';
    require_once 'Plataforma.php';
    require_once 'Desenvolvedora.php';



    $Jogos1 = new Jogos ("Resident Evil 4", "Terror", "N", "149,90", "16");
    $Jogos2 = new Jogos ("Silent Hill", "Terror", "N", "249,90", "16");
    $Jogos3 = new Jogos ("League of Legends", "RPG", "S", "00,00", "12");
    
    $Plataforma1 = new Plataforma ("Xbox 360", "flex", "Console", "S", "2005");
    $Plataforma2 = new Plataforma ("Playstation 3", "Sony Computer Entertainment", "Console", "S", "2006");
    $Plataforma3 = new Plataforma ("Windows", "Microsoft", "Computador", "S", "2015");


    $Desenvolvedora1 = new Desenvolvedora ("Capcom", "Japão" ,"1979" ,"RE Engine");
    $Desenvolvedora2 = new Desenvolvedora ("Konami", "Japão" ,"1969" ,"FOX Engine");
    $Desenvolvedora3 = new Desenvolvedora ("RIOT Games", "EUA" ,"2006" ,"Unreal Engine");

    echo "Jogos";
    echo "</br>";
    echo $Jogos1->exibirInformacoes();
    echo "</br>";
    echo "Plataforma";
    echo "</br>";
    echo $Plataforma1->exibirInformacoes();
    echo "</br>";
    echo "Desenvolvedora";
    echo "</br>";
    echo $Desenvolvedora1->exibirInformacoes();
?>