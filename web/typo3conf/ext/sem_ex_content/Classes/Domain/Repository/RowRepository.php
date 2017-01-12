<?php
namespace Rudyk\SemExContent\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class RowRepository
 *
 * @package sem_ex_content
 * @subpackage Rudyk\SemExContent\Domain\Repository
 * @author Yura Rudyk
 */
class RowRepository extends Repository
{
    /**
     * Find row by uid. Do not respect storage page.
     *
     * @param int $uid
     * @return \Rudyk\SemExContent\Domain\Model\Row
     */
    public function findByUid($uid)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);

        return $query->matching($query->equals('uid', (int) $uid))->execute()->getFirst();
    }

    /**
     * Find row by uid. Do not respect storage page and if record is hidden
     *
     * @param int $uid
     * @return \Rudyk\SemExContent\Domain\Model\Row
     */
    public function findByUidIncludeHidden($uid)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->getQuerySettings()->setIgnoreEnableFields(true);

        return $query->matching($query->equals('uid', (int) $uid))->execute()->getFirst();
    }
}
