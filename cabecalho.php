<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/estilos.css" rel="stylesheet"/>
	<link href="css/guide.css" rel="stylesheet"/>
    <link href="css/grid.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <?php include("side-menu.php"); ?>    

        <main>
            <section class="menu">
                <nav>
                    <form>
                        <div class="pesquisar-menu">
                            <button type="button">
                                <i class="fas fa-search lupa" width="18px" height="auto"></i>
                            </button>
                            <input  type="search" placeholder="Search...">
                        </div>
                    </form>
                    <div class="grupo-funcoes">
                        <div class="grupo-botoes">
                            <button type="button">
                                <i class="far fa-bell sino"></i>
                            </button>	
                            <button type="button"> 
                                <i class="far fa-envelope envelope"></i>
                            </button>
                        </div>
                        <div class="usuario-menu">
                            <p>Vanessa Duarte</p>
                            <img  src="imagens/foto.png" alt="foto">	
                        </div>
                    </div>                
                </nav>
            </section>
    
