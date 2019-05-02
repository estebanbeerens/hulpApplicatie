<?php
    $counter = 0;


    foreach($evenementen as $evenement){

    $counter++;
    if(($counter < 4) && $evenement[0]->datum >= date("Y-m-d")){
        if($evenement[0]->datum == date("Y-m-d") && $evenement[0]->eindTijd < date("H:i:sa")){

        } else {
            echo $evenement[0]->id . '<br>';
            echo $evenement[0]->naam . '<br>';
            echo $evenement[0]->datum . '<br>';
            echo $evenement[0]->startTijd . '<br>';
            echo $evenement[0]->eindTijd . '<br>';
        }

    }

}