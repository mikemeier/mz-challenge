<?php

namespace MzChallenge\Controller;

class Controller
{
    public function indexAction(): string
    {
        return '<h1>Index</h1>
        <a href="/Controller2/index">Index2</a>
        <a href="/Controller2/edit">Edit</a>
        <a href="/Controller/test">Test</a>
        ';
    }

    public function testAction(): string{
        return '<h1>Test</h1>
        <a href="/Controller/index">Index</a>
        <a href="/Controller2/edit">Edit</a>
        <a href="/Controller2/index">Index2</a>
        ';
    }
}
