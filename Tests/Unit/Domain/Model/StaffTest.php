<?php

namespace C1\C1Staff\Tests\Unit\Domain\Model;

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
 * Test case for class \C1\C1Staff\Domain\Model\Staff.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Manuel Munz <t3dev@comuno.net>
 */
class StaffTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \C1\C1Staff\Domain\Model\Staff
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \C1\C1Staff\Domain\Model\Staff();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getFirstnameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFirstname()
		);
	}

	/**
	 * @test
	 */
	public function setFirstnameForStringSetsFirstname()
	{
		$this->subject->setFirstname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'firstname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMiddlenameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getMiddlename()
		);
	}

	/**
	 * @test
	 */
	public function setMiddlenameForStringSetsMiddlename()
	{
		$this->subject->setMiddlename('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'middlename',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLastnameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLastname()
		);
	}

	/**
	 * @test
	 */
	public function setLastnameForStringSetsLastname()
	{
		$this->subject->setLastname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lastname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGenderReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setGenderForIntSetsGender()
	{	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone()
	{
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFax()
		);
	}

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax()
	{
		$this->subject->setFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMailReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getMail()
		);
	}

	/**
	 * @test
	 */
	public function setMailForStringSetsMail()
	{
		$this->subject->setMail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mail',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForStringSetsPosition()
	{
		$this->subject->setPosition('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'position',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmploymentStartReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEmploymentStart()
		);
	}

	/**
	 * @test
	 */
	public function setEmploymentStartForStringSetsEmploymentStart()
	{
		$this->subject->setEmploymentStart('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'employmentStart',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBiographyReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBiography()
		);
	}

	/**
	 * @test
	 */
	public function setBiographyForStringSetsBiography()
	{
		$this->subject->setBiography('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'biography',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFreeTextReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFreeText()
		);
	}

	/**
	 * @test
	 */
	public function setFreeTextForStringSetsFreeText()
	{
		$this->subject->setFreeText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'freeText',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBirthdateReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getBirthdate()
		);
	}

	/**
	 * @test
	 */
	public function setBirthdateForDateTimeSetsBirthdate()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setBirthdate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'birthdate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIsManagementReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getIsManagement()
		);
	}

	/**
	 * @test
	 */
	public function setIsManagementForBoolSetsIsManagement()
	{
		$this->subject->setIsManagement(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'isManagement',
			$this->subject
		);
	}
}
