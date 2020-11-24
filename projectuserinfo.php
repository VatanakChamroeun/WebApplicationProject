<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
<table class="table table-striped">
<?php
//initialize data
$user_info = array(
        array(1, "sarak", "male", "sarak@gmail.com", "1111"),
        array(2, "darot", "male", "darot@gmail.com", "1111"),
        array(2, "vatanak", "male", "vatanak@gmail.com", "1111")
);
$user_info_length = count($user_info);
for ($i=0; $i<$user_info_length; $i++) {
    if (($user_info[$i][3] != $_POST["email"]) && ($user_info[$i][4]) != $_POST["password"]) {
        header("Refresh: 0.01; url=form.php");
    }
        echo "<tr>";
        echo "<th scope='col'>No </th>";
        echo "<th scope='col'>Username </th>";
        echo "<th scope='col'>Gender </th>";
        echo "<th scope='col'>Email </th>";
        echo "<th scope='col'>Password </th>";
        echo "</tr>";
    if (($user_info[0][3] == $_POST["email"]) && ($user_info[0][4] == $_POST["password"])) {
        echo "<tr>";
        echo "<td>" . $user_info[0][0] . "</td>";
        echo "<td>" . $user_info[0][1] . "</td>";
        echo "<td>" . $user_info[0][2] . "</td>";
        echo "<td>" . $user_info[0][3] . "</td>";
        echo "<td>" . $user_info[0][4] . "</td>";
        echo "</tr>";
        break;
    }
    if (($user_info[1][3] == $_POST["email"]) && ($user_info[1][4] == $_POST["password"])) {
        echo "<tr>";
        echo "<td>" . $user_info[1][0] . "</td>";
        echo "<td>" . $user_info[1][1] . "</td>";
        echo "<td>" . $user_info[1][2] . "</td>";
        echo "<td>" . $user_info[1][3] . "</td>";
        echo "<td>" . $user_info[1][4] . "</td>";
        echo "</tr>";
        break;
    }
    if (($user_info[2][3] == $_POST["email"]) && ($user_info[2][4] == $_POST["password"])) {
        echo "<tr>";
        echo "<td>" . $user_info[2][0] . "</td>";
        echo "<td>" . $user_info[2][1] . "</td>";
        echo "<td>" . $user_info[2][2] . "</td>";
        echo "<td>" . $user_info[2][3] . "</td>";
        echo "<td>" . $user_info[2][4] . "</td>";
        echo "</tr>";
        break;
    }
}
?>
</table>
</body>
</html>