<?php 
    //   $server = 'localhost';
    //     $user = 'sabredge_jigsaw';
    //     $password = 'sabredge_jigsaw';
    //     $database = 'sabredge_jigsaw';
        
$db_cd=mysqli_connect("$server","$user","$password", "$database");
$pge_nen  = basename($_SERVER['PHP_SELF']);


    


$qry = $db_cd->query("SELECT * FROM tbl_country_vishal where metaName='$metaName' ");
$row= $qry->fetch_assoc();
            
     
                    
?>
<meta name="keywords" content="<?php echo ($row['keyword']) ?> " />
<title><?php echo ($row['title']) ?> </title>
<meta name="description" content="<?php echo ($row['description']) ?>">
<meta name="google-site-verification" content="lp--d5HVFr0XU_85iAuY6MumQk_ugZ7CUkRZzGBKpq0" />
<link rel="shortcut icon" href="images/jlogo.png" type="image/x-icon"/>