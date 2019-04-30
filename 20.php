 <html>
 <head>
 </head>
 <body>
 <form name="form1">
 username:<input type="text" name="f1">
 <br/> <br/>
 password:<input type="text" name="f2">
<br/> <br/>
 <input type="button" value="login" onclick="login()">
 <script>

 function login()
 {
	var u="u";
	var p="p";
	var a=document.form1.f1.value;
	var b=document.form1.f2.value;
	if(u==a&&p==b)
	document.write("success");
	else
	document.write("fail");
 }
 </script>
 </body>
 </html>



