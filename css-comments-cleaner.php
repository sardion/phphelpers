/**
 * this helper function will clean up comments in CSS file 
 * and return the cleaned css for later usage
 */
 
 function cleanUpComments($stringCss)
 {
  //clean up extra whitespace
  $cssraw = trim($stringCss);
  //check if the first character is a comment opening character
   if ( $classesraw[0] === "/" )
   {
      //different regex to use
      $csscleaned = preg_replace("/[^\*].*?.+\//i", "", $cssraw);
   }
   else
   {
      $csscleaned = preg_replace("/(?<=[\s\S])+\/\*+[\s\S]+\//i", "", $cssraw);
   }
   return $csscleaned;
 
 }
