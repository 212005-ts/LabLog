<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>LabLog - Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="table-container">
    <h2>Currently Logged In Students</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Semester</th>
            <th>Section</th>
            <th>Group</th>
            <th>Login Time</th>
            <th>Logout</th>
        </tr>

        <?php
        $sql = "SELECT * FROM lab_logs WHERE logout_time IS NULL ORDER BY login_time DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<tr>
                        <td>{$row['student_name']}</td>
                        <td>{$row['course']}</td>
                        <td>{$row['semester']}</td>
                        <td>{$row['class']}</td>
                        <td>{$row['group_name']}</td>
                        <td>{$row['login_time']}</td>
                        <td><a class='action-btn' href='logout.php?id={$row['id']}'>Logout</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7' style='text-align:center;'>No active students right now.</td></tr>";
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $logout_time = date("Y-m-d H:i:s");

            mysqli_query($conn, "UPDATE lab_logs SET logout_time='$logout_time' WHERE id=$id");
            echo "<script>window.location='logout.php';</script>";
        }
        ?>
    </table>

    <p style="text-align:center; margin-top:20px;">
        <a href="index.php">Login Page</a> |
        <a href="admin.php">Admin Panel</a>
    </p>

</div>

</body>
</html>
