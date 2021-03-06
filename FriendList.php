<!-- Fahimul Hoque Shubho -->
<?php
	session_start();
	$con=mysqli_connect("localhost","digibd_docket","docket","digibd_docket");
	//$con=mysqli_connect("localhost","root","","docket");
	if($con===false)
	{
	  echo '<script type= "text/javascript"> alert ("Database Could not connect")</script>';
    }
	$loggedIn = $_SESSION['loggedIn'];

	if($loggedIn != 1)
	{
		echo '<script type="text/javascript"> alert ("Please sign in first")</script>';
		echo "<script> location.href='SignIn.php'; </script>";
	}
	else
	{
    $userID = $_SESSION['userID'];
    unset($_SESSION['db']);
    $db = $userID.'_Friends';
?>

<!DOCTYPE html>

<head>
	<title>Friends</title>
    <link rel='icon' href='favicon.png' type='image/x-icon'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style_shubho.css">
</head>
<body>

<div id="preloader">
    <img class="logo" src="images/logo_1.png" alt="Center" >
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>

<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only"></span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="UserProfile.html"><img class="logo" src="images/logo_1.png" alt="" width="150" height="60"></a>
				</div>
				
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li><a href="Anime.php"><h4>Anime</h4></a></li>
						<li><a href="movie.html"><h4> Movies </h4></a></li>
						<li><a href="TvSeries.php"><h4> Tv-Series </h4></a></li>
						<li><a href="games.html"><h4> Games </h4></a></li>
						<li><a href="Books.php"><h4> Books </h4></a></li>
						<li><a href="blogList.html"><h4>Blogs </h4></a></li>
					</ul>

					<ul class="nav navbar-nav flex-child-menu menu-right">
                        <li><a href="search.php"><img class="logo" src="images/search.png" alt="" width="50" height="50"></a></li>
                        <div class="" title="Go to Profile">
                        <li><a href="UserProfile.php"><img class="logo" src="images/profile.png" alt="" width="78" height=""></a></li>
                        </div>
					</ul>
				</div>
	    </nav>    
</header>

<div class="hero user-heroFriend">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ctFriends">
                    <img class="logo" src="images/friendList.png" alt="" width="50" height=""> 
                    <h1>Friends</h1>
				</div>
			</div>
		</div>
    </div>  
</div>

<!-- search for friend or user -->
<form class="search_db" action="UserSearch.php" style="margin:auto;max-width:500px">
    <input type="text" placeholder="Search for a Friend or User" name="searchUser">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>

<div class="buster-light">
    <div class="page-single">
	    <div class="container">
			<div class="flex-wrap-friendlist">

				<?php
				$sql = "SELECT friendName, friendId, profilePic FROM {$db}";
                $query= mysqli_query($con,$sql);

                if(mysqli_num_rows($query) > 0 )
                {
                    $count=mysqli_num_rows($query);
                    $name = array();
					$pic = array();
					$id = array();
                    while($info = mysqli_fetch_array($query))
                    {
                        $name[] = $info['friendName'];
						$pic[] = $info['profilePic'];
						$id[] = $info['friendId'];
                    }
                    //print_r($watchList);
                    for($i=0; $i < $count; $i++)
                    {
				?>
                
                <div class="friend-item-style-2 friend-item-style-1">
					<a href=<?php echo "FriendProifile.php?friendId=$id[$i]"?>>
                    <img src=<?php echo $pic[$i] ?> alt="" width="200">
					<?php echo "<h6> $name[$i] </h6>"; ?>
					</a>
				</div>
				
				<?php        
                    }
                }
                else
                {
				?>

				<div class="friend-item-style-2 friend-item-style-1">
                    <img src='images/empty.jpg' alt="">
				</div>
				
				<?php
                }
                ?>
                 
			</div>							
	    </div>
    </div>
</div>

<script>
    for(var els = document.getElementsByTagName('a'), i = els.length; i--;){
    var href = els[i].href;
    els[i].href = 'javascript:void(0);';
    els[i].onclick = (function(el, href){
        return function(){
            window.location.href = href;
        };
    })(els[i], href);
}
</script>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
<?php } ?>