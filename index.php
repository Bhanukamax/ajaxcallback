<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
</head>
<body>

<button id='btn'>get</button>
<script>
var url = '<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
url = url + 'ajax.php';

var getAjax = function (args, cb) {
	var res;

	$.ajax({
	url: url,
	success: function(data){

		cb(data);

	}
	})
}

$(function(){
	c = console;
	d = document;
	c.log(url);
	c.log('test');

	$('#btn').click(function(){
		var args;

		getAjax(args, function(data){
			alert(data);


		})
	});

})





</script>

</body>
</html>
