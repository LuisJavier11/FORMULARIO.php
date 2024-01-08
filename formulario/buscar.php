<!DOCTYPE html>
<html lang="en">
<head>
<title>buscardor</title>
<link rel="stylesheet"href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="max-width 50%   ">
        <div class="container" style="border-radius:500px;"></div>
<div class="text-center mt-5 mb-4">
    <h2>Buscador </h2>
</div>
<input type="text" class="form-control" id="live_search" 
autocomplete="off" placeholder="search...">
</div>   
<div id="searchresult"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $("#live_search").keyup(function(){
      var input = $(this).val();
    //alert(input);
    if (input != "") {
        $.ajax({
            url:"config.php",
            method:"POST",
            data:{input:input},

            success:function(data){
                $("#searchresult").html(data);
                 $("#searchresult").css("display","block");
            }
        });
    }else{
         $("#searchresult").css("display","none");
    }

});
});
</script>
</body>
</html>