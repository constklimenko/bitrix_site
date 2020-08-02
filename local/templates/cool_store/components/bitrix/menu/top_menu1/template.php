<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>

	<div class="main-menu">
		<a href="<?=$arItem["LINK"]?>" class="toggle-menu">
			<i class="fa fa-bars"></i>
		</a>
		<ul class="menu">
		
		<?if($arItem["SELECTED"]):?>
			<li class="selected"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			
			<?else:?>
			<li><a href="#"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
	
<?endforeach?>
		</ul>
		<?endif?>
</div>
