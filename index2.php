<?php
include 'lib/session.php';
Session::init();
include 'lib/database.php';
include 'helpers/format.php';
include 'helpers/slug.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Test</title>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
</head>
<body>
<?php

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/classes/nhanvien.php');
    include_once ($filepath.'/../helpers/format.php');
//
    //PHP OOP
    $cs = new nhanvien();   
     $get_nv = $cs->show_nhanvien();
                    if($get_nv){
                        while ($result = $get_nv->fetch_assoc()) 
                        {
                     echo "<br/>";
                     print($result['ten']);
                        }
                    }
                    else{echo "Lỗi";}
?>

</body>
</html>