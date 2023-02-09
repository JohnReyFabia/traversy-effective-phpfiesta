<?php

$secret = array (
    array('1', 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', '45', '49', '49'),
    array('2', 'Ivysaur', 'Grass', 'Poison', 'Overgrow', '60', '62', '63'),
    array('3', 'Venusaur', 'Grass', 'Poison', 'Overgrow', '80', '82', '83'),

    array('4', 'Charmander', 'Fire', 'N/A', 'Blaze', '39', '52', '43'),
    array('5', 'Charmeleon', 'Fire', 'N/A', 'Blaze', '58', '64', '58'),
    array('6', 'Charizard', 'Fire', 'Flying', 'Blaze', '78', '84', '78'),

    array('7', 'Squirtle', 'Water', 'N/A', 'Torrent', '44', '48', '65'),
    array('8', 'Wartortle', 'Water', 'N/A', 'Torrent', '59', '63', '80'),
    array('9', 'Blastoise', 'Water', 'N/A', 'Torrent', '79', '83', '100'),

    array('10', 'Caterpie', 'Bug', 'N/A', 'Shield Dust', '50', '20', '55')
    );

    echo "<h3><p><b> List of Pokemon </b></p></h3>";

    echo "<table border=2>
        <tr>
            <th> ID </th>
            <th> Species </th>
            <th> Type1 </th>
            <th> Type2 </th>
            <th> Ability </th>
            <th> Hp </th>
            <th> Attack </th>
            <th> Defense </th>
        </tr>";

    for ($row = 0; $row < 10; $row++) {
        echo "<tr>";

    for ($col = 0; $col < 8; $col++) {
        echo "<td>".$secret[$row][$col]."</td>";
        }
        echo "</tr>";
    }

    echo "</table>" ;  
        echo "<br>";

    echo "<b>The Array: </b>";

    echo '<pre>' ;
        print_r($secret);
    echo '</pre>';

    echo "<b><i>Number of element in array:</i> </b>";
        echo count ($secret, COUNT_RECURSIVE);

    echo "<br>";
    echo "<br> ";

    echo "<b>Favorite Specie: </b>";
        $favorite = $secret[8][1];
            print_r($favorite);

    echo "<br>";
    echo "<br>";

    echo "<b>The Species are: </b>";

    foreach ($secret as $value){
        echo "<br>";
            echo $value [1] ;
    }