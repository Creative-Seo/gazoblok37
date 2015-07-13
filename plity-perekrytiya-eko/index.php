<?php $title = 'Плиты перекрытия ЭКО, цены и размеры';?>
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
  <h1>Плиты перекрытия ЭКО</h1>
</div>
  <h2 class="blokis">Пустотные плиты перекрытия, высота 160 мм</h2>
<div class="table-responsive" style="max-height:400px; overflow-y: auto;">
<table class="tabley table-striped table-bordered table-hover text-center" style="width:100%; font-size:18px">
    <tr>
        <td>Наименомание</td>
        <td>Масса, кг</td>
        <td>Цена, руб.</td>
		<td width="20%">Загрузка в машину 20т., шт.</td>
    </tr>
<?php foreach($price3 as $row){ ?>
    <tr>
        <td><?php echo $row["pb"]; ?></td>
        <td><?php echo $row["m"]; ?></td>
        <td><?php echo $row["n"]; ?></td>
        <td><?php echo $row["col"]; ?></td>
    </tr>
<?php } ?>
</table>

</div>
  <h2 class="blokis">Пустотные плиты перекрытия, высота 220 мм</h2>
<div class="table-responsive" style="max-height:400px; overflow-y: auto;">
<table class="tabley table-striped table-bordered table-hover text-center" style="width:100%; font-size:18px">
    <tr>
        <td>Наименомание</td>
        <td>Масса, кг</td>
        <td>Цена, руб.</td>
		<td width="20%">Цена с петлями, руб.</td>
		<td width="20%">Загрузка в машину 20т., шт.</td>
    </tr>
<?php foreach($price1 as $row){ ?>
    <tr>
        <td><?php echo $row["pb"]; ?></td>
        <td><?php echo $row["m"]; ?></td>
<?php if ($row["n0"]) {?> <td><?php echo $row["n0"]; ?></td>
<?php } else {?> <td><?php if ($row["n8"]){echo $row["n8"];} ?></td><?php } ?>
        <td><?php if ($row["n8p"]){echo $row["n8p"];} ?></td>
        <td><?php echo $row["col"]; ?></td>
    </tr>
<?php } ?>
</table>
<p>* Масса изделия ПБ расчитана при объемном весе бетона 2400 кг/м3. При изменении объемной массы бетона вес плиты может изменяться.</p>
</div>
  <h2 class="blokis">Пустотные плиты перекрытия, высота 300 мм</h2>
<div class="table-responsive" style="max-height:400px; overflow-y: auto;">
<table class="tabley table-striped table-bordered table-hover text-center" style="width:100%; font-size:18px">
    <tr>
        <td>Наименомание</td>
        <td>Масса, кг</td>
        <td>Цена, руб.</td>
		<td width="20%">Загрузка в машину 20т., шт.</td>
    </tr>
    <tr>
        <td colspan="2">Цена за 1 погонный метр</td>
        <td>2 663</td>
		<td></td>
    </tr>
<?php foreach($price2 as $row){ ?>
    <tr>
        <td><?php echo $row["pb"]; ?></td>
        <td><?php echo $row["m"]; ?></td>
        <td><?php if ($row["n8"]){echo $row["n8"];} ?></td>
        <td><?php echo $row["col"]; ?></td>
    </tr>
<?php } ?>
</table>
<p>* Масса изделия 3 ПБ расчитана при объемном весе бетона 2500 кг/м3. При изменении объемной массы бетона вес плиты может изменяться.</p>
</div>
<p>* Все цены указаны с НДС.</p>
<p>&nbsp;</p>
<?php include("../blocks/footer.php");?>