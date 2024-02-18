<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Flash',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => 'You must be logged in to view this page.',
            'loginError' => 'Invalid Username or Password entered, please try again.',
            'unauthorizedRedirect' => [
                'controller' => 'users',
                'action' => 'index',
                'prefix' => false
            ],
            'authorize' => array('Controller'),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email')
                )
            )
     
        ));
     
    // only allow the login controllers only
    public function beforeFilter() {
        $this->Auth->allow('login','index', 'view');
    }
     
    public function isAuthorized($user) {
        // Here is where we should verify the role and give access based on role
        if ($this->action === 'add' || $this->action === 'view') {
            return true;
        }
        // Admin can access every action
        if ($user['User']['is_admin']) {
            return true;
        }
        return false;
    }
}
