<?php
    $counter = 0;

    foreach($evenementen as $evenement){

    $counter++;
    if(($counter < 4) && $evenement[0]->datum >= date("Y-m-d")){
        echo $evenement[0]->id . '<br>';
        echo $evenement[0]->naam . '<br>';
        echo $evenement[0]->datum . '<br>';
    }

}