<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>LabLog – Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>LabLog – Student Login</h2>

    <form action="" method="POST">

        <label>Student Name</label>
        <input type="text" name="student_name" required>

        <label>Course</label>
        <select name="course" id="course" required>
            <option value="">Select Course</option>
            <option value="BCA">BCA</option>
            <option value="BSc">BSc</option>
            <option value="BCom">BCom</option>
            <option value="MCom">MCom</option>
        </select>

        <label>Semester</label>
        <select name="semester" id="semester" required>
            <option value="">Select Semester</option>
        </select>

        <label>Section / Class</label>
        <select name="class" id="section" required>
            <option value="">Select Section</option>
            <option value="A">Section A</option>
            <option value="B">Section B</option>
            <option value="C">Section C</option>
        </select>

        <label>Lab Group</label>
        <select name="group_name" id="group" required>
            <option value="">Select Group</option>
        </select>

        <div class="checkbox-label">
            <input type="checkbox" name="signature" value="Signed" required>
            <span>I confirm the above details are correct.</span>
        </div>

        <button type="submit" name="login">Submit Login</button>
    </form>

    <p style="text-align:center; margin-top:20px;">
        <a href="logout.php">Go to Logout Page</a> |
        <a href="admin.php">Admin Panel</a>
    </p>
</div>


<script>
const courseSemesters = {
    "BCA": ["Sem 1", "Sem 2", "Sem 3", "Sem 4", "Sem 5", "Sem 6"],
    "BSc": ["Sem 1", "Sem 2", "Sem 3", "Sem 4"],
    "BCom": ["Sem 1", "Sem 2", "Sem 3", "Sem 4", "Sem 5", "Sem 6"],
    "MCom": ["Sem 1", "Sem 2"]
};

document.getElementById("course").addEventListener("change", function() {
    let semSelect = document.getElementById("semester");
    semSelect.innerHTML = "<option value=''>Select Semester</option>";

    let course = this.value;

    if (courseSemesters[course]) {
        courseSemesters[course].forEach(sem => {
            let opt = document.createElement("option");
            opt.value = sem;
            opt.textContent = sem;
            semSelect.appendChild(opt);
        });
    }
});


document.getElementById("section").addEventListener("change", function() {
    let section = this.value;
    let groupSelect = document.getElementById("group");

    groupSelect.innerHTML = "<option value=''>Select Group</option>";

    if (section) {
        for (let i = 1; i <= 3; i++) {
            let opt = document.createElement("option");
            opt.value = section + i;
            opt.textContent = section + i;
            groupSelect.appendChild(opt);
        }
    }
});
</script>


</body>
</html>

<?php
if (isset($_POST['login'])) {

    $name = $_POST['student_name'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $class = $_POST['class'];
    $group = $_POST['group_name'];
    $signature = $_POST['signature'];

    $login_time = date("Y-m-d H:i:s");

    $sql = "INSERT INTO lab_logs (student_name, course, semester, class, group_name, login_time, signature)
            VALUES ('$name', '$course', '$semester', '$class', '$group', '$login_time', '$signature')";

    if (mysqli_query($conn, $sql)) {
        echo "<p class='success' style='text-align:center;'>Login recorded successfully!</p>";
    } else {
        echo "<p class='error' style='text-align:center;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>
