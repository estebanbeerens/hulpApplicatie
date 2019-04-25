<?php foreach ($evenement as $item){
    echo "<h3>".$item[0]->naam."</h3>";
    echo "<p>".$item[0]->beschrijving."</p>";
    echo "<p>"."Het evenement start om: ".$item[0]->startTijd." en eindigt om ". $item[0]->eindTijd."</p>";
    echo "<p>"."Locatie: ".$item[0]->locatie."</p>";
}