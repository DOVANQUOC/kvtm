<!DOCTYPE html>
<html>
<head>
   
    <link href="base/css/slider/freshslider.min.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  

 

</head>
<body>
 <p id="ok">tốt</p>   
</body>
<script>
    var check = 0;
    setInterval(function(){
        $.get("checkvalue.php?connection=true", function(data){
            if(data=='x'){
                $(document).ready(function(){
                     $("#ok").html("tốt");
                });
            }
             if(data!='x'){
            value = data;

            if (value <=check){
                $(document).ready(function(){
                     $("#ok").html("hỏng");
                });

            };

            if (value >check){
                $(document).ready(function(){
                     $("#ok").html("Tốt");
                });

            };
            check = value;}
        
        });
        
    }, 15000)



</script>
