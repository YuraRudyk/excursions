<?php
class FluidCache_Standalone_partial_Action_Tool_ImportantActions_ClearOpcodeCache_0fefc34c9fe8a907241e83953e7330fe635de8c0 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('listOfOpcodeCaches'));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	<h3>Clear PHP opcode cache</h3>
	<p>
		This clears the complete opcode caches of the active opcode cache systems, if the system supports reset.
	</p>
	<p>Available PHP opcode cache systems</p>
	<ul>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = $currentVariableContainer->getOrNull('listOfOpcodeCaches');
$arguments4['as'] = 'opcodeCache';
$arguments4['key'] = 'opcodeCacheName';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
			<li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = $currentVariableContainer->getOrNull('opcodeCacheName');
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output6 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('opcodeCache'), 'version', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output6 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output6 .= ') -
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('opcodeCache'), 'canReset', $renderingContext));
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'reset is supported';
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'reset is not supported';
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output15 .= '
				';
return $output15;
};
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'reset is supported';
};
$arguments13['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'reset is not supported';
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '
			</li>
		';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	</ul>
	<form method="post">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'Action/Common/HiddenFormFields';
$arguments20['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments22 = array();
$arguments22['partial'] = 'Action/Common/SubmitButton';
// Rendering Array
$array23 = array();
$array23['name'] = 'clearOpcodeCache';
$array23['text'] = 'Clear PHP opcode cache';
$arguments22['arguments'] = $array23;
$arguments22['section'] = NULL;
$arguments22['optional'] = false;
$renderChildrenClosure24 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure24, $renderingContext);

$output3 .= '
	</form>
	<hr />
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1485159813    7217      