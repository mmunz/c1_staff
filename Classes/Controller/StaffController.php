<?php
namespace C1\C1Staff\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Manuel Munz <t3dev@comuno.net>, comuno
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * StaffController
 */
class StaffController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * staffRepository
     *
     * @var \C1\C1Staff\Domain\Repository\StaffRepository
     * @inject
     */
    protected $staffRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $args = $this->request->getArguments();
        if (intval($args['staff']) > 0) {
            $this->forward('show');
        }
        if (! intval($this->settings['list']['detailPid'] > 0)) {
            $this->settings['list']['detailPid'] = $GLOBALS['TSFE']->id;
        }
        $staffs = $this->staffRepository->findAll();
        $this->view->assign('settings', $this->settings);
        $this->view->assign('staffs', $staffs);
    }
    
    /**
     * action show
     *
     * @param \C1\C1Staff\Domain\Model\Staff $staff
     * @return void
     */
    public function showAction(\C1\C1Staff\Domain\Model\Staff $staff)
    {
        $this->view->assign('settings', $this->settings);
        $this->view->assign('staff', $staff);
    }

}