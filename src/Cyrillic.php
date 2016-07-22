<?php

/**
 * A simple method for natural UTF-8 encoded cyrillic text to latin transliteration.
 * 
 * @package DreamLibrary
 * @author YURiQUE (Yuriy Malchenko), 2005 <jmalchenko@gmail.com>
 * 
 */

namespace Dream;

class Cyrillic {
	
	private static $_cyr=[
		"Щ",  "Ш", "Ч", "Ц","Ю", "Я", "Ж", "А","Б","В","Г","Д","Е","Ё","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х", "Ь","Ы","Ъ","Э","Є","Ї",
		"щ",  "ш", "ч", "ц","ю", "я", "ж", "а","б","в","г","д","е","ё","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х", "ь","ы","ъ","э","є","ї"
	];

	private static $_lat=[
		"Shh","Sh","Ch","C","Ju","Ja","Zh","A","B","V","G","D","Je","Jo","Z","I","J","K","L","M","N","O","P","R","S","T","U","F","Kh","'","Y","`","E","Je","Ji",
		"shh","sh","ch","c","ju","ja","zh","a","b","v","g","d","je","jo","z","i","j","k","l","m","n","o","p","r","s","t","u","f","kh","'","y","`","e","je","ji"
	];
	
	/**
	 * Transltierates the cyrilliccharacters
	 *
	 * @param string $str UTF-8 encoded cyrillic text
	 * @return string UTF-8 encoded transliterated latin text 
	 */
	
	public static function translit($str) {

		$c = 0;

		$str = str_replace(self::$_cyr, self::$_lat, $str, $c);

		if ($c) {
			
			$str = preg_replace("/([qwrtpsdfghklzxcvbnmQWRTPSDFGHKLZXCVBNM]+)[jJ]e/", "\${1}e", $str);
			$str = preg_replace("/([qwrtpsdfghklzxcvbnmQWRTPSDFGHKLZXCVBNM]+)[jJ]/",  "\${1}'", $str);
			$str = preg_replace("/([eyuioaEYUIOA]+)[Kk]h/", "\${1}h", $str);
			$str = preg_replace("/^kh/", "h", $str);
			$str = preg_replace("/^Kh/", "H", $str);

		}

		return $str;

	}
  
}