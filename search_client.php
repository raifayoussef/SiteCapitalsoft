
<?php
// Database connection code goes here

require "actions/connexion/database.php";
// Assuming you have a $conn variable for database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchTerm = $_POST['search'];
    $sql = "SELECT `idC`, `NomClient`, `categorie`, `Logo`, `favoris` FROM `clients` WHERE `NomClient` LIKE '%$searchTerm%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['idC']}</td>
                <td>{$row['NomClient']}</td>
                <td>{$row['categorie']}</td>
                <td>{$row['Logo']}</td>
                <td><input type='checkbox' class='favorite-checkbox' data-id='{$row['idC']}' ";
            echo $row['favoris'] == 1 ? 'checked' : '';
            echo "></td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No matching clients found</td></tr>";
    }
}
?>
