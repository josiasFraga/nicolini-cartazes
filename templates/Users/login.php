<h2>Login</h2>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<?= $this->Form->control('login', ['label' => 'Username']) ?>
<?= $this->Form->control('pswd', ['label' => 'Password']) ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>