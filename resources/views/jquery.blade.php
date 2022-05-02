<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange=function()
     {
         if(this.readyState==4 && this.status==200)
         {
             console.log(this.responseText);
         }

     }
     xhttp.open("GET","https://opentdb.com/api.php?amount=1");
     xhttp.send();

    </script>

</head>
<body>

    <p class="check">Paragraph tag 0</p>
    <p class="check">Paragraph tag 1</p>
    <p>Paragraph tag 2</p>
    <p>Paragraph tag 3</p>
    <h3>Heading 3</h3>
    <button id="panel1">Toggle button</button>
    <button id="stop_slide">Stop slide</button>


</body>
</html>
