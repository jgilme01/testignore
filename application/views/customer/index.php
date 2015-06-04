<?php
/**
 * view/customer/index.php
 *
 * view page for generic Customer controller
 *
 * Used to TEST GigCentral
 *
 * @package ITC260
 * @subpackage Customer
 * @author
 * @version 1.0 2015/5/14
 * @link
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see controllers/Customer.php
 * @see models/Customer_model.php
 * @todo none
 */

$this->load->view($this->config->item('theme').'header'); 
$this->load->library('passphraseclass');
$this->passphraseclass->passphrase();
?>
<h2><?= $title; ?></h2>

<?php foreach($query->result() as $customer): ?>

    <?php echo $customer->FirstName . "<br / >"; ?>

<?php endforeach; ?>

<?php $this->load->view($this->config->item('theme').'footer'); ?>
