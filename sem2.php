
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
    <!-- CSS -->
    <link rel="stylesheet" href="ad1_dashboard.css" />
    <link rel="stylesheet" href="sem1.css" />

    
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    
  
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Admin</span>
      </div>
      <div style="position:absolute; left:700px; top:-12px;">
      <div class="topbar">
      <ul>
            <li><a href="zdashboard.html">All Programmes</a></li>
            <li>
                <a href="#">Courses
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul>
                    <li><a class="active" href="#">MBA</a></li>
                    <li><a href="ad1_dashboard.php">MCA</a></li>
                </ul>
            </li>
            <li>
        
        </ul>
</div>
</div>


      


      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Admin Panel</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="add1.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Add</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Semester</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Subject</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Department</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Content</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">Flipbook</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Assignments</span>
              </a>
            </li>
            <li class="list">
              <a href="ad1_dashboard.php" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Back</span>
              </a>
            </li>
          </ul>

          
            
          </div>
        </div>
      </div>
    </nav>
    <div class="container">

        

        <div class="box-container">

            <div class="box">
                <img src="image/icon-1.png" alt="">
                <h3>SUB 1</h3>
                
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="image/icon-2.png" alt="">
                <h3>SUB 2</h3>
                
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="image/icon-3.png" alt="">
                <h3>SUB 3</h3>
                
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="image/icon-4.png" alt="">
                <h3>SUB 4</h3>
                
                <a href="#" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="image/icon-4.png" alt="">
                <h3>SUB 5</h3>
                
                <a href="#" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="image/icon-4.png" alt="">
                <h3>SUB 6</h3>
                
                <a href="#" class="btn">read more</a>
            </div>

          
        </div>

    </div>

    <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
  </body>
</html>

