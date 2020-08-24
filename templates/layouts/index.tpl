<html>

<head>
    {block "head"}{/block}

    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {block "css"}
    {/block}

    <script src="/assets/js/app.js"></script>
    {block "js"}
    {/block}
</head>

<body>
    {block "header"}
    {include "layouts/parts/header.tpl"}
    {/block}

    {block "main"}
    {include "layouts/parts/main.tpl"}
    {/block}

    {block "footer"}
    {include "layouts/parts/footer.tpl"}
    {/block}

    {include "devTool/vars.tpl"}
</body>

</html>