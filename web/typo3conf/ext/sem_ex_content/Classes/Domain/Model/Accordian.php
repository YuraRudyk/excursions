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
    protected $fouthMenu;

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
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return double
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * @param double $delay
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;
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
