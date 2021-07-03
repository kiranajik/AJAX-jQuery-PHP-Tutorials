<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX - READ DATA</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Ajax_logo.svg/2460px-Ajax_logo.svg.png" width="30" height="30" class="d-inline-block align-top" alt="">
    AJAX-Jquery-PHP-Read from DB
  </a>
</nav>

<div id="main">
<button type="button" id="load" class="btn btn-danger">Load Data</button>
<div id="table-data">
    <table border="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
            <th>Id</th>
            <th>Surname</th>
            <th>ForeName</th>
        </tr>
        <tr>
            <td>1000</td>
            <td>Ajikumar</td>
            <td>Kiran</td>
    	</tr>
    </table>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#load").click(function(){
            $.ajax({
                url:"insert.php",
                type:"POST",
                success: function(data){
                  $("#table-data").html(data); 
                }

            });
        });
    });
</script>
</body>
</html>
