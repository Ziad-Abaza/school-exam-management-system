<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container p-3">
    <div id="editModal">
        <!-- هنا يمكنك إضافة نموذج التعديل -->
        <form action="saveEditModal.php" method="POST">
            <div class="form-group">
<?php
// تضمين ملف الاتصال بقاعدة البيانات
include "../config_db.php";

// التحقق من أنه تم استلام البيانات من النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استخراج البيانات من النموذج
    $student_id = $_POST["student_id"];
    $table = $_POST["table"];

    // دعوة دالة لجلب وعرض البيانات
    showData($student_id, $table, $conn);
}

// دالة لجلب وعرض البيانات
function showData($student_id, $table, $conn) {
    // استعلام SQL لاستخراج البيانات من قاعدة البيانات
    $sql = "SELECT * FROM $table WHERE student_id = $student_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // استخراج البيانات من نتيجة الاستعلام
        $row = $result->fetch_assoc();

        // عرض البيانات في الحقول
        echo '<div class="form-group">';
        echo '<label for="student_id">Student ID:</label>';
        echo '<input type="text" class="form-control" name="student_id" value="' . $row["student_id"] . '" required>';
        echo '</div>';

        echo '<div class="form-group">';
        echo '<label for="name">Name:</label>';
        echo '<input type="text" class="form-control" name="name" value="' . $row["name"] . '" required>';
        echo '</div>';

        echo '<div class="form-group">';
        echo '<label for="class">Class:</label>';
        echo '<input type="text" class="form-control" name="table" value="' . $table . '" required>';
        echo '</div>';

        echo '<div class="form-group">';
        echo '<label for="course_1">Course 1:</label>';
        echo '<input type="text" class="form-control" name="course_1" value="' . $row["course_1"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_2">Course 2:</label>';
        echo '<input type="text" class="form-control" name="course_2" value="' . $row["course_2"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_3">Course 3:</label>';
        echo '<input type="text" class="form-control" name="course_3" value="' . $row["course_3"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_4">Course 4:</label>';
        echo '<input type="text" class="form-control" name="course_4" value="' . $row["course_4"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_5">Course 5:</label>';
        echo '<input type="text" class="form-control" name="course_5" value="' . $row["course_5"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_6">Course 6:</label>';
        echo '<input type="text" class="form-control" name="course_6" value="' . $row["course_6"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_7">Course 7:</label>';
        echo '<input type="text" class="form-control" name="course_7" value="' . $row["course_7"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_8">Course 8:</label>';
        echo '<input type="text" class="form-control" name="course_8" value="' . $row["course_8"] . '" required>';
        echo '</div>';
        
        echo '<div class="form-group">';
        echo '<label for="course_9">Course 9:</label>';
        echo '<input type="text" class="form-control" name="course_9" value="' . $row["course_9"] . '" required>';
        echo '</div>';

        echo '<button type="submit" class="btn btn-primary m-2">تعديل</button>';
    } else {
        header("Location: ../admin.php?error=no there information");
        exit;
    }
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
            </div>
        </form>
    </div>
</div>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>