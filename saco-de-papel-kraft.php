<?php $h1 = "Saco de papel kraft"; $title  = "Saco de papel kraft"; $desc = "O saco papel kraft é desenvolvido por meio de uma mistura de fibras de celulose, que garante ótima resistência e durabilidade ao acessório. Por esse motivo, o produto é amplamente utilizado na confecção de embalagens, bem como em trabalhos de modelagem e impressão."; $var = "Saco de papel kraft"; include('inc/head.php');?></head><body><?php include('inc/topo.php');?><main><div class="content" itemscope itemtype="https://schema.org/Products"><section><?=$caminhosacos?><div class="wrapper-categorias"><div class="destaque txtcenter"><div class="text-categoria"><div class="categoria1"><h2 class=" orange-text product-text"> <?=$h1?></h2></div><?php include ('inc/aside-sacos.php'); ?><div class="forma-content-product"><div class="categoria2" ><div class="bloco-categoria1" data-anime2="left"><img id="img1" src="#" alt=""></div><div class="bloco-categoria2"><p>O saco papel kraft é desenvolvido por meio de uma mistura de fibras de celulose, que garante ótima resistência e durabilidade ao acessório. Por esse motivo, o produto é amplamente utilizado na confecção de embalagens, bem como em trabalhos de modelagem e impressão.</p></div></div><div class="categoria2"><div class="bloco-categoria2" data-anime2="up"><p>O nome “kraft” é usado para definir papeis não branqueados. Nesse sentido, uma das principais características do saco papel kraft é a sua cor amarronzada, além das variações de castanho, amarelo, laranja e azul (monolúcido ou alisado).</p></div> <div class="bloco-categoria1"  data-anime2="right"><img id=img2  src="#" alt=""></div></div></div><div><br><h3 class="orange-text format-text"> Os melhores <?=$h1?></h3><p class="paragrafo-div3">Devido à ótima resistência do papel kraft, o item é amplamente usado pelas indústrias que trabalham com impressão em larga escala, sendo possível adquirir o produto em bobinas especiais. Além disso, é possível encontrar variações do kraft, como é o caso do kraft liner, perfurado, puro e reciclado. Vale destacar que o papel kraft tem como principal vantagem o preço econômico de investimento, sendo um dos produtos de melhor custo-benefício do mercado.</p></div><br><div class="categoria-galeria" data-anime2="up"><h3 class="orange-text format-text">  Galeria de imagens ilustrativas de <br> <?=$h1?></h3><br><ul class="thumbnails slider-produto "><?php include ('inc/vetKey-sacos.php');$limite = 0;?><?php foreach ($vetKey as $key => $vetor) {if ($limite <= 10) { ?><li><a class="lightbox" rel="nofollow" href="<?=$url?>imagens/imgs-produtos/<?=$vetor['url']?>.jpg" title="<?=$vetor['key']?>"><div class="overflowimg"><img  src="<?=$url?>imagens/imgs-produtos/<?=$vetor['url']?>.jpg" alt="<?=$vetor['key']?>" title="<?=$vetor['key']?>"/></div></a><h2 class="format-text"><?=$vetor['key']?></h2></li><?php }$limite++; } ?></ul><br><br><a class="fancybox" data-fancybox-group="group1"></a></div><div><?php include ('inc/busca-mpi.php');?></div><div><?php include ('inc/regioes.php');?></div><div> <?php include('inc/form-mpi-emb.php');?></div></div></div></div> </section></div></main><section class="final-especialidades"><div class="produtos-especialidades"></div></section><script> var url_atual = window.location.href;$("#img1").attr("src", url_atual + '-01.jpg');$("#img2").attr("src", url_atual + '-02.jpg');</script><?php include('inc/footer.php');?></body></html>