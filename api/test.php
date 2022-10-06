<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="web/jquery.js"></script>
  </head>
  <body>

<script type="text/javascript">
function send(){
   var fd = new FormData();
   fd.append( 'api',"user_addUser" );
   fd.append( 'username',"muzafferovun@hotmail.com" );
   fd.append( 'password',"ssskljdlkjdl" );


  var post_url = 'index.php'; //formun urlsi alınıyor
              $.ajax({
                url : post_url,
                type: "POST",
                data : fd,
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                cache: false
             }).done(function(response){ //
               document.getElementById("target").innerHTML=""+response;

            });

}

</script>
<input type="button" value="Send Data" onclick="send()">
<div id="target">
</div>
  </body>
</html>
