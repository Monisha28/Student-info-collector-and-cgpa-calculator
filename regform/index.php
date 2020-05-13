
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<title>Curriculum Vitae</title>
<style>
.container
{
background-color:white;
width: 800px;
padding: 25px 40px;
}
.form-control{
  width: 500px;
}
label
{
color: darkblue;
}
h1,h2,th{
  color: darkblue;
}
input[type=number]{
   width: 100px;
}
input:read-only {
  background-color: white;
}
.emsgf,.emsgl,.emsgr,.emsge,.emsgs,.emsgh,.emsgd,.er,.emsgb,.emsgg{
    color: red;
}
.hidden {
     visibility:hidden;
}
span{
  color: red;
}
body
{
  background-color: powderblue;
}
.btn
{
  background-color:darkblue; 
  color:white;
}
.error
{
 color: red;
 border:1px solid red;
}
.gender
{
  margin: 3px;
}
.disable:after
{ 
  top: 0;
  content: "";
  bottom: 0;
  position: absolute;
  right: 0;
  left: 0;
}
</style>
 
<script>
 $(document).ready(function() {
 
 $('form').submit(function(event){

var $regb=/^((242)|(239))$/;
if (!$("#branch").val().match($regb)){
    $('.emsgb').removeClass('hidden');
                 $('.emsgb').show();
                 $(this).addClass('error'); 
                 event.preventDefault();
             }
           else{
                $('.emsgb').addClass('hidden');
                $(this).removeClass('error'); 
               }

var gender = $("input[name='gender']:checked").val();
var $reggen=/^((male)|(female)|(other))$/; 
if (!gender.match($reggen)){
    $('.emsgg').removeClass('hidden');
                 $('.emsgg').show();
                 $(this).addClass('error'); 
                 event.preventDefault();
             }
           else{
                $('.emsgg').addClass('hidden');
                $(this).removeClass('error'); 
               }

if( $('input').val() != "" || $('[name*="ec"]' ).val() != 0 ) {
  // else, do not display message
  $('.er').addClass('hidden');
}
else {
  $('.er').removeClass('hidden');
  $('.er').show(); 
  event.preventDefault();
      
    }
if($("#fname").val()== "" || $("#rollno").val()=="" || $("#dob").val()=="" || $("#sslc").val()=="" || $("#hslc").val()=="" || $("#lname").val()=="" || $("#email".val() == "")){
      $('.er').removeClass('hidden');
      $('.er').show(); 
      event.preventDefault();
    }
    else{
          // else, do not display message
         $('.er').addClass('hidden');
        }
  });

$("#clear").click(function() {
    $(this).closest('form').find("input[type=text],input[type=number],input[type=radio],input[type=email]").val("");
    // $('#gender').prop('checked', false);
    // $("input:radio").attr("checked", false);
    $('#myform').find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
});

$("#fname, #lname").keyup(function(){  
 $(this).val($(this).val().replace(/(\.\.+)/g,".")); 
 $(this).val($(this).val().replace(/(\s\s+)/g," ")); 
});
var $regexname=/^([(A-Za-z|\s|\.)]*)$/;
$("#fname").on('focusout',function(){  
if ($(this).val().length > 30 || $(this).val().length < 3 || !$(this).val().match($regexname)){
    $('.emsgf').removeClass('hidden');
                 $('.emsgf').show();
                 $(this).addClass('error');     
             }
           else{
                $('.emsgf').addClass('hidden');
                $(this).removeClass('error'); 
               }
         });
$("#lname").on('focusout',function(){  
if ($(this).val().length > 30 || $(this).val().length < 3 || !$(this).val().match($regexname)){
    $('.emsgl').removeClass('hidden');
                 $('.emsgl').show();
                 $(this).addClass('error');     
             }
           else{
                $('.emsgl').addClass('hidden');
                $(this).removeClass('error'); 
               }
         });
var $regroll=/^(((2016)(239|242)(0)([0-2][1-9]|(30)))|(2012239030))$/;
$("#rollno").blur(function(){  
if ($(this).val().length != 10 || !$(this).val().match($regroll)){
    $('.emsgr').removeClass('hidden');
                 $('.emsgr').show();
                 $(this).addClass('error'); 
             }
           else{
                $('.emsgr').addClass('hidden');
                $(this).removeClass('error'); 
               }
         });

var $regemail=/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/;
$("#email").focusout(function(){  
if (!$(this).val().match($regemail)){
    $('.emsge').removeClass('hidden');
                 $('.emsge').show();
                 $(this).addClass('error'); 
             }
           else{
                $('.emsge').addClass('hidden');
                $(this).removeClass('error'); 
               }
         });

var $regdob=/^((199)[0-9])(.)(((0)[0-9])|((1)[0-2]))(.)([0-2][0-9]|(3)[0-1])$/;
$("#dob").focusout(function(){  
if (!$(this).val().match($regdob)){
    $('.emsgd').removeClass('hidden');
                 $('.emsgd').show();
                 $(this).addClass('error'); 
             }
           else{
                $('.emsgd').addClass('hidden');
                $(this).removeClass('error'); 
               }
         });   

var $regsslc=/^(((1)[7-9][5-9])|([2-4][0-9][0-9])|(500))$/;
$("#sslc").focusout(function(){  
if (!$(this).val().match($regsslc)){
    $('.emsgs').removeClass('hidden');
                 $('.emsgs').show();
                 $(this).addClass('error'); 
             }
           else{
                $('.emsgs').addClass('hidden');
                $(this).removeClass('error'); 
               }
         });

var $reghslc=/^(((4)[2-9][0-9])|([5-9][0-9][0-9])|((1)[0-1][0-9][0-9])|(1200))$/;
$("#hslc").focusout(function(){  
if (!$(this).val().match($reghslc)){
    $('.emsgh').removeClass('hidden');
                 $('.emsgh').show();
                 $(this).addClass('error'); 
             }
           else{
                $('.emsgh').addClass('hidden');
                $(this).removeClass('error'); 
               }
         });
});  
</script>
</head>
<body>

<?php
// define variables and set to empty values 
$fnameErr = $lnameErr = $emailErr = $dobErr = $genderErr = $rollnoErr = $branchErr = $sslcErr = $hslcErr = $creditErr = $success= $success1= $rollerr= $check= $check1= "";
$fname = $lname = $email = $dob = $gender = $rollno = $branch = $sslc = $hslc = $disable = $readonly = "" ;
$ec1 = $ec2 = $ec3 = $ec4 = $ec5 = $ec6 = $ec7 = $mc1 = $mc2 = $mc3 = $mc4 = $mc5 = $mc6 = $mc7 = "";
$gpa1 = $gpa2 = $gpa3 = $gpa4 = $gpa5 =  $gpa6 =  $gpa7 = "";
$cgpa1 = $cgpa2 = $cgpa3 = $cgpa4 = $cgpa5 = $cgpa6 = $cgpa7 = "";
$pass= $pass2= $pass3= $pass4= $pass5= $pass6= $pass7= $passfn= $passln= $passe= $passd= $passg= $passb= $passs= $passh = true;
$passr = $passre = true;
$view = false;
$submit = "Preview";
$edit= "Clear";
$dbuser = "root";
$dbpass = "";
 try {
// Connecting to MySql Database
  $db = new PDO('mysql:host=localhost;port=8080;dbname=Student', $dbuser, $dbpass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Feching values from Department table
  $sqld = "SELECT * FROM department";
  $std = $db->query($sqld);
  $std->setFetchMode(PDO::FETCH_ASSOC);
//If Preview button is clicked by the user, execute all Validations and show Error messages
 if ( isset($_POST['Preview'] ) ) {
//Getting values from Input Box
  $view = true;
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $gender = isset ($_POST['gender']) ? $_POST['gender'] : '';
  $rollno = $_POST['rollno'];
  $branch = isset ($_POST['branch']) ? $_POST['branch'] : '';
  $sslc = $_POST['sslc'];
  $hslc = $_POST['hslc'];
  $mc1 = $_POST['mc1']; $mc2 = $_POST['mc2']; $mc3 = $_POST['mc3']; $mc4 = $_POST['mc4']; $mc5 = $_POST['mc5']; $mc6 = $_POST['mc6']; $mc7 = $_POST['mc7'];
  $ec1 = $_POST['ec1']; $ec2 = $_POST['ec2']; $ec3 = $_POST['ec3']; $ec4 = $_POST['ec4']; $ec5 = $_POST['ec5']; $ec6 = $_POST['ec6']; $ec7 = $_POST['ec7'];
//regex validation fuction
  function validate($input,$regx)
  {
    if(!preg_match($regx, $input))
    {
        return false;
    }	
    return true;
    }
//FirtName validation
  if (empty($fname)) {
    $fnameErr = "First Name is required";
    $passfn = false;
  } 
  elseif(strlen($fname) > 30 || strlen($fname) < 3 ){
    $fnameErr = "First Name length should be between 3 to 30";
    $passfn = false;
  }
  else {
    $fname = preg_replace('/\.\.+/','.', $fname);
    $fname = preg_replace('/(\s\s+)/',' ', $fname);
    $namereg = '/^([(A-Za-z|\s|\.)]*)$/';
    $passfn = validate($fname,$namereg);
    if($passfn==false)
    {
      $fnameErr = "Please Enter a Valid FirstName"; 
    }
  }
//Lastname validation
  if(strlen($lname) > 30 || strlen($lname) < 3 ){
    $lnameErr = "Last Name length should be between 3 to 30";
    $passln = false;
  }
  else{
  $lname = preg_replace('/\.\.+/','.',$lname);
  $lname = preg_replace('/(\s\s+)/',' ', $lname);
  $namereg = '/^([(A-Za-z|\s|\.)]*)$/';
  $passln = validate($lname,$namereg);
  if($passln==false)
  {
    $lnameErr = "Please Enter a Valid LastName"; 
  }
 }
//Email validation
  $emailreg= "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
  $passe = validate($email,$emailreg);
  if($passe==false)
  {
    $emailErr = "Please Enter a Valid Email"; 
  }
//DOB validation
 if (empty($dob)) {
    $dobErr = "DOB is required";
    $passd= false;
  } else {
  $dobreg= "/^((199)[0-9])(.)(((0)[0-9])|((1)[0-2]))(.)([0-2][0-9]|(3)[0-1])$/";
  $passd = validate($dob,$dobreg);
  if($passd==false)
  {
    $dobErr = "Please Enter a Valid DOB"; 
  }
  }
//Branch Validation
  if (empty($_POST["branch"])) {
    $branchErr = "Branch is required";
    $passb= false;
  } else {
    $branchreg= "/^((242)|(239))$/";
    $passb = validate($branch,$branchreg);
    if($passb==false)
    {
      $branchErr = "Please Select a Valid Branch"; 
    }
  }
//Gender Validation
 if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required";
    $passg= false;
  } else {
    $genderreg= "/^((male)|(female)|(other))$/";
    $passg = validate($gender,$genderreg);
    if($passg==false)
    {
      $genderErr = "* Please Select a Valid Gender"; 
    }
  }
//SSLC Mark Validation
  $sslcreg= "/^(((1)[7-9][5-9])|([2-4][0-9][0-9])|(500))$/";
  $passs = validate($sslc,$sslcreg);
  if($passs==false)
  {
    $sslcErr = "Please Enter a Valid SSLC mark"; 
  }
//HSLC Mark Validation
  $hslcreg= "/^(((4)[2-9][0-9])|([5-9][0-9][0-9])|((1)[0-1][0-9][0-9])|(1200))$/";
  $passh = validate($hslc,$hslcreg);
  if($passh==false)
  {
    $hslcErr = "Please Enter a Valid HSLC mark"; 
  }
//function to calculate number of digits in a integer
  function digits($num){
    $n = $num !== 0 ? floor(log10($num) + 1) : 1;
    return (int) ($n);
  }  
//matches the given roll number with its department
   preg_match_all('/(242)|(239)/', $rollno, $matches);
   $var = implode(' ', $matches[0]);
//Roll Number basic Validation  
   if (empty($rollno)) {
      $rollnoErr = "RollNumber is required";
      $passr= false;
  }
  elseif(digits($rollno) != 10)
  {
    $passr= false;
    $rollerr = "*Your Roll Number is not Vaild";
  }
  elseif($var != $branch)
   {
     $rollerr = "*RollNumber and Branch Mismatch";
     $passr = false;
   }
  else
  {
//Checking for Valid RollNumber in Rollnumber Table
  $sqlt = "SELECT RollNumber FROM rollno WHERE RollNumber = $rollno";
  $sth = $db->query($sqlt);
  $sth->setFetchMode(PDO::FETCH_ASSOC);
          while($row = $sth->fetch()) {
            $check = $row['RollNumber'];
          }
          if($check == $rollno){ 
            $passr = true;
          }
          else{ 
            $passr = false;
            $rollerr = "*Your Roll Number is not Found";
          }
   }  
//Checking RollNumber for Duplicate Entry
    $sqlt1 = "SELECT RollNumber FROM details WHERE RollNumber = $rollno";
    $sth1 = $db->query($sqlt1);
    $sth1->setFetchMode(PDO::FETCH_ASSOC);
    while($row1 = $sth1->fetch()) {
      $check1 = $row1['RollNumber'];
    }
    if($check1 == $rollno){ 
      $rollerr = "*Your Response Already Exist in Database";
      $passre = false;
    }
    else{ 
      $passre = true;
    }

//Earned Credits and Maximum Credits Validation
  if($ec1==""||$ec2==""||$ec3==""||$ec4==""||$ec5==""||$ec6==""||$ec7==""||$mc1==""||$mc2==""||$mc3==""||$mc4==""||$mc5==""||$mc6==""||$mc7=="")
  {
    $creditErr="*Earned Credits and Maximum Credits cannot be Empty";
    $pass= false;
  }
  elseif($mc1 > 36 ||$mc2 > 36||$mc3 > 36||$mc4 > 36||$mc5 > 36||$mc6 > 36||$mc7 > 36){
    $creditErr="*Maximum Credit Should be less than 36 ";
    $pass= false;
  } 
  elseif($ec1>($mc1*10)||$ec2>($mc2*10)||$ec3>($mc3*10)||$ec4>($mc4*10)||$ec5>($mc5*10)||$ec6>($mc6*10)||$ec7>($mc7*10))
  {
    $creditErr="*Earned Credits cannot be Greater than Maximum Credits";
    $pass= false;
  }
  else {
//cgpa and gpa calculation for 1-7 semesters
  $gpa1= ($ec1/$mc1);
  $gpa1=round($gpa1,2);
  if($gpa1<6){$creditErr="*Your Semester 1 GPA cannot be less than 6"; $pass= false; }
  $cgpa1 = $gpa1;

  $gpa2=round(($ec2/$mc2),2);
  if($gpa2<6){$creditErr="*Your Semester 2 GPA cannot be less than 6"; $pass2= false;}
  $cgpa2 =round((($ec1+$ec2)/($mc1+$mc2)),2);

  $gpa3=round(($ec3/$mc3),2);
  if($gpa3<6){$creditErr="*Your Semester 3 GPA cannot be less than 6"; $pass3= false; }
  $cgpa3 =round((($ec1+$ec2+$ec3)/($mc1+$mc2+$mc3)),2);

  $gpa4=round(($ec4/$mc4),2);
  if($gpa4<6){$creditErr="*Your Semester 4 GPA cannot be less than 6"; $pass4= false ;}
  $cgpa4 =round((($ec1+$ec2+$ec3+$ec4)/($mc1+$mc2+$mc3+$mc4)),2);

  $gpa5=round(($ec5/$mc5),2);
  if($gpa5<6){$creditErr="*Your Semester 5 GPA cannot be less than 6"; $pass5= false; }
  $cgpa5 =round((($ec1+$ec2+$ec3+$ec4+$ec5)/($mc1+$mc2+$mc3+$mc4+$mc5)),2);

  $gpa6=round(($ec6/$mc6),2);
  if($gpa6<6){$creditErr="*Your Semester 6 GPA cannot be less than 6"; $pass6= false; }
  $cgpa6 =round((($ec1+$ec2+$ec3+$ec4+$ec5+$ec6)/($mc1+$mc2+$mc3+$mc4+$mc5+$mc6)),2);

  $gpa7=round(($ec7/$mc7),2);
  if($gpa7<6){$creditErr="*Your Semester 7 GPA cannot be less than 6"; $pass7= false; }
  $cgpa7 =round((($ec1+$ec2+$ec3+$ec4+$ec5+$ec6+$ec7)/($mc1+$mc2+$mc3+$mc4+$mc5+$mc6+$mc7)),2);
 }
//If all the Validation is passed, make the Submit and Edit button Visible and form as Non-editable
  if($pass==true && $passr==true && $passre==true && $pass2==true && $pass3==true && $pass4==true && $pass5==true && $pass6==true && $pass7==true && $passfn==true && $passln==true && $passe==true && $passd==true && $passg==true && $passb==true && $passs==true && $passh== true)
  {
    // $hslc= ($hslc/1200)*100;
    // $hslc=round($hslc,2);
    // $sslc= ($sslc/500)*100;
    // $sslc=round($sslc,2);
    $submit = "Submit";
    $edit= "Edit";
    $success1 = "Click the SUBMIT button to register!";
    $disable= "disable";
    $readonly = 'readonly';
  }
}
//If user press Edit button, make the form editable and retain the existing inputs
if ( isset($_POST['Edit']) ) {  
  $disable= $readonly = "";
  $submit = "Preview";
  $edit= "Clear";
  $view=true;
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $rollno = $_POST['rollno'];
  $branch = $_POST['branch'];
  $sslc = $_POST['sslc'];
  $hslc = $_POST['hslc'];
  $mc1 = $_POST['mc1']; $mc2 = $_POST['mc2']; $mc3 = $_POST['mc3']; $mc4 = $_POST['mc4']; $mc5 = $_POST['mc5']; $mc6 = $_POST['mc6']; $mc7 = $_POST['mc7'];
  $ec1 = $_POST['ec1']; $ec2 = $_POST['ec2']; $ec3 = $_POST['ec3']; $ec4 = $_POST['ec4']; $ec5 = $_POST['ec5']; $ec6 = $_POST['ec6']; $ec7 = $_POST['ec7'];
  $gpa1 = $_POST['gpa1']; $gpa2 = $_POST['gpa2']; $gpa3 = $_POST['gpa3']; $gpa4 = $_POST['gpa4']; $gpa5 = $_POST['gpa5']; $gpa6 = $_POST['gpa6']; $gpa7 = $_POST['gpa7'];
  $cgpa1 = $_POST['cgpa1']; $cgpa2 = $_POST['cgpa2']; $cgpa3 = $_POST['cgpa3']; $cgpa4 = $_POST['cgpa4']; $cgpa5 = $_POST['cgpa5']; $cgpa6 = $_POST['cgpa6']; $cgpa7 = $_POST['cgpa7']; 
}
//If user press Clear button, make all the form fields blank
if ( isset($_POST['Clear']) ) {  
    $fnameErr = $lnameErr = $emailErr = $dobErr = $genderErr = $rollnoErr = $branchErr = $sslcErr = $hslcErr = $creditErr = $success= $success1= $rollerr= $check= $check1= "";
    $fname = $lname = $email = $dob = $gender = $rollno = $branch = $sslc = $hslc = $disable = $readonly = "" ;
    $gpa1 = $gpa2 = $gpa3 = $gpa4 = $gpa5 =  $gpa6 =  $gpa7 = "";
    $cgpa1 = $cgpa2 = $cgpa3 = $cgpa4 = $cgpa5 = $cgpa6 = $cgpa7 = "";
    $ec1 = $ec2 = $ec3 = $ec4 = $ec5 = $ec6 = $ec7 = $mc1 = $mc2 = $mc3 = $mc4 = $mc5 = $mc6 = $mc7 = "";
    $pass= $pass2= $pass3= $pass4= $pass5= $pass6= $pass7= $passfn= $passln= $passe= $passd= $passg= $passb= $passs= $passh = true;
    $passr = $passre = true;
    $view=false;
 }
//If user press the Submit button, store the data to database
 if ( isset($_POST['Submit']) ) {  
  $view = true;
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $rollno = $_POST['rollno'];
  $branch = $_POST['branch'];
  $sslc = $_POST['sslc'];
  $hslc = $_POST['hslc'];
  $mc1 = $_POST['mc1']; $mc2 = $_POST['mc2']; $mc3 = $_POST['mc3']; $mc4 = $_POST['mc4']; $mc5 = $_POST['mc5']; $mc6 = $_POST['mc6']; $mc7 = $_POST['mc7'];
  $ec1 = $_POST['ec1']; $ec2 = $_POST['ec2']; $ec3 = $_POST['ec3']; $ec4 = $_POST['ec4']; $ec5 = $_POST['ec5']; $ec6 = $_POST['ec6']; $ec7 = $_POST['ec7'];
  $gpa1 = $_POST['gpa1']; $gpa2 = $_POST['gpa2']; $gpa3 = $_POST['gpa3']; $gpa4 = $_POST['gpa4']; $gpa5 = $_POST['gpa5']; $gpa6 = $_POST['gpa6']; $gpa7 = $_POST['gpa7'];
  $cgpa1 = $_POST['cgpa1']; $cgpa2 = $_POST['cgpa2']; $cgpa3 = $_POST['cgpa3']; $cgpa4 = $_POST['cgpa4']; $cgpa5 = $_POST['cgpa5']; $cgpa6 = $_POST['cgpa6']; $cgpa7 = $_POST['cgpa7'];

  $sqlcg= "INSERT INTO cgpa (RollNumber,credit1,maxcredit1,gpa1,cgpa1,credit2,maxcredit2,gpa2,cgpa2,credit3,maxcredit3,gpa3,cgpa3,credit4,maxcredit4,gpa4,cgpa4,credit5,maxcredit5,gpa5,cgpa5,credit6,maxcredit6,gpa6,cgpa6,credit7,maxcredit7,gpa7,cgpa7) 
  VALUES ('$rollno','$ec1','$mc1','$gpa1','$cgpa1','$ec2','$mc2','$gpa2','$cgpa2', '$ec3','$mc3','$gpa3','$cgpa3', '$ec4','$mc4','$gpa4','$cgpa4','$ec5','$mc5','$gpa5','$cgpa5','$ec6','$mc6','$gpa6','$cgpa6', '$ec7','$mc7','$gpa7','$cgpa7')";   

  $sql = "INSERT INTO details (FirstName, LastName, Email, DOB, Gender, RollNumber, Branch, SSLC, HSLC)
  VALUES ('$fname', '$lname', '$email', '$dob', '$gender', '$rollno', '$branch', '$sslc', '$hslc')";
  $db->exec($sqlcg);
  $db->exec($sql);
  $success = "Your Response is Stored Successfully!!";
  echo '<script> alert("Registration is Successful!!") </script>';
    $fnameErr = $lnameErr = $emailErr = $dobErr = $genderErr = $rollnoErr = $branchErr = $sslcErr = $hslcErr = $creditErr = $success= $success1= $rollerr= $check= $check1= "";
    $fname = $lname = $email = $dob = $gender = $rollno = $branch = $sslc = $hslc = $disable = $readonly = "" ;
    $gpa1 = $gpa2 = $gpa3 = $gpa4 = $gpa5 =  $gpa6 =  $gpa7 = "";
    $cgpa1 = $cgpa2 = $cgpa3 = $cgpa4 = $cgpa5 = $cgpa6 = $cgpa7 = "";
    $ec1 = $ec2 = $ec3 = $ec4 = $ec5 = $ec6 = $ec7 = $mc1 = $mc2 = $mc3 = $mc4 = $mc5 = $mc6 = $mc7 = "";
    $pass= $pass2= $pass3= $pass4= $pass5= $pass6= $pass7= $passfn= $passln= $passe= $passd= $passg= $passb= $passs= $passh = true;
    $passr = $passre = true;
    $view=false;
  }
  $db = null;
 }
//To catch the exceptions
  catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>
<!-- Student Registration Form UI -->
<div class="container">
<form id="Sform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Curriculum Vitae</h1>
 <span style="color:green;"><?php echo $success;?></span><span style="color:yellow;"><?php echo $success1;?></span><span style="color:red;"><?php echo $rollerr;?><br></span>
 <h2 >Personal Details</h2>
 <div class="<?php echo $disable;?>">
    <div class="form-group">
    <label for="name">FirstName</label><span> * <?php echo $fnameErr;?></span><span class="emsgf hidden">Please Enter a Valid FirstName</span> 
    <input type="text" maxlength=30 id="fname" value="<?php echo $fname;?>" class="form-control" name="fname" >
  </div>
  <div class="form-group">
    <label for="name">LastName</label><span> * <?php echo $lnameErr;?></span><span class="emsgl hidden">Please Enter a Valid LastName</span>
    <input type="text" maxlength=30 id="lname" value="<?php echo $lname;?>" class="form-control" name="lname" >
  </div>
  <div class="form-group">
    <label for="email">Email</label><span> * <?php echo $emailErr;?></span><span class="emsge hidden">Please enter a valid Email</span>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
  </div>
  <div class="form-group">
    <label>DOB</label><span> * <?php echo $dobErr;?></span><span class="emsgd hidden">Please enter a Valid DOB</span>
    <input placeholder="dd/mm/yyyy" value="<?php echo $dob;?>" type="date" class="form-control" id="dob" name="dob">
  </div>
  <div>
    <label class="gender" >Gender</label><span> * </span>
    <input type="radio" id="gender" name="gender" class="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
    <label for="male">Male</label>
    <input type="radio" id="gender" name="gender" class="gender"  <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
    <label for="female">Female</label>
    <input type="radio" id="gender" name="gender" class="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>  value="other">
    <label for="other">Other</label> <span><?php echo $genderErr;?></span><span class="emsgg hidden"> * Please Choose a Gender</span>
  </div>
  <br>
  <h2>Educational Details</h2>
  <div class="form-group">
    <label for="name">Roll Number</label><span> * <?php echo $rollnoErr;?></span><span class="emsgr hidden">Please Enter a Valid Roll Number</span>
    <input type="text" maxlength=10 value="<?php echo $rollno;?>" class="form-control" name="rollno" id="rollno" <?php echo $readonly; ?>>
  </div>
  <div  class="form-group">
  <label for="branch">Branch</label><span> * <?php echo $branchErr;?></span><span class="emsgb hidden">Please Enter a Valid Branch</span>
  <select class="form-control" name="branch" id="branch"  <?php echo $readonly; ?> >
      <?php 
      //Fetching Branch details from Database and displaying it to the user
      if($branch == ""){
        echo "<option selected disabled hidden>--Choose from the Department List--</option>";
      while($rowd = $std->fetch()) {         
          echo "<option value=".$rowd['Code'].">".$rowd['BranchName']."</option>";
      }}
      if($view == true){
        while($rowd = $std->fetch()) {   
          if($branch == $rowd['Code']) {     
          echo "<option value=".$rowd['Code']." selected>".$rowd['BranchName']."</option>";}
          else{
            echo "<option value=".$rowd['Code'].">".$rowd['BranchName']."</option>";}
          }  }
      ?>     
  </select>     
  </div>
  <table class="table table-borderless">
    <thead>
    <tr align="center">
      <th>Semester</th>
      <th>Maximum Credits<span> * </span></th>
      <th>Credits Earned<span> * </span></th>
      <th>GPA</th>
      <th>CGPA</th>
    </tr>
  </thead>
  <tbody align="center">
    <tr>
      <td>1</td>
      <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=2 name="mc1" value="<?php echo $mc1;?>"></td>
      <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=3 name="ec1" value="<?php echo $ec1;?>"></td>
      <td><input type="number" step="0.01" readonly  class="form-control" name="gpa1" value="<?php echo $gpa1;?>"></td>
      <td><input type="number" step="0.01" readonly  class="form-control" name="cgpa1" value="<?php echo $cgpa1;?>"></td>
    </tr>
    <tr>
        <td>2</td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=2 name="mc2" value="<?php echo $mc2;?>"></td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=3 name="ec2" value="<?php echo $ec2;?>"></td>
        <td><input type="number" step="0.01" readonly class="form-control" name="gpa2" value="<?php echo $gpa2;?>" ></button></td>
        <td><input type="number" step="0.01" readonly  class="form-control" name="cgpa2" value="<?php echo $cgpa2;?>"></td>
    </tr>
    <tr>
        <td>3</td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=2 name="mc3" value="<?php echo $mc3;?>"></td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=3 name="ec3" value="<?php echo $ec3;?>"></td>
        <td><input type="number" step="0.01" readonly  class="form-control" name="gpa3" value="<?php echo $gpa3;?>"></td>
        <td><input type="number" step="0.01" readonly  class="form-control" value="<?php echo $cgpa3;?>" name="cgpa3"></td>
        
    </tr>
    <tr>
        <td>4</td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=2 name="mc4" value="<?php echo $mc4;?>"></td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=3 name="ec4" value="<?php echo $ec4;?>"></td>
        <td><input type="number" step="0.01" readonly  class="form-control" name="gpa4" value="<?php echo $gpa4;?>"></td>
        <td><input type="number" step="0.01" readonly  class="form-control" value="<?php echo $cgpa4;?>" name="cgpa4"></td>
      </tr>
      <tr>
          <td>5</td>
          <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=2 name="mc5" value="<?php echo $mc5;?>"></td>
          <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=3 name="ec5" value="<?php echo $ec5;?>"></td>
          <td><input type="number" step="0.01" readonly  class="form-control" name="gpa5" value="<?php echo $gpa5;?>"></td>
          <td><input type="number" step="0.01" readonly class="form-control" value="<?php echo $cgpa5;?>" name="cgpa5"></td>
        </tr>
    <tr>
        <td>6</td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=2 name="mc6" value="<?php echo $mc6;?>"></td>
        <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=3 name="ec6" value="<?php echo $ec6;?>"></td>
        <td><input type="number" step="0.01" readonly  class="form-control" name="gpa6" value="<?php echo $gpa6;?>"></td>
        <td><input type="number" step="0.01" readonly  class="form-control" value="<?php echo $cgpa6;?>" name="cgpa6"></td>
      </tr>
      <tr>
          <td>7</td>
          <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=2 name="mc7" value="<?php echo $mc7;?>"></td>
          <td><input type="number" class="form-control"  <?php echo $readonly; ?> maxlength=3 name="ec7" value="<?php echo $ec7;?>"></td>
          <td><input type="number" step="0.01" readonly  class="form-control" name="gpa7" value="<?php echo $gpa7;?>"></td>
          <td><input type="number" step="0.01" readonly  class="form-control" value="<?php echo $cgpa7;?>" name="cgpa7"></td>
      </tr>
  </tbody>
  </table>
    <span><?php echo $creditErr;?></span>
    <div class="form-group">
      <label>SSLC Mark </label><span> * <?php echo $sslcErr;?></span><span class="emsgs hidden">Please Enter a Valid 10th Mark</span>
      <input type="text" maxlength=3 class="form-control" name="sslc" id="sslc" value="<?php echo $sslc;?>" <?php echo $readonly; ?>>  
    </div>
    <div class="form-group">
      <label>HSLC Mark </label><span> * <?php echo $hslcErr;?></span><span class="emsgh hidden">Please Enter a Valid 12th Mark</span>
      <input type="text" maxlength = 4 class="form-control" name="hslc" id="hslc" value="<?php echo $hslc;?>" <?php echo $readonly; ?>> 
    </div>
    <!-- <span class="er hidden">* Required fields should not be Empty</span> -->
 </div>
 <div class="form-group">
  <button name="<?php echo $submit;?>"  value ="<?php echo $submit;?>" type="submit" id= "submit" class="btn btn-default"><?php echo $submit;?></button> 
  <button name="<?php echo $edit;?>"  value="<?php echo $edit;?>" type="submit" id="clear" class="btn btn-default"><?php echo $edit;?></button></div>
</form>
</div>
</body>
</html>


<!-- <div  class="form-group">
  <label for="branch">Branch</label><span> * <?php echo $branchErr;?></span><span class="emsgb hidden">Please Enter a Valid Branch</span>
  <select class="form-control" name="branch"  id="branch">
  <option value="0" selected disabled hidden>Choose from the Department List</option>
  <option value="239" <?php if($branch=="239") echo 'selected="selected"'; ?>>M.Sc 5yrs integrated (CS)</option>
  <option value="242" <?php if($branch=="242") echo 'selected="selected"'; ?>>M.Sc 5yrs integrated (IT)</option>
</select>
</div> -->