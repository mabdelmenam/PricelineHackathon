<html>
<head>
    <title>CRIME</title>
</head>
<body>
<table align="center" border="1">
<?php
     // Connecting to Database
     $cnx = new mysqli('localhost', 'username', 'password', 'crime');
     if ($cnx->connect_error)
         die('Connection failed: ' . $cnx->connect_error);
     $query = 'SELECT * FROM crime';
     $cursor = $cnx->query($query);

    function parseToXML($htmlStr)
    {
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
    }
    
    header("Content-type: text/xml");
    echo '<markers>';
    $ind=0;

    //Fetching information
    while ($row = $cursor->fetch_assoc()) {
    // Add to XML document node
  echo '<marker ';
  echo 'num="' . $row['num'] . '" ';
  echo 'lat="' . parseToXML($row['lat']) . '" ';
  echo 'lng="' . parseToXML($row['lng']) . '" ';
  echo 'hour="' . $row['hour'] . '" ';
  echo 'assault="' . $row['assault'] . '" ';
  echo 'atheft="' . $row['atheft'] . '" ';
  echo 'dui="' . $row['dui'] . '" ';
  echo 'fraud="' . $row['fraud'] . '" ';
  echo 'mur="' . $row['mur'] . '" ';
  echo 'child="' . $row['child'] . '" ';
  echo 'other="' . $row['other'] . '" ';
  echo 'sex="' . $row['sex'] . '" ';
  echo 'theft="' . $row['theft'] . '" ';
  echo 'traff="' . $row['traff'] . '" ';
  echo 'wpn="' . $row['wpn'] . '" ';
  
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';
    $cnx->close();
?>
</table>
</body>
</html>