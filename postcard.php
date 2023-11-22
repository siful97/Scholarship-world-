<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Post Cart</title>
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
	background: linear-gradient(to top, rgb(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%),url(bg.jpeg);
	background-position: center;
	background-size: cover;
	height: 200vh;
}
.navbar{
	width: 1200px;
	height: 75px;
	margin: auto;
}
.icon{
	width: 200px;
	float: left;
	height: 70px;
}
.logo{
	color: white;
	font-size: 18px;
	font-family: sans-serif;
	padding-left: 20px;
	float: left;
	padding-top: 10px;
}
.menu{
	width: 400px;
	float: left;
	height: 70px;
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
	margin-top: 20px;
	font-size: 25px;
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
	margin-left: 215px;
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
	border-bottom-right-radius: 5px ;
}
.btn:focus{
	outline: none;
}
.srch:focus{
	outline: none;
}

#posts{
	display : flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	padding: 40px;
	border-bottom: 1px solid rgb(0, 0, 0,0.05);
}
.post-heading{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.post-heading span{
	color: green;
}
.post-heading h3{
	font-size: 2.4rem;
	color: green;
	font-weight: 700;
}
.post-container{
	display: flex;
	justify-content: center;
	align-items: center;
	margin: 20px 0px;
	flex-wrap: wrap;

}
.post-box{
	width: 350px;
	background-color: transparent;

	margin: 20px;
}
.post-img{
	width: 100px;
	height: 100px;
}
.post-img img{
	width: 100px;
	height: 100px;
	object-fit: cover;
	object-position: left;
}
.post-text{
	padding: 30px;
	display: flex;
	flex-direction: column;
}
.post-text span{
	color: darkblue;
	font-size: 0.9rem;
	font-weight: bold;
}
.post-text .post-title{
	font-size: 1.3rem;
	font-weight: 500;
	font-weight: bold;
	color: darkblue;
}
.post-text p{
	color: : white;
	font-size: 1.2rem;
	display: -webkit-box;
	-webkit-line-clamp : 3;
	-webkit-box-orient : vertical;
	overflow: hidden;
	text-overflow: ellipsis;
	margin: 30px 0px;
}
.post-text a{
	color: red;
}

    </style>
	<div class="main">
		<div class="navbar">
			<div class="icon">
				<h2 class="logo">ScholarWorld.com</h2>
			</div>

			<div class="menu">
				<ul>
					<li><a href="#">Recent Available Schoalarship Posts </a></li>
				</ul>
			</div>
			<div class="search">
			   <input class="srch" type="search" name ="" placeholder="Type to Text">
				<a href="#"><button class="btn">Search</button></a>
			</div>

			<div  class="post-container">

         
            <div style=" margin-right: 1250px ;" class="post-box">
                <img src="sch.jpg" alt="Post">
            </div>
            
            <div style=" margin-right: 1250px ;" class="post-text">
                <span>Degree Deadline : 28 May 2022  </span>
                <a href="#" class="post-title">Free Scholarship for Bachelors & Masters</a>
                <p>Morgan State University is opening free Scholarship for students all around the world <br>for the Bachelors and Masters Program.<br> Students can apply for each year to lessen the cost of a college education.</p>
                <a href="https://www.morgan.edu/">Read More</a>
            </div>
           
            
            <div style=" margin-right: 1250px ;" class="post-box">
                <img src="sch2.jpg" alt="Post">
            </div>
            
            <div style=" margin-right: 1250px ;" class="post-text">
                <span>Degree Deadline : 30 June 2022  </span>
                <a href="#" class="post-title">Duke University Fully Funded Scholarship</a>
                <p>Duke University is open for students all around the world for the Masters and<br> Phd Program with fully-funded scholarship.International Students are encouraged to <br>apply for bright career and future ahead.</p>
                <a href="https://duke.edu/">Read More</a>
            </div>
            
            <div style=" margin-right: 1250px ;" class="post-box">
                <img src="sch3.jpg" alt="Post">
            </div>
            
            <div style=" margin-right: 1250px ;"  class="post-text">
                <span>Degree Deadline : 10 August 2022  </span>
                <a href="#" class="post-title">10 Fully-Funded Scholarships of the Week </a>
                <p>Top 10 Universities are providing fully funded scholarship for students all around the world.<br>Fully  funded Scholarships are available and students can apply for each year <br>to lessen the cost of a college education and create a bright career<br>and future. Students can also get part-time work permit<br> or be assistant under professors for research.</p>
                <a href="#">Read More</a>
            </div>
        </div>
		</div>
	</div>
</body>