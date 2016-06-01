<?php
namespace C1\C1Staff\Domain\Model;

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
 * Staff
 */
class Staff extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * firstname
     *
     * @var string
     */
    protected $firstname = '';
    
    /**
     * middlename
     *
     * @var string
     */
    protected $middlename = '';
    
    /**
     * lastname
     *
     * @var string
     */
    protected $lastname = '';
    
    /**
     * gender
     *
     * @var int
     */
    protected $gender = 0;
    
    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';
    
    /**
     * fax
     *
     * @var string
     */
    protected $fax = '';
    
    /**
     * mail
     *
     * @var string
     */
    protected $mail = '';
    
    /**
     * position
     *
     * @var string
     */
    protected $position = '';
    
    /**
     * employmentStart
     *
     * @var string
     */
    protected $employmentStart = '';
    
    /**
     * biography
     *
     * @var string
     */
    protected $biography = '';
    
    /**
     * freeText
     *
     * @var string
     */
    protected $freeText = '';
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * birthdate
     *
     * @var \DateTime
     */
    protected $birthdate = null;
    
    /**
     * isManagement
     *
     * @var bool
     */
    protected $isManagement = false;
    
    /**
     * Returns the firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Sets the firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    
    /**
     * Returns the middlename
     *
     * @return string $middlename
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }
    
    /**
     * Sets the middlename
     *
     * @param string $middlename
     * @return void
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }
    
    /**
     * Returns the lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    /**
     * Sets the lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    
    /**
     * Returns the gender
     *
     * @return int $gender
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    /**
     * Sets the gender
     *
     * @param int $gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    
    /**
     * Returns the mail
     *
     * @return string $mail
     */
    public function getMail()
    {
        return $this->mail;
    }
    
    /**
     * Sets the mail
     *
     * @param string $mail
     * @return void
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    
    /**
     * Returns the position
     *
     * @return string $position
     */
    public function getPosition()
    {
        return $this->position;
    }
    
    /**
     * Sets the position
     *
     * @param string $position
     * @return void
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
    
    /**
     * Returns the employmentStart
     *
     * @return string $employmentStart
     */
    public function getEmploymentStart()
    {
        return $this->employmentStart;
    }
    
    /**
     * Sets the employmentStart
     *
     * @param string $employmentStart
     * @return void
     */
    public function setEmploymentStart($employmentStart)
    {
        $this->employmentStart = $employmentStart;
    }
    
    /**
     * Returns the biography
     *
     * @return string $biography
     */
    public function getBiography()
    {
        return $this->biography;
    }
    
    /**
     * Sets the biography
     *
     * @param string $biography
     * @return void
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
    }
    
    /**
     * Returns the freeText
     *
     * @return string $freeText
     */
    public function getFreeText()
    {
        return $this->freeText;
    }
    
    /**
     * Sets the freeText
     *
     * @param string $freeText
     * @return void
     */
    public function setFreeText($freeText)
    {
        $this->freeText = $freeText;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Returns the birthdate
     *
     * @return \DateTime $birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    
    /**
     * Sets the birthdate
     *
     * @param \DateTime $birthdate
     * @return void
     */
    public function setBirthdate(\DateTime $birthdate)
    {
        $this->birthdate = $birthdate;
    }
    
    /**
     * Returns the isManagement
     *
     * @return bool $isManagement
     */
    public function getIsManagement()
    {
        return $this->isManagement;
    }
    
    /**
     * Sets the isManagement
     *
     * @param bool $isManagement
     * @return void
     */
    public function setIsManagement($isManagement)
    {
        $this->isManagement = $isManagement;
    }
    
    /**
     * Returns the boolean state of isManagement
     *
     * @return bool
     */
    public function isIsManagement()
    {
        return $this->isManagement;
    }

}