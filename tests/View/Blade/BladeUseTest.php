<?php

namespace Illuminate\Tests\View\Blade;

class BladeUseTest extends AbstractBladeTestCase
{
    public function testUseStatementsAreCompiled()
    {
        $string = "Foo @use('SomeNamespace\SomeClass', 'Foo') bar";
        $expected = "Foo <?php use \SomeNamespace\SomeClass as Foo; ?> bar";
        $this->assertEquals($expected, $this->compiler->compileString($string));
    }
}
