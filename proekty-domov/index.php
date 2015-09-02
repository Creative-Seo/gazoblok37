<?php $title = 'Проекты домов YTONG в Иваново и области';?>
<?php $description = '';?>
<?php $keywords = '';?>
<?php $array_dom = json_decode('[
        {"url":"altena_1641","title":"Альтена","s":"190","live":"круглогодичное","img":"dergach"},
        {"url":"berndorf_1642","title":"Берндорф","s":"256","live":"круглогодичное","img":"rycheek"},
		{"url":"bilefeld_1643","title":"Билефельд","s":"157","live":"сезонное","img":"inessa"},
		{"url":"constanz_1644","title":"Констанц","s":"147","live":"сезонное","img":"danil"},
		{"url":"meisen_1645","title":"Мэйсен","s":"265","live":"круглогодичное","img":"kornekia"},
		{"url":"oberhof_1649","title":"Оберхоф","s":"190","live":"круглогодичное","img":"zadora"},
		{"url":"duisburg_1837","title":"Дуйсбург","s":"170","live":"круглогодичное","img":"dui"},
		{"url":"shtendal_1648","title":"Штендаль","s":"215","live":"круглогодичное","img":"simon"},
		{"url":"koeln_1838","title":"Кёльн","s":"220","live":"круглогодичное","img":"kel"},
		{"url":"kassel_1839","title":"Кассель","s":"142,5","live":"круглогодичное","img":"kas"},
		{"url":"rheinsberg_1840","title":"Райнсберг","s":"130","live":"круглогодичное","img":"rai"},
		{"url":"freiburg_1841","title":"Фрайбург","s":"130","live":"круглогодичное","img":"fri"},
		{"url":"essen_1842","title":"Эссен","s":"217,5","live":"круглогодичное","img":"ess"},
		{"url":"marburg_1843","title":"Марбург","s":"153","live":"круглогодичное","img":"mar"},
		{"url":"dessau_2074","title":"Дессау","s":"165","live":"круглогодичное","img":"dessau_170"},
		{"url":"stuttgatt_2221","title":"Штутгарт","s":"240","live":"круглогодичное","img":"T2_170"},
		{"url":"munchen_2275","title":"Мюнхен","s":"148,5","live":"круглогодичное","img":"mun_170"},
		{"url":"sauna_2545","title":"Сауна","s":"50","live":"","img":"sauna"},
		{"url":"klausdorf_2549","title":"Клаусдорф","s":"99","live":"круглогодичное","img":"klausdorf"}
    ]',true);?>
<?php include("../blocks/header.php");?>

<!--Breadcrumbs-->
<div class="breadcrumb-container">
  <ul class="breadcrumb">
    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></li>
    <span class="divider"> &#8594; </span>
    <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Проекты домов</span></li>
  </ul>
</div>
<!--Breadcrumbs-->


<div class="rc_h2">
	<h1>Типовые проекты YTONG</h1>
</div>
<p>Для большинства граждан России индивидуальное жильё по-прежнему остаётся недоступным. Чтобы разрешить эту проблему, мы разработали систему комплектации и строительства: <a href="<?php echo HTTP_SERVER;?>rastushchiy-dom/">«РАСТУЩИЙ ДОМ»</a></p>
<div>
	<p><span id="printContent2">Для нас крайне важно всегда быть на пике инноваций. <br>
	Создавая   уникальные проекты исключительного качества, лаконичности и надежности,   мы уделяем особое внимание энергоэффетивности и экологичности, чтобы   каждый раз заходя в свой дом, Вы просто наслаждались его уютом без   лишних затрат.</span></p>
<noindex>
	<div class="row">
 
<?php foreach($array_dom as $row){ ?>
    <div class="col-sm-6 col-md-6 col-lg-4 row padding-5">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding-5">
			<a href="http://www.ytong.ru/ru/content/<?php echo $row["url"];?>.php" title="<?php echo $row["title"];?>" target="_blank" rel="nofollow"><img class="img-responsive" src="<?php echo HTTP_SERVER;?>images/<?php echo $row["img"];?>.jpg" alt="<?php echo $row["title"];?>" border="0"></a>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding-5">
			<p>Общая площадь -</p> <p><?php echo $row["s"];?> м²</p><br>
			Проживание - <?php echo $row["live"];?><br>
			<a target="_blank" href="http://www.ytong.ru/ru/content/<?php echo $row["url"];?>.php"><?php echo $row["title"];?></a></p>
		</div>
	</div>
<?php } ?>
	</div>
</noindex>
	

<div>
  <div id="contTextID">
    <p><span id="printContent2">Наши проекты изначально разработаны с учетом особенностей материалов YTONG   и их свойств, позволяющих сделать строительство дома быстрым и приятным   делом. Учтены ассортимент и размеры выпускаемой продукции. Теперь Вам   не придется ломать голову над тем, как приспособить имеющиеся в наличии   материалы к тому, что для Вас нарисовал архитектор. Все это учтено в   типовых проектах YTONG.</span></p></div>
</div>
</div>
<p>&nbsp;</p>

	<p class="h2">Типовые проекты GoldenHome</p>
<div class="row golden">
<?php 
$dir = scandir('./');
if (false !== $dir) {
    $dirs = preg_grep('/proekt-\w+/', $dir);
	foreach($dirs as $row) { 
		include($row."/block.php");
}}
?>
</div>
<?php include("../blocks/footer.php");?>