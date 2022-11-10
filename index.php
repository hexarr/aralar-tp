<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$basic_info = array("Eleazar Aralar", "Home", "Subjects", "Assignment", "Quiz", "About");
$web_prog = array("Web Programming", "HTML, CSS, and Javascript", "PHP", "ASP.NET");
$mobile_prog = array("Mobile Programming", "Android", "IOS", "Windows");
$desktop_prog = array("Desktop Programming", "Java", "C#", "Python");
?>
<body>
    <h2>Task Performance</h2>
    <!-- Container -->
    <div class="container">
        <div class="content">
            <?php
                for($i = 0; $i<=5; $i++){
                    if($i == 0){
                        echo "<div class='content-header'><h2>".$basic_info[$i]."</h2></div>";
                    }
                    else {
                        echo "<div class='content-item'><h3>".$basic_info[$i]."</h3></div>";
                    }
                }
                // foreach($basic_info as $i){
                //     if($i == ){

                //     }
                // }
            ?>
        </div>
        <div class="content">
            <?php
                for($i = 0; $i<=3; $i++){
                    if($i == 0){
                        echo "<div class='content-header'><h2>".$web_prog[$i]."</h2></div>";
                    }
                    else {
                        echo "<div class='content-item'><h3>".$web_prog[$i]."</h3></div>";
                    }
                }
                // foreach($basic_info as $i){
                //     if($i == ){

                //     }
                // }
            ?>
        </div>
        <div class="content">
            <?php
                for($i = 0; $i<=3; $i++){
                    if($i == 0){
                        echo "<div class='content-header'><h2>".$mobile_prog[$i]."</h2></div>";
                    }
                    else {
                        echo "<div class='content-item'><h3>".$mobile_prog[$i]."</h3></div>";
                    }
                }
                // foreach($basic_info as $i){
                //     if($i == ){

                //     }
                // }
            ?>
        </div>
        <div class="content">
            <?php
                for($i = 0; $i<=3; $i++){
                    if($i == 0){
                        echo "<div class='content-header'><h2>".$desktop_prog[$i]."</h2></div>";
                    }
                    else {
                        echo "<div class='content-item'><h3>".$desktop_prog[$i]."</h3></div>";
                    }
                }
                // foreach($basic_info as $i){
                //     if($i == ){

                //     }
                // }
            ?>
        </div>
    </div>
</body>
</html>
<style>
.container {    
    padding: 1em;
    display: flex;
    border: 2px black solid;
}

.content {
    border: 2px black solid;
}

.content-header {
    border: 2px red solid;
}

.content-item {
    border: 2px blue solid;
}

.content:not(:last-child){
    margin-right: 1%;
} 

</style>