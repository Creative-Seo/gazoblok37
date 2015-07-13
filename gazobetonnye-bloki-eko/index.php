<?php $title = 'Газобетонные блоки ЭКО, цены и размеры';?>
<?php $description = '';?>
<?php $keywords = '';?>
<?php include("array.php");?>
<?php include("../blocks/header.php");?>

<!--Breadcrumbs-->
<div class="breadcrumb-container">
  <ul class="breadcrumb">
    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></li>
    <span class="divider"> &#8594; </span>
    <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Продукция ЭКО</span></li>
  </ul>
</div>
<!--Breadcrumbs-->

<div class="rc_h2">
  <h1>Газобетонные блоки ЭКО</h1>
  <h3>Внимание! Акция.</h3> <p>При заказе газобетонных блоков в Апреле месяце специально от нашей компании клей в подарок.</p>
</div>
  <h2 class="blokis">Блоки сетновые мелкие из автоклавного ячеистого бетона</h2>
<div class="table-responsive" style="max-height:400px; overflow-y: auto;">
<table class="tabley table-striped table-bordered table-hover text-center" style="width:100%; font-size:18px">
    <tr>
        <td>Наименомание</td>
        <td>Размер блока, мм</td>
        <td>Объем блока, м<sup>3</sup></td>
        <td>Рамер поддона с блоками, мм</td>
        <td>Количество на одном поддоне, шт.</td>
        <td>Количество на одном поддоне, м<sup>3</sup></td>
    </tr>
    <tr>
        <td  colspan="4">Цена за 1 м<sup>3</sup>, руб.</td>
        <td  colspan="2">3 850</td>
    </tr>
<?php foreach($price3 as $row){ ?>
    <tr>
        <td><?php echo $row["pb"]; ?></td>
        <td><?php echo $row["r"]; ?></td>
        <td><?php echo $row["v"]; ?></td>
        <td><?php echo $row["rp"]; ?></td>
        <td><?php echo $row["cc"]; ?></td>
        <td><?php echo $row["cv"]; ?></td>
    </tr>
<?php } ?>
</table>
<p>* Поставка блоков осуществялется на поддонах. Стоимость поддона включена в стоимость родукции</p>
</div>
  <h2 class="blokis">Клей для газобетонных блоков</h2>
<div class="table-responsive" style="max-height:400px; overflow-y: auto;">
<table class="tabley table-striped table-bordered table-hover text-center" style="width:100%; font-size:18px">
    <tr>
        <td>Наименомание</td>
        <td>Прочность на сжатие</td>
        <td>Морозо-стойкость</td>
        <td>Жизне-способность</td>
        <td>Время коррекции</td>
        <td>Толщина наносимого слоя</td>
        <td>Цена за мешок 25 кг, руб.</td>
    </tr>
    <tr>
        <td>Клей для газобетонных блоков "ЭКО-BLOK"</td>
        <td>до М100</td>
        <td>до 50 циклов</td>
        <td>1,5 ч</td>
        <td>15 мин</td>
        <td>2-8 м</td>
        <td>230</td>
    </tr>
</table>
<p>* При температуре окружающей среды от +25 <sup>о</sup>С и выше поверхность блоков необходимо увлажнятьПри толщине клеевого шва более 8 мм время коррекции будет существенно возрастать, что не является дефектом. При отрицательных температурах клей необходимо применять совместно с противоморозной добавкой, либо использовать зимнюю модификацию.</p>
</div>
  <h2 class="blokis">Шебень из дробленого ячеистого бетона. Ту 5712-002-71185084-2008</h2>
<div class="table-responsive" style="max-height:400px;overflow-y: auto;">
<table class="tabley table-striped table-bordered table-hover text-center" style="width:100%; font-size:18px">
    <tr>
        <td>Фракция</td>
        <td>Насыпаемая плотность</td>
        <td>Плотность при сдавливании в цилиндре</td>
        <td>Теплопроводность</td>
        <td>Цена, руб./м<sup>3</sup></td>
    </tr>
    <tr>
        <td>5-40</td>
        <td>250-500 кг/м<sup>3</sup></td>
        <td>Не менее 0,5 Мпа</td>
        <td>Не более 0,14 Вт/(м <sup>о</sup>С)</td>
        <td>900</td>
    </tr>
</table>
<p>* Отгрузка осуществляется в "бигбегах" объемом 0,6 м<sup>3</sup>. Стоимость упаковки включена в стоимость продукции. Невозвратная тара.</p>
</div>   
<!--<div><iframe src="http://www.ECO.ru/calc/index930.html" width="810" height="800" scrolling="auto" align="left"></iframe> </div>-->
<p>* Все цены указаны с НДС.</p>
<p>&nbsp;</p>
<?php include("../blocks/footer.php");?>