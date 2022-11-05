<?php
$validateName ="";
$validateEmail="";
$validateContact="";
$validateCheckbox="";
$validateRadio="";
$validateOption="";
$validateDate="";
 $validateUsername="";
$validatePassword="";
$name=$email="";
// $routeName="";
$f1=$f2=$f3=$f4="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
// $phone= $_REQUEST["contact"];
// $routeName=$_REQUEST["route"];
    // validating Name
    if(empty($_REQUEST["name"]) || (strlen($_REQUEST["name"])<3))
    {
    $validateName= "you must enter name";
    }
    else
    {
        //$name=$_REQUEST["name"];
        $validateName= $name;
        
    }
    
    // validating Email
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
    $validateEmail="you must enter email";
    }
    else{
    $validateEmail= "your email is ".$email;
    }

    //validating contact
    if (empty($_REQUEST["contact"]) || !preg_match("/^[0-9\_]{7,20}/",$_REQUEST["contact"])) {
        $validateContact = 'You must enter a valid phone number ';
        }

    else
    {
        $validateContact = "your contact number is ".$_REQUEST["contact"];
    }
    

    //validating radio buttons/routes
    if(isset($_REQUEST["route"])){
        $validateRadio=$_REQUEST["route"];
    }
    else{
        echo "<br>";
        $validateRadio= "Please select at least one radio button";
    }

    // validating select option/seats
    if(empty($_REQUEST["seat"])){

        $validateOption="Please select seats to be booked";
    }
    else{
        $validateOption=$_REQUEST["seat"];
    }

    //validating Date
    if(empty($_REQUEST["date"])){

        $validateDate="Please select a date";
    }
    else{
        if(isset($_REQUEST["date"])){
                    $selected_date = new DateTime();
                    $previous_date= new DateTime("11/04/2022");
                    if($selected_date<=$previous_date){

                        $validateDate= "Please don't select older dates";
                    }
        
                    else{
                        
                        $validateDate=$_REQUEST["date"];
                    }
                }

    }         

    //validating checkboxes
    if(!isset($_REQUEST["feedback1"])&&!isset($_REQUEST["feedback2"])&&!isset($_REQUEST["feedback3"])&&!isset($_REQUEST["feedback4"]))
    {
        $validateCheckbox="Please select at least one checkbox";
    }
    else{
        if(isset($_REQUEST["feedback1"]))
        {
            $f1=$_REQUEST["feedback1"];
        }
        
        if(isset($_REQUEST["feedback2"]))
        {
            $f2=$_REQUEST["feedback2"];
        }
        
        if(isset($_REQUEST["feedback3"]))
        {
            $f3=$_REQUEST["feedback3"];
        }
        
        if(isset($_REQUEST["feedback4"]))
        {
            $f4=$_REQUEST["feedback4"];
        }
    }

    if (!empty($_REQUEST["username"])|| preg_match('/^[a-zA-Z0-9]{5,}$/', $_REQUEST["username"])){
        $validateUsername= $_REQUEST["username"];
    
    }
    else{
        $validateUsername="please enter a valid username";
    }

    if(!empty($_REQUEST["password"])|| preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $_REQUEST["pasword"])){
        $validatePassword = $_REQUEST["password"];
    }
    else{
        $validatePassword="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
    }

}

?>