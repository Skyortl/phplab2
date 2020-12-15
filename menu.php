<?php
function generateMenu($menuItems)
{
    $htmlString = '';
    foreach ($menuItems as $key => $value) {

        $htmlString .= "<h4><a class='nav-item nav-link' href='$value'>".$key."</a></h4>";
    }
    return $htmlString;
}
