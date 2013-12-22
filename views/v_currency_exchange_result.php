<div class="content" style="height:500px; font-size: 18px; padding-top: 190px;">
<b>
<?php echo $value;?>
<?php echo ' '; ?>
<?php echo $currency1;?>
<?php echo ' in '; ?>
<?php echo $currency2; ?>
<?php echo ' currency is '; ?>
<?php echo $exchange_value; ?>
<?php echo '<br/><br/>'; ?>
<?php echo 'Currency rates effective as of time stamp: '; ?>
<time datetime="<?=Time::display($time_stamp,'Y-m-d G:i')?>">
			<?=Time::display($time_stamp)?>
</time>
		<?php echo '<br/><br/>'; ?>
</b>
<p><a href="/currency/currency_exchange_history"><u>Look up your exchange history</u></a></p>
</div>

