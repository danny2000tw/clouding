<?php
session_start();
include("mysql.inc.php");
?>

<script type="text/javascript">
function LikeAction(ID)
{
	xmlhttp=new XMLHttpRequest();
	//document.getElementById("demo").innerHTML = ID;
	/*xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    		document.getElementById("demo").innerHTML=xmlhttp.responseText;
    	}
  	}*/
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

        <!-- Search -->
        <div id="search" class="noprint">
            <form action="" method="get">
                <fieldset><legend>Search</legend>
                    <label><span class="noscreen">Find:</span>
                    <span id="search-input-out"><input type="text" name="" id="search-input" size="30" /></span></label>
                    <input type="image" src="design/search_submit.gif" id="search-submit" value="OK" />
                </fieldset>
            </form>
        </div> <!-- /search -->

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint">

            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li id="active"><a href="./index.php">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="#">Hot<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="./PostBLog.html">PostBlog<span class="tab-l"></span><span class="tab-r"></span></a></li>
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
                <h2><span><?php echo $record[$_GET['number']]['title']." "; ?></span></h2>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
				<p class="info noprint">
                    <span class="date"><?php echo $record[$_GET['number']]['date']; ?></span><span class="noscreen">,</span>
                </p>
                <?php
						$aritcleID=$record[$_GET['number']]['id'];
						print "<input type='button' name='Like' value='Like' onClick=LikeAction('$aritcleID')>";
				?>
                <p>
				<?php echo $content[$_GET['number']]; ?>
				</p>

				<p>
				<?php
						$aritcleID=$record[$_GET['number']]['id'];
						print "<input type='button' name='Like2' value='Like' onClick=LikeAction('$aritcleID')>";
				?>
				</p>
            </div> <!-- /article -->
				
				<p class="info noprint">
                    <span>?幾個人都說讚</span>
                </p>
				
                <p>
				<?php echo $content[$_GET['number']]; ?>
				</p>
 
			</div> <!-- /article -->
            <hr class="noscreen" />
            
        </div> <!-- /content -->
        <!-- Right column -->
        <div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3><span><a href="#">About Me</a></span></h3>

                <div id="about-me">
                    <p><img src="<? echo $photo_route; ?>" id="me" alt="Yeah, it’s me!" />
                    <strong><? echo $id; ?></strong><br />
					<? 
						echo 'Gender:'.$gender.'<br/>';
						echo 'region:'.$region.'<br/>';		
					?>
                  
                    <a href="upimage.php">Upload Myphoto</a></p>
                </div> <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3 ><span>Category</span></h3>

                <ul id="category">
                    <li id="category-active"><a href="#">Selected category</a></li> <!-- Active -->
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                </ul>

                <hr class="noscreen" />

                <!-- Archive -->
                <h3><span>Archive</span></h3>

                <ul id="archive">
                   <li><a href="#">January 2007</a></li>
                    <li><a href="#">December 2006</a></li>
                    <li><a href="#">November 2006</a></li>
                    <li><a href="#">October 2006</a></li>
                    <li><a href="#">September 2006</a></li>
                    <li id="archive-active"><a href="#">August 2006</a></li> <!-- Active -->
                    <li><a href="#">July 2006</a></li>
                    <li><a href="#">June 2006</a></li>
                    <li><a href="#">May 2006</a></li>
                    <li><a href="#">April 2006</a></li>
                    <li><a href="#">March 2006</a></li>
                    <li><a href="#">February 2006</a></li>
                    <li><a href="#">January 2006</a></li>
                </ul>

                <hr class="noscreen" />

                <!-- Links -->
                <h3><span>Links</span></h3>

                <ul id="links">
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
                    <li><a href="#">Something</a></li>
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
        
        <p id="createdby">created by <a href="http://www.nuvio.cz">Nuvio | Webdesign</a> <!-- DON’T REMOVE, PLEASE! --></p>
        <p id="copyright">&copy; 2007 <a href="mailto:my@mail.com">My Name</a></p>
    </div> <!-- /footer -->
</div> <!-- /main -->
</body>
</html>