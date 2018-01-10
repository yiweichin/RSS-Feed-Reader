<?php
$url[0] = "https://blog.ted.com/feed/";
$url[1] = "http://www.thestar.com.my/rss/editors-choice/main/";
$url[2] = "https://www.sciencedaily.com/rss/top.xml";

foreach ($url as $url){
	$html = "";
	$xml = simplexml_load_file($url);
	echo "<h1>".$xml->channel->title."</h1>";
	for($i=0; $i<3; $i++){
		$title = $xml->channel->item[$i]->title;
		$link = $xml->channel->item[$i]->link;
		$description = $xml->channel->item[$i]->description;
		$pubDate = $xml->channel->item[$i]->pubDate;
		
			$html .= "<a href='$link'><h3>$title</h3></a>";
		$html .= "$description";
		$html .= "<br />$pubDate<hr />";
	}
	echo $html;
}
?>