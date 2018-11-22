<?php
class database{

    private $connection;
    private $table;

    function connect($host,$username,$password){

        $this->connection=mysql_connect($host,$username,$db,$table);
        mysql_select_db($db,$this->connection);
        $this->table=$table;
    }
function showloginform(){
return ('<form action="" method="post"><h1 align="center"> login form</h1>
<table align= "center">
<tr>
    <td> name </td>
    <td><input type = "text" name= "username"></td>
</tr>

<tr>
    <td> password </td>
    <td><input type = "password" name= "password"></td>
</tr>

<tr>
    <td> login </td>
    <td><input type = "submit" name= "submit" value= "submit"></td>
</tr>

<tr>
    <td> reset </td>
    <td><input type = "reset" name= "reset" value= "reset"></td>
</tr>
</table>
</form>');
}
public function login($username,$password){
    $query="SELECT*FROM" .$this->table. "where username ='".$username."'and password = '".$password."'";
    echo ($query);
    $hasil=mysql_query($query);
    $numrows=mysql_num_rows($hasil);
    return !($numrows ==0);

}

}
?>