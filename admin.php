
<html>
    <head>
        <title>lms</title>
        <link rel="stylesheet" href="admin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        
        
</head>
<body>
<div class="logo">
  <img src="logo (1).png" alt="logo">
  </div>
<div class="container">
    <div class="form-box">
        <h1>Admin Login</h1>
        <form action="adminlogin.php" method="post">
            <div class="input-group">
                <div class="input-field">
                <i class="fas fa-user"></i>
                    <input type="text" placeholder="enter your username" name="username" title="enter your username" required>
                </div>
                <div class="input-field">
                <i class="fas fa-lock"></i>
                    <input type="password" placeholder="enter your password" name="password" title="enter your password" required>
                </div>
                <div class="btn-field">
                <button  type="submit">Log in</button>
                </div>
            </div>
    </div>

</body>

</div>
</html>