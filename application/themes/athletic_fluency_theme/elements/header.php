<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $u = new User; ?>

<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <?php Loader::element('header_required'); ?>

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,900|Yantramanav:300,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?php echo $this->getThemePath(); ?>/css/slick.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $this->getThemePath(); ?>/css/app.css" rel="stylesheet" type="text/css"/>

    <!-- Javascript -->
    <?php
    if(!$u->isLoggedIn() || $u->isLoggedIn() && !$u->superUser) : ?>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <?php endif; ?>
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style');
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            );
            document.querySelector('head').appendChild(msViewportStyle);
        }
    </script>
    <script type="text/javascript">
        var BASE_URL = "<?php echo BASE_URL; ?>";
        var CCM_THEME_PATH = "<?php echo $this->getThemePath(); ?>";
        var CCM_LOGGED_IN = <?php if($u->isLoggedIn()) : ?> true <?php else : ?> false <?php endif; ?>;
        var PAGE_ID = "<?php echo $c->getCollectionID(); ?>";
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWEKqRmvJ7h5x3R0yP7jYKnN4qHz5UzD4&v=3&libraries=geometry"></script>
</head>


<body>
<div id="main" class="<?php echo $c->getPageWrapperClass()?>">