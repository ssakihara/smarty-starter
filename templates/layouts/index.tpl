<html>

<head>
    {block "head"}{/block}

    <link rel="stylesheet" href="/assets/css/app.css">
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