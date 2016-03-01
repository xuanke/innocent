<?php
	$conn=mysqli_connect("localhost","root","","chatsystem") or die("error");
	$sql="SELECT count(*) FROM users";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($conn,$result);
	$numrows[0]=$row[0];
	$rowsperpage=2;
	$totalpages=ceil($numrows/$rowsperpage);

	if(isset($_GET['currentpage'])&&is_numeric($_GET['currentpage'])){

		$currentpage=(int)$_GET['currentpage'];
	}
	else{
		$currentpage=1;
	}

	if($currentpage>$totalpage){

		$currentpage=$totalpages;
	}

	if($currentpage<1){

		$currentpage=1;
	}
	$offset=($currentpage-1)*$rowsperpage;
	$sql="SELECT id,username FROM user LIMIT $offset,$rowsperpage";
	$result=mysqli_query($conn,$sql) or die("failed!");
	while ($list=mysqli_fetch_assoc($result)){
		echo $list['id'].":".$list['number']."<br>";
	}

	?>