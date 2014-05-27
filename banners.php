<?php
define("TITLEIMAGE", "");
#THIS IS FOR CHANGING THE TITLE BANNER & SPECIAL BANNER IMAGES

#TITLE BANNER 870 x 103 pixels

function TITLEBANNER()
{
echo " <div id=\"title-photo\"><img src=\"/images/titlebanner/";

switch (TITLEIMAGE) {
    case "holidays":
        echo "holidays.jpg";
        break;
    case "newyears":
        echo "happynewyearsbanner.jpg";
        break;
    case "cake":
        echo "title.jpg";
        break;
    default:
       echo "default.jpg";
}

echo "\" width=\"870\" height=\"103\" alt=\"Log Cabin Bed & Breakfast - Title Banner\" /></div>\n";




}



#SPECIAL BANNER 870 x 206 pixels


?>
