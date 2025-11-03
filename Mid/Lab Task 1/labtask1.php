<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
       
        input[type="text"], 
        input[type="number"], 
        input[type="password"] {
            width: 400px;   
            padding: 10px;  
            font-size: 16px;
            box-sizing: border-box;
        }

       
        select {
            width: 420px;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }

        
        input[type="checkbox"], 
        input[type="radio"] {
            transform: scale(1.5);
            margin: 5px;
        }

        
        h1:first-of-type {
            color: red;
             border-bottom: 2px solid red;
        display: inline-block; 
        padding-bottom: 5px;
        }

       
        .red-title {
            color: red;
            border-bottom: 2px solid red;
        display: inline-block; 
        padding-bottom: 3px;
        }
    </style>
</head>

<body>
    
        
      

<h1> Student Registration Information </h1>
<br><br>
 
First Name<br>
<input type="text" size="50"><br><br>
Last Name<br>
<input type="text"><br><br>
 
 student ID<br>
<input type="number"><br><br>

Major<br>
<label for="major"></label>
  <select name="major" id="major">
    <option value="cse">Software</option>
    <option value="bba">Econimy</option>
    <option value="opel">Electronocs</option>
    <option value="law">Cybersecuirity</option>
  </select> <br><br>

  Department<br>
<label for="dept"></label>
  <select name="dept" id="dept">
    <option value="cse">CSE</option>
    <option value="bba">BBA</option>
    <option value="opel">EEE</option>
    <option value="law">LAW</option>
  </select> <br><br>
 
Phone<br>
<input type="number"><br><br>

University Email<br>
<input type="text"><br><br>

Create password(Minimum 8 characters)<br>
<input type="password"><br><br>

Confirm Password<br>
<input type="password"><br><br>
 

<b>Semester selection</b><br>
<input type="radio">Summer 2024
<input type="radio">fall 2024
<input type="radio">Spring 2025
<input type="radio">Other/Special term<br><br>

Requested Credit Load(Max 15)<br>
<input type="text"><br><br>


 <input type="checkbox"> I require academic advising before registration<br><br>

 <h2 class="red-title">Course Selection</h2><br>

  <input type="checkbox"> MATH 1201 (calculus 1)
  <input type="checkbox"> CS 2105 (Data Structures)
  <input type="checkbox"> ECON 1001(Microeconomics)<br>
  <input type="checkbox">PHY 1102 (physics Lab)<br><br>

  Comments/Special Requests<br>
<input type="text"><br><br><br>

     



 

 
 
 

 
</body>
</html>
 