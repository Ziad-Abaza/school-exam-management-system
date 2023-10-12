<?php
include "../config_db.php";

// استقبال البيانات من النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $name = $_POST["name"];
    $table = $_POST["table"];
    $course_1 = $_POST["course_1"];
    $course_2 = $_POST["course_2"];
    $course_3 = $_POST["course_3"];
    $course_4 = $_POST["course_4"];
    $course_5 = $_POST["course_5"];
    $course_6 = $_POST["course_6"];
    $course_7 = $_POST["course_7"];
    $course_8 = $_POST["course_8"];
    $course_9 = $_POST["course_9"];

    // استعداد الاستعلام لإدخال البيانات
    $stmt = $conn->prepare("INSERT INTO `$table` (student_id, name, course_1, course_2, course_3, course_4, course_5, course_6, course_7, course_8, course_9) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // ربط البيانات بمتغيرات الاستعلام
    $stmt->bind_param("issiiiiiiii", $student_id, $name, $course_1, $course_2, $course_3, $course_4, $course_5, $course_6, $course_7, $course_8, $course_9);

    // تنفيذ الاستعلام
    if ($stmt->execute()) {
        header("Location: ../admin.php?successful=process its successfully");
        exit;
    } else {
        header("Location: ../admin.php?error=error something whoring verify your input");
        exit;
    }

    // إغلاق الاستعلام
    $stmt->close();
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
