<?php

require_once "actions/connexion/database.php";

$sql = "SELECT `idC`, `NomClient`, `categorie`, `Logo`, `favoris` FROM `clients` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                
                <td>{$row['NomClient']}</td>
                <td><img src='images/clients/{$row['Logo']}' alt='image' class='card__img' style='width:100px;height:auto'</td>
                <td><input type='checkbox' class='favorite-checkbox' data-id='{$row['idC']}' ";
        echo $row['favoris'] == 1 ? 'checked' : '';
        echo "></td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No clients found</td></tr>";
}
?>
