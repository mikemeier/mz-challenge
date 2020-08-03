<?php

namespace MzChallenge\Controller;

class Controller2
{
    public function indexAction(): string
    {

        return '<h1>Index2</h1> 
        <a href="/Controller2/edit">Edit</a>
        <a href="/Controller/index">Index2</a>
        <a href="/Controller/test?asd=asd">Test</a>
        ';
    }

    public function editAction(): string{
        return '<h1>Edit</h1>
        <a href="/Controller/index">Index</a>
        <a href="/Controller2/index">Index2</a>
        <a href="/Controller/test">Test</a>
        ';
    }
}
