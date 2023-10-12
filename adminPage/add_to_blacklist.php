<?php
include "../config_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["addToBlacklist"])) {
        // إذا تم النقر على زر "Add to Blacklist"
        $studentId = $_POST["student_id"];
        $name = $_POST["name"];
        $reason = $_POST["reason"];
        
        $sql = "INSERT INTO blacklist (student_id, name, reason) VALUES ('$studentId', '$name', '$reason')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../admin.php?successful=Student added to the blacklist successfully.");
            exit;
        } else {
            header("Location: ../admin.php?error=Error adding student to the blacklist.");
            exit;
        }
    } elseif (isset($_POST["removeFromBlacklist"])) {
        // إذا تم النقر على زر "Remove from Blacklist"
        $studentIdToDelete = $_POST["student_id"];
        
        $sql = "DELETE FROM blacklist WHERE student_id = '$studentIdToDelete'";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../admin.php?successful=Student removed from the blacklist successfully.");
            exit;
        } else {
            header("Location: ../admin.php?error=Error removing student from the blacklist.");
            exit;
        }
    }
}
?>
