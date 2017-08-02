<form method="GET" action="<?php echo $action?>">
	<input type="hidden" name="m_shop" value="<?php echo $m_shop?>">
	<input type="hidden" name="m_orderid" value="<?php echo $m_orderid?>">
	<input type="hidden" name="m_amount" value="<?php echo $m_amount?>">
	<input type="hidden" name="m_curr" value="<?php echo $m_curr?>">
	<input type="hidden" name="m_desc" value="<?php echo $m_desc?>">
	<input type="hidden" name="m_sign" value="<?php echo $sign?>">
	<input type="hidden" name="lang" value="<?php echo $lang?>">
	<input type="submit" value="<?php echo $button_confirm; ?>" class="btn btn-primary" />
</form>