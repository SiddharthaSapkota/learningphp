<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="madlibs.php" method ="get">
        Color: <input type="text" name= "color"></br></br>
        Plural Noun: <input type= "text" name= "pluralNoun"><br></br>
        Celebrity: <input type="text" name= "celebrity"></br></br>
        Semester: <input type ="text" name="sem"></br></br>
        College: <input type ="text" name= "college"></br></br>
        <input type="submit">

    </form>
    <br> <br>

    <?php
    $color =$_GET["color"];
    $pluralNoun =$_GET["pluralNoun"];
    $celebrity =$_GET["celebrity"];
    $sem =$_GET["sem"];
    $college =$_GET["college"];

    echo "Roses are $color </br>";
    echo "$pluralNoun are blue</br>";
    echo "I cant love $celebrity <br>";
    echo "I study in $sem Semester</br>";
    echo "I read in $college </br>";
    
    ?>

</body>
</html>