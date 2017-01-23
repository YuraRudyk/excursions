<?php

namespace Rudyk\SemExContent\DataProcessing;

use Rudyk\SemExContent\Domain\Repository\RowRepository;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use Rudyk\SemExContent\DataProcessing\AbstractDataProcessor;
use TYPO3\CMS\Core\Resource\StorageRepository;


class HeadcontentDataProcessor extends AbstractDataProcessor
{
    /**
     * Process data for the content element "Coolfact"
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {
        
        $processedData['headcontents'] = $this->objectManager->get(RowRepository::class)->findByUid($cObj->data['uid'])
                                                                                        ->getHeadcontent();      
                                              
        return $processedData;
    }
}
