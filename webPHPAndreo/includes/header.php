<?php
$name = "Maria Andreo";
$projectname = "Project with PHP about me";
?>
<style>
    h1{
        font-weight: 800;
        font-size: 45px;
    }
    h6{
        font-weight: 300;
                font-size: 16px;

    }
    .header{
      
        text-align: center;
        padding: 80px 0px;
      
    }
</style>
<body>
    <div class="header">
        <h1><?php echo htmlspecialchars($name) ?></h1>
        <h6><?php echo htmlspecialchars($projectname) ?></h6>
    </div>
</body>
