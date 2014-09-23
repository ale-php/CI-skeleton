<!Document HTML>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

        <title>Progs Desenvolvimento</title>

   <style type="text/css">

       @import url("<?php echo base_url('public/css/bootstrap-space.css');?>");
       @import url("<?php echo base_url('public/css/style.css');?>");
   </style>

    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('index.php/site/home');?>">CI Skeleton</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('index.php/site/home');?>">Home</a></li>


        </ul>


    </div>
</div>
<div class="conteudo">
<?php echo $contents ?>
</div>
<div id="push"></div>


</div>

<div id="footer">
    <div class="container">
        <p class="muted credit">Progs Desenvolvimento
            <a href="https://twitter.com/__WebAlexandre">Alexandre E. Souza</a>   <?php echo date("Y");?></p>
        <div class="fb-follow" data-href="https://www.facebook.com/progs.net.b"
             data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
    </div>
</div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



<script type="text/javascript" src="<?php echo base_url('public/js/jquery-2.1.1.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.js');?>"></script>

<script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'pt-BR'}
</script>
</body>
</html>