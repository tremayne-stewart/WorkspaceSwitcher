<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
<!--

var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;


$(document).ready(function()
{

});
//-->
</script>
	<script type="text/javascript">
		function switchTo(index)
		{
			var xmlhttp;
			xmlhttp=new XMLHttpRequest();
			xmlhttp.open("POST","engine.php?workspace="+index,true);
			xmlhttp.send();

			//$.get("engine.php",{"workspace",index});
			//document.write("engine.php?workspace="+index);
			return false;
			
		}
	</script>
	<style type="text/css">
		
		a
		{
			
			
		}
		div.row
		{
			position:absolute;
			width:100%;
			height:100%;
			background:yellow;
			
		}
		div.box
		{
			width:33%;
			height:33%;
			background:red;
			display:block;
			float:left;
			border:1px solid black;
		}
	</style>
</head>
<body>
	<div class="row">
		<? 
			
			$rows=3;
			$cols=3;
			for($r=0;$r<$rows;$r++)
			{
				for($c=0;$c<$cols;$c++)
				{
					echo "<a href=\"#\" onClick=\"switchTo(".($r*3+($c+1)).");\"><div class=\"box\">here</div></a>";
				}
				echo "<br>";
			}
		
		?>
		<a class="quit" href="#" onClick="switchTo('q');"><span style="width:500px; background:blue;">QUIT</span></a>
	</div>

</body>
</html>
