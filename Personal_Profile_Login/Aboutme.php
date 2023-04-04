<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) 
?>

<!DOCTYPE html>
<html>
<head>
    <title>L.B.J的個人網頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Aboutme.css">
    <link rel="icon" type="image/x-icon" href="lBJ.jpg">
</head>

<body>
    <nav id="one">
        <ul>
            <li><a href="login_system\login\index.php">Login</a></li>
            <li><a href="login_system\login\Register.php">Register</a></li>
        </ul>
    </nav>
    <div class="name">L.B.J Web Design</div>
    
    <nav>
        <ul>
            <li><a class="active" href="#About me">About me</a></li>
            <li><a href="Experience\ex.html">Experience</a></li>
            <div class="homework">
                <li><a href="#college life">College life</a>
                    <div class="dropdown-menu" >
                        <a  href="College1\IMFCAMP.html">第十六屆陽明交大資財營</a>
                        <a  href="College3\basketball.html">資財系籃</a>
                        <a  href="College\freshman.html">資財迎新宿營</a>
                    </div>
                </li>
            </div>
            <li><a href="#Side Project">Side Project</a></li>
        </ul>
    </nav>
    <img class="img1" src ="大頭照.jpg" alt="L.B.J的大頭照" width="324" height="420">
    <div class="introduce">
        <dl>
            <dt style="  font-family: Arial Black;font-weight: bold;font-size: 20px;color: #003366;text-shadow: 2px 2px white;">Personal Information</dt>
                </br>
                <dd>Name：        李秉峻</dd>
                </Br>
                <dd>Nickname：    LBJ</dd>
                </Br>
                <dd>Student ID.： 110705011</dd>
                </Br>
                <dd>Birthday：    2003/03/24</dd>    
        </dl>
        <dl>
            <dt style="font-family: Arial Black;font-weight: bold;font-size: 20px;color: #003366;text-shadow: 2px 2px white;">Contact</dt>
        </br>
                <dd>E-mail： justin.c@nycu.edu.tw</dd>
                </Br>
                <dd>TEL：    0906686526</dd>
                </Br>
                <dd>Adress： No.1001, Daxue Rd., East Dist., Hsinchu City, Taiwan</dd>
        </dl>
    </div>

        <div class="responsive">
            
            <div class="gallery">
                <dt style="font-family: Arial Black;font-weight: bold;font-size: 20px;color: #003366;text-shadow: 2px 2px white;">My life photo</dt>
            </br>
                <a target="_blank" href="image.png">
                    <img src="image.png" alt="Forest" width="500" height="300">
                </a>

            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="IMG-0511.jpg">
                    <img src="IMG-0511.jpg" alt="Forest" width="500" height="300">
                </a>
                <div class="desc">Spend my life in my own way.</div>
            </div>
        </div>
    

    <div class="footer">
    <div class="text">Copyright © [2023] [Justin Li]. All rights reserved.</div>

        
</body>
</html>