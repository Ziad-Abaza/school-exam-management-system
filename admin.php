<?php
// تضمين ملف الاتصال بقاعدة البيانات
include "config_db.php";

$searchTerm = "";

if (isset($_GET["searchTerm"])) {
    $searchTerm = $_GET["searchTerm"];
    $results = searchStudent($searchTerm, $conn);
}

// دالة للبحث عن الطلاب في قاعدة البيانات
function searchStudent($searchTerm, $conn) {
    $results = array();
    $sql = "SELECT * FROM class_1 WHERE student_id = $searchTerm
            UNION
            SELECT * FROM class_2 WHERE student_id = $searchTerm
            UNION
            SELECT * FROM class_3 WHERE student_id = $searchTerm
            UNION
            SELECT * FROM class_4 WHERE student_id = $searchTerm
            UNION
            SELECT * FROM class_5 WHERE student_id = $searchTerm";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    }

    return $results;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container p-2 text-center">
    <h1>لوحة التحكم</h1>
    <hr>
</div>

<div class="container text-center justify-content-evenly d-flex  bg-dark p-2 rounded-2">
    <!-- إضافة عنصر -->
    <button class="btn btn-primary" id="addButton">إضافة</button>
    <button class="btn btn-warning" id="editButton">تعديل</button>
    <button class="btn btn-primary" id="searchButton">بحث</button>
    <button class="btn btn-danger" id="deleteButton">حذف</button>
    <button class="btn btn-outline-danger" id="addToBlacklistButton">blacklist</button>
</div>

<div class="container p-3">
    <div id="addModal" style="display: none;">
        <!-- هنا إضافة نموذج الإضافة -->
        <form action="adminPage/addModal.php" method="POST">
            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" class="form-control" name="student_id" required  maxlength="7" minlength="7">
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="class">class:</label>
                <input type="text" class="form-control" name="table" required >
            </div>

            <div class="form-group">
                <label for="course_1">Course 1:</label>
                <input type="text" class="form-control" name="course_1" required>
            </div>

            <div class="form-group">
                <label for="course_2">Course 2:</label>
                <input type="text" class="form-control" name="course_2" required>
            </div>

            <div class="form-group">
                <label for="course_3">Course 3:</label>
                <input type="text" class="form-control" name="course_3" required>
            </div>

            <div class="form-group">
                <label for="course_4">Course 4:</label>
                <input type="text" class="form-control" name="course_4" required>
            </div>

            <div class="form-group">
                <label for="course_5">Course 5:</label>
                <input type="text" class="form-control" name="course_5" required>
            </div>

            <div class="form-group">
                <label for="course_6">Course 6:</label>
                <input type="text" class="form-control" name="course_6" required>
            </div>

            <div class="form-group">
                <label for="course_7">Course 7:</label>
                <input type="text" class="form-control" name="course_7" required>
            </div>

            <div class="form-group">
                <label for="course_8">Course 8:</label>
                <input type="text" class="form-control" name="course_8" required>
            </div>

            <div class="form-group">
                <label for="course_9">Course 9:</label>
                <input type="text" class="form-control" name="course_9" required>
            </div>

            <button type="submit" class="btn btn-primary m-2">إضافة</button>
        </form>
    </div>
</div>

<div class="container p-3">
    <div id="editModal" style="display: none;">
        <!-- هنا إضافة نموذج التعديل -->
        <form action="adminPage/editModal.php" method="POST">
            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" class="form-control" name="student_id" required  maxlength="7" minlength="7">
                <label for="class">class:</label>
                <input type="text" class="form-control" name="table" required >
                <button type="submit" class="btn btn-primary m-2">search</button>
            </div>
        </form>
    </div>
</div>



<div class="container p-3">
    <div id="searchModal" style="display: none;">
        <!-- نموذج البحث -->
        <form action="" method="GET">
            <div class="form-group">
                <label for="searchTerm">Search:</label>
                <input type="text" class="form-control" name="searchTerm" id="searchTerm" placeholder="Student ID" value="<?php echo $searchTerm; ?>">
            </div>
            <button type="submit" class="btn btn-primary m-2">Search</button>
        </form>
    </div>
</div>
<div class="container p-3">
    <?php
    if (isset($results) && !empty($results)) {
        echo '<h2>Search Results:</h2>';
        echo '<table class="table">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th>Student ID</th>';
                    echo '<th>Name</th>';
                    echo '<th>course 1</th>';
                    echo '<th>course 2</th>';
                    echo '<th>course 3</th>';
                    echo '<th>course 4</th>';
                    echo '<th>course 5</th>';
                    echo '<th>course 6</th>';
                    echo '<th>course 7</th>';
                    echo '<th>course 8</th>';
                    echo '<th>course 9</th>';
                echo '</tr>';
            echo '</thead>';
        echo '<tbody>';
        foreach ($results as $row) {
            echo '<tr>';
                echo '<td>' . $row["student_id"] . '</td>';
                echo '<td>' . $row["name"] . '</td>';
                echo '<td>' . $row["course_1"] . '</td>';
                echo '<td>' . $row["course_2"] . '</td>';
                echo '<td>' . $row["course_3"] . '</td>';
                echo '<td>' . $row["course_4"] . '</td>';
                echo '<td>' . $row["course_5"] . '</td>';
                echo '<td>' . $row["course_6"] . '</td>';
                echo '<td>' . $row["course_7"] . '</td>';
                echo '<td>' . $row["course_8"] . '</td>';
                echo '<td>' . $row["course_9"] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } elseif (isset($results) && empty($results)) {
        
        echo "<div class='alert alert-danger' role='alert' id='errorMessage'>No results found.</div>";
    }
    ?>
</div>

<div class="container">
    <div id="deleteModal" style="display: none;">
        <!-- نموذج الحذف -->
        <form action="adminPage/deleteModal.php" method="POST">
            <p>are you sure you want to delete this student</p>
            <div class="form-group">
                <label for="item_id">Student ID :</label>
                <input type="text" class="form-control" name="student_id" id="item_id" required  maxlength="7" minlength="7">
            </div>
            <button type="submit" class="btn btn-danger m-2">delete</button>
        </form>
    </div>
</div>


<div class="container p-3">
    <div id="addToBlacklistModal" style="display: none;">
        <!-- نموذج إضافة/حذف معرف الطالب من القائمة السوداء -->
        <form action="adminPage/add_to_blacklist.php" method="POST">
            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" class="form-control" name="student_id" required maxlength="7" minlength="7">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="reason">Reason for Blacklisting:</label>
                <textarea class="form-control" name="reason" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger m-2" name="addToBlacklist">Add to Blacklist</button>
            <button type="submit" class="btn btn-success m-2" name="removeFromBlacklist">Remove from Blacklist</button>
        </form>
    </div>
</div>


<div class="container mt-3 text-center" id="error-message" style="display: none;">
    <div class="alert alert-danger" role="alert" id="error-text"></div>
</div>
<div class="container mt-3 text-center" id="successful-message" style="display: none;">
    <div class="alert alert-success" role="alert" id="successful-text"></div>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
const addModal = document.getElementById('addModal');
    const editModal = document.getElementById('editModal');
    const searchModal = document.getElementById('searchModal');
    const deleteModal = document.getElementById('deleteModal');
    const addToBlacklistModal = document.getElementById('addToBlacklistModal');

    const addButton = document.getElementById('addButton');
    const editButton = document.getElementById('editButton');
    const searchButton = document.getElementById('searchButton');
    const deleteButton = document.getElementById('deleteButton');
    const addToBlacklistButton = document.getElementById('addToBlacklistButton');

    addButton.addEventListener('click', () => {
        addModal.style.display = 'block';
        editModal.style.display = 'none';
        searchModal.style.display = 'none';
        deleteModal.style.display = 'none';
        addToBlacklistModal.style.display = 'none';
    });

    editButton.addEventListener('click', () => {
        addModal.style.display = 'none';
        editModal.style.display = 'block';
        searchModal.style.display = 'none';
        deleteModal.style.display = 'none';
        addToBlacklistModal.style.display = 'none';
    });

    searchButton.addEventListener('click', () => {
        addModal.style.display = 'none';
        editModal.style.display = 'none';
        searchModal.style.display = 'block';
        deleteModal.style.display = 'none';
        addToBlacklistModal.style.display = 'none';
    });

    deleteButton.addEventListener('click', () => {
        addModal.style.display = 'none';
        editModal.style.display = 'none';
        searchModal.style.display = 'none';
        deleteModal.style.display = 'block';
        addToBlacklistModal.style.display = 'none';
    });

    addToBlacklistButton.addEventListener('click', () => {
        addModal.style.display = 'none';
        editModal.style.display = 'none';
        searchModal.style.display = 'none';
        deleteModal.style.display = 'none';
        addToBlacklistModal.style.display = 'block';
    });
    // استقبال رسائل الخطأ من عنوان الصفحة  
    document.addEventListener("DOMContentLoaded", function () {
        const urlParams = new URLSearchParams(window.location.search);
        const error = urlParams.get("error");
        const successful = urlParams.get("successful");
        const errorMessage = document.getElementById('errorMessage');

        if (error) {
            const errorText = document.getElementById("error-text");
            errorText.textContent = error;
            document.getElementById("error-message").style.display = "block";
            setTimeout(()=>{
                document.getElementById("error-message").style.display = "none";
            },3000);
        }else if(successful){
            const errorText = document.getElementById("successful-text");
            errorText.textContent = successful;
            document.getElementById("successful-message").style.display = "block";
            setTimeout(()=>{
                document.getElementById("successful-message").style.display = "none";
            },3000);
        }
        //رسالة خطا البحث 
        setTimeout(function() {
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 3000); 
    });

</script>
</body>
</html>
