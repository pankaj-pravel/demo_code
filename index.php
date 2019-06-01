<?php 
//Store Address in variable
$address = 'C-515, Dev Auram, Opp. Commerce House, 100 Feet Anand Nagar Rd, Prahlad Nagar, Ahmedabad, Gujarat 380051';

//Call function using $address parameter
$data = geocode($address);
print_r($data);

function geocode($address){
 
    // url encode the address
    $address = urlencode($address);
     
    // google map geocode api url
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyBatxZwz6sLFkhGolsbpEQWq10vga_36f8";
 
    // get the json response
    $resp_json = file_get_contents($url);
     
    // decode the json
    $resp = json_decode($resp_json, true);
	
	return  $resp;
    
}
?>
