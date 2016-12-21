<!DOCTYPE html>
<html>
<head lang="zh_CN">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name=”renderer” content=”webkit|ie-comp|ie-stand” />

    <title>后台管理</title>
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"  media="screen,projection"/>
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="container" id="pjax-container">
    @yield('content')
</div>
</body>
</html>