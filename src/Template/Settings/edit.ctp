<div class="settings form col-centered col-lg-10 col-md-10 col-sm-10">
	
	<?= $this->Form->create($setting,['class'=>'validatedForm']); ?>
	
		<h2><?= __('Edit Setting')?></h2>
		<div class="breadcrumbs">
			<?php
				$this->Html->addCrumb('Settings', '/settings');
				$this->Html->addCrumb('Edit setting', ['controller' => 'Settings', 'action' => 'edit']);
				echo $this->Html->getCrumbs(' / ', [
				    'text' => $this->Html->tag('span',__('',false),['class' => 'fa fa-home']),
				    'url' => ['controller' => 'Admins', 'action' => 'index'],
				    'escape' => false
				]);
			?>
		</div>
		
    <?php echo $this->Flash->render(); echo $this->Flash->render('auth'); ?>
  
		<fieldset>
			
		  <?php
				echo $this->Form->input('settingname',['type'=>'text','readonly'=>true]);
				echo $this->Form->input('settingvalue');
			?>
		
		  <?php  
		    echo $this->element('form-submit-bar'); 
		  ?>
			
		</fieldset>
	
  <?= $this->Form->end(); ?>
  
</div>