
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">

<title>�y�O��Z�F�C��z�l�b�g�����ی�����������</title>



</head>

<body bgcolor="#FFFFFF" onLoad="nex()">

��ʂ������I�ɐ؂�ւ��Ȃ��ꍇ�́A�{�^�����N���b�N���Ă��������B

<FORM name="f" 
action="https://net2.ms-ins.com/servlet/scy/SCY_UII_CYS0010"

method="post">



<!--�@1.�㗝�XSEQ�@�@-->

<INPUT TYPE="hidden" name="DRTSEQ" value="00000000000424007196">

<!--�@2.�㗝�X�A�ԁ@�@-->

<INPUT TYPE="hidden" name="DRTRNBN" value="80413">

<!--�@3.����ԍ��@�@-->

<INPUT TYPE="hidden" name="menber_no" value="">

<!--�@4.�t���[1�@�@-->

<INPUT TYPE="hidden" name="free_area1" value="">

<!--�@5.�t���[2�@�@-->

<INPUT TYPE="hidden" name="free_area2" value="">

<!--�@6.�t���[3�@�@-->

<INPUT TYPE="hidden" name="free_area3" value="">




<BR><BR><BR><BR>

<INPUT type="button" value="�y�O��Z�F�C��z���]�Ԍ����ی��C���^�[�l�b�g�_��T�[�r�X�֐i��" onclick="nex()">



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
 
 
 
 
 

