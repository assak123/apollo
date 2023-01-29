<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apollo</title>

        

      
    </head>
    <body>
      <div id='container'>
        <div class='text'>
           <p>asdasasd</p>
                <?php 
                    foreach($loop as $each){
                        echo "<p>".  $each['value']  ."</p>";
                    }
                ?>
            
        </div> 
        </div>
    
   
   
    </body>
           
</html>
