<?php
/*

//code from that tutorial: https://thisinterestsme.com/php-list-all-files-in-a-directory/

******************************************************** come era
//Get a list of file paths using the glob function.
$fileList = glob('../assets/Loghi_Sponsor/*.png');

//Loop through the array that glob returned.
foreach($fileList as $filename){
   //Simply print them out onto the screen.
   echo $filename, '<br>'; 
}

********************************************************


a che serve? 
a prendere tutte le immagini dei loghi e printarle nella pagina degli sponsor


nota:
$fileList = glob($root.'docs/assets/Loghi_Sponsor/*.png');
non funzionerà perchè non prende la radice assoluta, ma relativa, 
infatti per usarlo sono dovuto tornare prima indietro di cartella con ".." e poi entrare nel target


trova %body% e sostituiscilo con black nella stringa "<body text='%body%'>"
// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
*/


$root = 'http://localhost/eteam/'; 
// $global_html_block = " ";

//Get a list of file paths using the glob function.
$fileList = glob('../../assets/Loghi_Sponsor/*.png');

//Loop through the array that glob returned.
foreach($fileList as $filename){

   //tolgo il ../.. e lo sostituisco con docs
   $filename = str_replace("../..", "docs", $filename);

   //devo stamparlo così
   //<img data-width="320" data-height="380" src="http://localhost/eteam/docs/assets/site-imgs/unico_energia.png">
   // $global_html_block = $global_html_block.'<img data-width="320" data-height="380" src="'.$root.$filename.'">';
   echo nl2br("<img data-width='320' data-height='380' src='".$root.$filename."'>\r\n");

}

// echo $global_html_block;
