<?php
if (isset($_POST['submit'])) {
    include '../../../config/database.php';
    // student credential
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $branch = $_POST['branch'];
    $groupName = $_POST['group'];

    $bangla_1st = $_POST['bangla_1st'];
    $bangla_2nd = $_POST['bangla_2nd'];
    $english_1st = $_POST['english_1st'];
    $english_2nd = $_POST['english_2nd'];
    $math = $_POST['math'];
    $bgs = $_POST['bgs'];
    $islam = $_POST['islam'];
    $hinduism = $_POST['hinduism'];
    $gens = $_POST['gens'];

    // science sub
    $biology = $_POST['biology'];
    $chemistry = $_POST['chemistry'];
    $physics = $_POST['physics'];
    $higher_math = $_POST['higher_math'];
    $Agricultural_Studies = $_POST['Agricultural_Studies'];
    // commerce sub
    $Finance = $_POST['Finance'];
    $Accounting = $_POST['Accounting'];
    $Business_Ent = $_POST['Business_Ent'];
    // arts sub
    $Economical = $_POST['Economical'];
    $Geography_and_Environment = $_POST['Geography_and_Environment'];
    $History = $_POST['History'];

    $sql = "INSERT INTO result_info
    (name, roll, class, branch, groupName, bangla_1st, bangla_2nd, english_1st, english_2nd, math, bgs, religion, hinduism, gens, biology, chemistry, physics, higher_math, Agricultural_Studies, Finance, Accounting, Business_Ent, Economical, Geography_and_Environment, History)
    VALUES ('$name','$roll','$class','$branch','$groupName','$bangla_1st','$bangla_2nd','$english_1st','$english_2nd','$math','$bgs','$islam','$hinduism','$gens','$biology','$chemistry','$physics','$higher_math','$Agricultural_Studies','$Finance','$Accounting','$Business_Ent','$Economical','$Geography_and_Environment','$History')";

    if (mysqli_query($conn, $sql)) {
        echo "Teacher Data Added successfully";
    } else {
        echo "fail!Some thing is wrong !";
    }
}
