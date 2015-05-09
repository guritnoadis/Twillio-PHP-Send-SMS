

<?php 
require('Services/Twilio.php'); 
 
$account_sid = 'YouraccountID'; 
$auth_token = 'YourToken'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
for($i=0;$i<=1;$i++){
$client->account->messages->create(array( 
	'To' => "+6289687115***", 
	'From' => "+12015966458", 
	'Body' => "Hello Jogja",   
));
} 

?>