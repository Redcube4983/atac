
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">

<title>【三井住友海上】ネットｄｅ保険＠さいくる</title>



</head>

<body bgcolor="#FFFFFF" onLoad="nex()">

画面が自動的に切り替わらない場合は、ボタンをクリックしてください。

<FORM name="f" 
action="https://net2.ms-ins.com/servlet/scy/SCY_UII_CYS0010"

method="post">



<!--　1.代理店SEQ　　-->

<INPUT TYPE="hidden" name="DRTSEQ" value="00000000000424007196">

<!--　2.代理店連番　　-->

<INPUT TYPE="hidden" name="DRTRNBN" value="80413">

<!--　3.会員番号　　-->

<INPUT TYPE="hidden" name="menber_no" value="">

<!--　4.フリー1　　-->

<INPUT TYPE="hidden" name="free_area1" value="">

<!--　5.フリー2　　-->

<INPUT TYPE="hidden" name="free_area2" value="">

<!--　6.フリー3　　-->

<INPUT TYPE="hidden" name="free_area3" value="">




<BR><BR><BR><BR>

<INPUT type="button" value="【三井住友海上】自転車向け保険インターネット契約サービスへ進む" onclick="nex()">



</FORM>




<SCRIPT Language="JavaScript">

<!--

function nex(){ 

var ret = location.search.substr(1).split("&");

for(var i = 0; i < ret.length; i++) {

	var r = ret[i].split("=");

	if(r[0]=='tenpo') {

		document.getElementsByName("free_area1")[0].value = r[1];

	} else if(r[0]=='yoku') {

		document.getElementsByName("free_area2")[0].value = r[1];

	}

}

 
  document.f.action =
 'https://net2.ms-ins.com/servlet/scy/SCY_UII_CYS0010'
 
  + '?free_area1=' + document.getElementsByName("free_area1")[0].value

  + '&free_area2=' + document.getElementsByName("free_area2")[0].value;


  document.f.submit();
}
//-->


</SCRIPT>



</body>

</html>
 
 
 
 
 

