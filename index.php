<html>
<head>   
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php


 

include 'calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
    
     <div class="col-xs-2">
                <nav class="list-group">
                    <!--these are for the links -->
                    <a class="list-group-item" href="calendar.html"> sign up</a>
                </nav>                   
            </div>
    
</body>
</html> 
