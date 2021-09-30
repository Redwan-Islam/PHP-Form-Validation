<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        * {
            background-color: whitesmoke;
          }
        .st {
            padding-top: 5%;
            padding-left: 45%;
            }

    </style>
    
</head>
<body>
    <div class="st">
    <h1>Form Validation</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <table>
        <tr>
            <td>Name </td>
            <td><input type="text" name="name" /></td>
        </tr>

        <tr>
            <td>Email </td>
            <td><input type="text" name="email" /></td>
        </tr>

        <tr>
            <td>Phone </td>
            <td><input type="text" name="phone" /></td>
        </tr>

        <tr>
            <td>Gender </td>
            <td>
                <input type="radio" name="gender" value="male" /> Male
                <input type="radio" name="gender" value="Female" /> Female
            </td>
        </tr>

        <tr>
            <td>Address </td>
            <td><textarea name="address" id="" cols="30" rows="10"></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit" /></td>
        </tr>
    </table>
    </form>
    </div>

    <?php

        $name       = "";
        $email      = "";
        $phone      = "";
        $gender     = "";
        $address    = "";


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name       = validate($_POST ["name"]);
        $email      = validate($_POST ["email"]);
        $phone      = validate($_POST ["phone"]);
        $gender     = validate($_POST ["gender"]);
        $address    = validate($_POST ["address"]);

        echo "Name      :".$name."<br/>";
        echo "email     :".$email."<br/>";
        echo "phone     :".$phone."<br/>";
        echo "gender    :".$gender."<br/>";
        echo "address   :".$address;
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   
    ?>

</body>
</html>