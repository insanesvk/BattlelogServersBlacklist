<!DOCTYPE HTML>
<html class="is-adaptive">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Battlelog Servers Blacklist</title>

    <script type="text/javascript" src="libs/common/js/polyfill.js"></script>
    <script type="text/javascript" src="libs/common/js/common.js"></script>
    <script type="text/javascript" src="libs/common/js/parts.js"></script>
    <script type="text/javascript" src="libs/common/js/modules.js"></script>
    <script type="text/javascript" src="libs/common/js/init.js"></script>
    <script type="text/javascript" src="libs/common/js/components/UA.js"></script>
    <script type="text/javascript" src="libs/common/js/components/Collector.js"></script>
    <script type="text/javascript" src="libs/common/js/components/Tabset.js"></script>
    <script type="text/javascript" src="libs/common/js/components/Pagination.js"></script>
    <script type="text/javascript" src="libs/common/js/components/Gridlist.js"></script>
    <script type="text/javascript" src="libs/common/js/components/Overlay.js"></script>


    <script type="text/javascript" src="js/template.js"></script>
    <script type="text/javascript" src="js/servers.js"></script>

    <link type="text/css" rel="stylesheet" href="css/index.css">

    <script type="text/javascript">
        cm.onReady(function(){
            // Template
            new Tpl.Init();
            // Components
            window.Collector = new Com.Collector()
                .addEvent('onConstruct', function(){
                    Part.Menu();
                })
                .add('servers', function(node){
                    new Tpl.Servers({'node' : node});
                })
                .construct();
        });
    </script>
</head>

<body>

<!-- [* ******* HEADER START ******* *] -->

<div class="header">
    <div class="inner">
        <div class="logo">
            <div class="descr">Battlelog Servers Blacklist</div>
        </div>
        <div class="cm-font-title"></div>
    </div>
</div>

<!-- [* ******* HEADER END ******* *] -->

<!-- [* ******* CONTENT START ******* *] -->

<div class="content">
    <div class="inner" data-node="Template.contentInner">
        <div data-element="servers"></div>
        <div class="tpl-message" data-node="Template.errorMessage">BSB Server Error! Please try again later!</div>
    </div>
</div>

<!-- [* ******* CONTENT END ******* *] -->

<!-- [* ******* FOOTER START ******* *] -->

<div class="footer">
    <div class="inner">

    </div>
</div>

<!-- [* ******* FOOTER END ******* *] -->

</body>
</html>