<?php

namespace Illuminate\View\Compilers\Concerns;

trait CompilesUseStatements
{
    /**
     * Compile the inject statements into valid PHP.
     *
     * @param  string  $expression
     * @return string
     */
    protected function compileUse($expression)
    {
        $segments = explode(',', preg_replace("/[\(\)]/", '', $expression));

        $use = trim($segments[0], " '\"");
        $as = trim($segments[1], " '\"");

        return "<?php use \\{$use} as {$as}; ?>";
    }
}
