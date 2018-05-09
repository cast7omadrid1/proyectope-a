<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class NoticiasController extends Controller
{
    
    public function noticias(){
        return view('noticias');
    }

    /*funcion para mostrar los xml rss*/
	public static  function getLinks($url, $size){
	    try {

	    	$_this = new self;
	        $c = $_this->recuperarXML($url);

	        $xml = new \DomDocument();
	        $xml->loadXML($c);
	        $raiz = $xml->documentElement;

	        if(isset($raiz)) {

	            $entradas = $raiz->getElementsByTagName('item');

	            $link = '';

	            for ($i = 0; $i < $size; $i++) {
	                $titulo = $entradas->item($i)->getElementsByTagName('title')->item(0)->nodeValue;
	                $vinculo = $entradas->item($i)->getElementsByTagName('link')->item(0)->nodeValue;

	                $fecha = $entradas->item($i)->getElementsByTagName('pubDate')->item(0)->nodeValue;
	                $myDateTime = \DateTime::createFromFormat('D, d M Y H:i:s O', $fecha);
	                $hours = $newDateString = $myDateTime->format('d/m - H:i');
	                $dateNow = new \DateTime("now");
	                $is_today = '';
	                $diff = $myDateTime->diff($dateNow);
	                if ($diff->d == 0 && $diff->h < 1) {
	                    $is_today = '<span class="new-post-label"> ¡nuevo! <span></span>';
	                }


	                $link .= "<div class='link-blog link'>
									<a href=\"$vinculo\" target=\'_blank\'>
										<i class=\"fa fa-arrow-right colorarrow\" aria-hidden=\"true\"></i>
														$hours -  $titulo $is_today
									</a>
								</div>";
	            }

	        } else {
	            $link = "Perdón, ha fallado la conexión con el blog";
	        }

	        return $link;
	    } catch (\Exception $e) {

	        $link = "Perdón, ha fallado la conexión con el blog";

	        return $link;
	    }
	}

	public static function recuperarXML ($url) {
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0");
	    curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml; charset=UTF- 8"));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	    $c = curl_exec($ch);
	    curl_close($ch);

	    return $c;
	}




}