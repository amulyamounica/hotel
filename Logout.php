<?php
		if(isset($_COOKIE["name"])){
   		setcookie("name","",time()-60,"/","",0);
   		echo "logout successfully";
   		   }
   		   else{
   		   	echo "<center><h3>Please Login <a href=login.php>click here to login</a>";
   		   }
   		?>