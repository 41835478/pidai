<!--start 团购分类数据调用-->
<?php 
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
$daytimenow_ev56_s = time();
$condition_ev56_s = array(
	'team_type' => 'normal',
	"begin_time <= $daytimenow_ev56_s ",
	"end_time > $daytimenow_ev56_s",
);
$group_id = abs(intval($_GET['gid']));
if ($group_id) $condition_ev56_s['group_id'] = $group_id;


function current_teamcategory_ev56($gid='0') {
	global $city;
	if($_GET[type]) $str='&type='.$_GET[type];
	$a = array(
			'/index.php' => '全部',
			);
	foreach(option_hotcategory('group') AS $id=>$name) {
	$daytimenow_ev56_s_s = time();
	$num= Table::Count('team', array(
	'group_id' => $id,
	"begin_time < $daytimenow_ev56_s_s ",
	"end_time > $daytimenow_ev56_s_s",
	));
		$a["/index.php?gid=$id".$str] =  $name.'(<font color="red">'.$num.'</font>)';
	}
	$l = "/index.php?gid=$gid".$str;
	if (!$gid) $l = "/index.php";
	return current_link_ev56($l, $a, true);
}

function current_link_ev56($link, $links, $span=false) {
	$html = '';
	$span = $span ? '<span></span>' : '';
	$tab_l = '<span class="tab_l"></span>';
	$tab_r = '<span class="tab_r"></span>';
	foreach($links AS $l=>$n) {
		if (trim($l,'/')==trim($link,'/')) {
			$html .= "<li><a class=\"current\" href=\"$l\">$n</a></li>";
		}
		else $html .= "<li><a href=\"$l\">$n</a></li>";
	}
	return $html;
}
; ?>
<!--end 团购分类数据调用-->
    <!--fenlei-->
	<div class="xit_fenlei">
	    	      <div class="xit_pingpai">
	               <ul class="xit_plei">
	           			<li class='current'>分类</li>
	               </ul>
	               <!--span>分类</span><img src="/static/theme/YellowUMZZ/img/xit_jiantou.jpg" /></div-->
              		<ul class="xit_dingwei">
              			<!--li><a class='current' href="http://www.ev56.com">全部</a></li>
              			<li><a  href="http://www.ev56.com">易维网络(<font color="red">68</font>)</a></li-->
												
				<?php echo current_teamcategory_ev56($group_id); ?>
              			              		</ul>
          </div> 
	<?php include template("block_navigator_ev56_s");?>
     </div>