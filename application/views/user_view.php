<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User View</title>
</head>
<body>
   <div>
       <?php
       foreach($results as $object) {
            echo  $object->username;
       }
       ?>
   </div> 
</body>
</html>