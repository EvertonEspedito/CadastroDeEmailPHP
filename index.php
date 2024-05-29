<?php include('assets/scripts/config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="orçamento de sistema web">
    <!--Font-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Teko:wght@300&display=swap" rel="stylesheet">
    <!--Css3-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>assets/css/global.css">
    
    <title>Cadastro de Email</title>
</head>
<body>

<?php 
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'sobre':
            echo '<target target="sobre" />';
            break;
        case 'servicos':
            echo '<target target="servicos" />';
        break;
        default:
            # code...
        break;
    }
?>

<target target="home" />
<header id="home">
    <div class="center">
        <div class="logo left" ><a href="/">Everton Espedito</a></div>
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
            </ul>
        </nav><!--Desktop-->
        
        <nav class="mobile right">
            <div class="btn-mobile"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div><!--Boton-->
            <ul>
                <li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
            </ul>

        </nav><!--mobile-->
        <div class="clear"></div>
    </div><!--cemter-->    
</header>

<?php 

    if(file_exists('assets/pages/'.$url.'.php'))
    {
        //incluir pages  arquivos .php
        include('assets/pages/'.$url.'.php');
    }else{
        //pagina de erro
        if ($url != 'sobre' && $url != 'servicos') 
        {
            $pagina404 = true;
            include('assets/pages/404.php');
        }else{
            include('assets/pages/home.php');
        }
        
    }

?>

<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?> >
    <div class="center">
        <p> Everton Espedito&reg; | &copy;Todos os direitos reservados</p>
    </div><!--Center-->
</footer>

<!--Scripts-->

<script src="assets/scripts/jquery3.1.7.js"></script>
<script src="assets/scripts/script.js"></script>
<script src="assets/scripts/mapa.js"></script>
<?php 
    if($url == 'contato'){  
?>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhi5EfDAY7_71sPsqZU5-xbJZlljTck-E&callback=initMap">
</script>
<!--mapa script-->

<script>
 (g => {
 var h, a, k, p = "The Google Maps JavaScript API",
 c = "google",
 l = "importLibrary",
 q = "__ib__",
 m = document,
 b = window;
 b = b[c] || (b[c] = {});
 var d = b.maps || (b.maps = {}),
 r = new Set,
 e = new URLSearchParams,
 u = () => h || (h = new Promise(async (f, n) => {
 await (a = m.createElement("script"));
 e.set("libraries", [...r] + "");
 for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
 e.set("callback", c + ".maps." + q);
 a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
 d[q] = f;
 a.onerror = () => h = n(Error(p + " could not load."));
 a.nonce = m.querySelector("script[nonce]")?.nonce || "";
 m.head.append(a)
 }));
 d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
 })({
 key: "AIzaSyAhi5EfDAY7_71sPsqZU5-xbJZlljTck-E",
 v: "weekly",
 });
 </script>

<?php } ?>
</body>
</html>