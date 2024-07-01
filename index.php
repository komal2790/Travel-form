<?php
$insert=false;

if(isset($_POST['Name'])){

$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed due to".mysqli_connect_error());
}

$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Gender=$_POST['Gender'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$desc=$_POST['desc'];

$sql = "INSERT INTO `participation`.`travel_details` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `other`, `Date`) VALUES ( '$Name', '$Age', '$Gender', '$Email', '$Phone', '$desc', '2024-06-20 18:17:55');";

// echo $sql;

if($con->query($sql)==true){
    // echo "successfully inserted";
    $insert=true;
}
else{
    echo "ERROR:  $sql <br> $con->error";
}
$con->close();
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style1.css">
    
</head>
<body>

    <img class="bg" src="img2bg.jpg" alt="surf">
    <div class="container">
        <h1>Welcome to Guru Nanak Dev University travels</h1>
        <p>Please enter your details and submit this form to confirm your participation.</p>

        <?php
        if($insert==true){
        echo "<p class='submitMsg'>Thanks for Submitting your form and joining with us.Have a Nice Day.</p>";
        }

    ?>
        <form action="index.php" method="post">
            <input type="text" name="Name" id="Name" placeholder="Enter your Name: ">
            <input type="text" name="Age" id="Age" placeholder="Enter your Age: ">
            <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender: ">
            <input type="email" name="Email" id="Email" placeholder="Enter your Email: ">
            <input type="tel" name="Phone" id="Phone" placeholder="Enter your Phone Number: ">
            <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter other details here: "></textarea>
            <!-- <button class="btn">Submit</button> -->
            <button type="submit" class="btn">Submit</button>

        </form>
    </div>
    <script src="index1.js"></script>
   
</body>
</html>



