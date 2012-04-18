<?php
/**
 * Eternally Social
 *
 * LICENSE:
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see .
 *
 * @category     User
 * @package      ForgottenCreds
 * @copyright    Copyright (c) 2011-2012 JPL Web Solutions
 * @author       Jesse P Lesperance <jesse@jplesperance.me>
 * @license      http://www.gnu.org/licenses/gpl.html GNU General Public License
 * @version      0.2
 */
/**
 * The Forgotten Credential Controller
 *
 * @author Jesse P Lesperance <jesse@jplesperance.me>
 * @since  0.2
 * @uses   Zend_Controller_Action
 */
class User_ForgotController extends Zend_Controller_Action
{
    public function indexAction()
    {
        return $this->_redirect('/');
    }

    public function usernameAction()
    {
        if ($this->getRequest()->getParam('submit') == 'Get Username') {

        }
    }

    public function passwordAction()
    {

    }
}