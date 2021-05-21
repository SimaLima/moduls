<?php
/**
 * MAKE URLS IN TEXT AND DISPLAY AS ANCHOR
 * Use regex to find urls in text, then display them in anchor tag.
 */

// regular expression filter
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

// text to filter for urls
$text = 'The text you want to filter goes here. http://google.com';

// check if there is url in the text
if (preg_match($reg_exUrl, $text, $url)) {
   // make the urls hyperlinks
   echo preg_replace($reg_exUrl, '<a href="{$url[0]}">{$url[0]}</a>', $text);
} else {
   // if no urls in the text just return the text
   echo $text;
}
