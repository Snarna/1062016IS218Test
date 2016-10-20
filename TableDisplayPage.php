<html>
<head>
  <style>
    table {
      border-collapse: collapse;
    }

    table, td, th {
      border: 1px solid #ddd;
    }

    th {
      background-color: #3b8ce2;
      color: white;
    }

    tr:nth-child(even){background-color: #f2f2f2};
  </style>
</head>
<body>
<?php
require("/TableProcessor/htmlTable.class.php");

$inputArr = array();
$inputArr[] = array("Name" => "Google", "URL" => "https://www.google.com/", "Type" => "Search engine" );
$inputArr[] = array("Name" => "Youtube", "URL" => "https://www.youtube.com/", "Type" => "Video sharing");
$inputArr[] = array("Name" => "Facebook", "URL" => "https://www.facebook.com/", "Type" => "Social netork");
$inputArr[] = array("Name" => "Baidu", "URL" => "https://www.baidu.com", "Type" => "Search engine");
$inputArr[] = array("Name" => "Yahoo!", "URL" => "https://www.yahoo.com", "Type" => "	Portal and media");
$inputArr[] = array("Name" => "Amazon", "URL" => "https://www.amazon.com", "Type" => "	E-commerce");


//Main
$pro = new htmlTable;
$fileName = 'mycsv.csv';
$pro->setArrayFromCSV('mycsv.csv');
$pro->genTable();

?>
</body>
</html>
