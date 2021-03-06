<?php

class Foo
{
    protected $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    public function publishMethod()
    {
        return 'public';
    }

    private function protectedMethod()
    {
        return 'protected';
    }

    private function privateMethod()
    {
        return 'private';
    }

    public function emptyMethod() {}

    public function emptyMethodWithComment()
    {
        // Comment
    }

    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }

    function bMemberFunc(){}
}
