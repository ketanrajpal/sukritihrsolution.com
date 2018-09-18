<?php
	error_reporting(-1);
	date_default_timezone_set('Asia/Calcutta');
	
	define("HOST", "localhost");
	define("USER", "sukritih_user");
	define("PASSWORD", "[HzB)a~*,!Vu");
	define("DATABASE", "sukritih_database");
	
	function connect()
	{
		static $mysqli;
		$mysqli=new mysqli(HOST, USER, PASSWORD, DATABASE);
		return $mysqli;
	}
	
	function disconnect($mysqli)
	{
		mysqli_close($mysqli);
	}
	
	function getvalue($id,$value)
	{
		$table="wp_postmeta";
		$fields="meta_value";
		$mysqli=connect();
		$sql="select ".$fields." from `".$table."` where post_id='".$id."' and `meta_key`='".$value."'";
		$query=mysqli_query($mysqli,$sql);
		$result=mysqli_fetch_array($query);
		disconnect($mysqli);
		return $result[0];
	}
	function getimage($id,$value)
	{
		$table="wp_postmeta";
		$fields="meta_value";
		$mysqli=connect();
		$sql="select ".$fields." from `".$table."` where post_id='".$id."' and `meta_key`='".$value."'";
		$query=mysqli_query($mysqli,$sql);
		while($result=mysqli_fetch_array($query))
		{
			?><!--<blockquote>--><img src="<?php echo $result[0]; ?>"><!--</blockquote>-->&nbsp;&nbsp;&nbsp;&nbsp;<?php
		}
		disconnect($mysqli);
	}
	function drawings($id,$value)
	{
		$table="wp_postmeta";
		$fields="meta_value";
		$mysqli=connect();
		$sql="select ".$fields." from `".$table."` where post_id='".$id."' and `meta_key`='".$value."'";
		$query=mysqli_query($mysqli,$sql);
		while($result=mysqli_fetch_array($query))
		{
			?>
			<li><a href="show/?slug=<?php echo $result[0]; ?>" target="new"><img src="<?php echo $result[0]; ?>"></a></li>
			<?php
		}
		disconnect($mysqli);
	}
	
	function checkempty($id,$value)
	{
		$table="wp_postmeta";
		$fields="meta_value";
		$mysqli=connect();
		$sql="select ".$fields." from `".$table."` where post_id='".$id."' and `meta_key`='".$value."'";
		$query=mysqli_query($mysqli,$sql);
		$result=mysqli_fetch_array($query);
		disconnect($mysqli);
		if($result[0]=="")
		{
			return false;
		}else
		{
			return true;
		}
	}
?>
