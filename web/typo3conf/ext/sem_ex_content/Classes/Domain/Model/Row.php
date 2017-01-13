<?php
namespace Rudyk\SemExContent\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents single row in tt_content table.
 *
 * @package sem_ex_content
 * @subpackage Rudyk\SemExContent\Domain\Model
 * @author Yura Rudyk
 */
class Row extends AbstractEntity
{
    use ContentType\HeadcontentTrait;
}