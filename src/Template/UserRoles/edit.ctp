<?php $authUser = $this->Session->read('Auth');?>

<div class="resources form col-centered col-lg-10 col-md-10 col-sm-10">
	
  <?php echo $this->Flash->render(); echo $this->Flash->render('auth'); ?>
    
	<?= $this->Form->create($user_role); ?>
	
	<h2><?= __('Edit User Role')?></h2>
	<div class="breadcrumbs">
		<?php
			$this->Html->addCrumb('User Roles', ['action'=>'index']);
			$this->Html->addCrumb('edit', ['action' => 'edit', $user_role->id]);
			echo $this->Html->getCrumbs(' / ', [
			    'text' => $this->Html->tag('span',__('',false),['class' => 'fa fa-home']),
			    'url' => ['controller' => 'SuperAdmins', 'action' => 'index'],
			    'escape' => false
			]);
		?>
	</div>
	
	<fieldset>
	
	<?php
      echo $this->Form->input('role', ['label'=>'User Role','options' => $roles,'data-live-search' => true,]);
      echo $this->Form->input('username',['label'=>'Username','readonly'=>'readonly']);
      echo $this->Form->input('password1', ['label'=>'New Password', 'id'=>'password','type'=>'password']);
      echo $this->Form->input('password2', ['label'=>'Re-enter New Password', 'id'=>'password2','type'=>'password']);
      echo $this->Form->input('first_name',['label'=>'First Name']);
      echo $this->Form->input('last_name',['label'=>'Last Name']);
      echo $this->Form->input('job_title',['label'=>'Job Title']);
      echo $this->Form->input('title',['label'=>'Title']);
      echo $this->Form->input('phone',['label'=>'Phone']);
      echo $this->Form->input('status',['options'=> ['Y'=>'Active','P'=>'Pending','S'=>'Suspended'], 'label'=>'User Status']);
    ?>
      
      
      
    <?php  
      echo $this->element('form-submit-bar'); 
    ?>
    
	</fieldset>
	
  <?= $this->Form->end(); ?>
  
</div>
