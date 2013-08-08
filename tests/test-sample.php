<?php

class OxfordCommaDangitTest extends WP_UnitTestCase {
	function testStrippers() {
		$string      = 'We invited the strippers, JFK and Stalin.';
		$commaString = 'We invited the strippers, JFK, and Stalin.';
		$newString   = oxford_comma_dangit( $string );
		$newString2  = oxford_comma_dangit( $commaString );

		$this->assertSame( $commaString, $newString );
		$this->assertSame( $commaString, $newString2 );
	}

	function testNoComma(){
		$string    = 'Scott Taylor says YOLO and Balls';
		$newString =  oxford_comma_dangit( $string );

		$this->assertSame( $string, $newString );
	}

	function testPhrase(){
		$string      = 'WordPress is a content management system, application framework and blogging platform.';
		$commaString = 'WordPress is a content management system, application framework, and blogging platform.';
		$newString   = oxford_comma_dangit( $string );
		$newString2  = oxford_comma_dangit( $commaString );

		$this->assertSame( $commaString, $newString );
		$this->assertSame( $commaString, $newString2 );
	}

	function testMultipleSentencesAtOnce(){
		$string      = 'WordPress is a content management system, application framework and blogging platform. We invited the strippers, JFK and Stalin.' ;
		$commaString = 'WordPress is a content management system, application framework, and blogging platform. We invited the strippers, JFK, and Stalin.' ;
		$newString   = oxford_comma_dangit( $string );
		$newString2  = oxford_comma_dangit( $commaString );

		$this->assertSame( $commaString, $newString );
		$this->assertSame( $commaString, $newString2 );
	}

	function testParentheticalComma(){
		$string = 'Nacin, lead developer of WordPress, likes to play hockey and cook meat.';
		$newString   = oxford_comma_dangit( $string );

		$this->assertSame( $string, $newString );
	}
}
