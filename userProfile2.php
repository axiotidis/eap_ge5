<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
    function validateForm() {
        var pass1 = document.forms["registerForm"]["password1"].value;
        var pass2 = document.forms["registerForm"]["password2"].value;
        if (pass1 != pass2) {
            alert("Οι κωδικοί πρόσβασης δεν ταιριάζουν!");
            return false;
    }
}
</script>
<style>
    * {
    box-sizing: border-box;
    }

    input[type=text], select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    }

    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    }

    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    width:30%;
    height:40px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-left: 10%;
    margin-right: 10%;
    margin-top:20px;
    margin-bottom:10px;
    font-size: 18px;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    .container {
    border-radius: 5px;
    max-width: 800px;
    margin: auto;
    background-color: #f2f2f2;
    padding: 20px;
    }

    .col-25 {
    float: left;
    width: 35%;
    margin-top: 6px;
    }

    .col-75 {
    float: right;
    width: 40%;
    margin-top: 6px;
    }

    .btncenter {
        margin-top:15px;
    }

    .centeredText {
        text-align: center;
        width: 100%;
        height: 5%;
        font-size: 28px;
        left: 0%;
        top: 0%;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
    }
</style>
</head>
<body>
    <?php 
        // connect to the database
        $conn = mysqli_connect("localhost", "root", "eap2019ge4", "eap2019ge4");
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $elderID=$_SESSION['userID'];
        $sql = "SELECT * FROM elderly WHERE elderly_id='$elderID'";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_array(MYSQLI_NUM);
    ?>
    <p class="centeredText">Προφίλ Χρήστη</p><br>
    
    <div class="container">
    <form name="updateForm" action="update_elderly.php" onsubmit="return validateForm()" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="eponymo">Επώνυμο</label>
            </div>
            <div class="col-75">
                <input type="text" name="lname" value="<?php echo $row[1];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="onoma">Όνομα</label>
            </div>
            <div class="col-75">
                <input type="text" name="fname" value="<?php echo $row[2];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="diefthinsi">Διεύθυνση</label>
            </div>
            <div class="col-75">
                <input type="text" name="address" value="<?php echo $row[3];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="poli">Πόλη</label>
            </div>
            <div class="col-75">
                <input type="text" name="city" value="<?php echo $row[4];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="tk">ΤΚ</label>
            </div>
            <div class="col-75">
                <input type="text" name="postcode" value="<?php echo $row[5];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="mobile">Κιν.Τηλέφωνο</label>
            </div>
            <div class="col-75">
                <input type="text" name="phone" value="<?php echo $row[6];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="birth">Έτος Γέννησης</label>
            </div>
            <div class="col-75">
                <input type="text" name="birthday" value="<?php echo $row[7];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="gen">Φύλο</label>
            </div>
            <div class="col-75">
                <input type="text" name="gender" value="<?php echo $row[8];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="user">Όνομα Χρήστη</label>
            </div>
            <div class="col-75">
                <input type="text" name="username" value="<?php echo $row[9];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="pass1">Κωδικός</label>
            </div>
            <div class="col-75">
                <input type="password" name="password1" value="<?php echo $row[10];?>">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="pass2">Κωδικός</label>
            </div>
            <div class="col-75">
                <input type="password" name="password2" value="<?php echo $row[10];?>">
            </div>
        </div>

        <div class="row">
            <div class="btncenter">
                <input type="submit" name="upUser" value="Ενημέρωση Αλλαγών">
                <input type="submit" name="cancelUser" value="Ακύρωση Αλλαγών">
            </div>
        </div>
    </form>
    </div>

</body>
</html>