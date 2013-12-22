



<div class="content">
<h2 class="page-header">Posts you are following:</h2>

<?php if (count($posts) == 0) :?>
        <p>Hello there,<?=$post['first_name']?> you haven't followed anyone on this micro blog yet.<br>Why not <a href="/posts/users">follow other Flabbers</a></p>
<?php endif; ?>

<?php foreach($posts as $post): ?>

<article>
	<div class="column" style="text indent:50px">
		<h3><?=$post['first_name']?> <?=$post['last_name']?> posted:</h3>
		<p><?=$post['content']?></p>

		<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			<?=Time::display($post['created'])?>
		</time>
	</div>
</article>

<?php endforeach; ?>
</div>

