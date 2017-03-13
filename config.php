<?php
   $host        = "host=ec2-54-243-252-91.compute-1.amazonaws.com";
   $port        = "port=5432";
   $dbname      = "dbname=d1tq1nl9qfvk8n";
   $credentials = "user=jgweykkxjvumfz password=0f8783f77246707669a93ce2b58ef454b2587beed2a01df40f122817d04ff8d1";

   $db = pg_connect( "$host $port $dbname $credentials"  );
/*  
if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
*/
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

//$server = $url["host"];
//$username = $url["b604cbca1aa9fd"];
//$password = $url["52435002"];
//$db = substr($url["heroku_c079defd3552d16"], 1);
//$conn->query();
//$conn = new mysqli($server, $username, $password, $db);
?>
