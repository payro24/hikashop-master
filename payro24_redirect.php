<?php
/**
 * payro24 payment plugin
 *
 * @developer JMDMahdi, vispa, mnbp1371
 * @publisher payro24
 * @package VirtueMart
 * @subpackage payment
 * @copyright (C) 2020 payro24
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPLv2 or later
 *
 * http://payro24.ir
 */
defined('_JEXEC') or die('Restricted access'); ?>
<div align="center" class="hikashop_payro24_end" id="hikashop_payro24_end">
	<span id="hikashop_payro24_end_message" class="hikashop_payro24_end_message">
		<?php echo JText::sprintf('PLEASE_WAIT_BEFORE_REDIRECTION_TO_X', $this->payment_name) . '<br/>' . JText::_('CLICK_ON_BUTTON_IF_NOT_REDIRECTED'); ?>
	</span>
    <span id="hikashop_payro24_end_spinner" class="hikashop_payro24_end_spinner hikashop_checkout_end_spinner">
	</span>
    <br/>
    در صورت عدم انتقال <a href="<?php echo $this->payment_params->url; ?>">اينجا</a> کليک کنيد.
    <script type="text/javascript">window.location = "<?php echo $this->payment_params->url; ?>";</script>
</div>
