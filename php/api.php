<?php

if(isset($_GET["r"])){
    $route = htmlspecialchars($_GET["r"]);
    $route = strtolower($route);

    switch($route){
        case "mainhead":
            echo "<div>xx-mainHead</div>";
            break;
        case "mainlist":
            echo "<div>xx-mainList</div>";
            break;
        case "maincontent":
            echo "<div>xx-mainContent</div>";
            break;
        default:
        http_response_code(404);
    }
    return;
}

http_response_code(406);

?>