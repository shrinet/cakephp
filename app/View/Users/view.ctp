<div class="row">
<aside class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="actions">
            <h3><?php echo __('Actions'); ?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
                
            </ul>
        </div>
    </aside>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="users view">
        <h2><?php echo __('User'); ?> #<?php echo h($user['User']['id']); ?></h2>
            <dl>
                <dt><?php echo __('First Name'); ?></dt>
                <dd>
                    <?php echo h($user['User']['first_name']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Last Name'); ?></dt>
                <dd>
                    <?php echo h($user['User']['last_name']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Email'); ?></dt>
                <dd>
                    <?php echo h($user['User']['email']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Contact Number'); ?></dt>
                <dd>
                    <?php echo h($user['User']['contact_number']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Role'); ?></dt>
                <dd>
                    <?php echo h($user['User']['is_admin'] ? 'Admin' : 'User' ); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('State'); ?></dt>
                <dd>
                    <?php echo h($user['User']['state']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Address'); ?></dt>
                <dd>
                    <?php echo h($user['User']['address']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Created'); ?></dt>
                <dd>
                    <?php echo h($user['User']['created']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Modified'); ?></dt>
                <dd>
                    <?php echo h($user['User']['modified']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
    </main>
    
</div>
