<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>盈脉のAPI</title>
	</head>
	<body>
		<?php
			$api_finish=0;	//设置api工作状态为未完成：0未执行，1已执行，2出现错误
			
			/*读入数据*/
			$want=$_GET['want'];
			$type=$_GET['type'];
			$return=$_GET['return'];
			/*设置默认值*/
			if($type==NULL)$type='mix';
			
			
			/*图片api*/
			if($want=='image'){
				
				/*请求webp格式图片*/
				if($return=='webp'){
					$api_finish=2;//未完成功能
				}
				
				/*传统文件类型图片*/
				else{
					/*背景图片（传统）*/
					if($type=='bg'){
						$img=file('/img/url/bg.txt');
						echo $img;
						//$url=array_rand($img);
						//var_dump($img);
						//$api_finish=1;
						//header("Location:".$img[$url]);
					}
					/*横图（传统）*/
					if($type=='wide'){
						$img=file('/img/url/wide.txt');
						$url=array_rand($img);
						$api_finish=1;
						header("Location:".$img[$url]);
					}
					/*竖图（传统）*/
					if($type=='long'){
						$img=file('/img/url/long.txt');
						$url=array_rand($img);
						$api_finish=1;
						header("Location:".$img[$url]);
					}
					/*混合图片（传统）*/
					if($type=='mix'){
						$img=file('/img/url/all.txt');
						$url=array_rand($img);
						$api_finish=1;
						header("Location:".$img[$url]);
					}
				}
			}
			
			/*一言api*/
			if($want=='word'){
				$api_finish=2;//未完成功能
			}
			
			if($api_finish == 0)header("Location:/index.html");//检查API状态，若为未执行则跳转到API首页
			if($api_finish == 2)header("Location:/error.html");//检查API状态，若为出现错误则跳转到错误提示页
			
		?>
	</body>
</html>