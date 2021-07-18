<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Rudis Realty | Commercial Property/Land Search</title>
<link href="../styles/rudisrealty.css" rel="stylesheet" type="text/css">
<link rel="SHORTCUT ICON" href="../favicon.ico">

<script language="JavaScript" type="text/JavaScript">
<!--
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

function  CustomizeSearchPage()	{
	h=500;
	w=500;
	myscroll="yes";
	mypage = "CustomizeSearchPage.asp?aid=BB800595&id=7581";
	myname = "bigcustom";
	myresize = "yes";
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+myscroll +',resizable='+myresize ;
	winbig = window.open(mypage,myname,settings)
	winbig.focus();
}

function Form_Validator(theForm) {
	GetList();
	if (theForm.twn.value == "") {
    	alert("Please select one of the \"Towns/Areas\" options.");
	  	return (false);
	}
  return (true);
}

function AddTown() {
	var n = 0;
	var x = new Array(1);

	for (var i = 0; i < document.SelectForm.TheTowns.options.length; i++) {
		if (document.SelectForm.TheTowns.options[i].selected) {
			var myoption = new Option(document.SelectForm.TheTowns.options[i].text, document.SelectForm.TheTowns.options[i].value);
			var mystring = "";
			for (var a = 0; a < document.SelectForm.ChosenTowns.length; a++) {
				NowTown = document.SelectForm.ChosenTowns.options[a].value;
					OldTown = document.SelectForm.TheTowns.options[i].value;
					if (NowTown == OldTown) {
						mystring = "This town is already listed as a Primary town.";
					}
			}
												
			if (mystring == "") {
				document.SelectForm.ChosenTowns.options[document.SelectForm.ChosenTowns.length] = myoption;
				//var myoption = new Option("","");
				//document.chosen.chosenusers.options[document.chosen.chosenusers.length] = myoption;
				x[n] = document.SelectForm.TheTowns.options[i].value;
				n = n + 1;
			}
			else {
				//alert(mystring);
			}
		}
	}
}
		
function SendBack()	{
	var n = 0;
	var x = new Array(1);
			
	for (i=0;i<document.SelectForm.ChosenTowns.options.length;i++) {
		if (document.SelectForm.ChosenTowns.options[i].selected) {
			mystring = document.SelectForm.ChosenTowns.options[i].value;
			var myoption = new Option(document.SelectForm.ChosenTowns.options[i].text, document.SelectForm.ChosenTowns.options[i].value);
			//document.TheForm.Towns.options[document.TheForm.Towns.length] = myoption;
			x[n] = document.SelectForm.ChosenTowns.options[i].value;
			n = n + 1;
		}
	}

	for (var j = 0; j< x.length; j++) {
		mystring = x[j];
		for (var k=0; k < document.SelectForm.ChosenTowns.options.length; k++) {
			if (document.SelectForm.ChosenTowns.options[k].value == mystring ) {
				document.SelectForm.ChosenTowns.options[k] = null;
				k=0;
			}
		}
	}		
}	
	
function GetList()	{
	var mylist = "";
	for(i=0;i<document.SelectForm.ChosenTowns.options.length;i++) {
		if (document.SelectForm.ChosenTowns.options[i].value != "")	{
			mylist = mylist + document.SelectForm.ChosenTowns.options[i].value + ',';
		}
	}
	document.TheForm.twn.value = mylist;						
}
//-->
</script>
</head>
<body onLoad="MM_preloadImages('../images/homesearchON.gif','../images/commercialON.gif','../images/residentialON.gif','../images/aboutON.gif','../images/contactON.gif')">

<!-- BEGIN HEADER AND NAV BAR  -->

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"
  summary="Page Header">
  <tr class="pageHEADER"> 
    <td align="center"><table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="450" align="center"><a href="http://www.rudisrealty.com"><img src="../images/rudisrealtylogo.gif" alt="Rudis Realty, Commercial and Residential Real Estate" width="630" height="67" border="0"></a></td>
        </tr>
        <tr> 
          <td align="center"><img src="../images/line.gif" alt="" width="630" height="1" border="0"></td>
        </tr>
        <tr> 
          <td align="center"><img src="../images/shim_blue.gif" alt="" width="630" height="2" border="0"></td>
        </tr>
        <tr> 
          <td align="center"><a href="../index.html" onFocus="MM_swapImage('homesearch','','../images/homesearchON.gif',1)" onMouseOver="MM_swapImage('homesearch','','../images/homesearchON.gif',1)" onBlur="MM_swapImgRestore()" onMouseOut="MM_swapImgRestore()"><img src="../images/homesearchOFF.gif" alt="Homesearch" name="homesearch" width="190" height="22" border="0" id="homesearch"></a><img src="../images/div.gif" alt="|" width="1" height="22" border="0"><a href="../commercial.html" onFocus="MM_swapImage('commercial','','../images/commercialON.gif',1)" onMouseOver="MM_swapImage('commercial','','../images/commercialON.gif',1)" onBlur="MM_swapImgRestore()" onMouseOut="MM_swapImgRestore()"><img src="../images/commercialOFF.gif" alt="Commercial" name="commercial" width="104" height="22" border="0" id="commercial"></a><img src="../images/div.gif" alt="|" width="1" height="22" border="0"><a href="../residential.html" title="Residential" onFocus="MM_swapImage('residential','','../images/residentialON.gif',1)" onMouseOver="MM_swapImage('residential','','../images/residentialON.gif',1)" onBlur="MM_swapImgRestore()" onMouseOut="MM_swapImgRestore()"><img src="../images/residentialOFF.gif" alt="Residential" name="residential" width="98" height="22" border="0" id="residential"></a><img src="../images/div.gif" alt="|" width="1" height="22" border="0"><a href="../about.html" title="About Us" onFocus="MM_swapImage('about','','../images/aboutON.gif',1)" onMouseOver="MM_swapImage('about','','../images/aboutON.gif',1)" onBlur="MM_swapImgRestore()" onMouseOut="MM_swapImgRestore()"><img src="../images/aboutOFF.gif" alt="About Us" name="about" width="69" height="22" border="0" id="about"></a><img src="../images/div.gif" alt="|" width="1" height="22" border="0"><a href="../contact.html" title="Contact Us" onFocus="MM_swapImage('contact','','../images/contactON.gif',1)" onMouseOver="MM_swapImage('contact','','../images/contactON.gif',1)" onBlur="MM_swapImgRestore()" onMouseOut="MM_swapImgRestore()"><img src="../images/contactOFF.gif" alt="Contact Us" name="contact" width="165" height="22" border="0" id="contact"></a></td>
        </tr>
        <tr> 
          <td align="center"><img src="../images/shim_blue.gif" alt="" width="630" height="2" border="0"></td>
        </tr>
      </table></td>
  </tr>
  <tr class="montage"> 
    <td align="center"><img src="../images/montage.jpg" width="630" height="40" alt="Photo Montage"></td>
  </tr>
  <tr class="navigationGRADIENT"> 
    <td><img src="../images//shim.gif" width="1" height="15" alt=""></td>
  </tr>
</table>

<!-- END HEADER AND NAV BAR; BEGIN PAGE CONTENT  --><h3 class="tableHEADER">Login</h3><br>
<span class="tableHEADER"><div align="center">New user? <a href="register.php">Please register here</a></div></span><br>
<p class="alert">Please enter a username and a password</p>
<form name="commerciallogin" method="post" action="mlssearch.php">
  <table border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td colspan="2" class="tableSECTION"> <p class="tableHEADER">&nbsp;</p></td>
    </tr>
    <tr> 
      <td width="75" class="tableBODY">Username</td>
      <td><input name="username" type="text" class="formFIELD" id="username" value="" size="30" maxlength="50"></td>
    </tr>
    <tr> 
      <td width="75" class="tableBODY">Password</td>
      <td><input name="password" type="password" class="formFIELD" id="password" size="30" maxlength="50"></td>
    </tr>
    <tr> 
      <td width="75" class="tableBODY"><br> </td>
      <td><br> <input name="login" type="submit" class="formBUTTON" id="login" value="Login"></td>
    </tr>
    <tr> 
      <td width="75" class="tableBODY">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="75" class="tableBODY">&nbsp;</td>
      <td class="tableBODY"><a href="forgot_password.php">Forgotten your password?</a></td>
    </tr>
  </table>
</form>
<br>
<br>
<!-- END PAGE CONTENT; BEGIN PAGE FOOTER -->
<table width="100%" border="0" cellspacing="0" cellpadding="0"
  summary="Page Footer">
  <tr align="center"> 
    <td class="navigationLINE"><img src="../images//line_footer.gif" width="635" height="1" alt=""></td>
  </tr>
  <tr class="pageCONTACT"> 
    <td> <table width="100%" border="0" cellspacing="5" cellpadding="0"
	    summary="Contact Information">
        <tr align="center"> 
          <td class="pageCONTACT">Harvard Square &#8226; Cambridge &#8226; MA 
            02138<br>
            tel: 617.497.0101 &#8226; fax: 617.497.0404 &#8226; efax: 501.638.1181</td>
        </tr>
      </table></td>
  </tr>
  <tr align="center"> 
    <td class="navigationLINE"><img src="../images//line_footer.gif" width="635" height="1" alt=""></td>
  </tr>
  <tr class="pageFOOTER"> 
    <td align="center"> <table width="100%" border="0" cellspacing="0" cellpadding="5"
	    summary="Site Links">
        <tr align="center"> 
          <td class="pageFOOTER" ><a href="../index.html">Homesearch</a> | <a href="../commercial.html">Commercial</a> 
            | <a href="../residential.html">Residential</a> | <a href="../about.html">About</a> 
            | <a href="../contact.html">Contact</a></td>
        </tr>
        <tr class="pageFOOTER" align="center"> 
          <td height="78" class="pageFOOTER" ><p>&copy; 2003-2004 Rudis Realty, 
              All Rights Reserved<br>
              email: <a href="mailto:contact@rudisrealty.com">contact@rudisrealty.com</a></p>
            <p><img src="../images/mls_logo.gif" alt="MLS Property Information Network, Inc." width="65" height="25" border="0"><img src="../images/shim.gif" width="8" height="8" alt="|" border="0"><img src="../images/realtor_logo.gif" alt="National Association of Realtors" width="23" height="25" border="0"><img src="../images/shim.gif" width="8" height="8" alt="|" border="0"><img src="../images/cambridge_COC.jpg" alt="Cambridge Chamber of Commerce" width="65" height="25" border="0"><img src="../images/shim.gif" width="8" height="8" alt="|" border="0"><img src="../images/boston_COC.jpg" alt="Boston Chamber of Commerce" width="75" height="25" border="0"><img src="../images/shim.gif" width="8" height="8" alt="|" border="0"><img src="../images/somerville_COC.jpg" alt="Somerville Chamber of Commerce" width="27" height="25" border="0" longdesc="http://www.somervillechamber.org"><img src="../images/shim.gif" width="8" height="8" alt="|" border="0"><img src="../images/approved.jpg" alt="Bobby WorldWide Approved" width="73" height="25" border="0"></p></td>
        </tr>
      </table></tr>
</table>
<!-- END PAGE FOOTER  -->
</body>
</html>