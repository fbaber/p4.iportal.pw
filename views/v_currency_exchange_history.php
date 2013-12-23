<div class="content" style="min-height:400px; padding-top: 110px;">
<h2 class="page-header">your currency exchange History:</h2>
<?php if (count($posts) == 0) :?>
        <p>You have not performed any exchanges on this site yet.<br>Why not <a href="/currency/swap">try over exchange service</a></p>
<?php endif; ?>
<?php foreach($posts as $post): ?>
<article>
	<div class="column" style="text indent:50px">
		<h4><?='You exchanged '.$post['value'].' '.$post['currency1'].' for '.$post['exchange_value'].' '.$post['currency2']?> posted:</h4>
		<b>Conversion rate used were effective on:</b>
		<time datetime="<?=Time::display($post['as_of_date'],'Y-m-d G:i')?>">
			<?=Time::display($post['as_of_date'])?>
		</time>
	</div>
</article>
<br/>
<?php endforeach; ?>
</div>