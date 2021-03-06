<?php
/**
 * @version		$Id: edit.php 2013-07-29
 * @copyright	Copyright (C) 2013 Leonardo Alviarez - Edén Arreaza. All Rights Reserved.
 * @license		GNU General Public License version 3, or later
 * @note		Note : All ini files need to be saved as UTF-8 - No BOM
 */

// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
$document = JFactory::getDocument();
$document->addScriptDeclaration('
jQuery(document).ready(function($){
    $("#jform_country_id").bind("change",function(){
		$("#jform_state_id").load("index.php?option=com_thorhospedaje&task=states.statesAjax&id_country="+$("#jform_country_id").val(),function(){
			$("#jform_state_id").val("").trigger("liszt:updated");
		});
	});
}); 
');

?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'asset.cancel' || document.formvalidator.isValid(document.id('asset-form')))
		{
			Joomla.submitform(task, document.getElementById('asset-form'));
		}
	}
</script>
<form action="<?php echo JRoute::_('index.php?option=com_thorhospedaje&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="asset-form" class="form-validate form-horizontal">
	<div class="row-fluid">
		<!-- Begin asset -->
		<div class="span10 form-horizontal">
	<fieldset>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#details" data-toggle="tab"><?php echo empty($this->item->id) ? JText::_('TH_ASSET_NEW_ASSET') : JText::sprintf('TH_ASSET_EDIT_ASSET', $this->item->id); ?></a></li>
			<li><a href="#publishing" data-toggle="tab"><?php echo JText::_('JGLOBAL_FIELDSET_PUBLISHING');?></a></li>
			<?php
			$fieldSets = $this->form->getFieldsets('contact_data');
			foreach ($fieldSets as $name => $fieldSet) :
			?>
			<li><a href="#contact_data-<?php echo $name;?>" data-toggle="tab"><?php echo JText::_($fieldSet->label);?></a></li>
			<?php endforeach; ?>
			<?php
			$fieldSets = $this->form->getFieldsets('params');
			foreach ($fieldSets as $name => $fieldSet) :
			?>
			<li><a href="#params-<?php echo $name;?>" data-toggle="tab"><?php echo JText::_($fieldSet->label);?></a></li>
			<?php endforeach; ?>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="details">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('asset_name'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('asset_name'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('country_id'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('country_id'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('state_id'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('state_id'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('asset_desc'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('asset_desc'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image1'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image1'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image2'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image2'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image3'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image3'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image4'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image4'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image5'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image5'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image6'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image6'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image7'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image7'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image8'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image8'); ?></div>
				</div><div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image9'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image9'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('image10'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('image10'); ?></div>
				</div>
			</div>
			
			<div class="tab-pane" id="publishing">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('id'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('id'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('created_by'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('created_by'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('created_date'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('created_date'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('modified_by'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('modified_by'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('modified_date'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('modified_date'); ?></div>
				</div>
			</div>
			<?php echo $this->loadTemplate('contact_data'); ?>
			<?php echo $this->loadTemplate('params'); ?>
			<input type="hidden" name="task" value="asset.edit" />
			<?php echo JHtml::_('form.token'); ?>
			
		</div>
		</div>
	<!-- End asset -->
	<!-- Begin Sidebar -->
		<div class="span2">
			<h4><?php echo JText::_('JDETAILS');?></h4>
			<hr />
			<fieldset class="form-vertical">
				<div class="control-group">
					<div class="controls">
						<?php echo $this->form->getValue('title'); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getLabel('state'); ?>
					</div>
					<div class="controls">
						<?php echo $this->form->getInput('state'); ?>
					</div>
				</div>

				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getLabel('access'); ?>
					</div>
					<div class="controls">
						<?php echo $this->form->getInput('access'); ?>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getLabel('language'); ?>
					</div>
					<div class="controls">
						<?php echo $this->form->getInput('language'); ?>
					</div>
				</div>
			</fieldset>
		</div>
		<!-- End Sidebar -->
</form>
