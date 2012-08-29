<!--start 团购分类数据调用-->
<?php 
/*start 团购数据调用*/
/*
------------------------------------
您做电子商务，我们为您提供基础服务！
易维网络欢迎您！
最完整的源码聚集地，最真诚的贴心服务！
淘宝地址：http://ev56.taobao.com/
网站地址：http://www.ev56.com/
旺旺号：o竹林七贤o
Q Q号：784959
------------------------------------
*/
$ev56_category_fl_texts = DB::LimitQuery('category', array(
	'condition' => array(
		'zone' => 'group',
		'display' => 'N',
),
	'order' => 'ORDER BY sort_order DESC',
));


/*end 团购数据调用*/
; ?>
<!--end 团购分类数据调用-->
<style type="text/css">
a.chalook { font-size:12px; color:#CD1A01;padding:3px; background:none;}
a.chalook:hover {font-size:12px;background:#CD1A01; color:#fff; padding:3px; text-decoration:none;}
</style>
          
          <div class="xit_pingpai xit_pinsp"style="margin-top:2px;">
               <ul class="xit_plei">
	           			<li class='current'>其他</li>
	            </ul>
	            <ul class="xit_dingwei xit_allpinp">	
	            <li><a <?php if(abs(intval($_GET['gid']))=='0'){?>class="current"<?php }?> href="/index.php">全部</a></li>
         
	<?php if(is_array($ev56_category_fl_texts)){foreach($ev56_category_fl_texts AS $one_ev56_s) { ?>
<?php 
/*淘宝地址：http://shop36852650.taobao.com/*/
	$condition_ev56_s['group_id'] = $one_ev56_s['id'];
	$ev56_num = Table::Count('team', $condition_ev56_s);
; ?>
	            <li><a <?php if(abs(intval($_GET['gid']))-$one_ev56_s['id']=='0'){?>class="current"<?php }?> href="/index.php?gid=<?php echo $one_ev56_s['id']; ?>" title="<?php echo $one_ev56_s['name']; ?>"><?php echo $one_ev56_s['name']; ?>(<font color="red"><?php echo $ev56_num; ?></font>)</a></li>
	<?php }}?>	
															
<!--{/if}-->			
		               				               		            </ul>
					<span id='check-all'  style="display:inline">更多</span>
					<span id='close-all'  style="display:none">收起</span>
					<a style="display:none;" href="javascript:;" class="ajaxlink ajax-cheackpinpai">cheack</a>
          </div>
    