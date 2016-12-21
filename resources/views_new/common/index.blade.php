<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <LINK rel="Bookmark" href="/favicon.ico" >
    <LINK rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{path('lib/html5.js')}}"></script>
    <script type="text/javascript" src="{{path('lib/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{path('lib/PIE_IE678.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{path('static/h-ui/css/H-ui.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{path('static/h-ui.admin/css/H-ui.admin.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{path('lib/Hui-iconfont/1.0.7/iconfont.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{path('lib/icheck/icheck.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{path('static/h-ui.admin/skin/default/skin.css')}}" id="skin" />
    <link rel="stylesheet" type="text/css" href="{{path('static/h-ui.admin/css/style.css')}}" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>合纵医药后台管理系统</title>
    <meta name="keywords" content="合纵医药后台管理系统">
    <meta name="description" content="合纵医药后台管理系统">
</head>
<body>


@yield('content')


<script type="text/javascript" src="{{path('lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{path('lib/layer/2.1/layer.js')}}"></script>
<script type="text/javascript" src="{{path('lib/jquery.contextmenu/jquery.contextmenu.r2.js')}}"></script>
<script type="text/javascript" src="{{path('static/h-ui/js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{path('static/h-ui.admin/js/H-ui.admin.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $(".Hui-tabNav-wp").contextMenu('myMenu1', {
            bindings: {
                'open': function(t) {
                    alert('Trigger was '+t.id+'\nAction was Open');
                },
                'email': function(t) {
                    alert('Trigger was '+t.id+'\nAction was Email');
                },
                'save': function(t) {
                    alert('Trigger was '+t.id+'\nAction was Save');
                },
                'delete': function(t) {
                    alert('Trigger was '+t.id+'\nAction was Delete')
                }
            }
        });
    });
    /*资讯-添加*/
    function article_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-添加*/
    function picture_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*产品-添加*/
    function product_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
</script>
</body>
</html>