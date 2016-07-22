<?php

use Dream\Cyrillic;

class CyrillicTest extends PHPUnit_Framework_TestCase
{
	
    public function testCyrillic()
    {
        $this->assertEquals(
			"Britanskaja televedushhaja pozhalovalas' na kolumnista",
			Cyrillic::translit('Британская телеведущая пожаловалась на колумниста')
		);
		
        $this->assertEquals(
			"Putin: v sporte ne mozhet byt' mesta nikakomu dopingu",
			Cyrillic::translit('Путин: в спорте не может быть места никакому допингу')
		);
		
        $this->assertEquals(
			"Gorbachev prizval MOK dopustit' na Olimpiadu \"chistyh\" sportsmenov",
			Cyrillic::translit('Горбачев призвал МОК допустить на Олимпиаду "чистых" спортсменов')
		);
		
        $this->assertEquals(
			"\"Breksit\" privel k padeniju delovoj aktivnosti v Britanii",
			Cyrillic::translit('"Брексит" привел к падению деловой активности в Британии')
		);
		
        $this->assertEquals(
			"MOK nashel zapreshhennyje veshhestva v analizah jeshhe 45 sportsmenov",
			Cyrillic::translit('МОК нашел запрещенные вещества в анализах еще 45 спортсменов')
		);
		
        $this->assertEquals(
			"Sejm Pol'shi priznal \"volynskuju rezn'u\" genocidom",
			Cyrillic::translit('Сейм Польши признал "волынскую резню" геноцидом')
		);
		
    }
	
}