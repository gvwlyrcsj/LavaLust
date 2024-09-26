<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
        background-image: url('/public/img/bg.jpg'); /* Correct path */        
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        max-width: 500px; 
        margin-top: 80px; 
        padding: 20px;
        border-radius: 8px;
      }

    .panel-body {
        padding: 30px 50px 50px 50px; 
        box-shadow: 0 5px 10px rgba(255, 255, 255, 1); /* Adjust values as needed */
    }
</style>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>Create Users</h2>
                <?php flash_alert(); ?>
                <hr>
                <form action="<?= site_url('user/add'); ?>" method="POST">
                    <div class="form-group">
                        <label for="gvcb_last_name" class="control-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="gvcb_first_name" class="control-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="gvcb_email" class="control-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="gvcb_gender" class="control-label">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gvcb_address" class="control-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= site_url('user/display'); ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (with jQuery) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
