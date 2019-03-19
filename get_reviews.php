<html>
<head>
<title>Reviews</title>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="jumbotron">
           <h3 align="center">Success!!!Reviews are fetched from Movie database.</h3><hr>
        </div>
    </div>
</div>



<?php
$id=$_GET['movie_id'];
echo $id;
if($id=="209112")
   $url="https://api.themoviedb.org/3/movie/209112/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="246655")
	 	$url="https://api.themoviedb.org/3/movie/246655/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="102899")
	 	$url="https://api.themoviedb.org/3/movie/102899/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="374720")
	 	$url="https://api.themoviedb.org/3/movie/374720/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="263115")
	 	$url="https://api.themoviedb.org/3/movie/263115/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="118340")
	 	$url="https://api.themoviedb.org/3/movie/118340/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="333339")
	 	$url="https://api.themoviedb.org/3/movie/333339/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="269149")
	 	$url="https://api.themoviedb.org/3/movie/269149/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="126889")
	 	$url="https://api.themoviedb.org/3/movie/126889/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="135397")
	 	$url="https://api.themoviedb.org/3/movie/135397/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="49026")
	$url="https://api.themoviedb.org/3/movie/49026/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="181808")
	$url="https://api.themoviedb.org/3/movie/181808/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="157336")
	$url="https://api.themoviedb.org/3/movie/157336/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="315635")
	$url="https://api.themoviedb.org/3/movie/315635/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="315837")
	$url="https://api.themoviedb.org/3/movie/315837/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="339964")
	$url="https://api.themoviedb.org/3/movie/339964/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="460885")
	$url="https://api.themoviedb.org/3/movie/460885/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="297762")
	$url="https://api.themoviedb.org/3/movie/297762/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="271110")
	$url="https://api.themoviedb.org/3/movie/271110/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="335984")
	$url="https://api.themoviedb.org/3/movie/335984/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="141052")
	$url="https://api.themoviedb.org/3/movie/141052/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="293660")
	$url="https://api.themoviedb.org/3/movie/293660/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="273248")
	$url="https://api.themoviedb.org/3/movie/273248/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="297761")
	$url="https://api.themoviedb.org/3/movie/297761/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="330459")
	$url="https://api.themoviedb.org/3/movie/330459/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="383498")
	$url="https://api.themoviedb.org/3/movie/383498/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="284054")
	$url="https://api.themoviedb.org/3/movie/284054/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="70160")
	$url="https://api.themoviedb.org/3/movie/70160/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="299536")
	$url="https://api.themoviedb.org/3/movie/299536/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="284052")
	$url="https://api.themoviedb.org/3/movie/284052/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="76341")
	$url="https://api.themoviedb.org/3/movie/76341/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="353081")
	$url="https://api.themoviedb.org/3/movie/353081/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="283995")
	$url="https://api.themoviedb.org/3/movie/283995/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="245891")
	$url="https://api.themoviedb.org/3/movie/245891/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="198663")
	$url="https://api.themoviedb.org/3/movie/198663/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="338970")
	$url="https://api.themoviedb.org/3/movie/338970/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="329865")
	$url="https://api.themoviedb.org/3/movie/329865/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="321612")
	$url="https://api.themoviedb.org/3/movie/321612/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="127585")
	$url="https://api.themoviedb.org/3/movie/127585/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="286217")
	$url="https://api.themoviedb.org/3/movie/286217/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="419430")
	$url="https://api.themoviedb.org/3/movie/419430/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="207703")
	$url="https://api.themoviedb.org/3/movie/207703/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="137113")
	$url="https://api.themoviedb.org/3/movie/137113/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="68718")
	$url="https://api.themoviedb.org/3/movie/68718/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="381288")
	$url="https://api.themoviedb.org/3/movie/381288/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="293167")
	$url="https://api.themoviedb.org/3/movie/293167/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="679")
	$url="https://api.themoviedb.org/3/movie/679/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="157350")
	$url="https://api.themoviedb.org/3/movie/157350/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="259316")
	$url="https://api.themoviedb.org/3/movie/259316/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else if($id=="99861")
	$url="https://api.themoviedb.org/3/movie/99861/reviews?page=1&language=en-US&api_key=365990e7ad988942878f11e960c6bfbc";
else 
	echo $id;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{}",
));
$res_database = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err)
{
	header("location:error.php?err=$err");
  echo "cURL Error #:" . $err;
} 
else 
{
	function escapeJsonString($value)//convert string response to array
	{ 
		$escapers = array("\'");
		$replacements = array("\\/");
		$result = str_replace($escapers, $replacements, $value);
		return $result;
	}

$res_database = escapeJsonString($res_database);
$res_database = json_decode($res_database,true);
}
$i=0;
$response=array();
$res_database=$res_database['results'];
foreach ($res_database as $value)
{
	$response['reviews'][$i]=$value['content'];
	$i++;
}

//$fp = fopen("reviews/BatmanVsSuperman.txt", "w");//open a file to write data

echo"<div><font size='16'><a style='align:center;margin-left:495;text-decoration:none' href='get_rating.php?movie_id=".$id."'>get rating</a></font></div>";
echo '<pre>';print_r($response);

if($id=="209112"&& !file_exists('reviews/209112.json'))
	file_put_contents('reviews/209112.json', json_encode($response));
else if($id=="246655"&& !file_exists('reviews/246655.json'))
		file_put_contents('reviews/246655.json', json_encode($response));
else if($id=="102899"&& !file_exists('reviews/102899.json'))
		file_put_contents('reviews/102899.json', json_encode($response));
else if($id=="374720"&& !file_exists('reviews/374720.json'))
	 	file_put_contents('reviews/374720.json', json_encode($response));
else if($id=="263115"&& !file_exists('reviews/263115.json'))
	 	file_put_contents('reviews/263115.json', json_encode($response));
else if($id=="118340"&& !file_exists('reviews/118340.json'))
	 	file_put_contents('reviews/118340.json', json_encode($response));
else if($id=="333339"&& !file_exists('reviews/333339.json'))
	 	file_put_contents('reviews/333339.json', json_encode($response));
else if($id=="269149"&& !file_exists('reviews/269149.json'))
	 	file_put_contents('reviews/269149.json', json_encode($response));
else if($id=="126889"&& !file_exists('reviews/126889.json'))
	 	file_put_contents('reviews/126889.json', json_encode($response));
else if($id=="135397"&& !file_exists('reviews/135397.json'))
	 	file_put_contents('reviews/135397.json', json_encode($response));
else if($id=="49026"&& !file_exists('reviews/49026.json'))
	file_put_contents('reviews/49026.json', json_encode($response));	
else if($id=="181808"&& !file_exists('reviews/181808.json'))
	file_put_contents('reviews/181808.json', json_encode($response));
else if($id=="157336"&& !file_exists('reviews/157336.json'))
	file_put_contents('reviews/157336.json', json_encode($response));
else if($id=="315635"&& !file_exists('reviews/315837.json'))
	file_put_contents('reviews/315635.json', json_encode($response));
else if($id=="315837"&& !file_exists('reviews/315837.json'))
	file_put_contents('reviews/315837.json', json_encode($response));
else if($id=="339964"&& !file_exists('reviews/339964.json'))
	file_put_contents('reviews/339964.json', json_encode($response));
else if($id=="460885"&& !file_exists('reviews/460885.json'))
	file_put_contents('reviews/460885.json', json_encode($response));
else if($id=="297762"&& !file_exists('reviews/297762.json'))
	file_put_contents('reviews/297762.json', json_encode($response));
else if($id=="271110"&& !file_exists('reviews/271110.json'))
	file_put_contents('reviews/271110.json', json_encode($response));
else if($id=="335984"&& !file_exists('reviews/335984.json'))
	file_put_contents('reviews/335984.json', json_encode($response));
else if($id=="141052"&& !file_exists('reviews/141052.json'))
	file_put_contents('reviews/141052.json', json_encode($response));
else if($id=="293660"&& !file_exists('reviews/293660.json'))
	file_put_contents('reviews/293660.json', json_encode($response));
else if($id=="273248"&& !file_exists('reviews/273248.json'))
	file_put_contents('reviews/273248.json', json_encode($response));
else if($id=="297761"&& !file_exists('reviews/297761.json'))
	file_put_contents('reviews/297761.json', json_encode($response));
else if($id=="330459"&& !file_exists('reviews/330459.json'))
	file_put_contents('reviews/330459.json', json_encode($response));
else if($id=="383498"&& !file_exists('reviews/383498.json'))
	file_put_contents('reviews/383498.json', json_encode($response));
else if($id=="284054"&& !file_exists('reviews/284054.json'))
	file_put_contents('reviews/284054.json', json_encode($response));
else if($id=="70160"&& !file_exists('reviews/70160.json'))
	file_put_contents('reviews/70160.json', json_encode($response));
else if($id=="299536"&& !file_exists('reviews/299536.json'))
	file_put_contents('reviews/299536.json', json_encode($response));
else if($id=="284052"&& !file_exists('reviews/284052.json'))
	file_put_contents('reviews/284052.json', json_encode($response));
else if($id=="76341"&& !file_exists('reviews/76341.json'))
	file_put_contents('reviews/76341.json', json_encode($response));
else if($id=="353081"&& !file_exists('reviews/353081.json'))
	file_put_contents('reviews/353081.json', json_encode($response));
else if($id=="283995"&& !file_exists('reviews/283995.json'))
	file_put_contents('reviews/283995.json', json_encode($response));
else if($id=="245891"&& !file_exists('reviews/245891.json'))
	file_put_contents('reviews/245891.json', json_encode($response));
else if($id=="198663"&& !file_exists('reviews/198663.json'))
	file_put_contents('reviews/198663.json', json_encode($response));
else if($id=="338970"&& !file_exists('reviews/338970.json'))
	file_put_contents('reviews/338970.json', json_encode($response));
else if($id=="329865"&& !file_exists('reviews/329865.json'))
	file_put_contents('reviews/329865.json', json_encode($response));
else if($id=="321612"&& !file_exists('reviews/321612.json'))
	file_put_contents('reviews/321612.json', json_encode($response));
else if($id=="127585"&& !file_exists('reviews/127585.json'))
	file_put_contents('reviews/127585.json', json_encode($response));
else if($id=="286217"&& !file_exists('reviews/286217.json'))
	file_put_contents('reviews/286217.json', json_encode($response));
else if($id=="419430"&& !file_exists('reviews/419430.json'))
	file_put_contents('reviews/419430.json', json_encode($response));
else if($id=="207703"&& !file_exists('reviews/207703.json'))
	file_put_contents('reviews/207703.json', json_encode($response));
else if($id=="137113"&& !file_exists('reviews/137113.json'))
	file_put_contents('reviews/137113.json', json_encode($response));
else if($id=="68718"&& !file_exists('reviews/68718.json'))
	file_put_contents('reviews/68718.json', json_encode($response));
else if($id=="381288"&& !file_exists('reviews/381288.json'))
	file_put_contents('reviews/381288.json', json_encode($response));
else if($id=="293167"&& !file_exists('reviews/293167.json'))
	file_put_contents('reviews/293167.json', json_encode($response));
else if($id=="679"&& !file_exists('reviews/679.json'))
	file_put_contents('reviews/679.json', json_encode($response));
else if($id=="157350"&& !file_exists('reviews/157350.json'))
	file_put_contents('reviews/157350.json', json_encode($response));
else if($id=="259316"&& !file_exists('reviews/259316.json'))
	file_put_contents('reviews/259316.json', json_encode($response));
else if($id=="99861"&& !file_exists('reviews/99861.json'))
	file_put_contents('reviews/99861.json', json_encode($response));


//file_put_contents('reviews/BatmanVsSuperman.txt', json_encode($response));
//echo '<pre>';print_r($response['results']);
//echo '<pre>';print_r($reviews_array);
?>
</body>
</html>