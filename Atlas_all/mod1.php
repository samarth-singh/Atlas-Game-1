<?php
$name=$_REQUEST['user'];  // user entry from html page3 being fetched
$x=mysql_connect("localhost","root","") or die("Couldn't Connect");  // DB conn
mysql_select_db("atlas");                 //name of the DB
$query = mysql_query("SELECT user_entry FROM form WHERE user_entry=$name");  //form:name of the table
if (mysql_num_rows($query)= 0)              // check if the entry is new or not
{
  //$y="INSERT INTO form(user_entry)values('$name')";
  //$z=mysql_query($y);   don't have to insert it again in the DB , that's why.
  $counter = 0;
  while(...)
  {
    (...)
    $counter++;
  }

  echo $counter;

}
else
{
  echo("Invlid entry")
}



    $last = substr($name,-1)  //returns the last char of the use user_entry.


       /*$temp = mysql_query('SELECT id FROM products limit 0,12');
if ( count( $temp ) > 0 ) {
    $j = 1;
    foreach( $temp as $index => $row ) {
        $p[$j++] = $row[id];
    }
    $my_p= $p[ rand( 1, --$j ) ];*/
    $sel = mysql_query('SELECT user_entry from form WHERE user_entry LIKE '$last%');//selects words starting from $last
    {
        $random = mysql_query('SELECT user_entry FROM form ORDER BY RAND() LIMIT 1;);   // selects only one random word.
    }
  ?>

  
