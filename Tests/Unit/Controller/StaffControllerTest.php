<?php
namespace C1\C1Staff\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Manuel Munz <t3dev@comuno.net>, comuno
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class C1\C1Staff\Controller\StaffController.
 *
 * @author Manuel Munz <t3dev@comuno.net>
 */
class StaffControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \C1\C1Staff\Controller\StaffController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('C1\\C1Staff\\Controller\\StaffController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllStaffsFromRepositoryAndAssignsThemToView()
	{

		$allStaffs = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$staffRepository = $this->getMock('C1\\C1Staff\\Domain\\Repository\\StaffRepository', array('findAll'), array(), '', FALSE);
		$staffRepository->expects($this->once())->method('findAll')->will($this->returnValue($allStaffs));
		$this->inject($this->subject, 'staffRepository', $staffRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('staffs', $allStaffs);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenStaffToView()
	{
		$staff = new \C1\C1Staff\Domain\Model\Staff();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('staff', $staff);

		$this->subject->showAction($staff);
	}
}
