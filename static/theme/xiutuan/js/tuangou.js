
// JavaScript Document
jQuery(function($){
	  $(".nav li").hover(function(){
		$(this).addClass("hovli")						  
	   },function(	){
		$(this).removeClass("hovli")	   
	   });
});
$(document).ready(function(){
	$("#check_online").click(function(){
		$("#check_other").attr("checked",false);
		$("#check_cash").attr("checked",false);
		$("#check-alipay").attr("checked",true);
		$("#paycredit").show();
		
	
		});
	$("#funds").click(function(){	
		if($("#funds").attr("checked")){
			if($("#paymoney").val()=="credit"){
				$("#payonline").hide();	
			}
			$("#paycash").hide();
		$("#paybank").hide();
			}else{
		$("#paycash").show();
		$("#paybank").show();
		$("#payonline").show();	
			}
		});
	$("#check_cash").click(function(){
		$("#paycredit").hide();
		$("#check_online").attr("checked",false);		
		});
	$("#check_other").click(function(){	
		$("#paycredit").hide();
		$("#check_online").attr("checked",false);
		});
	$("input[name='paytype']").click(function(){
		if(!$("#check_other").attr("checked") && !$("#check_cash").attr("checked")){
			$("#check_online").attr("checked",true);
			$("#paycredit").show();
			}		
		});	
	});
function submits(){
if($("#check_online").attr("checked") || $("#check_cash").attr("checked") || $("#check_other").attr("checked")){
			return true;
	}else if($("#paymoney").val()=="credit" && $("#funds").attr("checked")){
		return true;
	}else{
	alert("请选择支付方式！");
	return false;
		}
	}
function showqq(){
jQuery('#dealca').toggle();	
	}	

