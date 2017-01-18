<?php
class FluidCache_Standalone_partial_Action_Tool_ImportantActions_DatabaseAnalyzerButton_cf1723d3c00c3d97650f8d12e88d11523ebc40ad extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<h3>Database analyzer</h3>

<p>
	The database analyzer compares the database table and field definitions of the
	current database with the specifications from all loaded extensions\' ext_tables.sql files.
	Depending on the specification, the analyzer can update, delete, and change tables
	and fields.
</p>
<form method="post">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Action/Common/HiddenFormFields';
$arguments1['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments3 = array();
$arguments3['partial'] = 'Action/Common/SubmitButton';
// Rendering Array
$array4 = array();
$array4['name'] = 'databaseAnalyzerAnalyze';
$array4['text'] = 'Compare current database with specification';
$arguments3['arguments'] = $array4;
$arguments3['section'] = NULL;
$arguments3['optional'] = false;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure5, $renderingContext);

$output0 .= '
</form>
';


return $output0;
}


}
#1484737730    2305      