<?php
function Call()
{
    header("Location:Student/login.php");
}

function Call1()
{
    header("Location:Faculty/login.php");
}

function Call2()
{
    header("Location:Admin/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="{% static 'Styles/homeStyle.css' %}">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>IIITN Placement Cell</title>
   <style>
        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        transition: 0.5s;
        font-family: "Century Gothic", sans-serif;
        }

        .navlist{
        width: 100%;
        position: fixed;
        padding: 44px 10%;
        background-color: #110e2bbb;
        }
        .navlist ul{
        display: flex;
        list-style: none;
        }
        .navlist ul li:first-child{
        flex: 1;
        color: #ffffff;
        }
        .navlist ul li h4{
        font-family: serif;
        }

        .navlist ul li h1{
        /* word-spacing: 8px;
        margin-bottom: 15px; */
        font-family: serif;
        color: white;
        }
        .navlist ul a{
        display: block;
        margin-left: 22px;
        font-family: "Century Gothic", sans-serif;
        font-size: 1.5rem;
        color: white;
        text-decoration: none;
        }
        .navlist ul a:hover{
        color: #ff8800;
        }



        .main-box{
        width: 100%;
        height: 80vh;
        background-image: linear-gradient(#000000bb, #000000bb), url(../images/IIITN_Gate.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        color: #ffffff;
        text-align: center;
        padding-top: 30vh;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .main-box p{
        font-family: "Century Gothic", sans-serif;
        font-size: 24px;
        letter-spacing: 1.4px;
        margin-bottom: 40px;
        }
        .main-box button{
        padding: 40px;
        border: none;
        outline: none;
        background: none;
        border: 2px solid #ff8800;
        color: #ffffff;
        font-size: 18px;;
        margin:8px;
        }
        .main-box button:hover{
        background: #ff8800;
        }
   </style>
</head>
<body>
   <nav class="navlist">
      <ul>
         <li><a href="https://iiitn.ac.in"><h4>IIITN</h4></a></li>
         <li>
            <h1>Indian Institute of Information Technology, Nagpur</h1>
         </li>
         <!-- <li><a href="">Home</a></li>
         <li><a href="">About</a></li>
         <li><a href="">Courses</a></li>
         <li><a href="">Faculty</a></li> -->
      </ul>
   </nav>
   <div class="main-box">
      
      <p></p>
      <form action = "Student/login.php">
        <button >Student</button>
      </form>

      <form action = "Faculty/login.php">
        <button >Faculty</button>
      </form>

      <form action = "Admin/login.php">
        <button >Admin</button>
      </form>
   </div>
   <!-- <div class="container">
      <h2>lorem ipsum</h2>
      <div class="row">
         <div class="column">
         <a href=""><img src="{% static 'images/IIITN_Gate.jpg' %}" alt="asdfa"></a>
         <a href="">lorem ipsum</a>
         </div>
         <div class="column">
            <a href=""><img src="{% static 'images/IIITN_Gate.jpg' %}" alt=""></a>
            <a href="">lorem ipsum</a>
         </div>
         <div class="column">
            <a href=""><img src="{% static 'images/IIITN_Gate.jpg' %}" alt=""></a>
            <a href="">lorem ipsum</a>
         </div>
      </div>
   </div> -->
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

.parent {
height: 200px;
background: #CCCCCC;
display: flex;
align-items: center;
justify-content: center;
}
.child {
background-color: #FFFF00;
width: 100px;
height: 100px;
}
        *{ 
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body
        {
            min-height: 100vh;
            background-color: #FFCC00
        }

        .Up_div
        {
            position: fixed;
            left: 0;
            right: 0;
            height: 20%;
            top: 0;
            background-color: orange;
        }

        .container
        {
            position: fixed;
            left: 0;
            right: 0;
            height: 80%;
            bottom: 0;
            background-color: green;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            
        }

        .box
        {
            top: 0;
            width: 25%;
            background-color: white;
            box-sizing: border-box;
            overflow: hidden;
            margin-left: 5%;
            border-width: 2px;
            border-radius: 10px;
            border-color: white;
            padding: 100px 0px;
            border: 3px solid green;
        }
        .box :hover
        {
            background-color: aqua;
        }
        .box :active
        {
            background-color: #FFFF00;
        }
        
    </style>
    link rel = "stylehseet" type="text/css" href="style.css"-->
    <!-- <title>Main</title>
</head>
<body>
    <h1></h1>
    <div class="Up_div">

    </div>

    <div class="container">

        <div class="box">
            <h1>Admin</h1>
        </div>

        <div class="box">
            <h1>Faculty</h1>
        </div>

        <div class="box">
            <h1>Student</h1>
        </div>

    </div>

</body>
</html> -->