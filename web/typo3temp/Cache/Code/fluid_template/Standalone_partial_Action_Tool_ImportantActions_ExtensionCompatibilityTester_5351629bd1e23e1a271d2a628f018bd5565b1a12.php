<?php
class FluidCache_Standalone_partial_Action_Tool_ImportantActions_ExtensionCompatibilityTester_5351629bd1e23e1a271d2a628f018bd5565b1a12 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h3>Check for broken extensions</h3>
<p>
	Checks whether the local extensions\' ext_tables and ext_localconf files can be included without errors,
	meaning they can be loaded without breaking the system.
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
	<div id="checkExtensions" data-protocolurl="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = $currentVariableContainer->getOrNull('extensionCompatibilityTesterProtocolFile');
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() {return NULL;};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());

$output0 .= (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments3['encoding'] !== NULL ? $arguments3['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments3['doubleEncode']));

$output0 .= '" data-errorprotocolurl="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = $currentVariableContainer->getOrNull('extensionCompatibilityTesterErrorProtocolFile');
$arguments6['keepQuotes'] = false;
$arguments6['encoding'] = NULL;
$arguments6['doubleEncode'] = true;
$renderChildrenClosure7 = function() {return NULL;};
$value8 = ($arguments6['value'] !== NULL ? $arguments6['value'] : $renderChildrenClosure7());

$output0 .= (!is_string($value8) ? $value8 : htmlspecialchars($value8, ($arguments6['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments6['encoding'] !== NULL ? $arguments6['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments6['doubleEncode']));

$output0 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments9 = array();
$arguments9['each'] = $currentVariableContainer->getOrNull('extensionCompatibilityTesterMessages');
$arguments9['as'] = 'statusMessage';
$arguments9['key'] = '';
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments12 = array();
$arguments12['partial'] = 'Action/Common/StatusMessage';
// Rendering Array
$array13 = array();
$array13['message'] = $currentVariableContainer->getOrNull('statusMessage');
$arguments12['arguments'] = $array13;
$arguments12['section'] = NULL;
$arguments12['optional'] = false;
$renderChildrenClosure14 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure14, $renderingContext);

$output11 .= '
		';
return $output11;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'Action/Common/SubmitButton';
// Rendering Array
$array16 = array();
$array16['name'] = 'checkExtensions';
$array16['text'] = 'Check extensions';
$arguments15['arguments'] = $array16;
$arguments15['section'] = NULL;
$arguments15['optional'] = false;
$renderChildrenClosure17 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure17, $renderingContext);

$output0 .= '
	</div>
</form>
';


return $output0;
}


}
#1485159813    5102      