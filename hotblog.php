<?php
session_start();
include("mysql.inc.php");
include("function.php");
?>

<script type="text/javascript">
function LikeAction(ID)
{
	xmlhttp=new XMLHttpRequest();
	//document.getElementById("people_number").innerHTML = ID;
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    		document.getElementById("people_number").innerHTML = xmlhttp.responseText;
    		document.getElementById("people_number1").innerHTML = xmlhttp.responseText;
    	}
  	}
	xmlhttp.open("GET","LikeAction.php?q=" + ID ,true);
	xmlhttp.send();

	
}
</script>



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Foodbook</title>
    <meta name="description" content="Food" />
    <meta name="keywords" content="Food" />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body id="www-url-cz">
<!-- Main -->


<div id="main" class="box">

    <!-- Header -->
    <div id="header">

        <!-- Logotyp -->
        <h1 id="logo"><a href="./" title="foodbook [Go to homepage]">Foodbook<span></span></a></h1>
        <hr class="noscreen" />          

        <!-- Quick links--> 
        <div class="noscreen noprint">
            <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
            <hr />
        </div>

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint">

            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li><a href="./index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li id="active"><a href="./hot.php">Hot<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./PostBLog.html">PostBlog<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./AddGroup.html">Group<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./logout.php">Logout<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>

        <hr class="noscreen" />
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

      

        <!-- Content -->
        <div id="content">

            <!-- Article -->
            <div class="article">
				<h2>TOP <? echo $_GET['number']+1; ?></h2>
                <h2><span><?php echo $hot[$_GET['number']]['title']." "; ?></span></h2>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
				<p class="info noprint">
                    <span class="date"><?php echo $hot[$_GET['number']]['date']; ?></span><span class="noscreen">,</span>
                </p>
				<p class="info noprint">
					<img src="<?php echo ShowAuthor($hot[$_GET['number']]['author']); ?>" id="me" alt="" />
					Author:<?php echo $hot[$_GET['number']]['author']; ?>
				</p>
                <?php
						$aritcleID=$hot[$_GET['number']]['id'];
						print "<input type='button' name='Like' value='Like' onClick=LikeAction('$aritcleID')>";
				?>
                <span><div id="people_number"><?php echo $hot[$_GET['number']]['like_count'];?> 個人都說讚</div></span>
				
				<p>
				<?php echo $contenthot[$_GET['number']]; ?>
				</p>

				<p>
				
 
			</div> <!-- /article -->
            <hr class="noscreen" />
            
        </div> <!-- /content -->
        <!-- Right column -->
        <div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3><span><a href="#">About Me</a></span></h3>

                 <div id="about-me">
                    <p>
					<img src="<? 
						if($photo_route==null){
							echo './thumb/1.jpg';
						}
						else{
							echo $photo_route;
						}
					?>"id="me" alt="" />
                    <strong><? echo $id; ?></strong><br />
					<? 
						echo 'Gender:'.$gender.'<br/>';
						echo 'region:'.$region.'<br/>';		
					?>
                  
                    <a href="upimage.php">Upload Myphoto</a></p>
					<br/>
                    <div id="add_friend">
                    <form method="post" action="addFriend.php" name="addFriend">
                    	Add Friend : <input name="FriendID"><br />
                    </form>
                    </div>
                </div> <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <!--<h3 ><span>Category</span></h3>

                <ul id="category">
                    <li id="category-active"><a href="#">Selected category</a></li> --><!-- Active -->
                    <!--<li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                </ul>

                <hr class="noscreen" />-->
                <!-- Archive -->
				<h3 ><span>My Friends</span></h3>

                <ul id="category">
                    <!--<li id="category-active"><a href="#">Selected category</a></li> >--><!-- Active -->			
					<li><img src="<? echo $friend[0]['picture']; ?>" id="me" alt="" /><? echo " ".$friend[0]['id']; ?> </li>
					<li><img src="<? echo $friend[1]['picture']; ?>" id="me" alt="" /><? echo " ".$friend[1]['id']; ?> </li>
					<li><img src="<? echo $friend[2]['picture']; ?>" id="me" alt="" /><? echo " ".$friend[2]['id']; ?> </li>
                    <li><img src="<? echo $friend[3]['picture']; ?>" id="me" alt="" /><? echo " ".$friend[3]['id']; ?> </li>
                    <li><img src="<? echo $friend[4]['picture']; ?>" id="me" alt="" /><? echo " ".$friend[4]['id']; ?> </li>
                </ul>
				
				<hr class="noscreen" />
				
                <h3><span>Archive</span></h3>

                <ul id="archive">
                  <li id="archive-active"><a href="#">June 2011</a></li><!-- Active -->
					<li><a href="#">May 2011</a></li>
                    <li><a href="#">April 2011</a></li>
                    <li><a href="#">March 2011</a></li>
                    <li><a href="#">February 2011</a></li>
                    <li><a href="#">January 2011</a></li>
                    <li><a href="#">December 2010</a></li>
                    <li><a href="#">November 2010</a></li>
                    <li><a href="#">October 2010</a></li>
                    <li><a href="#">September 2010</a></li>
                    <li><a href="#">August 2010</a></li> 
                    <li><a href="#">July 2010</a></li>
                </ul>

                <hr class="noscreen" />

          

               
            
            </div> <!-- /col-in -->
        </div> <!-- /col -->

    </div> <!-- /page-in -->
    </div> <!-- /page -->

    <!-- Footer -->
    <div id="footer">
        <div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
        <hr class="noscreen" />
        
        <p id="createdby">created by Danny Wang/Liang/Benson</a> <!-- DON’T REMOVE, PLEASE! --></p>
        <p id="copyright">&copy; 2011 <a href="mailto:my@mail.com">Foodbook</a></p>
    </div> <!-- /footer -->
</div> <!-- /main -->
</body>
</html>