<?php

use Buttress\Issues\IssueOutputter;

class IssueOutputterTest extends PHPUnit_Framework_TestCase
{

    public function testOutput()
    {
        ob_start();
        $outputter = new IssueOutputter();

        $issue = ['title' => 'TEST ISSUE'];
        $outputter->output($issue);

        $result = ob_get_contents();
        ob_end_clean();

        $this->assertEquals("Issue: TEST ISSUE\n", $result);
    }
}