<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Confirm OTP</title>
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-body">
            <h3 class="card-title text-center">Enter OTP</h3>
            <form id="otp-confirm-form" action="../php/otp_confirm.php" method="POST">
              <!-- Pass the email along as a hidden field -->
              <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email'] ?? ''); ?>">
              <div class="form-group">
                <label for="otp">OTP</label>
                <input type="number" class="form-control" id="otp" name="otp" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Confirm OTP</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- JS assets -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
