<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>PHP!</title>
  </head>
  <body>
    <img src="http://maxwellswaterloo.com/wp-content/uploads/2014/12/new-year-3.jpg"/>
    <div class="header"><h1>
      <?php
      $welcome = "CALENDAR 2015";
      echo $welcome;
      ?>
    </h1></div>
    <p><strong>January:</strong>
      <?php
      for ($number = 1; $number <= 28; $number++) {
        if ($number <= 29) {
            echo $number . ", ";
        } else {
            echo $number . "!";
        }
      }; ?>
    </p>
    <p><strong>Things you can do:</strong>
      <?php
        $things = array("mark a date ",
        "get emails ", "set a birthday",
        "make your own background ");
        foreach ($things as $thing) {
            echo "<li>$thing</li>";
        }
        
        unset($thing);
      ?>
    </p>
    <p><strong>This is the calendar for 2015</strong></p>
    <p>
      <?php
        $words = array("", "", "", "",
        "", "", "", "", "");
        shuffle($words);
        foreach ($words as $word) {
            echo $word;
        };
        
        unset($word);
      ?>
    </p>
    
    <H2>Email</H2>
 <FORM METHOD="POST" ACTION="RegularExpressionTester.php">
 <FONT FACE="Courier">
 String:
 <BR>
 <INPUT TYPE="TEXT" NAME="string">
 <BR><BR>
 Regular Expression:
  <BR>
 <INPUT TYPE="TEXT" SIZE=64 NAME="pattern" 
       VALUE="">
  <BR><BR>
  <BR>
  <INPUT TYPE="SUBMIT">
  </FONT>
  </FORM>
    
     
    
    
    
    
    
    
    
    
  <?php  
  if (isset($_POST['posted'])) {

   $email = $_POST['email'];
   $theresults = ereg("^[^@ ]+@[^@ ]+\.[^@ \.]+$", $email, $trashed);
   if ($theresults) {
      $isamatch = "Valid";
   } else {
      $isamatch = "Invalid";
   }

   echo "Email address validation says $email is " . $isamatch;
}
 
  ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="posted" value="true">

<input type="text" name="email" value="name@example.com">
<input type="submit" value="Validate">
</form>
    
    
    
    
 <form name="form1" method="post" action="EMailValidation.php">
  <table>
      <tr> 
        <td colspan="2"><b>Enter an e-mail address to test</div></td>
      </tr>
      <tr> 
        <td width="25%">E-mail</td>
        <td width="75%"> 
           <input type="text" name="email" size="30">
        </td>
      </tr>
      <tr> 
        <td colspan="2"> 
          <input type="submit" name="Submit" value="Submit">
        </td>
      </tr>
 </table>
</form>   
    
    
    
 <?php
                                                
  if (!isset($email)){
    die("Host name value wasn't properly submitted.Retry.");
  }

  if(empty($email)) {
    die("Hostname field was left blank ! Retry."); 
  }
                                                      
  if ( (strlen($email) < 3) || (strlen($email) > 200)) {
    die("Invalid E-mail address, E-mail address too long or too short.");
  } elseif(!ereg("@",$email)) {
    die("Invalid E-mail address, no @ symbol found");
  } else {
    echo "<b>".$email."</b> is correct in format.<br>";
  }
                                                      
  list($username,$hostname) = split("@",$email);
                                                      
  if ( (empty($username)) or (empty($hostname)) ) {
    die("username or host name section is not valid.");
  }
                                                      
  if(checkdnsrr($hostname)) {
      echo "<b>". $email ."</b> hostname has a valid MX record !<br>";
  } else {
      die("<b>". $email ."</b> hostname does not exist");
  }
?>
<br>
   
    
  </body>
</html>













<!-- RegularExpressionTester.php
<?php
echo "<BR><B>string:</B>$string";
echo "<BR><B>regular expression:</B>&nbsp;$pattern";
if (get_magic_quotes_gpc()){
    echo "<BR><BR>";
    echo "<BR>Stripping magic quotes....";
    $string = stripslashes($string);
    $pattern = stripslashes($pattern);
    echo "<BR><B>string:</B>&nbsp;$string";
    echo "<BR><B>regular expression:</B>&nbsp;$pattern";
}
$found = ereg($pattern, $string, $matches);
echo "<BR><BR>";
if ($found)
{
    echo "<BR><B>valid:</B>&nbsp;true";
    echo "<BR><BR>";
    echo "<BR><B>Components:&nbsp</B>";
    for ($i = 0; $i < count($matches); $i++)
    {
        echo "<BR>$matches[$i]";
    }
}
else
    echo "<BR><B>valid:</B>&nbsp;false";
?>
-->

