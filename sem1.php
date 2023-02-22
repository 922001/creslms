
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
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
         
          <span class="logo-name">Admin Panel</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="add_register1.php" class="nav-link">
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
    <div class='box-container'>
        <?php

            $conn = mysqli_connect("localhost","root","","creslms");
            $query="SELECT * FROM subject";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0)
            {
            $count=0;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $count++;
                        $subject = $row['name'];
                        $courseCode = $row['course_code'];
                        $description = $row['description'];
                        $semester = $row['semester'];
                     echo"


                                <div class='box'>
                                    <img src='image/icon-$count.png' alt=''>";

                                    echo "<h3>$subject</h3>";
                                     echo "<h4> Course Code : $courseCode</h4>";
                                      echo "<h5> Semester : $semester</h5>";
                                      echo "<h6>Context : $description</h6>";


                                   echo "<a href=''#'' class='btn'>read more</a>
                                </div>
                             ";

                    }
            }
            else{
                echo "<h4> no record found </4>";
            }
        ?>
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

