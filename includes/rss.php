<?php
  libxml_disable_entity_loader(false);
  
  echo '<table class="rss-table"><tr><td><p align="right"><a rel="alternate" type="application/rss+xml" href="../news.xml" target="_blank">flux RSS <img alt="Flux RSS" title="Flux RSS" src="../images/logo_rss.png"/></a></p></td></tr>';
  $dom = new DomDocument;
  $dom->load("../news.xml");
  $items = $dom->getElementsByTagName('item');

  foreach($items as $item)
  {
    echo '<tr">';
	echo '<td>';
	
    echo '<p class="rss-title"><a href="' . $item->getElementsByTagName('link')->item(0)->nodeValue . '">';
	echo $item->getElementsByTagName('title')->item(0)->nodeValue;	
    echo '</a></p>';

    echo '<p class="rss-description">';	
    echo $item->getElementsByTagName('description')->item(0)->nodeValue;
    echo '</p>';

	echo '<p class="rss-date">';
	$pubDate = strftime("%d-%m-%Y", strtotime($item->getElementsByTagName('pubDate')->item(0)->nodeValue));	
	echo $pubDate;
	echo '</p>';	
	
	echo '</td>';
	echo '</tr>';		
  }
  echo '</table>';
?>
