<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {block name="cssFiles"}
    <!-- Bootstrap CSS -->
    <link href="{$BASE_URL}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$BASE_URL}css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- FONT AWSOME -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Other CSS files -->
    <link href="{$BASE_URL}css/style.css" rel="stylesheet">
    <link href="{$BASE_URL}css/navbar.css" rel="stylesheet">
    <link href="{$BASE_URL}css/footer.css" rel="stylesheet">
    {/block}

    
    <link rel = "shortcut icon" href = "{$BASE_URL}images/favicon.png') }}">
    <title>UpFAQ</title>
  </head>
  <body>
    <div class="row">
        <!--{if $LOGGED}
            {include file='common/navbar_logged.tpl'}
        {else}-->
            {include file='common/navbar_unlogged.tpl'}
        <!--{/if}-->

        {block name="content"}

        {/block}

        {include file='common/footer.tpl'}