<html lang="en">
    <head>
        <title>Movie Rating System</title>
       
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
       
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
		<style>
			table, th,td {
				border: 2px solid black;
				border-collapse: collapse;
				margin-top:1px;
				color:#F8F9F9  ;
				background-color:#5554;
			}
			th{
				padding: 15px;
				text-align: left;
				background-color:#F39C12
			}
			td{
				background-color:#F39C12;
			}
			form
			{
			width:100%;
			}
			</style>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
		
        <div id="content" >
			<div >
				<div class="container-fliud" height="400px">
					<div id="myCarousel"  class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1" ></li>
						<li data-target="#myCarousel" data-slide-to="2" ></li>
						
					</ol>
				<div class="carousel-inner" >
	
					<div class="item active">
					<img src="img/bvs.jpg"  style="height:400px;width:100%;" alt="" >
					<div class="carousel-caption"></div>
					</div>

					<div class="item">
						<img src="img/jurassic.jpg" style="height:400px;width:100%;"alt="">
						<div class="carousel-caption"></div>
					</div>
    
					<div class="item">
						<img src="img/logan.jpg"style="height:400px;width:100%;" alt="">
						<div class="carousel-caption"></div>
					</div>
  
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>	
			</div>	
		</div>  
       </div>
	  <div class ="container" style="width:85%">
<div class="jumbotron" style="margin:70px">
<div class="panel panel-primary">
<div class="panel-heading"></div>
<table style="width:100%">
	<tr>
		<th style = "background-color:#F39C12 ">S.No</th>
		<th style = "background-color:#F39C12 ">Movie Name</th>
		<th style = "background-color:#F39C12 ">Movie Id</th>
		<th style = "background-color:#F39C12 ">Get Reviews</th>
		<th style = "background-color:#F39C12 ">Get Rating</th>
	</tr>
	
<?php	
		require 'common.php';	
		$query=mysqli_query($con,"select distinct sno,movie_name,movie_id from movie");
while ($row = mysqli_fetch_assoc($query))
{
	echo  "
        <tr>
            <td>".$row["sno"]."</td>
			 <td>".$row["movie_name"]."</td>
            <td>".$row["movie_id"]."</td>    
            <td><a href='get_reviews.php?movie_id=".$row["movie_id"]."'>get reviews</a></td>
			<td><a href='get_rating.php?movie_id=".$row["movie_id"]."'>get rating</a></td>
            </tr>";
}
?>
</table>
</div>
</div>
</div>

            
    </body> 
</html>