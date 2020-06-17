<?php

if(isset($_POST['submitEmail']) && $_POST['submitEmail']=='submit')
{
 
   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=trim($_POST['message']);

   $senderheaders  = "From: $email\r\n";
   $senderheaders .= "Content-type: text/html\r\n";

   $subject="Inquiry";
   $sendId='kirit.jbs@gmail.com';
   $textTosend='
     <table width="700px" align="center">
        <tr>
            <td colspan="3" align="center"  class="title" height="30px"><strong>Customer Inquiry </strong></td>
        </tr>
         
        <tr>
           <td>
           <strong>Name</strong>  </td>
           <td>
           <strong>Message</strong>  </td>
           <td>
           <strong>Email</strong>  </td>
        </tr>
        <tr>
           <td >
           <strong>'.$name.'</strong>  </td>
           <td >
           <strong>'.$message.'</strong>  </td>
           <td >
           <strong>'.$email.'</strong>  </td>
          </tr>
      
     </table>
     <br><br>';

   
      $retval =mail($sendId,$subject,$textTosend,$senderheaders);

      if( $retval == true ) {
         echo "Message sent successfully...";
      }else {
         echo "Message could not be sent...";
      }
}     
  ?>