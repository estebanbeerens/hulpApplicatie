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
            echo '<div class="card mx-auto mt-5 p-3 text-center" style="width: 25rem">';
            echo '<div class="card-header text-center bg-primary"><h1>'. $evenement[0]->naam .'</h1></div>';
            echo '<div class="card-body" style="width: 25rem">';
            echo '<h5>' . $newDate . '</h5>';
            echo '<p>' . $evenement[0]->beschrijving . '</p>';
            echo '<p>Van: ' . $evenement[0]->startTijd .' - '. $evenement[0]->eindTijd . '</p>';

            if ($evenement[0]->beschrijving == 'Bingo'){
                echo '<div><i class="fas fa-dice fa-10x"></i></div>';
            }
            echo '</div>';
            echo '</div>';

        }
    }

}
//<div class="card">
//  <div class="card-header">
//    Featured
//  </div>
//  <div class="card-body">
//    <h5 class="card-title">Special title treatment</h5>
//    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
//    <a href="#" class="btn btn-primary">Go somewhere</a>
//  </div>
//</div>

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