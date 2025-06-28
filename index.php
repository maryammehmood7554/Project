<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cinepax</title>
    <link rel="icon" type="image/png" href="img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<style>
  body {
  margin: 0;
  padding: 0;
  height: 100vh;
  background: linear-gradient(to right, #4a0c2c, #000000);
  font-family: 'Segoe UI', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container-box {
  background: white;
  border-radius: 20px;
  padding: 50px 30px;
  text-align: center;
  max-width: 600px;
  width: 90%;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  animation: fadeIn 1.2s ease-in-out;
}

.container-box h1 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #4a0c2c;
}

.msg-box {
  font-size: 20px;
  font-weight: bold;
  color: green;
  font-family: Georgia, serif;
  text-align: center;
  margin-bottom: 15px;
}

.btn-option {
  background: linear-gradient(to right, #800000, #4a0c2c);
  border: none;
  padding: 15px 30px;
  font-size: 18px;
  font-weight: bold;
  color: #fff;
  margin: 10px;
  border-radius: 50px;
  transition: all 0.3s ease;
}

.btn-option:hover {
  transform: scale(1.05);
  color: white;
  background: linear-gradient(to right, #4a0c2c, #800000);
}

@keyframes fadeIn {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>
<div class="container-box"> 
    <?php if (isset($_GET['msg'])) { ?>
      <div class="alert alert-success d-flex align-items-center justify-content-between" 
      role="alert">
        <div>
          <i class="bi bi-check-circle-fill me-2"></i>
          <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
        <a href="logout-user.php" class="btn btn-danger btn-sm px-3 py-2 shadow d-flex
         align-items-center">
          <i class="bi bi-box-arrow-right me-1"></i> Logout
        </a>
      </div>
      <hr>
    <?php } ?>
    
    <h1>Welcome to Cinepax</h1>
    <p class="text-muted">Experience a cinematic journey like never before. Choose your 
      role to proceed.</p>
    
    <a href="home.php" class="btn btn-option">I am here to explore movies</a>
    <a href="login.php" class="btn btn-option">Administrator/User Login</a>
</div>

</body>
</html>