<?PHP
/********************************************************************************
 Privacy Policy Script
  
 Copyright 2019 JS IT Solutions. 
 
 More info at: johan@jsitsolutions.co.uk
 ********************************************************************************/	

//Load DOM library
include('libraries/simple_html_dom.php'); 

//Define variables
$filePath = 'https://privacy.reedexpo.com/en-gb.html'; //location of the Privacy Policy
$className = 'column-control-1'; //The className which indicates the branding has stopped and the Privacy Policy begins
$shouldContain = 'Privacy Policy'; //The content should contain this if not fallback

//Grab Privacy Policy page
$html = file_get_html($filePath); 

//Find the first reference of the defined class
$content = $html->find('div[class="'.$className.'"]')[0]; 


$pos = strpos($shouldContain); 
if ($pos !== false){ 
    echo $content; // display content
}
else {
    header('location: '.$filePath); //No? redirect user to the source page
}
?>