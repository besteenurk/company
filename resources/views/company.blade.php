

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>


<form method="post">
    <table>
        {{csrf_field()}}
        <tr>
            <td>Company Name: </td>
            <td> <input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Person: </td>
            <td><input type="text" name="person"></td>
        </tr>
        <tr>
            <td>Phone: </td>
            <td><input type="number" name="phone"></td>
        </tr>
        <tr>
            <td><input type="submit" value="ADD"></td>
        </tr>
    </table>
</form>



<?php if(isset($company)){
    echo $company;
} else{
    echo '';
} ?>

