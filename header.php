<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php $this -> archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('含关键词 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); $this -> options -> title(); ?></title>
    <script>(location.hostname !== 'rou.im') && location.replace('https://rou.im')</script>
    <link rel="pingback" href="<?php $this->options->siteUrl('index.php/action/xmlrpc'); ?>">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php $this->options->siteUrl('index.php/action/xmlrpc?rsd'); ?>">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php $this->options->siteUrl('index.php/action/xmlrpc?wlw'); ?>">
<?php if($this -> options -> favicon): ?>
    <link rel="icon" href="<?php $this -> options -> favicon(); ?>" sizes="192x192"/>
<?php else: ?>
    <link rel="icon" href="<?php $this -> options -> themeUrl('img/icon.png'); ?>" sizes="192x192"/>
<?php endif; ?>
    <link href="<?php $this -> options -> themeUrl('static/kico.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php $this -> options -> themeUrl('static/single.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=no"/>
<?php if($this -> options -> background): ?>
    <style>body:before{content: ''; background-image: url(<?php $this -> options -> background(); ?>)}</style>
<?php endif; ?>
<?php if($this -> options -> custom_css): ?>
    <style><?php $this -> options -> custom_css(); ?></style>
<?php endif; ?>
    <meta property="og:site_name" content="<?php $this -> options -> title(); ?>">
    <meta property="og:title" content="<?php $this -> archiveTitle(array(
            'category' => _t('%s'),
            'search'   => _t('含关键词 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ), ""); ?>"/>
<?php $this -> header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c4958d5c003f9dbcc9b81098f096e802";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body<?php Single::is_night() ?>>
<header>
    <div class="head-title">
        <h4><?php $this -> options -> title(); ?></h4>
    </div>
    <div class="head-action">
        <div class="toggle-btn"></div>
        <div class="search-btn"></div>
    </div>
    <form class="head-search" method="post">
        <input type="text" name="s" placeholder="搜索什么？">
    </form>
    <nav class="head-menu">
        <a href="<?php $this -> options -> siteUrl(); ?>">首页</a>
        <?php $this -> widget('Widget_Contents_Page_List') -> parse('<a href="{permalink}">{title}</a>'); ?>
<?php if($this -> user -> hasLogin()): ?>
        <a href="<?php $this -> options -> adminUrl(); ?>" target="_blank">进入后台</a>
<?php endif; ?>
    </nav>
</header>