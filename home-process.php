<?php
include "config_db.php";
include "grades_page.php";

function checkStudent($conn, $student_id, $standard_value) {
    $department1 = "class_1";
    $department2 = "class_2";
    $department3 = "class_3";
    $department4 = "class_4";
    $department5 = "class_5";

    $adminKey = 5596332;

    // التحقق مما إذا كان معرف الطالب رقمًا صحيحًا
    if (is_numeric($student_id)) {
        // التحقق مما إذا كان الطالب على القائمة السوداء
        $blacklist_sql = "SELECT * FROM `blacklist` WHERE `student_id` = $student_id";
        $blacklist_result = mysqli_query($conn, $blacklist_sql);

        if (mysqli_num_rows($blacklist_result) > 0) {
            // الطالب على القائمة السوداء
            $row = mysqli_fetch_assoc($blacklist_result);
            $reason = $row['reason'];
            header("Location: home.html?error=1&reason=" . urlencode($reason));
            exit;
        } else {
            // التحقق من اختيار الكلية
            if ($standard_value == 'null') {
                if($student_id == $adminKey){
                    header("Location: admin.php");
                exit;
                }else{
                    header("Location: home.html?error=Please select your class");
                    exit;
                }
            } elseif ($standard_value == $department1 || $standard_value == $department2 || $standard_value == $department3 || $standard_value == $department4 || $standard_value == $department5) {
                // إجراء استعلام SQL للبحث عن معرف الطالب في القسم المحدد
                $sql = "SELECT * FROM `$standard_value` WHERE `student_id` = $student_id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // تم العثور على معرف الطالب
                    showGrades($standard_value);
                } else {
                    header("Location: home.html?error=Student ID not found");
                    exit;
                }
            } else {
                header("Location: home.html?error=Please check your Student ID or class selection");
                exit;
            }
        }
    } else {
        header("Location: home.html?error=Student ID must contain only numbers");
        exit;
    }
}

if (isset($_REQUEST['student_id'])) {
    $student_id = $_REQUEST['student_id'];
    $standard_value = $_REQUEST["class"];
    checkStudent($conn, $student_id, $standard_value);
}

?>
