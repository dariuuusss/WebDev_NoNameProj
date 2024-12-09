<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCeSS Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin-style.css">
</head>

<body>
    <!-- Header Section -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo me-3">
                <img src="../assets/images/background-logo/astro.png" alt="College of Science Logo" height="40">
            </div>
            <h1 class="fs-1">CHESS Admin Dashboard</h1>
            <a href="../index.php" class="btn btn-danger">Logout</a>
        </div>
    </header>

    <!-- Admin Content -->
    <div class="container my-5">
        

        <!-- Example Table of Orders -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Item</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>201</td>
                        <td>Jane Doe</td>
                        <td>ACCeSS Hoodie</td>
                        <td>L</td>
                        <td>1</td>
                        <td>Pending</td>
                        <td>
                            <button class="btn btn-sm btn-success">Mark Completed</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="..assets/javascript/access-admin.js"></script>
</body>

</html>
