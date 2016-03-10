<?php
namespace Buttress\Issues;

class IssueOutputter
{

    public function output(array $issue)
    {
        echo "Issue: {$issue['title']}\n";
    }

}