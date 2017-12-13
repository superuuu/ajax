
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
	<script type="text/javascript">
		/*
			属性：
			responseText: 服务器端返回的信息以字符串的形式接受
			readyState:    表示ajax状态值
			onreadystatechange:(带on，表示是一个事件) 该事件可以感知ajax状态(readyState	)的变化   
				ajax请求过程中要随时感知其状态


			方法：
				open()：创建一个新的http请求
				send()：发送请求到服务器

			ajax的五种状态readyState：
				0--------->创建ajax对象完毕
				1--------->有调用open()方法
				2--------->有调用send()方法
				3--------->服务器端的数据只返回了一部分
				4--------->服务器端数据全部返回，ajax请求完成

		*/
		function f1()
		{

			var xhr = new XMLHttpRequest();
			//设置事件onreadystatechange，感知ajax状态变化
			xhr.onreadystatechange = function()
			{
					if(xhr.readyState == 4){
						//alert(xhr.responseText);   将消息以弹出框形式显示
						document.body.innerHTML += xhr.responseText;       //将返回消息显示在页面上
					}
			}
			//创建一个新的http请求（打开浏览器，输入请求地址）
			//xhr.open(请求方式get/post,请求地址[,异步同步请求]);
			xhr.open("get",'./demo04.php');

			//发送请求
			//xhr.send(post请求数据    /    get请求设置为null);
			xhr.send(null);
		}
	
	</script>
</head>
<body>
	<h2>ajax接受请求</h2>
	<input type="button" value="点我啊！" onclick="f1()">
</body>

</html>
