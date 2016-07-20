<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Ajax</title>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
</head>
<body>
	<button>Ajax获取响应数据</button>
</body>
<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
	// alert($);
	$("button").click(function(){
		// alert('sss');
		//Ajax
		$.post('/post',function(data){
			alert(data);
		})
	})
</script>
</html>