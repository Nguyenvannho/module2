<?php
$thong_bao = 'hello php';
function hello()
{
    global $thong_bao;
    echo $GLOBALS['thong_bao'];
    echo $thong_bao;
}
hello();
