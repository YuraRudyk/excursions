<?php
namespace Rudyk\SemExContent\Domain\Model\ContentType;

/**
 * Contains coolfact properties
 *
 * @package sem_ex_content
 * @subpackage Rudyk\SemExContent\Domain\Model
 * @author Yura Rudyk
 */
trait HeadcontentTrait
{
    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Rudyk\SemExContent\Domain\Model\Headcontent>
     */
    protected $headcontents;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getHeadcontent()
    {
        return $this->headcontents;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $headcontents
     */
    public function setHeadcontent($headcontents)
    {
        $this->headcontents = $headcontents;
    }
}
