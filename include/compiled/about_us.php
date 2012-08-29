<?php include template("header");?>
<style type="text/css">
#maincol .head{padding:0 10px 10px;}
#maincol .head h2{display:inline;padding-left:10px;font-size:2em;}
#maincol .head .headtip{margin-left:20px;font-size:16px;font-weight:bold;}


#maincol .head{position:relative;}
#maincol .filter{position:absolute;top:25px;right:10px;}
#maincol .filter li{float:left;margin:0 5px 0 0;font-size:12px;}
#maincol .filter a{padding:3px 1px;}
#maincol .filter .current a{padding:3px 7px;background:#00ADB2;color:#fff;-moz-border-radius:2px;-webkit-border-radius:2px;}

#maincol .sect{padding:20px 10px 50px;border-top:1px solid #def;}
#maincol .sect h3{margin:20px 0 10px;padding-left:10px;font-size:1.2em;}
#maincol .sect h4{margin:25px 0 10px;padding-left:10px;font-size:1em;}
#maincol .sect p{margin:10px;line-height:1.5em;}
#maincol .sect ol.list{margin:10px 20px;}
#maincol .sect ol.list li{list-style-position:inside;list-style-type:decimal;}
#maincol .sect ul.list{margin:10px 20px;}
#maincol .about .sect{padding:10px 10px;}
#maincol .about ul.list{margin:5px 10px 30px 30px;}
#maincol .about dl{margin-top:20px;margin-left:10px;}
#maincol .about dt{font-weight:bold;}
#maincol .about h3.contact{padding:8px 18px;background:#E8F9FF;font-size:16px;}
#maincol .about dl.contact{margin-left:18px;}

#maincol .job .caption{margin:0 20px;}
#maincol .job .faith{margin:10px 10px 30px;padding-left:21px;*padding-left:21px;}
#maincol .job .joinus{padding-left:21px;*padding-left:23px;}
#maincol .job .job-title{padding:3px 30px;background:#E8F9FF url(i/bg-toggle-fold.gif) no-repeat 10px -89px;cursor:pointer;zoom:1;}
#maincol .job .fold{background-position:10px -89px;}
#maincol .job .unfold{background-position:10px 11px;;}
#maincol .job .job-desc{display:block;}
#maincol .job .job-desc p{margin-left:30px;margin-bottom:0;}
#maincol .job .job-desc p.continue{margin-bottom:20px;}
#maincol .job .job-desc ul{margin:5px 20px 0 45px;*margin-left:47px;}
#maincol .job .job-desc ol{margin:5px 20px 20px 50px;*margin-left:53px;}
#maincol .job .job-desc ul li{list-style-position:outside;list-style-type:disc;}
#maincol .job .job-desc ol li{list-style-position:outside;list-style-type:decimal;}
#maincol .job .job-desc h4{font-size:16px;}
#maincol .job .job-desc h5{margin-left:30px;}
</style>
<div id="bdw" class="bdw">
<div id="bd" class="cf">
<div id="maincol">
<div class="faq">
	<div class="faq_tit">
			<ul><?php echo current_about('us'); ?></ul>
	</div>
	
<div class="tourbox">
                 <div class="head"><h2>关于<?php echo $INI['system']['abbreviation']; ?></h2></div>
                <div class="sect"><?php echo $page['value']; ?></div>
</div>
</div>
</div>
</div> <!-- bd end -->
</div> <!-- bdw end -->

<?php include template("footer");?>
