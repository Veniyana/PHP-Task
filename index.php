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
        array_push($parentArr, $result['parent_id']);
    }

    $childArr = array();
    foreach ($GLOBALS["arrayWithTableInformation"] as $result) {
        array_push($childArr, $result['name']);
    }

    function getUniqueArray($arr)
    {
        return array_unique($arr);;
    };

    function printChild($parentId)
    {
        echo "Child from parent_id: ";
        print_r($parentId);
        echo "<br>";
        for ($i = 0; $i < count($GLOBALS['parentArr']); $i++) {
            if ($parentId == $GLOBALS['parentArr'][$i]) {
                print_r($GLOBALS['childArr'][$i]);
                echo "<br>";
            }
        }
    }

    function getInformation()
    {
        $uniqueParentArr = getUniqueArray($GLOBALS["parentArr"]);
        for ($i = 0; $i < count($uniqueParentArr); $i++) {
            printChild($uniqueParentArr[$i * 2]);
            echo "<br>";
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