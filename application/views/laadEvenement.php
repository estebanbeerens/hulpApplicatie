<?php foreach ($evenement as $item){
    echo "<h3>".$item->naam."</h3>";
    echo "<p>".$item->beschrijving."</p>";
    echo "<p>"."Het evenement start om: ".$item->startTijd." en eindigt om ". $item->eindTijd."</p>";
    echo "<p>"."Locatie: ".$item->locatie."</p>";
}