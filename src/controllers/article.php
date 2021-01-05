<?php

function article_index()
{

    $user_age = 33;


    if ($user_age >= 21)
    {
        include_once "../src/views/article/index-A.php";
    }
    else 
    {
        include_once "../src/views/article/index-B.php";
    }
}

function article_create()
{
    include_once "../src/views/article/create.php";
    
}

function article_read()
{
    include_once "../src/views/article/read.php";
    
}

function article_update()
{
    
    include_once "../src/views/article/update.php";
}

function article_delete()
{
    include_once "../src/views/article/delete.php";
    
}