<?php foreach($evenementen as $evenement){
    if($evenement[0]->datum == date("Y-m-d")){
        echo $evenement[0]->id . '<br>';
        echo $evenement[0]->naam . '<br>';
        echo $evenement[0]->datum . '<br>';
    }

}