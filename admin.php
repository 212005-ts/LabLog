<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>LabLog - Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="table-container">
    <h2>Attendance Log – Admin Panel</h2>

    <form method="GET" style="margin-bottom: 20px; text-align:center;">
        <input 
            type="text" 
            name="search"
            placeholder="Search by name, course, semester, section, group..."
            style="width: 60%; padding: 10px; font-size:16px; border-radius:8px; border:2px solid #cbd5e1;">
        
        <button 
            style="padding:10px 20px; background:#2563eb; border:none; color:white; border-radius:8px; font-size:16px; cursor:pointer;">
            Search
        </button>

        <a href="admin.php" 
           style="padding:10px 20px; background:#475569; color:white; border-radius:8px; font-size:16px; text-decoration:none;">
            Reset
        </a>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Semester</th>
            <th>Section</th>
            <th>Group</th>
            <th>Login Time</th>
            <th>Logout Time</th>
            <th>Signature</th>
            <th>Delete</th>
        </tr>

        <?php
        if (isset($_GET['search']) && $_GET['search'] != "") {
            $search = $_GET['search'];

            $sql = "SELECT * FROM lab_logs 
                    WHERE student_name LIKE '%$search%' 
                    OR course LIKE '%$search%' 
                    OR semester LIKE '%$search%' 
                    OR class LIKE '%$search%' 
                    OR group_name LIKE '%$search%'
                    ORDER BY id DESC";
        } else {
            $sql = "SELECT * FROM lab_logs ORDER BY id DESC";
        }

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($r = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$r['id']}</td>
                        <td>{$r['student_name']}</td>
                        <td>{$r['course']}</td>
                        <td>{$r['semester']}</td>
                        <td>{$r['class']}</td>
                        <td>{$r['group_name']}</td>
                        <td>{$r['login_time']}</td>
                        <td>{$r['logout_time']}</td>
                        <td>{$r['signature']}</td>
                        <td><a class='action-btn' href='admin.php?del={$r['id']}'>Delete</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='10' style='text-align:center;'>No records found.</td></tr>";
        }

        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($conn, "DELETE FROM lab_logs WHERE id=$id");
            echo "<script>window.location='admin.php';</script>";
        }
        ?>
    </table>

    <p style="text-align:center; margin-top:20px;">
        <a href="index.php">Login Page</a> |
        <a href="logout.php">Logout Page</a>
    </p>

</div>

</body>
</html>
