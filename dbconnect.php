<html>
<title>php db query</title>
<header>
    <h1>PHP db connection and Query</h1>
</header>
<body>
<html>
<title>php db query</title>
<header>
    <h1>PHP db connection and Query</h1>
</header>
<body>

<?php
$conn = new PDO ( 'sqlsrv:server = tcp:bbsqldb.database.windows.net,1433;
Database = SQL_BB\", \"teamdsqldb\", \"{Sql20022016*}');


$rows=$db->query('SELECT firstname,surname FROM Customer ORDER BY surname');
$firstRow=$rows->fetch();
print"The first results are that {$firstRow['firstname']} goes with ?{$firstRow['surname']}";
?>

</body>
</html>
</body>
</html>