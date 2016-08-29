<?php 
//check connect
$link=mysql_connect("localhost", "root", ""); 
echo 'Check Connect: ';
if(!$link){ echo "Fail"; 
die;
}
else{ echo "Success!"; }

//create db
if (mysql_query("CREATE DATABASE nimei",$link))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

//choose db
mysql_select_db("nimei", $link);


//creat table


$db_list = mysql_list_dbs($link);
echo $db_list;

$sql = "CREATE TABLE nimei 
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysql_query($sql,$link);


//write row
mysql_query("INSERT INTO nimei (FirstName, LastName, Age) VALUES ('Peter', 'Griffin', '".rand(100,999)."')");
mysql_query("INSERT INTO nimei (FirstName, LastName, Age) VALUES ('Glenn', 'Quagmire',  '".rand(100,999)."')");

  
//check db
echo '<br />';
echo 'Check DB: ';
echo '<br />';
$i = 0;
$db_count = mysql_num_rows($db_list);
while ($i < $db_count) 
  {
  echo mysql_db_name($db_list, $i) . "<br />";
  $i++;
  }


//check table
echo 'Check Table: ';
echo '<br />';
$result = mysql_query("SHOW TABLES"); 
while($row = mysql_fetch_array($result)) 
{ 
echo $row[0].""; 
} 
mysql_free_result($result); 

echo '<br />';
//check id
echo 'Check id: ';
echo '<br />';
echo mysql_thread_id();
echo '<br />';
echo mysql_insert_id();
echo '<br />';


//change
$sql="
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
FirstName varchar(15),
LastName varchar(15),
Age int ";
mysql_query($sql,$link);

$sql="update userinfo set username='".$_POST[username]."',gender='".$_POST[gender]."',age='".$_POST[age]."',regdate='".$_POST[regdate]."' where id='".$_POST[id]."'";
   $result=mysql_query($sql);
   if($result)
    echo "记录已经成功修改<br><a href='modify.php'>继续修改记录</a>";
   else
    echo "记录修改失败<br><a href=modify.php?id=".$_POST[id].">返回</a>";
  }

//read record
echo 'Read Record: ';

$sql = "SELECT * from nimei WHERE ID='1'";
$result = mysql_query($sql,$link);
print_r(mysql_fetch_array($result)[1]);
echo '<br />';
echo 'Check Status: ';
$result = mysql_query("SELECT * from nimei WHERE ID='0'",$link);
//print_r(mysql_fetch_array($result)[0]);
//echo '<br />';
    if (strlen(mysql_fetch_array($result)[0]) > 0) {
       echo '已经被占用';
    }

else {
    echo '没有输入用户名';
}

//read all record
echo '<br />';
$result = mysql_query("SELECT * FROM nimei");

while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }

//排序输出
$result = mysql_query("SELECT * FROM nimei ORDER BY age");

while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'];
  echo " " . $row['LastName'];
  echo " " . $row['Age'];
  echo "<br />";
  }

//升序或降序的排序
/*SELECT column_name(s)
FROM table_name
ORDER BY column_name DESC*/

//根据两列进行排序
/*SELECT column_name(s)
FROM table_name
ORDER BY column_name1, column_name2*/



//删第五条
/*
mysql_query("delete from nimei where id = ( select max(id) from ( select top 5 id from nimei order by 1 asc ) )",$link);
*/
//mysql_query("delete from nimei where id in (0,1,2,3,4,5,9) ",$link);




//check row 
 echo '<br />';
echo 'Check Row: ';

  $sql='SELECT COUNT(*) FROM nimei';
$res=mysql_query($sql);
list($cnt)=mysql_fetch_row($res);

 if (!$cnt)echo '0';else echo $cnt;

//close
mysql_close($link); 


//array
 echo '<br />';
$a=array("1"=>"Dog","2"=>"Cat","3"=>"Horse");
$b=array("1"=>"Dogx","2"=>"Catx","3"=>"Horsex");
print_r($a[3]);
echo '<br />';
echo count($a);
echo '<br />';
foreach ($a as $value)
{
  echo "Value: " . $value . "<br />";
}
for ($i=1; $i<=count($a); $i++){
print_r($a[$i]);
}
echo strpos("Hello world!","world");


?>
