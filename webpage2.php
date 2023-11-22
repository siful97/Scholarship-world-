<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(bg.jpeg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1500px;
    height: 90px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 90px;
}

.logo{
    color: #fff ;
    font-size: 30px;
    font-family: Arial;
    padding-left: 10px;
    float: left;
    padding-top: 10px;
    margin-top: 5px;
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
    margin-left:100px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: white;
    font-family: sans-serif;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}
.search{
    width: 330px;
    float: left;
    margin-left: 400px;
    margin-top: 10px;
}

.srch{
    font-family: sans-serif;
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid skyblue;
    margin-top: 13px;
    color: white;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: skyblue;
    border: 2px solid skyblue;
    margin-top: 13px;
    color: white;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: white;
    position: relative;
    margin-top: 30px;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: sans-serif;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: sans-serif;
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
    margin-top: 150px;
}

.content .cn{
    width: 230px;
    height: 50px;
    background: skyblue;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 30px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: white;
    transition: .3s ease;
}
.content span{
    color: skyblue;
    font-size: 65px
}

.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: skyblue;
    font-size: 22px;
    background-color: white;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid skyblue;
    border-top: none;
    border-right: none;
    border-left: none;
    color: white;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: white;
    font-family: sans-serif;
}

.btnn{
    width: 240px;
    height: 40px;
    background: skyblue;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: white;
    transition: 0.4s ease;
}
.btnn a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}
.form .link{
    font-family: sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: skyblue;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}

    </style>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2  class="logo">ScholarWorld.com</h2>
                
            </div>

            <div class="menu">
                <ul>
      
                    <li><a style="font-size: 20px;"href="scholarpost.php">Scholarship Posts</a></li>
                    <li><a style="font-size: 20px;" href="unidetailuser.php">University Details</a></li>
                    <li><a style="font-size: 20px;" href="catagorypost.php">Category</a></li>
                   

                   
                </ul>
            </div>

            <div  class="search">
                <form action="search.php" method="post">
                <input style="margin-left:20px" class="srch" type="search" name="submit" placeholder="Type Any Catagory">
                <a href="search.php"> <button class="btn">Search</button></a>
                <button style="margin-left:420px;margin-bottom:50px;border-radius: 6px; padding:30px 30px 30px 30px;background-color:lightblue" class="cn"><a  href="admin_login.php"> Moderator Mode</a></button>
                </form>
            </div>

        </div> 
        <div class="content">
            <h1> Scholarship <br><span> Posts &</span> <br>Management</h1>
            <p class="par">ScholarWorld is a website where we can apply and post for scholarships 
                in different Universities<br> around the world. Scholarships are available according to<br> 
                education requirement list, merit & other Categories.<br>Apply for Moderators.</p>

                <button class="cn"><a href="modapply.php">Apply for Moderator</a></button>
                <button class="cn"><a href="studentdetailuser.php">Apply For Scholarship</a></button>
                
        </div>
    </div>
</body>
</html>