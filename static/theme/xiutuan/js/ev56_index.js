var old_h;
var default_color = '{$default_color}';
var default_size = '{$default_size}';
$(function(){
	SysSecond = parseInt($("#remainSeconds").html());
	msecond= 10;
	//SysSecond_brand = parseInt($("#remainSeconds_brand").html());
	InterValObj = window.setInterval(SetRemainTime, 100);
	
	$('#btn_addcart').click(function(){
		if($('#sel_color').val() == ''){
			alert('请选择要颜色');
			return;
		}
		if($('#sel_size').val() == ''){
			alert('请选择尺码');
			return;
		}
		
		var buy_link = $('#pop_link').val()+'&cs='+$('#sel_color').val()+'_'+$('#sel_size').val();
		$('#buy_link').attr('href',buy_link);
		location.href = buy_link;
		$('.poswin').hide();
	});
	
	$('#check-all').click(function(){
			$(this).hide();
			old_h = $('.xit_allpinp').height();
			$('#close-all').css('display','inline');
			$('.xit_allpinp').parent().removeClass('xit_pinsp');
			$.get('/ajax/xiutajax.php?action=openpinpai');
	});
	
	$('#close-all').click(function(){
		$(this).hide();
			$('#check-all').css('display','inline');
			$('.xit_allpinp').parent().addClass('xit_pinsp');
			$.get('/ajax/xiutajax.php?action=closepinpai');
	});
});

function cheackpinpai(control){
	if(control=='open'){
		
	}else{
		
	}
	
}

function changeBody(index){     
//alert(index);  
switch(index){   

case 0:{     
document.getElementById('xit_uldingwei').style.display = "block";     
//document.getElementById('iDBody2').style.display = "none";     
//document.getElementById('iDBody3').style.display = "none";     
break;     
    }     
case 1:{     
document.getElementById('xit_uldingwei').style.display = "none";     
//document.getElementById('iDBody2').style.display = "";     
//document.getElementById('iDBody3').style.display = "none";     
break;     
    } 
 }
 }

function addcart(id){
	if($('#sel_color'+id).val() == ''){
		alert('请选择要颜色');
		return;
	}
	if($('#sel_size'+id).val() == ''){
		alert('请选择尺码');
		return;
	}
	
	var buy_link = $('#pop_link'+id).val()+'&cs='+$('#sel_color'+id).val()+'_'+$('#sel_size'+id).val();
	$('#buy_link'+id).attr('href',buy_link);
	location.href = buy_link;
	$('#pop_'+id).hide();	
}

function show_color_size(index){
	
	if(typeof(index)!='undefined'){
		var offset = $('#pop_'+index).offset();
		
		//$('#pop_'+index).attr('style','top:'+offset.top+';');
		//$('#pop_'+index).css({'position':'relative'});　　 
		$('#pop_'+index).show();		
	} else {
		var offset = $('#buy_link').offset();
		//$('#pop_main').css({top:offset.top , left:409});
		$('#pop_main').show();		
	}
}

function colorClick(e, id){
	if(!id) id = '';
	if($('#sel_color'+id).val()==e.innerHTML) return;
	
	//赋值
	$('#sel_color'+id).val(e.innerHTML);
	
	//改变样式
	$('#colors'+id+' a').each(function(){
		$(this).attr('class','sizelist');
	});
	e.parentNode.className = 'sizelist checked';
	var default_size = null;//$('#sel_size'+id).val();	
	
	if(!default_size){
		$.get("/ajax/colorsize.php", 
			{ 'action': "size" , 'id': $('#team_id'+id).val(), 'color': $('#sel_color'+id).val(),  'time': (new　Date()).getTime() },
			function(data){
				var datas = data.split(',');
				var cshtml = '';
				var is_sel = false;
				for(var i = 0;i<datas.length;i++){
					//如果只有一种尺码则自动选择
					if(datas.length == 1){
						cshtml += '<a class="sizelist checked" href="Javascript:void(0);"><span onclick="sizeClick(this,\''+id+'\');">'+datas[i]+'</span></a>';
						$('#sel_size'+id).val(datas[i]);
						is_sel = true;
					}else if(datas[i]==$('#sel_size'+id).val()){//如果之前已经选有尺码且那个尺码是该尺码已有则自动选中
						cshtml += '<a class="sizelist checked" href="Javascript:void(0);"><span onclick="sizeClick(this,\''+id+'\');">'+datas[i]+'</span></a>';
						is_sel = true;
					}else{
						cshtml += '<a class="sizelist" href="Javascript:void(0);"><span onclick="sizeClick(this,\''+id+'\');">'+datas[i]+'</span></a>';
					}
				}
				$('#sizes'+id).html(cshtml);
				if(!is_sel) $('#sel_size'+id).val(''); //如果没有默认选择的尺寸，则清空。
			} 
		);
	}
}

function sizeClick(e, id){
	if(!id) id = '';
	if($('#sel_size'+id).val()==e.innerHTML) return;
	//赋值
	$('#sel_size'+id).val(e.innerHTML);
	
	//改变样式
	$('#sizes'+id+' a').each(function(){
		$(this).attr('class','sizelist');
	});
	e.parentNode.className = 'sizelist checked';
	var default_color = null;//$('#sel_color'+id).val();
	if(!default_color){
		$.get("/ajax/colorsize.php", 
			{ 'action': "color" , 'id': $('#team_id'+id).val(), 'size': $('#sel_size'+id).val(),  'time': (new　Date()).getTime() },
			function(data){
				var datas = data.split(',');
				var cshtml = '';
				var is_sel = false;
				for(var i = 0;i<datas.length;i++){
					//如果只有一种颜色则自动选择
					if(datas.length == 1){
						cshtml += '<a class="sizelist checked" href="Javascript:void(0);"><span onclick="colorClick(this,\''+id+'\');">'+datas[i]+'</span></a>';
						$('#sel_color'+id).val(datas[i]);
						is_sel = true;
					}else if(datas[i]==$('#sel_color'+id).val()){//如果之前已经选有颜色且那个颜色是该颜色已有则自动选中
						cshtml += '<a class="sizelist checked" href="Javascript:void(0);"><span onclick="colorClick(this,\''+id+'\');">'+datas[i]+'</span></a>';
						is_sel = true;
					}else{
						cshtml += '<a class="sizelist" href="Javascript:void(0);"><span onclick="colorClick(this,\''+id+'\');">'+datas[i]+'</span></a>';
					}
				}
				$('#colors'+id).html(cshtml);
				if(!is_sel) $('#sel_color'+id).val(''); //如果没有默认选择的颜色，则清空。
			} 
		);
	}
}

function SetRemainTime() {
	if (SysSecond > 0) {
		SysSecond = SysSecond -0.1;
		if(msecond == 0){msecond=9;}
		var second = Math.floor(SysSecond % 60)+msecond/10;             // 计算秒    
		var minite = Math.floor((SysSecond / 60) % 60);      //计算分
		var hour = Math.floor(SysSecond / 3600);      		//计算小时
		var timer = [hour,minite,second];
		$("#remainTime input").each(function(i){
			$(this).val(timer[i]);
		});
		msecond--;
	}else {//剩余时间小于或等于0的时候，就停止间隔函数
		window.clearInterval(InterValObj);
	}
	
	/*if( SysSecond_brand >0){
		SysSecond_brand = SysSecond_brand - 1;
		var second = Math.floor(SysSecond_brand % 60);             // 计算秒    
		var minite = Math.floor((SysSecond_brand / 60) % 60);      //计算分
		var hour = Math.floor(SysSecond_brand / 3600);      		//计算小时
		var timer = [hour,minite,second];
		$("#remianBrand input").each(function(i){
			$(this).val(timer[i]);
		});
	}else {//剩余时间小于或等于0的时候，就停止间隔函数
		window.clearInterval(InterValObj);
	}*/
}
