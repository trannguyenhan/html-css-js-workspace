<div><h2><strong><?php echo $product['Product']['name']?></strong>
</div>

<div><h2>Price: $<?php echo $product['Product']['price']?></h2>


<?php if (!empty($product['Tag'])):?>
<h2>Tags:</h2>

<?php foreach ($product['Tag'] as $tags):?>
<div class="tag">
<?php echo $tags['Tag']['name']?>
</div>
<?php endforeach?>
</div>
<?php endif?>