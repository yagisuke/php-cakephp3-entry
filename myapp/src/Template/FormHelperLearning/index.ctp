<h1>Form Helper Learning!</h1>
<p><?= $result ?></p>
<?= $this->Form->create(null, ['type'=>'post', 'url'=>['controller'=>'FormHelperLearning', 'action'=>'index']]) ?>
<?= $this->Form->text("FormHelperLearningForm.text1") ?>
<?= $this->Form->submit() ?>
<?= $this->Form->end() ?>
