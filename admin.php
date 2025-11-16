<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabLog - Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="table-container">
    <h2>Attendance Log – Admin Panel</h2>

    <form method="GET" style="margin-bottom: 30px; text-align:center; display: flex; gap: 12px; align-items: center; justify-content: center; flex-wrap: wrap;">
        <input 
            type="text" 
            name="search"
            placeholder="Search by name, course, semester, section, group..."
            style="flex: 1; min-width: 300px; max-width: 600px; padding: 14px 18px; font-size:15px; border-radius:10px; border:1.5px solid #cbd5e1; background:#f8fafc; color:#1e293b; transition: all 0.3s ease;">
        
        <button 
            type="submit"
            style="padding:14px 28px; background:linear-gradient(135deg, #475569 0%, #64748b 100%); border:none; color:white; border-radius:10px; font-size:15px; font-weight:600; cursor:pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(71, 85, 105, 0.2);">
            Search
        </button>

        <a href="admin.php" 
           style="padding:14px 28px; background:linear-gradient(135deg, #64748b 0%, #475569 100%); color:white; border-radius:10px; font-size:15px; font-weight:600; text-decoration:none; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(71, 85, 105, 0.2); display: inline-block;">
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

<?php include 'footer.php'; ?>

<script src="dark-mode.js"></script>

</body>
</html>
