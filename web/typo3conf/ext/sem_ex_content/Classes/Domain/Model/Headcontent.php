<?php
namespace Rudyk\SemExContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents Headcontent content element
 *
 * @package sem_ex_content
 * @author Yura Rudyk
 */
class Headcontent extends AbstractEntity
{
    /**
     * @var string
     */
    protected $firstPhone;

    /**
     * @var string
     */
    protected $secondPhone;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $firstMenu;

    /**
     * @var string
     */
    protected $secondMenu;

    /**
     * @var string
     */
    protected $thirdMenu;

    /**
     * @var string
     */
    protected $fourthMenu;

    /**
     * @var string
     */
    protected $header;

    /**
     * @var string
     */
    protected $subheader;

    /**
     * @return string
     */
    public function getFirstPhone
        return $this->firstPhone;
    }

    /**
     * @param string $firstPhone
     */
    public function setFirstPhone($firstPhone)
    {
        $this->firstPhone = $firstPhone;
    }

    /**
     * @return string
     */
    public function getSecondPhone
        return $this->secondPhone;
    }

    /**
     * @param string $secondPhone
     */
    public function setSecondPhone($secondPhone)
    {
        $this->secondPhone = $secondPhone;
    }

    /**
     * @return string
     */
    public function getEmail
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstMenu
        return $this->firstMenu;
    }

    /**
     * @param string $firstMenu
     */
    public function setFirstMenu($firstMenu)
    {
        $this->firstMenu = $firstMenu;
    }

    /**
     * @return string
     */
    public function getSecondMenu
        return $this->secondMenu;
    }

    /**
     * @param string $sedondMenu
     */
    public function setSecondMenu($secondMenu)
    {
        $this->secondMenu = $secondMenu;
    }

    /**
     * @return string
     */
    public function getThirdMenu
        return $this->thirdMenu;
    }

    /**
     * @param string $thirdMenu
     */
    public function setThirdMenu($thirdMenu)
    {
        $this->thirdMenu = $thirdMenu;
    }

    /**
     * @return string
     */
    public function getFourthMenu
        return $this->fourthMenu;
    }

    /**
     * @param string $fourthdMenu
     */
    public function setFourthMenu($fourthMenu)
    {
        $this->fourthMenu = $fourthMenu;
    }

    /**
     * @return string
     */
    public function getHeader
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getSubheader
        return $this->subheader;
    }

    /**
     * @param string $subheader
     */
    public function setSubheader($subheader)
    {
        $this->subheader = $subheader;
    }

    
    /**
     * @return \Rudyk\SemExContent\Domain\Model\Row
     */
    public function getHeadcontent()
    {
        return $this->headcontent;
    }

    /**
     * @param \Rudyk\SemExContent\Domain\Model\Row $headcontent
     */
    public function setHeadcontent($headcontent)
    {
        $this->headcontent = $headcontent;
    }
}
