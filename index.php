<?php
require_once('connectDB.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succevo task</title>
</head>

<body>
    <?php
    $sql_u = "SELECT parent_id, `name` FROM `table`";
    $result_u = $conn->query($sql_u) or die("failed!");
    $arrayWithTableInformation = array();
    while ($row = $result_u->fetch(PDO::FETCH_ASSOC)) {
        $arrayWithTableInformation[] = $row;
    }
    ?>
    
    <!-- php logic for showing the names  -->
    <?php
    $parentArr = array();
    foreach ($GLOBALS["arrayWithTableInformation"] as $result) {
        if($result['parent_id']==0) array_push($parentArr, $result['name']);
    }

    function printChild($indParent){
        for($i=0;$i<count($GLOBALS["arrayWithTableInformation"]);$i++){
            if($indParent==$GLOBALS["arrayWithTableInformation"][$i]['parent_id']){
                print_r($GLOBALS["arrayWithTableInformation"][$i]['name']);
            }
        }
    }

    function getInformation(){
        for($i=1;$i<=count($GLOBALS['parentArr']);$i++){
            print_r($GLOBALS['parentArr'][$i-1]);
            printChild($i);
        }
    }
    getInformation();
    ?>

    <!-- javascript logic for showing the names -->
    <script type="text/javascript">
        var parentChildInformation = <?php echo json_encode($arrayWithTableInformation, JSON_UNESCAPED_UNICODE); ?>;
    </script>
    <!-- <script src="main.js" defer></script> -->



    <div class="content">
        <p id="root"></p>
    </div>
</body>

</html>