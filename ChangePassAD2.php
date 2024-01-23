<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'e-voting') or die("Connection failed: " . mysqli_connect_error());

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    if (isset($_POST['pass']) && isset($_POST['re-password'])) {
        $pass = $_POST['pass'];
        $newPassword = $_POST['re-password'];

        // Query to check if the entered password matches the one in the database
        $sql = "SELECT Password FROM admin_login WHERE Password = '$pass'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            // If the entered password matches, update the password to the new one
            if ($row && $row['Password'] == $pass) {
                $updateSql = "UPDATE admin_login SET Password = '$newPassword' WHERE Password = '$pass'";
                $updateResult = mysqli_query($con, $updateSql);

                if ($updateResult) {
                    echo "<script>alert('Password updated successfully!');</script>";
                } else {
                    echo "<script>alert('Error updating password: " . mysqli_error($con) . "');</script>";
                }
            } else {
                echo "<script>alert('Entered password does not match the current password.');</script>";
            }
        } else {
            echo "<script>alert('Error in query: " . mysqli_error($con) . "');</script>";
        }
    }
}
?>
