<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Product</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style>
        body {
            font-family: 'Roboto', serif;
        }
    </style>

</head>
<body>
<?php flash_alert(); ?>
<a href="<?= site_url('user/add'); ?>" class="btn btn-success btn-add" style="margin-top: 50px; margin-left: 315px; padding: 10px 20px; font-size: 16px;">Add User</a>
    <div class="container mt-5">
        <table id="example" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $u): ?>
                    <tr>
                        <td><?= $u['id']; ?></td>
                        <td><?= $u['gvcb_last_name']; ?></td>
                        <td><?= $u['gvcb_first_name']; ?></td>
                        <td><?= $u['gvcb_email']; ?></td>
                        <td><?= $u['gvcb_gender']; ?></td>
                        <td><?= $u['gvcb_address']; ?></td>
                        <td>
                            <a href="<?= site_url('user/update/' .$u['id']); ?>" class="btn btn-primary btn-sm">Update</a>
                            <a href="<?= site_url('user/delete/' .$u['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            new DataTable('#example', {
                order: [[3, 'desc']]
            });
        });
    </script>
</body>
</html>
