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
#maincol .intro{margin:0 10px;}
#maincol .step{margin:10px 10px 20px;}
#maincol .first{margin-top:0;}
#maincol .guide{padding:20px 30px;width:auto;}
#maincol .guide-steps{color:#666;}
#maincol .guide-steps li{position:relative;z-index:1;}
#maincol .guide-steps h3{width:370px;height:38px;margin-top:50px;background:url("/static/theme/xiutuan/css/i/bg-learn-guide-titles.gif") no-repeat 0 0;text-indent:-999em;}
#maincol .guide-steps h3.step1{margin-top:0;}
#maincol .guide-steps h3.step2{background-position:0 -200px;}
#maincol .guide-steps h3.step3{background-position:0 -400px;}
#maincol .guide-steps h3.step4{background-position:0 -600px;}
#maincol .guide-steps .text{width:290px;padding-left:50px;margin-top:5px;}
#maincol .guide-steps .text img{display:block;margin-top:10px;}
#maincol .bubble{position:absolute;top:0;left:370px;}
#maincol .bubble-top{width:237px;padding:20px 10px 20px 28px;background:url("/static/theme/xiutuan/css/i/bg-learn-guide-bubble.gif") no-repeat 0 0;}
#maincol .bubble-bottom{width:275px;height:12px;zoom:1;overflow:hidden;background:url("/static/theme/xiutuan/css/i/bg-learn-guide-bubble.gif") no-repeat 0 -588px;}
#maincol .bubble li{list-style-position:inside;list-style-type:decimal;}
#maincol .bubble ol.buy li{margin-bottom:25px;}
#maincol .bubble ol.buy li.last{margin-bottom:0;}
#maincol .bubble ol.coupon li{margin-top:5px;}
#maincol .bubble ol.coupon p{font-size:12px;padding-left:20px;}
#maincol .bubble ol.coupon p img{display:block;margin-top:12px;margin-left:-18px;}
</style>
<div id="bd" class="cf">
  <!-- end brand tuan -->
<div id="maincol">
<div class="faq">
<div class="faq_tit">
<ul><?php echo current_help('tour'); ?></ul>
</div>
<div class="tourbox">
                <div class="head"><h2>玩转<?php echo $INI['system']['abbreviation']; ?></h2></div>
                <div class="sect"><?php echo $page['value']; ?></div>
</div>
</div>


</div>
<!-- end left -->


<div id="view-right"> 
<?php include template("view_right");?>
</div>
<!-- end right -->

</div>
<?php include template("footer");?>
