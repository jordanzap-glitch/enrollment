<?php
ob_start();
error_reporting(0);
include "../includes/db.php"; // Include database connection

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php"); // Redirect to login if not logged in
    exit();
}

// Fetch data from tbl_admission
$sql = "SELECT firstName, middleName, lastName, birthdate, gender, address, course, contactNumber, email FROM tbl_admission";
$result = $conn->query($sql);
$rowsPerPage = 5; // Number of rows per page
$totalRows = $result->num_rows; // Total number of rows
$totalPages = ceil($totalRows / $rowsPerPage); // Total number of pages
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <style>
        .dashboard-container {
            padding: 30px;
        }
        h2 {
            color: #2A3E5E;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            margin-top: 20px;
        }
        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>

<?php include 'includes/header.php'; // Include the header ?>

<div class="container dashboard-container">
    <h2>Admission Records</h2>
    
    <!-- Search Input -->
    <div class="search-container">
        <input type="text" id="searchInput" class="form-control" placeholder="Search for names..">
    </div>

    <table class="table table-bordered" id="admissionTable">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Course</th>
                <th>Contact Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($totalRows > 0) {
                // Output data of each row with pagination
                $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($currentPage - 1) * $rowsPerPage;
                $sql .= " LIMIT $offset, $rowsPerPage"; // Add LIMIT clause for pagination
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['firstName']) . "</td>
                            <td>" . htmlspecialchars($row['middleName']) . "</td>
                            <td>" . htmlspecialchars($row['lastName']) . "</td>
                            <td>" . htmlspecialchars($row['birthdate']) . "</td>
                            <td>" . htmlspecialchars($row['gender']) . "</td>
                            <td>" . htmlspecialchars($row['address']) . "</td>
                            <td>" . htmlspecialchars($row['course']) . "</td>
                            <td>" . htmlspecialchars($row['contactNumber']) . "</td>
                            <td>" . htmlspecialchars($row['email']) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='9' class='text-center'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Pagination Controls -->
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Search functionality
    document.getElementById('searchInput').addEventListener('keyup', function() {
        var input = this.value.toLowerCase();
        var rows = document.querySelectorAll('#admissionTable tbody tr');

        rows.forEach(function(row) {
            var cells = row.getElementsByTagName('td');
            var found = false;

            for (var i = 0; i < cells.length; i++) {
                if (cells[i].textContent.toLowerCase().indexOf(input) > -1) {
                    found = true;
                    break;
                }
            }

            if (found) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>

</body>
</html>

<?php
$conn->close();
ob_end_flush(); // Close the database connection
?>
