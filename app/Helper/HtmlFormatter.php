<?php
namespace App\Helper;

use Illuminate\Support\Facades\Facade;

class HtmlFormatter extends Facade{
    public function format(String $text):String
    {
        $text=\htmlspecialchars($text);
        $text=preg_replace('/\\n/','<br>',$text);
        $text=preg_replace('/\-\-(.+?)\-\-/','<i>$1</i>',$text);
        $text=preg_replace('/\$\$(.+?)\$\$/','<span class="heading">$1</span>',$text);

        $text=preg_replace('/\*\*(.+?)\*\*/','<strong>$1</strong>',$text);
        $text=preg_replace('/\~\~(.+?)\~\~/','<strike>$1</strike>',$text);
        $text=preg_replace('/\_\_(.+?)\_\_/','<sub>$1</sub>',$text);
        $text=preg_replace('/\^\^(.+?)\^\^/','<sup>$1</sup>',$text);
        $text=\preg_replace('/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/','<a href="$1" target="_blank" >$1</a>',$text);
        return $text;
    }

}
