<?
define("HABR_HEWS", "https://habr.com/ru/rss/best/daily/");
define("MAX", 5);
$rss = file_get_contents(HABR_HEWS);
$news = new SimpleXMLElement($rss);
$counter = 0;
foreach($news->channel->item as $n){ 
    $counter++;
    echo "TITLE: ".$n->title."\n";
    echo "LINK: ".$n->link."\n";
    echo "DESCRIPTION: ".$n->description."\n";
    echo "---------------------------------------------\n";
    if($counter >= MAX){
        break;
    }
}
?>