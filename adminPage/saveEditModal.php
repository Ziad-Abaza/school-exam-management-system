<?php
// تضمين ملف الاتصال بقاعدة البيانات
include "../config_db.php";

// التحقق من أنه تم استلام البيانات من النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استخراج البيانات من النموذج
    $student_id = $_POST["student_id"];
    $table = $_POST["table"];
    $name = $_POST["name"];
    $course_1 = $_POST["course_1"];
    $course_2 = $_POST["course_2"];
    $course_3 = $_POST["course_3"];
    $course_4 = $_POST["course_4"];
    $course_5 = $_POST["course_5"];
    $course_6 = $_POST["course_6"];
    $course_7 = $_POST["course_7"];
    $course_8 = $_POST["course_8"];
    $course_9 = $_POST["course_9"];

    // دعوة دالة لتحديث البيانات
    updateData($student_id, $table, $name, $course_1, $course_2, $course_3, $course_4, $course_5, $course_6, $course_7, $course_8, $course_9, $conn);
}

// دالة لتحديث البيانات
function updateData($student_id, $table, $name, $course_1, $course_2, $course_3, $course_4, $course_5, $course_6, $course_7, $course_8, $course_9, $conn) {
    // استعلام SQL لتحديث البيانات في قاعدة البيانات
    $sql = "UPDATE $table SET name = '$name', course_1 = '$course_1', course_2 = '$course_2', course_3 = '$course_3', course_4 = '$course_4', course_5 = '$course_5', course_6 = '$course_6', course_7 = '$course_7', course_8 = '$course_8', course_9 = '$course_9' WHERE student_id = $student_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin.php?successful=update data its successfully");
        exit;
    } else {
        header("Location: ../admin.php?error=error something whoring verify your input");
        exit;
    }
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
