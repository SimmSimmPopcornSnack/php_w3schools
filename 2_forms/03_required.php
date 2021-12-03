<?php
// define variables and set to empty values

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if(empty($_POST["email"])) {
        $email = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }
    if(!empty($_POST["website"])) {
        $website = test_input($_POST["website"]);
    }
    if(!empty($_POST["comment"])) {
        $comment = test_input($_POST["comment"]);
    }
    if(empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name"><br>
            <span class="error">* <?php echo $nameErr;?></span><br><br>
            E-mail: <input type="text" name="email"><br>
            <span class="error">* <?php echo $emailErr;?></span><br><br>
            Website: <input type="text" name="website"><br>
            <span class="error"><?php echo $websiteErr;?></span><br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Other">Other<br>
            <span class="error">* <?php echo $genderErr;?></span><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

