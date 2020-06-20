<?php
	// configuration
	$APP_TITLE = "Popcorn Time";
	$MANIFEST_FILE_PATH = "itms-services://?action=download-manifest&url=https://dl.dropboxusercontent.com/s/lrbkej2o7amcoun/popcorn.plist";
	$ICON_FILE_PATH = "https://popcorntime.sh/images/logo-valentines.png";
?>

<html>
<head>
	<title><? echo $APP_TITLE ?> - Install</title>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	<style> 
		body {
		    background: #2CBFBA; /* For browsers that do not support gradients */
		    background: -webkit-linear-gradient(#2CBFBA, #3EB9E9); /* For Safari 5.1 to 6.0 */
		    background: -o-linear-gradient(#2CBFBA, #3EB9E9); /* For Opera 11.1 to 12.0 */
		    background: -moz-linear-gradient(#2CBFBA, #3EB9E9); /* For Firefox 3.6 to 15 */
		    background: linear-gradient(#2CBFBA, #3EB9E9); /* Standard syntax */
			text-align: center;
		}
		
		a {
			color: white;	
			text-decoration: none;
		}
		
		a:hover {
			text-decoration: underline;
		}
		
		p {
			font-family: 'Raleway', sans-serif; 
			font-size: 20pt; 
			color: #FFFFFF;
		}
		
		img {
			border-radius: 50px;
			text-decoration: none;
			box-shadow: 0px 5px 5px 5px #6e6e6e;
		}
	</style>
</head>
<body>
	<p>
		<br />
		<br />
		<a href="itms-services://?action=download-manifest&url=<?php echo $MANIFEST_FILE_PATH; ?>">
			<img src="<?php echo $ICON_FILE_PATH; ?>" width="256" height="256" alt="Download App" />
		</a>
		<br />
		<br />
		<a href="itms-services://?action=download-manifest&url=<?php echo $MANIFEST_FILE_PATH; ?>">Install <?php echo $APP_TITLE; ?></a>
	</p>
</body>
</html>

