<?php
class FluidCache_Standalone_partial_Action_Common_StatusMessage_a006561fb2673b4246c063944534640b83dd35be extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments1 = array();
$arguments1['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'severity', $renderingContext);
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments4 = array();
$arguments4['value'] = 'error';
$arguments4['default'] = false;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<div class="t3js-message typo3-message alert alert-danger" role="alert">
	';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments6 = array();
$arguments6['value'] = 'warning';
$arguments6['default'] = false;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<div class="t3js-message typo3-message alert alert-warning" role="alert">
	';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments8 = array();
$arguments8['value'] = 'ok';
$arguments8['default'] = false;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<div class="t3js-message typo3-message alert alert-success" role="alert">
	';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments10 = array();
$arguments10['value'] = 'information';
$arguments10['default'] = false;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<div class="t3js-message typo3-message alert alert-info" role="alert">
	';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments12 = array();
$arguments12['value'] = 'loading';
$arguments12['default'] = false;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<div class="t3js-message typo3-message alert alert-notice alert-loading" role="alert">
	';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments14 = array();
// Rendering Boolean node
$arguments14['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments14['value'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
		<div class="t3js-message typo3-message alert alert-notice" role="alert">
	';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output3 .= '
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'title', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output0 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output0 .= '</h4>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments19 = array();
// Rendering Boolean node
$arguments19['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'message', $renderingContext));
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
		<p class="messageText">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$arguments22 = array();
$arguments22['value'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
$arguments24['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('message'), 'message', $renderingContext);
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$arguments24['doubleEncode'] = true;
$renderChildrenClosure25 = function() {return NULL;};
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());
return (!is_string($value26) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments24['encoding'] !== NULL ? $arguments24['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments24['doubleEncode']));
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '</p>
	';
return $output21;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
</div>
';


return $output0;
}


}
#1485159813    7846      