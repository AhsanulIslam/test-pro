<!DOCTYPE html>

<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
 <scriptsrc="jquery.js"> </script>
 <scriptsrc="js/bootstrap.js"> </script>
 <script type="text/javascript" src="{{asset('js/jquery-3.5.1.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!-- <script src="jquery-2.1.4.js"></script> -->
<script lang="javascript" src="{{asset('js/xlsx.full.min.js')}}"></script>
<script lang="javascript" src="{{asset('js/FileSaver.min.js')}}"></script>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></link>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
  * {box-sizing: border-box;}

.search-container button {
  /* float: right; */
  padding: 6px 13px;
  /* margin-top: ?px; */
  /* margin-right: 6px; */
  background: #ddd;
  font-size: 30px;
  border: none;
  cursor: pointer;
}
.search-container button:hover {
  background: #ccc;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<!-- //////////////////////////////////// --> 


</head>

<body>
  <div class="menu-bar">


  <ul>
    <li class="active"><a href="/free_home"></i>Home</a>
        <div class="sub-menu-1">
            <!-- <ul>           -->
               
                 <!-- <li><a href="/logout">logout</a></li> -->
            <!-- </ul> -->
          </div>
    </li>
	 <li><a href="{{route('free_home.joblist')}}">job lists</a></li>
	<div class="sub-menu-1">
  	<ul>
           <!-- <li><a href="/">Inbo//  -->
  	</ul>
    </div>

</li>
    <li><a href="{{route('free_home.adminlist')}}">Admin</a>
	<div class="sub-menu-1">
  	<!-- <ul> -->
   
		  <!-- <li><a href="/">Replacement order</a></li> -->
  
  	<!-- </ul> -->
    </div>
	
</li>
<li><a href="{{route('free_home.inbox')}}">Inbox</a></li>
    <!-- <li><a href="">Product</a>
<div class="sub-menu-1">
  <ul>
		<li><a href="">Add Products</a></li>
		<li><a href="">All category</a></li>
		<li><a href="">Add category</a></li>
	  <li><a href="#">Cakes</a></li>
		<li><a href="#">soft drinks</a></li> 

  </ul>

</div>
    </li> -->
	<!-- <li><a href="delivery.php">Delivery</a></li> -->
  <li><a href="/free_home/freelancer_info">User info</a></li>
  <li><a href="/logout">Log Out</a></li>
  
  </ul>
  </div>