<!DOCTYPE html>
<html>
  <head>
    <title>add content</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/> <style>
      html, body {
      min-height: 0%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 55px;
      font-size: 20px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 50%;
      height:50;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 grey; 
      }
      .banner {
      position: relative;
      height: 50px;
      
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color:#063247; 
      position: absolute;
      width: 50%;
      height: 50%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p,.question:hover p, .question label:hover, input:hover::placeholder {
      color: #063247;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #063247 ;
      color: #063247;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #063247;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #063247;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #063247;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      box-shadow: 0 0 18px 0 #063244;
      }
      .name-item button{
        width:200px;

      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content:space-evenly;
      
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
    <form action="add_register_backend.php" method="post">
      <div class="banner">
        <h1>ADD CONTENT</h1>
      </div>
      <div class="item">
        <div class="name-item">
          
        <button class="btn"><i class="fa fa-plus"></i> Add</button>
        
        <button class="btn"><i class="fa fa-pen"></i> edit</button>
         
      

         
        </div>
      </div>
        <div class="question">
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
      </div>      <div class="item">
        <p>Enter the subject name</p>
        <input type="text" name="subjectname" placeholder="subject"/>
      </div>
      <div class="item">
          <select name="semester" required>
            <option selected value="" disabled>select the semester</option>
            <option value="1">semester1</option>
            <option value="2">semester2</option>
            <option value="3">semester3</option>
            <option value="4">semester4</option>
          </select>
        </div>
        <div class="item">
          <select name="modules" required>
            <option selected value="" disabled>select the modules</option>
            <option value="1">module1</option>
            <option value="2">module2</option>
            <option value="3">module3</option>
            <option value="4">module4</option>
            <option value="4">module5</option>
          </select>
        </div>
        <div class="item">
          <select name="session" required>
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
        <textarea rows="3" name="video"></textarea>
      </div>
      <div class="item">
        <p>flipbook</p>
        <textarea rows="3" name="flipbook"></textarea>
      </div>
     
        <div class="item">
          <p>Assessment</p>
          <textarea rows="3" name="assessment"></textarea>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Save</button>
        </div>
    </form>
    </div>
   
  </body>
</html>
