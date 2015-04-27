<?php
Class FeedCommand extends CConsoleCommand{
	public function run($args){
		if($args[0]=='shariveweb.com'){
			$this->shariveweb();
		}
	}
	
	public function shariveweb(){
		$XML = simplexml_load_file("http://shariveweb.com/sitemap.xml");
		$i=1;
		foreach($XML->url as $xml){
			$CHECK = SBFeed::model()->find(array('condition'=>'url=:url','params'=>array(':url'=>$xml->loc)));
			if($CHECK===NULL){
				$FeedData = simplexml_load_file("http://ftr.fivefilters.org/makefulltextfeed.php?url={$xml->loc}");
				$FeedData = $FeedData->channel->item;
				$title = explode('|',$FeedData->title);
				$url = $xml->loc;
				$image = $this->Takechar($FeedData->description);
				$content = $FeedData->description;
				$date = date('Y-m-d',strtotime($xml->lastmod));
				$source = "shariveweb.com";
				$Feed = New SBFeed;
				$Feed->title = $title[0];
				$Feed->url = $url;
				$Feed->image_thumb = $image;
				$Feed->content = strip_tags($content);//substr(strip_tags($content),0,500);
				$Feed->date = $date;
				$Feed->source = $source;
				$Feed->save();
			}
		$i++;
		}
	}
	
	public function Takechar($val='') {

		// keywords are between *
		$str = $val;
		//$str = '<img src="http://cdn03.animenewsnetwork.com/thumbnails/max550x700/cms/news/68122/byevxexcuaadrdg.jpg-large.jpeg"><img src="http://cdn03.animenewsnetwork.com/thumbnails/max550x700/cms/news/68122/byevxexcuaadrdg.jpg-larg.jpeg">';
		//(preg_match_all('/\<a href="(.*?)\"/', $str, $match)) 
		if (preg_match_all('/\<a href="(.*png)\"/', $str, $match)) {
			 $img= ($match[1][0]);
		}elseif (preg_match_all('/\<a href="(.*jpg)\"/', $str, $match)) {
			 $img= ($match[1][0]);
		}
		//" <img src="www.com.com/image/image.jpg"> ";
		return  empty($img) ? NULL : str_replace('">','',strip_tags($img));
	}
	
}