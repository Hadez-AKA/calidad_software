<h2>Bienvenido <?= $this->Html->link($current_user['first_name'] . ' ' . $current_user['last_name'], ['controller' => 'Users', 'action' => 'view', $current_user['id']]) ?></h2>
