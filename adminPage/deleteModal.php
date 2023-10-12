<?php
// تضمين ملف الاتصال بقاعدة البيانات
include "../config_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["student_id"])) {
    $student_id = $_POST["student_id"];
    
    // قم بتنفيذ استعلام SQL لحذف الطالب من الجداول class_1 إلى class_5 باستخدام ال student_id المحدد
    $sql = "DELETE FROM class_1 WHERE student_id = $student_id;
            DELETE FROM class_2 WHERE student_id = $student_id;
            DELETE FROM class_3 WHERE student_id = $student_id;
            DELETE FROM class_4 WHERE student_id = $student_id;
            DELETE FROM class_5 WHERE student_id = $student_id;";

    if ($conn->multi_query($sql) === TRUE) {
        header("Location: ../admin.php?successful=The student has been deleted successfully.");
        exit;
    } else {
        header("Location: ../admin.php?error=An error occurred while deleting the student: " . $conn->error);
        exit;
    }
}

$conn->close();
?>
