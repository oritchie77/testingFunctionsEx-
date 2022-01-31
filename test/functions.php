<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase {

    public function testSuccessDisplayNameAsMarquee()
    {
        $input = 'Ollie';
        $expectedOutput = '<marquee>Ollie</marquee>';
        $actualOutput = displayNameAsMarquee($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureDisplayNameAsMarquee()
    {
        $input = ' ';
        $expectedOutput = false;
        $actualOutput = displayNameAsMarquee($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    public function testMalformedDisplayNameAsMarquee()
    {
      $input = [];

      $this->expectException(TypeError::class);

      $output = displayNameAsMarquee($input);
    }

}