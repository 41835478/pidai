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
#maincol .sect{padding-top:16px;}
#maincol .sect h3{margin:20px 0 10px;padding-left:10px;font-size:1.2em;}
#maincol .sect h4{margin:25px 0 5px;padding-left:10px;font-size:1em;}
#maincol .sect h4.first{margin:0;}
#maincol .sect p{margin:5px 10px;line-height:1.5em;}

#maincol .faq .sect{padding:16px 10px 10px;width:auto;}
#maincol .faq .faqlist li{margin-bottom:12px;padding:10px;list-style-position:inside;list-style-type:decimal;}
#maincol .faq .faqlist li.alt{background:#f6f6f6;}
#maincol .faq .faqlist h4{display:inline;color:#333;}
#maincol .faq .faqlist p{margin:8px 20px 0;*margin-left:16px;line-height:1.5em;color:#666;}
#maincol .faq .paytype p{padding-top:10px;*padding-top:15px;padding-left:140px;}
#maincol .faq .paytype .alipay{height:39px;background:url("/static/theme/xiutuan/css/i/alipay.gif") no-repeat 0 2px;}
#maincol .faq .paytype .yeepay{height:33px;background:url("/static/theme/xiutuan/css/i/yeepay.gif") no-repeat 0 2px;}
#maincol .faq .paytype .chinabank{height:35px;background:url("/static/theme/xiutuan/css/i/chinabank.gif") no-repeat 0 3px;*background-position:0 5px;}
#maincol .faq .paytype .tenpay{height:35px;background:url("/static/theme/xiutuan/css/i/tenpay.jpg") no-repeat 0 3px;*background-position:0 5px;}
@media screen and(-webkit-min-device-pixel-ratio:0){#maincol .faq .faqlist p{margin-left:17px;}
}
#maincol .faq .sect a{color:#FF4E00;text-decoration:none;}
#maincol .faq .sect a:hover{text-decoration:underline;}
</style>
<div id="bd" class="cf">
  <!-- end brand tuan -->
<div id="maincol">
<div class="faq">
<div class="faq_tit">
<ul><?php echo current_help('faqs'); ?></ul>
</div>
<div class="tourbox">
                <div class="head"><h2>常见问题</h2></div>
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
