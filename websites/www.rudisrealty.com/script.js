function newuser() {
	DispWin1 = window.open('http://www.mlsplug-in.com/mlsplugin/signup.asp?Office=410','detail','height=420,width=600,scrollbars=1,resizable=1,toolbar=1,menubars=0');
}
function listings(){
	DispWin=window.open('http://mlsplug-in.com/intramls/results.asp?Office=410','Wind',
	'height=420,width=640,resizable=1,scrollbars=1,toolbar=1');
}
function members() {
	DispWin1 = window.open('http://www.mlsplug-in.com/mlsplugin/default.asp?Office=410','detail','height=420,width=600,scrollbars=1,resizable=1,toolbars=1,menubars=0');
}
function mylistings(){
	DispWin=window.open('http://www.mlsplug-in.com/featured/default.asp?office=410','featured','height=400,width=600,resizable=yes,scrollbars=yes,toolbars=no');
}

function overImg(imgName) {	
	imgOn = eval(imgName + "On.src");
	document [imgName].src = imgOn;
}

function offImg(imgName) {
	imgOff = eval(imgName + ".src");
	document [imgName].src = imgOff;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}