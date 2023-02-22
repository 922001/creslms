<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="admindashboard.css">
    <link rel="stylesheet" href="admin_student.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
</head>
<body>
	
	<header class="header">
		<h2 class="u-name">ADMIN <b>PANEL</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
	
	</header>
	<div class="body">
		<nav class="side-bar">
			
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>student</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<a href="admin_faculty.php"><span>faculty</span></a>
					</a>
				</li>
                <li>
					<a href="#">
						<i class="fa fa-user" aria-hidden="true"></i>
						<a href="admin_ad.php"><span>admin</span></a>
					</a>
				</li>
				
				
				
			</ul>
		</nav>
	
	</div>
    <div class="container">
    <div class="form-box">
        <h1>Student details</h1>
        <form action="adstudent_backend.php" method="post">
            <div class="input-group">
                <div class="input-field">
                
                    <input type="text" placeholder="name" name="name">
                </div>
                <div class="input-field">
               
                    <input type="regnumber" placeholder="registernumber" name="registernumber">
                </div>
                <div class="input-field">
               
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="input-field">
                
                    <select  placeholder="department" name="department">
                        <option value="MBA">MBA</option>
                        <option value="MCA">MCA</option>
                    </select>
                </div>
                <div class="input-field">
                
                    <input type="tel" placeholder="phonenumber" name="phonenumber">
                </div>
                <div class="input-field">
               
                    <input type="text" placeholder="year" name="year">
                </div>
                <div class="btn-field">
                 <button  type="submit">ADD</button>
			


                </div>

            </div>
</form>
    
    


</body>
</html>