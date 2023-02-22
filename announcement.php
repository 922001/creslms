<html>

<head>
<title></title>
<script type="text/javascript">
        function StartMarquee() {
  var text = document.getElementById('namebox');
  if (text.value !== '') {
    document.write("<marquee behavior='scroll' direction='right'>Hello " + text.value + "!</marquee>");
  }
  else {
    alert("Enter your name first!!!");
  }
} 
</script>
</head>
<body>
<table style="margin:0px auto 0px auto;">
<tr><td>Enter your name!</td>
<td><input type="text" id="namebox"/></td>
<td><input type="button" value="Enter" onclick="StartMarquee()"/></td></tr>
</table>
</body>
</html>