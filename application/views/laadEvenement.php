<?php
//    $counter = 0;
//    foreach($evenementen as $evenement) {
//
//        if (($counter < 6) && $evenement[0]->datum >= date("Y-m-d")) {
//            if ($evenement[0]->datum == date("Y-m-d") && $evenement[0]->eindTijd < date("H:i:sa")) {
//
//            } else {
//                $counter++;
//                echo $evenement[0]->id . '<br>';
//                echo $evenement[0]->naam . '<br>';
//                echo $evenement[0]->datum . '<br>';
//                echo $evenement[0]->startTijd . '<br>';
//                echo $evenement[0]->eindTijd . '<br>';
//            }
//        }
//    }

$counter = 0;
foreach($evenementen as $evenement) {

    if (($counter < 6) && $evenement[0]->datum >= date("Y-m-d")) {
        if ($evenement[0]->datum == date("Y-m-d") && $evenement[0]->eindTijd < date("H:i:sa")) {

        } else {

            $originalDate = $evenement[0]->datum;
            $newDate = date("d/m/Y", strtotime($originalDate));

            $counter++;
            echo '<div class="card mx-auto mt-5 p-3" style="width: 25rem">';
            echo '<div class="card-boy" style="width: 25rem">';
            echo '<h2 class="card-title">' . $evenement[0]->naam . '</h2>';
            echo '<h5>' . $newDate . '</h5>';
            echo '<p>' . $evenement[0]->beschrijving . '</p>';
            echo '</div>';
            echo '</div>';
        }
    }
}

//    foreach ($evenementen as $evenement) {
//        if ($evenement[0]->datum == date("Y-m-d")) {
//            echo '<div class="card mx-auto mt-5 p-3" style="width: 25rem">';
//            echo '<div class="card-boy" style="width: 25rem">';
//            echo '<h2 class="card-title">' . $evenement[0]->naam . '</h2>';
//            echo '<h5>' . $evenement[0]->datum . '</h5>';
//            echo '<p>' . $evenement[0]->beschrijving . '</p>';
//            echo '</div>';
//            echo '</div>';
//            //layout evenement tonen
//        }
//    }