<html>
<head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Home</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>

</head>
<body>
<div class="topnav">
  <a class="active">Home</a>
  <a href="frameset.html">Create</a>
  <a >Profile</a>
</div>
	<marquee bgcolor="#009ffff"><h1>Advertises</h1></marquee>
	<?php
		$conn=mysqli_connect('localhost','root','','advertisement');
  		if (!$conn)
  		{
   		  die("Connection failed: " . mysqli_connect_error());
  		}
		
 		$sq=mysqli_query($conn,"select * from advertises ORDER BY RAND() LIMIT 1;");
 		$data=mysqli_fetch_array($sq);
		$url=$data['AdvertiseLink'];
		$aname=$data['AdvertiseName'];
		$uid=$data['UserID'];
		$sq1=mysqli_query($conn,"SELECT username FROM users WHERE UserId=$uid;");
		$data=mysqli_fetch_array($sq1);
		$uname=$data['username'];
	?>
	
	 <div style="width:100%;">
	  <center><h2><?=$aname?> by <b>(<?=$uname?>)&nbsp&nbsp</b></h2>
	  <iframe id="video" style="width:40%;height:40%;border:1px solid black;" src="<?= $url ?>" alloefullscreen></iframe></center>
          <center><p><a id="playvideo" href="#">ToViewClickonVideo</a>&nbsp&nbsp<button onclick="comment()">Comment</button></p></center>
	 </div>
	<script>
     	 $("#playvideo").click(function(){
         $("#video")[0].src += "?autoplay=1";
         });
        </script></br></br>
	  <?php 
		$sq=mysqli_query($conn,"select * from advertises ORDER BY RAND() LIMIT 1;");
 		$data=mysqli_fetch_array($sq);
		$url=$data['AdvertiseLink'];
		$aname=$data['AdvertiseName'];
		$uid=$data['UserID'];
	        $adid=$data['AdvertiseID'];
		$sq1=mysqli_query($conn,"SELECT username FROM users WHERE UserId=$uid;");
		$data=mysqli_fetch_array($sq1);
		$uname=$data['username'];
	  ?>    
	  <div style="width:100%;">
          <center><h2><?=$aname?> by <b>(<?=$uname?>)&nbsp&nbsp</b></h2>
	  <iframe id="video" style="width:40%;height:40%;border:1px solid black;" src="<?= $url ?>" alloefullscreen></iframe></center>
          <center><p><a id="playvideo" href="#">ToViewClickonVideo</a>&nbsp&nbsp<button onclick="comment()">Comment</button></p></center>
	 </div>	</br></br>
	 <?php 
		$sq=mysqli_query($conn,"select * from advertises ORDER BY RAND() LIMIT 1;");
 		$data=mysqli_fetch_array($sq);
		$url=$data['AdvertiseLink'];
		$aname=$data['AdvertiseName'];
		$uid=$data['UserID'];
		$sq1=mysqli_query($conn,"SELECT username FROM users WHERE UserId=$uid;");
		$data=mysqli_fetch_array($sq1);
		$uname=$data['username'];
	  ?>    
	  <div style="width:100%;">
	  <center><h2><?=$aname?> by <b>(<?=$uname?>)&nbsp&nbsp</b></h2>
	  <iframe id="video" style="width:40%;height:40%;border:1px solid black;" src="<?= $url ?>" alloefullscreen></iframe></center>
          <center><p><a id="playvideo" href="#">ToViewClickonVideo</a>&nbsp&nbsp<button onclick="comment()">Comment</button></p></center>
	 </div>	</br></br>
	
	<script>
	function comment() {
  	var person = prompt("Comment"," ");
	 }
	</script>
	 <center><button onClick="history.go(0);window.location.href=window.location.href;"><h1>Next<h1></button><center>
</body>
</html>