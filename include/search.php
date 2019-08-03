
<?php
include 'db.php';
// get the q parameter from URL
    $q = $_REQUEST["title"];
    $query = mysqli_query($con, "SELECT * FROM post WHERE title LIKE '%{$q}%' LIMIT 5 ");
    $row = mysqli_fetch_assoc($query);

    if (!$row) {
        echo "No Result Found, Try Again";
    }else{
       while ($row = mysqli_fetch_assoc($query)) {
        echo "<style>.searlist:hover{box-shadow:1px 1px 2px 2px blueviolet;}</style>";
       		echo "<a style='color: white;font-weight: normal;' href='article/".$row['id']."/".strtolower(str_replace(' ', '-', trim("".$row['title']."")))."/'><div class='searlist' style='background:url(image/".$row['image'].");height: 30px;width: 40px;background-position: center top;background-size: cover;background-repeat: no-repeat;margin-left: 2px;float: left;margin-right: 10px;border: 2px solid blueviolet;'></div><p style='text-align: left;font-weight: bold;background:transparent;color:black;'>".$row["title"]."</p></a><br>";
       }
    }

?> 