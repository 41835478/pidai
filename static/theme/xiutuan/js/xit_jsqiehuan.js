// JavaScript Document
//1
/**
 * 根据id获取对象
 */
function gid(id) {
 return document.getElementById(id);
}
/**
 * 添加页面加载完毕后要执行的方法
 */
function addLoadEvent(func){
 var oldonload = window.onload;
 if (typeof window.onload != 'function') {
  window.onload = func;
 } else {
  window.onload = function(){
   oldonload();
   func();
  }
 }
}
/**
 * 添加页面加载完毕后要执行的方法
 */
function addOnLoadEvent(invoker, func){
 var oldonload = window.onload;
 if (typeof window.onload != 'function') {
  window.onload = function() {
   func.apply(invoker);
  }
 } else {
  window.onload = function(){
   oldonload();
   func.apply(invoker);
  }
 }
}
/**
 * 扩展Array, 为原型增加一个判断是否包含传入的值的方法
 */
Array.prototype.contains = function(_val) {
 for (var i = 0; i < this.length; i++) {
  if (this[i] == _val) {
   return true;
  }
 }
 return false;
}
/**
 * 增加一个扩展window.setTimeout的函数
 */
var cusSetTimeout = function(invoker, fRef, mDelay) {
 if (typeof fRef == "function") {
  var argu = Array.prototype.slice.call(arguments, 3);
  var f = (function() {
   fRef.apply(invoker, argu);
  });
  return setTimeout(f, mDelay); // window.setTimeout原来有返回值，这里重写也应该返回
 }
 return setTimeout(fRef, mDelay); // 相当于setTimeout("test()", timeout);
}
/**
 * 增加一个扩展window.setInterval的函数
 */
var cusSetInterval = function(invoker, fRef, mDelay) {
 if (typeof fRef == "function") {
  var argu = Array.prototype.slice.call(arguments, 3);
  var f = (function() {
   fRef.apply(invoker, argu);
  });
  return setInterval(f, mDelay); // window.setInterval原来有返回值，这里重写也应该返回
 }
 return setInterval(fRef, mDelay); // 相当于setInterval("test()", timeout);
}
//2
/**
 * 焦点图类. 
 * 创建实例时, 需同时将实例名称传进去
 *///欢迎来到站长特效网，我们的网址是www.zzjs.net，很好记，zz站长，js就是js特效，本站收集大量高质量js代码，还有许多广告代码下载。
function FocusPicture(fname, ifocus, ifocus_piclist, ifocus_btn, normal, current, imageHeight, maxCurrentNum, autoChangeInterval) {
 this.instanceName = fname; // 类实例名称
 this.ifocus = ifocus ? ifocus : "ifocus"; // 焦点图外围div的ID
 this.ifocusPicList = ifocus_piclist ? ifocus_piclist : "ifocus_piclist"; // 焦点图图片显示区域外围div的ID
 this.ifocusBtn = ifocus_btn ? ifocus_btn : "ifocus_btn"; // 焦点图感应按钮外转div的ID
 this.normalClassName = normal ? normal : "normal"; // 按钮正常时的class样式
 this.currentClassName = current ? current : "current1"; // 按钮选中时的class样式
 this.imageHeight = imageHeight ? imageHeight : 951; // 图片高度, 用于图片滑动, 即滑动一张图片的高度
 this.maxCurrentNum = maxCurrentNum ? maxCurrentNum : 0; // 最大当前选中的图片号, 从0开始, 3表示第四张 
 this.autoChangeInterval = autoChangeInterval ? autoChangeInterval : 4000; // 图片轮换的时间间隔, 单位为毫秒
 this.isAutoChange = true; // 设置是否自动更换图片, 为true表示自动更换, 为false表示停止
 this.slideSpeed = 20; // 图片滑行速度, 值越大, 速度越慢
 this.invokeInterval = 5; // 循环调用moveElement函数的时间间隔, 单位为毫秒
 this.setIsAutoChange = function(flag) {
  this.isAutoChange = flag;
 }
 /**
  * 设置图片滑动方法, 每调用一次, 调整一点, 循环调用调整到指定位置
  *
  * @param elementID 图片div的ID
  * @param final_x 调整后的x坐标
  * @param final_y 调整后的y坐标
  */
 this.moveElement = function(elementID, final_x, final_y) {
  if (!document.getElementById)
   return false;
  if (!document.getElementById(elementID))
   return false;
  var elem = document.getElementById(elementID); 
  if (elem.movement) {
   clearTimeout(elem.movement);
  } 
  if (!elem.style.left) {
   elem.style.left = "0px";
  } 
  if (!elem.style.top) {
   elem.style.top = "0px";
  } 
  var xpos = parseInt(elem.style.left);
  var ypos = parseInt(elem.style.top);  
  if (xpos == final_x && ypos == final_y) {
   return true;
  }
  if (xpos < final_x) {
   var dist = Math.ceil((final_x - xpos) / this.slideSpeed);
   xpos = xpos + dist;
  } 
  if (xpos > final_x) {
   var dist = Math.ceil((xpos - final_x) / this.slideSpeed);
   xpos = xpos - dist;
  } 
  if (ypos < final_y) {
   var dist = Math.ceil((final_y - ypos) / this.slideSpeed);
   ypos = ypos + dist;
  } 
  if (ypos > final_y) {
   var dist = Math.ceil((ypos - final_y) / this.slideSpeed);
   ypos = ypos - dist;
  } 
  elem.style.left = xpos + "px";
  elem.style.top = ypos + "px";  
  elem.movement = cusSetTimeout(this, this.moveElement, this.invokeInterval, elementID, final_x, final_y);
 } 
 /**
  * 设置按钮正常样式
  */
 this.classNormal = function(iFocusBtnID){
  var iFocusBtns= gid(iFocusBtnID).getElementsByTagName('li'); // 按钮
  for(var i=0; i < iFocusBtns.length; i++) { // 设置按钮和描述正常样式
   iFocusBtns[i].className = this.normalClassName;
  }
 }
 /**
  * 设置按钮选中样式
  */
 this.classCurrent = function(iFocusBtnID, n){
  if (n >= this.maxCurrentNum)
  {
   n = this.maxCurrentNum ;
  }
  var iFocusBtns= gid(iFocusBtnID).getElementsByTagName('li');
  // 设置按钮和描述当前选中的样式
  iFocusBtns[n].className = this.currentClassName;
  
 }
 /**
  * 页面加载完毕后执行方法.
  * 
  */
 this.iFocusChange = function() {
  //alert(this.ifocus + " " + gid(this.ifocus) + " " + (this == window)); 
  if (!gid(this.ifocus))
   return false;
  // 当前调用的实例对象
  var instance = eval(this.instanceName);
  gid(this.ifocus).instance = instance;
  // 鼠标经过时图片区域时停止轮转
  gid(this.ifocus).onmouseover = function() {
   this.instance.setIsAutoChange(false);
  };
  // 鼠标离开时图片区域时继续轮转
  gid(this.ifocus).onmouseout = function() {
   this.instance.setIsAutoChange(true);
  };
  var iFocusBtns = gid(this.ifocusBtn).getElementsByTagName('li');
  var listLength = iFocusBtns.length;
  this.maxCurrentNum = listLength -1
  iFocusBtns[0].instance = instance;
  iFocusBtns[0].ifocusPicList = this.ifocusPicList;
  iFocusBtns[0].ifocusBtn = this.ifocusBtn;
  iFocusBtns[0].onmouseover = function() {
   this.instance.moveElement(this.ifocusPicList, 0, 0, 5);
   this.instance.classNormal(this.ifocusBtn);
   this.instance.classCurrent(this.ifocusBtn, 0);
  }
  for (var i = 1; i < listLength; i++) {
   iFocusBtns[i].instance = instance;
   iFocusBtns[i].ifocusPicList = this.ifocusPicList;
   iFocusBtns[i].ifocusBtn = this.ifocusBtn;
   iFocusBtns[i].value = i;
   iFocusBtns[i].yAxis = -i * this.imageHeight;
   iFocusBtns[i].onmouseover = function() {
    this.instance.moveElement(this.ifocusPicList, 0, this.yAxis);
    this.instance.classNormal(this.ifocusBtn);
    this.instance.classCurrent(this.ifocusBtn, this.value); // 直接把i设到this.value的位置就不行了, 调用时i会随for循环的改变而改变
   }
  }
 }//欢迎来到站长特效网，我们的网址是www.zzjs.net，很好记，zz站长，js就是js特效，本站收集大量高质量js代码，还有许多广告代码下载。
 /**
  * 定时调用该方法, 可以使图片自动更换
  */
 this.autoiFocus = function() {
  if(!gid(this.ifocus)) return false;
  // 停止轮转
  if (!this.isAutoChange) return false;  
  // 获取所有按钮
  var focusBtnList = gid(this.ifocusBtn).getElementsByTagName('li');
  var listLength = focusBtnList.length; 
  // 找到当前显示的按钮索引号
  for (var i = 0; i < listLength; i++) {
   if (focusBtnList[i].className == this.currentClassName) {
    var currentNum = i;
    break;
   }
  }  
  // 如果当前在最后一个图片, 则显示第一张
  if (currentNum == this.maxCurrentNum ){
   this.moveElement(this.ifocusPicList, 0, 0);
   this.classNormal(this.ifocusBtn);
   this.classCurrent(this.ifocusBtn, 0);
  } else { // 直接显示下一张
   this.moveElement(this.ifocusPicList, 0, -(currentNum + 1) * this.imageHeight);
   this.classNormal(this.ifocusBtn);
   this.classCurrent(this.ifocusBtn, currentNum + 1);
  }
 }
 /**
  * 启动图片自动轮转的定时器
  */
 this.startAutoChange = function() {
  cusSetInterval(this, this.autoiFocus, this.autoChangeInterval);
  // setInterval(this.autoiFocus, this.autoChangeInterval); //这样调用的话, 好像this的调用者会变成window
 }
}//欢迎来到站长特效网，我们的网址是www.zzjs.net，很好记，zz站长，js就是js特效，本站收集大量高质量js代码，还有许多广告代码下载。
//3
var focusPictureC = new FocusPicture("focusPictureC", "ifocus2", "ifocus_piclist2", "ifocus_btn2", "normal", "current1", "60", "4", "5000");
focusPictureC.startAutoChange();
addOnLoadEvent(focusPictureC, focusPictureC.iFocusChange);
