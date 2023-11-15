<?php
require("Config/config.php");
require("Config/db.php");

if (isset($_GET['id'])) {
    $id_to_delete = mysqli_real_escape_string($conn, $_GET['id']);

    // Perform delete operation
    $query = "DELETE FROM office WHERE id = $id_to_delete";

    if (mysqli_query($conn, $query)) {
        header('Location: office.php');
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo 'No ID specified for deletion.';
}
?>
