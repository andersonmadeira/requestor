<?php namespace AndersonMadeira\Requestor;

/**
 *  Main Class?
 *
 * @author Anderson Madeira
 */
class Requestor
{
    /**
     * Greetings
     *
     * @param string $yourName Your name
     *
     * @return string a friendly message
     */
    public function greet($yourName)
    {
        return "Hello {$yourName}";
    }
}