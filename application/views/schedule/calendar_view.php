<!DOCTYPE HTML>
<hmtl lang= "eng-US">
<head>
	<tittle></tittle>
	<meta charset="UTF-8">
	<style type="text/css">
		.calendar{
		font-family:Arial;font-size 12px;
		}
		table.calendar{
			margin:auto; border-collapse: collapse;
		}
		.calendar .days td{
		 width: 150px; height:100px; paddings: 4px;
		 border: 1px solid #999;
		 vertical-align:  top;
		 background-color: #DEF;
		}
		.calendar .days td:hover{
		 background-color: white;
		 }
		
		.calendar .highlight{
		  font-weight: bold; color: #00F;
		}
		.calendar.weekday{
			background-color:red;
			}
		</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		
</head>
<body>
<form method="post" action=<?php echo base_url()."calendar/display";?>>
  Date:
  <input type="date" name="date">
  <input type="submit" value="submit" name="submit">
</form>

<?php echo $calendar; ?>	

</body>
</html>