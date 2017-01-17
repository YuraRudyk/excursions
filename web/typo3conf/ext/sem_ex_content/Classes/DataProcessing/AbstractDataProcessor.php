<?php
namespace Rudyk\SemExContent\DataProcessing;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/**
 * This class implements DataProcessorInterface.
 * Every new DataProcessor must extend this class. Allows access to instance of ObjectManager
 *
 * @package sem_ex_content
 * @author Yura Rudyk
 */
abstract class AbstractDataProcessor implements DataProcessorInterface
{
    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManager
     */
    protected $objectManager;

    /**
     * AbstractDataProcessor constructor.
     */
    public function __construct()
    {
        $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);
    }

    /**
     * Processes data passed to data processor.
     *
     * @param \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     * @return array
     */
    abstract public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    );
}
