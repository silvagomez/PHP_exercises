<?php
echo <<<abc
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0 auto;;
            width: 70%;
            font-family: sans-serif;
            direction: ltr;
            line-height: 1.5;
            text-align: justify;
        }
        main{
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 40px;
            }
        main> *{
            flex:1 1 auto;
        }
    </style>
</head>
<body>
    <main>
abc;
?>
