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

<div class="jumbotron" style="margin:70px">
<div class="panel panel-primary">
<div class="panel-heading"></div>
<table style="width:100%">
	<tr>
		<th style = "background-color:#F39C12 ">Movie Name</th>
		<th style = "background-color:#F39C12 ">Microsoft Text Analytics</th>
		<th style = "background-color:#F39C12 ">Google Cloud Natural Language API</th>
	</tr>
<!--<tr>
		<th style = "background-color:#F39C12 ">Black Panther</th>
		<th style = "background-color:#F39C12 ">SentiScore	: 0.891562 <br>Class	: 5</th>
		<th style = "background-color:#F39C12 ">SentiScore	: 0.827403 <br>Class	: 5</th>
	</tr>-->
	<?php	
	 $movie_id = $_GET['movie_id'];
		require 'common.php';	
		$query=mysqli_query($con,"select * from movie where movie_id=$movie_id");
		$row = mysqli_fetch_assoc($query);
		$id =$row['sno'];
		
		$query1=mysqli_query($con,"select * from rating where id=$id");
		$row1= mysqli_fetch_assoc($query1);
		$class1=0;
		$class2=0;
		$mc_score=$row1['mc_score'];
		$g_score=$row1['g_score'];
		if($mc_score>0&& $mc_score<=0.2)
			$class1=1;
		else if($mc_score>0.2&& $mc_score<=0.4)
			$class1=2;
		else if($mc_score>0.4&& $mc_score<=0.6)
			$class1=3;
		else if($mc_score>0.6&& $mc_score<=0.8)
			$class1=4;
		else if($mc_score>0.8&& $mc_score<=1)
			$class1=5;
		
		if($g_score>0&& $g_score<=0.2)
			$class2=1;
		else if($g_score>0.2&& $g_score<=0.4)
			$class2=2;
		else if($g_score>0.4&& $g_score<=0.6)
			$class2=3;
		else if($g_score>0.6&& $g_score<=0.8)
			$class2=4;
		else if($g_score>0.8&& $g_score<=1)
			$class2=5;
		
		
		echo  "
        <tr>
            <td>".$row["movie_name"]."</td>
			 <td>SentiScore: ".$mc_score."<br> Class :". $class1."</td>
            <td>SentiScore:".$g_score."  <br> Class :". $class2."</td>    
            </tr>";


?>
</table>
</div>
</div>
</div>

<?php
/*namespace Google\Cloud\Samples\Language;
require __DIR__ . '/vendor/autoload.php';
echo $_GET['movie_id'];

use Google\Cloud\Language\LanguageClient;

/**
 * Find the sentiment in text.
 * ```
 * analyze_sentiment('Do you know the way to San Jose?');
 * ```
 *
 * @param string $text The text to analyze.
 * @param string $projectId (optional) Your Google Cloud Project ID
 *
 
  $text='Do you know the way to San Jose?';
 $abc=analyze_sentiment($text, 'crested-polygon-230016' );
function analyze_sentiment($text, $projectId )
{
    // Create the Natural Language client
    $language = new LanguageClient([
        'projectId' => $projectId,
    ]);

    // Call the analyzeSentiment function
    $annotation = $language->analyzeSentiment($text);

    // Print document and sentence sentiment information
    $sentiment = $annotation->sentiment();
    echo 'Document Sentiment:' . PHP_EOL;
    printf('  Magnitude: %s' . PHP_EOL, $sentiment['magnitude']);
    printf('  Score: %s' . PHP_EOL, $sentiment['score']);
    printf(PHP_EOL);
    foreach ($annotation->sentences() as $sentence) {
        printf('Sentence: %s' . PHP_EOL, $sentence['text']['content']);
        printf('Sentence Sentiment:' . PHP_EOL);
        printf('  Magnitude: %s' . PHP_EOL, $sentence['sentiment']['magnitude']);
        printf('  Score: %s' . PHP_EOL, $sentence['sentiment']['score']);
        printf(PHP_EOL);
    }
}
*/
?>