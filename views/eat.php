<div class="page__detail">
    <div class="page__img">
<img src="/assets/images/<?= $option['photo'];?>"> 
</div>
<div class="page__content">  
<h2 class="page__name"><?= $option['title'];?></h2>
    <p class="page__subtitle"><?= $option['short_description'];?></p>
    <div class="page__methods">
    <!-- <div class="page__icon">
         <i class="fas fa-history"></i> 
         <p class="page__time"><?= $option['delivery'];?></p>
    </div>
    <p class="page__free"><?= $option['free_delivery'];?></p>
    <p class="page__free"><?= $option['min_price'];?></p> -->

</div>
<div class="page__detailpage">
<a href="detail_page.php?q_id=<?= $option["eat_id"]; ?>">Lees meer</a>
</div>
</div> 
</div>

