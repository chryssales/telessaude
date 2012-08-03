<div class="content">
<div class="newsHeading">Resultados da busca</div>
Você buscou pelo termo "<?php echo $this->request->data['Search']['search'];?>"
<br/>&nbsp;
<?php if($busca!=null){?>
<div class="section underLine">Notícias</div>
<?php foreach($busca as $row):?>
<div class="result">
<?php echo $row["News"]["title"]?>
</div>
<?php endforeach;?>
<?php }?>
<br/>&nbsp;
<?php if($evento!=null){?>
<div class="section underLine">Eventos</div>
<?php foreach($evento as $row):?>
<div class="result">
<?php echo $row["Event"]["name"]?>
</div>
<?php endforeach;?>
<?php }?>
</div>