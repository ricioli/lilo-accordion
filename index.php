<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-compatible" content="IE=Edge, chrome=1">
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Alex Ricioli, Elton Pongilo">
    <title>Lilo Accordion | Simples, leve e personalizavel.</title>
    <link rel="shortcut icon" href="img/icon.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lilo-accordion.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,800" rel="stylesheet">
    <link rel="stylesheet" href="css/prism.css">
  </head>
  <body>
    <main>
      <header class="header flex middle-xs center-xs">
        <div class="text-center in-space-b-xl">
          <h1 class="text-header">LILO ACCORDION</h1>
          <span class="text-lg text-white block out-space-t-sm">Simples, leve e personalizável</span>
          <a href="https://github.com/ricioli/lilo-accordion/archive/master.zip" class="btn btn-primary out-space-h-xs out-space-t-lg">DOWNLOAD</a>
          <a href="https://github.com/ricioli/lilo-accordion" class="btn btn-ghost out-space-h-xs out-space-t-lg" target="_blank">GITHUB</a>
        </div>
      </header>
      <section class="how-to-use in-space-t-xl in-space-b-xxl">
        <header class="whole-xs in-space-lg">
          <h2 class="text-xl text-center">Como usar?</h2>
        </header>
        <div class="in-space-md">
          <div id="how-to-use-accordion" class="how-to-use-accordion">
            <div class="in-space-lg lilo-accordion-control">
              <span class="text-sm text-secundary in-space-r-md">01</span>
              <span class="text-md">Monte a estrutura</span>
              <img src="img/arrow.svg" alt="" width="24" height="24" class="icon-arrow">
            </div>
            <div class="in-space-h-lg in-space-b-lg lilo-accordion-content">
<pre class="language-html"><code class="language-html"><?php echo htmlentities(
'<div class="your-class">
  <div class="lilo-accordion-control">Controle 1</div>
  <div class="lilo-accordion-content">Conteúdo 1</div>
  <div class="lilo-accordion-control">Controle 2</div>
  <div class="lilo-accordion-content">Conteúdo 2</div>
  <div class="lilo-accordion-control">Controle 3</div>
  <div class="lilo-accordion-content">Conteúdo 3</div>
</div>'
); ?></code></pre>
            </div>
            <hr>
            <div class="in-space-lg lilo-accordion-control">
              <span class="text-sm text-secundary in-space-r-md">02</span>
              <span class="text-md">Mova o lilo para o projeto</span>
              <img src="img/arrow.svg" alt="" width="24" height="24" class="icon-arrow">
            </div>
            <div class="in-space-h-lg in-space-b-lg in-space-b-lg lilo-accordion-content">
<span class="text-sm text-secundary in-space-b-sm">Faça o download e mova a pasta <strong>dist</strong> com os arquivos <strong>.css</strong> e <strong>.js</strong> para o seu projeto</span>
<img src="img/move-folder.png" alt="" class="block in-space-t-md">
            </div>
            <hr>
            <div class="in-space-lg lilo-accordion-control">
              <span class="text-sm text-secundary in-space-r-md">03</span>
              <span class="text-md">Linque a folha de estilo</span>
              <img src="img/arrow.svg" alt="" width="24" height="24" class="icon-arrow">
            </div>
            <div class="in-space-h-lg in-space-b-lg lilo-accordion-content">
<span class="text-sm text-secundary">Adicione o <strong>lilo-accordion.css</strong> dentro da tag <strong>&lthead&gt</strong></span>
<pre class="language-html"><code class="language-html"><?php echo htmlentities(
'<link rel="stylesheet" href="dist/css/lilo-accordion.min.css">'
); ?></code></pre>
            </div>
            <hr>
            <div class="in-space-lg lilo-accordion-control">
              <span class="text-sm text-secundary in-space-r-md">04</span>
              <span class="text-md">Adicione o script do plugin</span>
              <img src="img/arrow.svg" alt="" width="24" height="24" class="icon-arrow">
            </div>
            <div class="in-space-h-lg in-space-b-lg lilo-accordion-content">
<span class="text-sm text-secundary">Adicione o <strong>Jquery</strong> e depois o <strong>jquery.lilo.accordion.js</strong> antes da tag <strong>&ltbody&gt</strong></span>
<pre class="language-html"><code class="language-html"><?php echo htmlentities(
'<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="dist/js/jquery.lilo.accordion.min.js"></script>'
); ?></code></pre>
            </div>
            <hr>
            <div class="in-space-lg lilo-accordion-control">
              <span class="text-sm text-secundary in-space-r-md">05</span>
              <span class="text-md">Inicialize o accordion</span>
              <img src="img/arrow.svg" alt="" width="24" height="24" class="icon-arrow">
            </div>
            <div class="in-space-h-lg in-space-b-lg lilo-accordion-content">
<span class="text-sm text-secundary">Inicialize o seu accordion em seu arquivo de scripts ou na sua tag de script inline</span>
<pre class="language-javascript"><code class="language-javascript">$(document).ready(function(){
  $('.your-class').liloAccordion({
    setting-name: setting-value
  });
});</code></pre>
            </div>
            <hr>
            <div class="in-space-lg lilo-accordion-control">
              <span class="text-sm text-secundary in-space-r-md">06</span>
              <span class="text-md">Conferindo o resultado</span>
              <img src="img/arrow.svg" alt="" width="24" height="24" class="icon-arrow">
            </div>
            <div class="in-space-h-lg in-space-b-lg lilo-accordion-content">
              <p data-height="265" data-theme-id="0" data-slug-hash="YaOLze" data-default-tab="css,result" data-user="alexfabianoricioli" data-embed-version="2" data-pen-title="Lilo Accordion" class="codepen">See the Pen <a href="https://codepen.io/alexfabianoricioli/pen/YaOLze/">Lilo Accordion</a> by Alex Fabiano Ricioli (<a href="https://codepen.io/alexfabianoricioli">@alexfabianoricioli</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
            </div>
            <div class="this-is-accordion">
              <img src="img/arrow.png" alt="">
              <span class="text-md text-secundary">Este accordion esta usando o Lilo :)</span>
            </div>
          </div>
        </div>
      </section>
      <section class="in-space-t-xxl in-space-b-xxl">
        <header class="whole-xs in-space-lg">
          <h2 class="text-xl text-center">Configurações</h2>
        </header>
        <div class="container flex">
          <div class="whole-xs half-md in-space-md">
            <div class="config-box">
              <h4 class="text-md">Manter apenas um item aberto</h4>
              <span class="text-sm text-secundary">Apenas um item do accordion ficará aberto</span>
              <span class="text-sm text-secundary block in-space-t-md">Parametro: onlyOneActive</span>
              <span class="text-sm text-secundary block">Tipo: boolean</span>
              <span class="text-sm text-secundary block">Padrão: true</span>
            </div>
          </div>
          <div class="whole-xs half-md in-space-md">
            <div class="config-box">
              <h4 class="text-md">Deixar o primeiro item aberto</h4>
              <span class="text-sm text-secundary">Ao carregar a página o primeiro item do accordion já vem aberto</span>
              <span class="text-sm text-secundary block in-space-t-md">Parametro: initFirstActive</span>
              <span class="text-sm text-secundary block">Tipo: boolean</span>
              <span class="text-sm text-secundary block">Padrão: true</span>
            </div>
          </div>
          <div class="whole-xs half-md in-space-md">
            <div class="config-box">
              <h4 class="text-md">Desativar o plugin</h4>
              <span class="text-sm">Ideal para sites que precisam do accordion no mobile e não no desktop</span>
              <span class="text-sm text-secundary block in-space-t-md">Parametro: destructor</span>
              <span class="text-sm text-secundary block">Tipo: boolean</span>
              <span class="text-sm text-secundary block">Padrão: false</span>
            </div>
          </div>
          <div class="whole-xs half-md in-space-md">
            <div class="config-box">
              <h4 class="text-md">Ocultar os controles</h4>
              <span class="text-sm text-secundary">Este item funciona se o plugin accordion estiver desativado</span>
              <span class="text-sm text-secundary block in-space-t-md">Parametro: hideControl</span>
              <span class="text-sm text-secundary block">Tipo: boolean</span>
              <span class="text-sm text-secundary block">Padrão: false</span>
            </div>
          </div>
          <div class="whole-xs half-md in-space-md">
            <div class="config-box">
              <h4 class="text-md">Fechar o atual e abrir o próximo</h4>
              <span class="text-sm text-secundary">Ao clicar no controle do item aberto,  fecha o item atual e abre o próximo</span>
              <span class="text-sm text-secundary block in-space-t-md">Parametro: openNextOnClose</span>
              <span class="text-sm text-secundary block">Tipo: boolean</span>
              <span class="text-sm text-secundary block">Padrão: false</span>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer in-space-v-lg">
        <div class="container">
          <div class="flex between-xs in-space-h-sm in-space-v-lg">
            <span class="text-sm text-primary">Desenvolvido por <a href="https://github.com/ricioli" class="text-link text-primary">Alex Ricioli</a> e <a href="#" class="text-link text-primary">Elton Pongilo</a></span>
            <span class="text-sm text-primary">Versão 1.2.0</span>
          </div>
        </div>
      </footer>
    </main>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery.lilo.accordion.js"></script>
    <script src="js/prism.js"></script>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
