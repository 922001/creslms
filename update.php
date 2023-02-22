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
    <link rel="stylesheet" href="ad2_dashboard.css" />
    <link rel="stylesheet" href="add1.css" />

    
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>
  <body>
    
  
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Admin</span>
      </div>
      <div style="position:absolute; left:980px; top:-12px;">
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
<div class="user-wrapper">
        <img src="adminimage.png" width="45px" height="45px">
        
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
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Announcement</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
            
          </ul>

          
            
          </div>
        </div>
      </div>
    </nav>
    <div class="testbox">
    <form id="createform" method="post">
     <div class="banner">
        <h1>UPDATE CONTENT</h1>
      </div>
      <div class="item">
        <div class="name-item">
        <button class="btn" onclick="location.href = 'add_register1.php';" ><i class="fa fa-plus"></i> Add</button>
          
          <button class="btn" ><i class="fa fa-pen"></i> edit</button>
         
         
        </div>
        </div>
        <div class="question" id="department">
        <p>Select the department:</p>
        <div class="question-answer">
         
          <div>
            <input type="radio" value="MBA" id="radio_1" name="department"/>
            <label for="radio_1" class="radio"><span>MBA</span></label>
          </div>
          <div>
            <input type="radio" value="MCA" id="radio_2" name="department"/>
            <label for="radio_2" class="radio"><span>MCA</span></label>
          </div>
        </div>
      </div>  
      <div class="item">
        <p>Enter the subject name</p>
        <input type="text" name="subject" id="subject" placeholder="subject" required>
      </div>
      <div class="item">
        <p>Enter the course code</p>
        <input type="text" name="courseCode" id="courseCode" placeholder="course code" required>
      </div>
     <div class="item">
    
          <select name="semester" id="semester" required>
            <option selected value="" disabled>select the semester</option>
            <option value="1">semester1</option>
            <option value="2">semester2</option>
            <option value="3">semester3</option>
            <option value="4">semester4</option>
          </select>
        </div>
        <div class="item">
          <select name="session" id="session" required>
            <option selected value="" disabled>select the session</option>
            <option value="1">session1</option>
            <option value="2">session2</option>
            <option value="3">session3</option>
            <option value="4">session4</option>
            <option value="5">session5</option>
            <option value="6">session6</option>
            <option value="7">session7</option>
            <option value="8">session8</option>
            <option value="9">session9</option>
            <option value="10">session10</option>
       </select>
        </div>
       <div class="item">
        <p>video content</p>
        <textarea rows="3" name="video" id="video" ></textarea>
      </div>
      <div class="item">
        <p>flipbook</p>
        <textarea rows="3" name="flipbook" id="flipbook"></textarea>
      </div>
     
        <div class="item">
          <p>Assessment</p>
          <textarea rows="3" name="assessment" id="assessment"></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" onclick="updateData()">Save</button>
        </div>
    </form>
    </div>
    



    <script  type="text/javascript">
//       const navBar = document.querySelector("nav"),
//         menuBtns = document.querySelectorAll(".menu-icon"),
//         overlay = document.querySelector(".overlay");
//
//       menuBtns.forEach((menuBtn) => {
//         menuBtn.addEventListener("click", () => {
//           navBar.classList.toggle("open");
//
//         });
//       });
//
//       overlay.addEventListener("click", () => {
//         navBar.classList.remove("open");
//       });


          function updateData()
          {
              $('#createform').click(
              function(e)
              {
                      console.log("Entered createData");
                      e.preventDefault();
                      $.ajax({
                          type: "POST",
                          url: '/creslms/updateSubject.php',
                          data:  $(this).serialize(),
                          success: function(response)
                          {
                             	console.log(response);
                                alert(response);
                          },
                           error: function(XMLHttpRequest, textStatus, errorThrown)
                         {
                             console.log(errorThrown);
                         }
                     });
                   });
          }
    </script>
  </body>
</html>

