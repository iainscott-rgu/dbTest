<html>
<title>php db query</title>
<header><h1>PHP db connection and Query</h1>
</header>
<body>
<?php

print "The first results are that";

$conn = new PDO ( 'sqlsrv:server = tcp:bbsqldb.database.windows.net,1433;
Database = SQL_BB\", \"teamdsqldb\", \"{Sql20022016*}');


//$rows=$db->query('SELECT bbname, address FROM [B&B]');
//$firstRow=$rows->fetch();
//print"The first results are that {$firstRow['firstname']} goes with ?{$firstRow['surname']}";

$stmt = $conn->prepare("SELECT firstname, surname FROM Customer");
$stmt->execute();
print "The first results are that ['firstname'] goes with ['surname']";

?>

</body>
</html>