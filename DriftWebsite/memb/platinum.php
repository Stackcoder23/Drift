<html>
<head>
<style type="text/css">
  * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
  background-color: #fafbfd;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  text-align: center;
}

.notfound .notfound-bg {
  position: absolute;
  left: 0px;
  right: 0px;
  top: 50%;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: -1;
}

.notfound .notfound-bg > div {
  width: 100%;
  background: #fff;
  border-radius: 90px;
  height: 125px;
}

.notfound .notfound-bg > div:nth-child(1) {
  -webkit-box-shadow: 5px 5px 0px 0px #f3f3f3;
          box-shadow: 5px 5px 0px 0px #f3f3f3;
}

.notfound .notfound-bg > div:nth-child(2) {
  -webkit-transform: scale(1.3);
      -ms-transform: scale(1.3);
          transform: scale(1.3);
  -webkit-box-shadow: 5px 5px 0px 0px #f3f3f3;
          box-shadow: 5px 5px 0px 0px #f3f3f3;
  position: relative;
  z-index: 10;
}

.notfound .notfound-bg > div:nth-child(3) {
  -webkit-box-shadow: 5px 5px 0px 0px #f3f3f3;
          box-shadow: 5px 5px 0px 0px #f3f3f3;
  position: relative;
  z-index: 90;
}

.notfound h1 {
  font-family: 'Quicksand', sans-serif;
  font-size: 86px;
  text-transform: uppercase;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 8px;
  color: #151515;
}

.notfound h2 {
  font-family: 'Quicksand', sans-serif;
  font-size: 26px;
  margin: 0;
  font-weight: 700;
  color: #151515;
}

.notfound a {
  font-family: 'Quicksand', sans-serif;
  font-size: 14px;
  text-decoration: none;
  text-transform: uppercase;
  background: #18e06f;
  display: inline-block;
  padding: 15px 30px;
  border-radius: 5px;
  color: #fff;
  font-weight: 700;
  margin-top: 20px;
}

.notfound-social {
  margin-top: 20px;
}

.notfound-social>a {
  display: inline-block;
  height: 40px;
  line-height: 40px;
  width: 40px;
  font-size: 14px;
  color: #fff;
  background-color: #dedede;
  margin: 3px;
  padding: 0px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}
.notfound-social>a:hover {
  background-color: #18e06f;
}

@media only screen and (max-width: 767px) {
    .notfound .notfound-bg {
      width: 287px;
      margin: auto;
    }

    .notfound .notfound-bg > div {
      height: 85px;
  }
}

@media only screen and (max-width: 480px) {
  .notfound h1 {
    font-size: 68px;
  }

  .notfound h2 {
    font-size: 18px;
  }
}

</style>  
</head>
<?php
include('../connection.php');
session_start();
$email = $_SESSION['login_user'];
/*echo "<br>";
echo "Silver";*/
$user_check_id = "SELECT * FROM customer WHERE email='$email'";
    $result = mysqli_query($conn, $user_check_id);
    $row = $result->fetch_assoc();
    
$userid = $row['userid'];
$mid = 3;

$reg_check_id = "SELECT * FROM vehicle WHERE userid='$userid'";
    $result2 = mysqli_query($conn, $reg_check_id);
    $row2 = $result2->fetch_assoc();

$regno = $row2['regno'];

$check = "SELECT * FROM cust_memb WHERE userid='$userid'";
  $res = mysqli_query($conn, $check);
  $mem = mysqli_fetch_assoc($res);
  
    if ($mem['userid'] === $userid) {
  	  echo  '<div id="notfound">
    <div class="notfound">
      <div class="notfound-bg">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <h1>oops!</h1>
      <h2> Membership already exist </h2>
      <a href="../home.php">Home</a>
      <div class="notfound-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
      </div>
    </div>
  </div>';     
    }
else{
	$query = "INSERT INTO cust_memb (mid,userid,regno) VALUES ('$mid','$userid','$regno')";

	if($conn->query($query)=== true){
	        echo  '<div id="notfound">
    <div class="notfound">
      <div class="notfound-bg">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <h3>Congratulations!</h3>
      <h2> You are a Platinum member now </h2>
      <a href="../home.php">Home</a>
      <div class="notfound-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
      </div>
    </div>
  </div>';
	    }
	    else{
	        echo "error:" .$conn->error;
	    }
	}
?>
</html>