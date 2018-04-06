# Lilo Accordion

Plugin para accordion em jQuery. Simples, leve e personalizável.

## Como usar?

### Monte a estrutura
```
<div class="your-class">
  <div class="lilo-accordion-control">Controle 1</div>
  <div class="lilo-accordion-content">Conteúdo 1</div>
  <div class="lilo-accordion-control">Controle 2</div>
  <div class="lilo-accordion-content">Conteúdo 2</div>
  <div class="lilo-accordion-control">Controle 3</div>
  <div class="lilo-accordion-content">Conteúdo 3</div>
</div>
```
### Mova o lilo para o projeto
### Linque a folha de estilo
> Exemplo:
```
<link rel="stylesheet" href="css/lilo-accordion.min.css">
```
### Adicione o script do plugin
> Exemplo:
```
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="js/jquery.lilo.accordion.min.js"></script>
```
### Inicialize o accordion
> Exemplo:
```
<script>
  $('.your-class').liloAccordion();
</script>
```

## Configurações
### Manter apenas um item aberto
Apenas um item do accordion ficará aberto
```
Parametro: onlyOneActive
Tipo: boolean
Padrão: true
```
> Exemplo:
```
$('.your-class').liloAccordion({
  onlyOneActive: true
});
```
### Deixar o primeiro item aberto
Ao carregar a página o primeiro item do accordion já vem aberto
```
Parametro: initFirstActive
Tipo: boolean
Padrão: true
```
> Exemplo:
```
$('.your-class').liloAccordion({
  initFirstActive: true
});
```
### Desativar o plugin
Ideal para sites que precisam do accordion no mobile e não no desktop
```
Parametro: destructor
Tipo: boolean
Padrão: false
```
> Exemplo:
```
$('.your-class').liloAccordion({
  destructor: false
});
```
### Ocultar os controles
Este item funciona se o plugin accordion estiver desativado
```
Parametro: hideControl
Tipo: boolean
Padrão: false
```
> Exemplo:
```
$('.your-class').liloAccordion({
  hideControl: false
});
```
### Fechar o atual e abrir o próximo
Ao clicar no controle do item aberto, fecha o item atual e abre o próximo
```
Parametro: openNextOnClose
Tipo: boolean
Padrão: false
```
> Exemplo:
```
$('.your-class').liloAccordion({
  openNextOnClose: false
});
```

## Acesse nosso site
[Lilo Acordion](https://ricioli.github.io/lilo-accordion/)

## Licença

MIT License (MIT)

Copyright © 2018 Alex Fabiano Ricioli
