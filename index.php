<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabLog – Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<section class="login-hero">
    <div class="login-hero-content">
        <h1>Student Login</h1>
        <p class="login-subtitle">Enter your details to log into the lab</p>
    </div>
</section>

<div class="login-wrapper">
    
    <section class="login-form-section">
        <div class="section-header">
            <h2>Login Form</h2>
            <p class="section-description">Please provide your student information below</p>
        </div>
        
        <div class="form-card">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" name="student_name" placeholder="Enter your full name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Course</label>
                        <select name="course" id="course" required>
                            <option value="">Select Course</option>
                            <option value="BCA">BCA</option>
                            <option value="BSc">BSc</option>
                            <option value="BCom">BCom</option>
                            <option value="MCom">MCom</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        <select name="semester" id="semester" required>
                            <option value="">Select Semester</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Section / Class</label>
                        <select name="class" id="section" required>
                            <option value="">Select Section</option>
                            <option value="A">Section A</option>
                            <option value="B">Section B</option>
                            <option value="C">Section C</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Lab Group</label>
                        <select name="group_name" id="group" required>
                            <option value="">Select Group</option>
                        </select>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <div class="checkbox-label">
                        <input type="checkbox" name="signature" value="Signed" required>
                        <span>I confirm the above details are correct.</span>
                    </div>
                </div>

                <button type="submit" name="login" class="submit-btn">Submit Login</button>
            </form>
        </div>
    </section>

    <section class="login-links-section">
        <div class="section-header">
            <h3>Quick Actions</h3>
        </div>
        <div class="quick-links-card">
            <div class="quick-link-item">
                <div class="link-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M5 22C4.44772 22 4 21.5523 4 21V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V6H18V4H6V20H18V18H20V21C20 21.5523 19.5523 22 19 22H5ZM18 16V13H11V11H18V8L23 12L18 16Z"></path></svg></div>
                <div class="link-content">
                    <h4>Student Logout</h4>
                    <p>Log out from the lab session</p>
                    <a href="logout.php" class="link-button">Go to Logout</a>
                </div>
            </div>
            <div class="quick-link-item">
                <div class="link-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 14V16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM21 17H22V22H14V17H15V16C15 14.3431 16.3431 13 18 13C19.6569 13 21 14.3431 21 16V17ZM19 17V16C19 15.4477 18.5523 15 18 15C17.4477 15 17 15.4477 17 16V17H19Z"></path></svg></div>
                <div class="link-content">
                    <h4>Admin Panel</h4>
                    <p>Access administrative features</p>
                    <a href="admin.php" class="link-button">Admin Panel</a>
                </div>
            </div>
        </div>
    </section>

    <section class="login-info-section">
        <div class="info-card">
            <div class="info-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg></div>
            <div class="info-content">
                <h4>Need Help?</h4>
                <p>If you encounter any issues during login, please contact your lab administrator or visit the <a href="about.php">About</a> page for more information about the system.</p>
            </div>
        </div>
    </section>

</div>

<?php include 'footer.php'; ?>

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

<script src="dark-mode.js"></script>

</body>
</html>

<?php
session_start();
if (isset($_POST['login'])) {

    include 'db.php';

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

        $_SESSION['log_id'] = mysqli_insert_id($conn);

        echo "<p class='success' style='text-align:center;'>Login recorded successfully!</p>";
    } else {
        echo "<p class='error' style='text-align:center;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

