<?php
include("../controls/process.php");
?>
<html>
<head>
    <title> Ticket Seller </title>
</head>
<body>
<h1> Welcome! Let's buy a ticket </h1> 
<p> Firstly, You have to fill up a form. </p>
<form action="" method="post">
    <table>
    <tr> 
        <td> Name: </td>
        <td><input type="text" placeholder="Enter Your Name" name="name"></td>
        <td> <?php echo $validateName; ?> </td>
    </tr> 
    <tr> 
        <td> Email: </td>
        <td><input type="email" placeholder="Enter your email address" name="email"></td>
       <td> <?php echo $validateEmail; ?> </td>
    </tr> 
    <tr> 
        <td> Contact: </td>
        <td><input type="text" placeholder="Enter your phone number" name="contact"></td>
        <td> <?php echo $validateContact; ?> </td>
    </tr>
    <tr> 
        <td> Route: </td>
        <td>Dhaka to Chittagong <input type="radio" name="route"></td>
        <td>Dhaka to Cox's Bazar <input type="radio" name="route"></td>
        <td>Dhaka to Sylhet<input type="radio" name="route"></td>
        <td>Dhaka to Rangpur<input type="radio" name="route"></td>
        <td> <?php echo $validateRadio; ?></td></tr>
    </tr> 
    <tr><td>How many seats do you want to book?</td>
        <td>
            <label for= "seat"></label>
            <select id= "seat" name="seat">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
        </td>
        <td><?php echo $validateOption; ?></td>
    </tr>
    <tr> 
        <td> Select Date  </td>
        <td><input type="date" name="date"></td>
        <td><?php echo $validateDate; ?></td>
    </tr>

    <tr>
        <td col-md-3> Do you us want to Book Hotel for you? </td>
        <td> No I'm local there. <input type="checkbox" name="feedback1"></td>
        <td> No I can arrange. <input type="checkbox" name="feedback2"></td>
        <td> No I have trust issue. <input type="checkbox" name="feedback3"></td>
        <td> Yes Please! <input type="checkbox" name="feedback4"></td>
        <td><?php echo $validateCheckbox; ?>
    </tr>

    <tr>
        <td> Username: </td>
        <td><input type="text" placeholder="Type your username" name="username"></td>
        <td><?php echo $validateUsername; ?>
    </tr> 
    <td> Password: </td>
        <td><input type="password" placeholder="Type your password" name="password"></td>
        <td><?php echo $validatePassword;?>
    </tr>

    <tr>
        <td><input type="submit" name="enter"></td>
    </tr>

         
    </table> 
</form>
</body> 
</html>