<?php
function showGrades($department) {
    // الاتصال بقاعدة البيانات
    include "config_db.php";
    //عرض درجات
    if($department){
        // استعلام SQL لاستخراج الدرجات
    $studentID = $_REQUEST['student_id'];
    $sql = "SELECT * FROM `$department` WHERE `student_id` = $studentID";
    $result = mysqli_query($conn, $sql);
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>bootstrap</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <style>
        html{
            min-width: 100vh;
        }
        body{
            min-width: 100vh;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container p-0 ">
        <h1 class="mt-5 mb-4 text-center">عرض الدرجات</h1>

        <!-- جدول لعرض الدرجات باستخدام Bootstrap -->
        <div class="table m-auto">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>الاسم</th>
                        <th>المقرر 1</th>
                        <th>المقرر 2</th>
                        <th>المقرر 3</th>
                        <th>المقرر 4</th>
                        <th>المقرر 5</th>
                        <th>المقرر 6</th>
                        <th>المقرر 7</th>
                        <th>المقرر 8</th>
                        <th>المقرر 9</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['course_1'] . '</td>';
                        echo '<td>' . $row['course_2'] . '</td>';
                        echo '<td>' . $row['course_3'] . '</td>';
                        echo '<td>' . $row['course_4'] . '</td>';
                        echo '<td>' . $row['course_5'] . '</td>';
                        echo '<td>' . $row['course_6'] . '</td>';
                        echo '<td>' . $row['course_7'] . '</td>';
                        echo '<td>' . $row['course_8'] . '</td>';
                        echo '<td>' . $row['course_9'] . '</td>';
                        echo '</tr>';
                    }
                }
            ?>
                </tbody>
            </table>
        </div>
    </div>

        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
</body>
</html>
<?php
    // إغلاق اتصال قاعدة البيانات
    mysqli_close($conn);
}
?>
