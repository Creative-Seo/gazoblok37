<div class="container clearfix" itemscope itemtype="http://schema.org/Product">
	<?php include("../../blocks/zakaz-blokov.php");?>			
    <?php include("../../blocks/breadcrumbs_ytong.php");?>

  <h1 itemprop="name"><?php echo $h1;?></h1>

<div class="col-md-6">
   <img class="img-responsive center-block" src="http://www.sk-goldenhome.ru/gazobloki-ytong/img/blok-stenovoy-ytong.png" width="300" alt="Блок Ytong D500-500-250" itemprop="image">
   <?php include("../../blocks/oplata-dostavka.php");?>	
   
   
</div>

<div class="col-md-6">

  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
    <span class="pricepr center-block">Цена</span> 
    <span itemprop="price" class="pricebl"> <?php echo $pricebl;?></span><meta itemprop="priceCurrency" content="RUB"><span class="priceblsht">&nbsp;руб./м<sup>3</sup></span>
    <a href="#modal-zakaz" class="go btn skip2" style="font-weight:600; margin-right:200px">Заказать</a>
    
    <div class="nal feat"><span style="margin-top:10px"><link itemprop="availability" href="http://schema.org/InStock">В наличии</span></div>
  </div>
  <span itemprop="description" >Стеновые блоки Ytong плотностью <?php echo $pl;?> толщиной <?php echo $tol;?>. подойдут для возведения внутренних несущих стен.</span>  
    
   <h2 class="descrbl feat">Характеристики</h2>
   
    <ul class="atrsul" itemprop="propertiesList" itemscope itemtype="http://schema.org/ItemList">
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Марка по плотности (кг/м³)</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $pl;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Класс прочности на сжатие</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $clpr;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Теплопроводность (Вт/м×С)</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $tepl;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Паропроницаемость (мг/м×ч×Па)</span>
              <div class="dot"></div>
          </div>
          <div  class="atrtext"><span itemprop="value"><?php echo $paro;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Марка морозостойкости</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $moroz;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
            
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Поверхность</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $pov;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Длина,мм</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $dlina;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Ширина,мм</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $shir;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Высота,мм</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $vus;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
            
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name">Кол-во на поддоне, шт</span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $colpodd;?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
       
       
    </ul>          
   
</div>
</div>