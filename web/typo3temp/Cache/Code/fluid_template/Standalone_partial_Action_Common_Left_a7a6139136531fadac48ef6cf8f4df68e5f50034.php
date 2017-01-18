<?php
class FluidCache_Standalone_partial_Action_Common_Left_a7a6139136531fadac48ef6cf8f4df68e5f50034 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="t3js-list-group-wrapper" >
	<ul class="list-group">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array2 = array();
$array2['action'] = $currentVariableContainer->getOrNull('action');
$array2['context'] = $currentVariableContainer->getOrNull('context');
$array2['action_name'] = 'importantActions';
$array2['label'] = 'Important actions';
$arguments1['arguments'] = $array2;
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure3 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array5 = array();
$array5['action'] = $currentVariableContainer->getOrNull('action');
$array5['context'] = $currentVariableContainer->getOrNull('context');
$array5['action_name'] = 'configuration';
$array5['label'] = 'Configuration Presets';
$arguments4['arguments'] = $array5;
$arguments4['section'] = NULL;
$arguments4['optional'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure6, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array8 = array();
$array8['action'] = $currentVariableContainer->getOrNull('action');
$array8['context'] = $currentVariableContainer->getOrNull('context');
$array8['action_name'] = 'allConfiguration';
$array8['label'] = 'All configuration';
$arguments7['arguments'] = $array8;
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure9, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array11 = array();
$array11['action'] = $currentVariableContainer->getOrNull('action');
$array11['context'] = $currentVariableContainer->getOrNull('context');
$array11['action_name'] = 'upgradeWizard';
$array11['label'] = 'Upgrade Wizard';
$arguments10['arguments'] = $array11;
$arguments10['section'] = NULL;
$arguments10['optional'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure12, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments13 = array();
$arguments13['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array14 = array();
$array14['action'] = $currentVariableContainer->getOrNull('action');
$array14['context'] = $currentVariableContainer->getOrNull('context');
$array14['action_name'] = 'systemEnvironment';
$array14['label'] = 'System environment';
$arguments13['arguments'] = $array14;
$arguments13['section'] = NULL;
$arguments13['optional'] = false;
$renderChildrenClosure15 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure15, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array17 = array();
$array17['action'] = $currentVariableContainer->getOrNull('action');
$array17['context'] = $currentVariableContainer->getOrNull('context');
$array17['action_name'] = 'folderStructure';
$array17['label'] = 'Folder structure';
$arguments16['arguments'] = $array17;
$arguments16['section'] = NULL;
$arguments16['optional'] = false;
$renderChildrenClosure18 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure18, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array20 = array();
$array20['action'] = $currentVariableContainer->getOrNull('action');
$array20['context'] = $currentVariableContainer->getOrNull('context');
$array20['action_name'] = 'testSetup';
$array20['label'] = 'Test setup';
$arguments19['arguments'] = $array20;
$arguments19['section'] = NULL;
$arguments19['optional'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure21, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments22 = array();
$arguments22['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array23 = array();
$array23['action'] = $currentVariableContainer->getOrNull('action');
$array23['context'] = $currentVariableContainer->getOrNull('context');
$array23['action_name'] = 'cleanUp';
$array23['label'] = 'Clean up';
$arguments22['arguments'] = $array23;
$arguments22['section'] = NULL;
$arguments22['optional'] = false;
$renderChildrenClosure24 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure24, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['partial'] = 'Action/Common/MenuLink';
// Rendering Array
$array26 = array();
$array26['action'] = $currentVariableContainer->getOrNull('action');
$array26['context'] = $currentVariableContainer->getOrNull('context');
$array26['action_name'] = 'about';
$array26['label'] = 'About';
$arguments25['arguments'] = $array26;
$arguments25['section'] = NULL;
$arguments25['optional'] = false;
$renderChildrenClosure27 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure27, $renderingContext);

$output0 .= '
	</ul>

	<div>
		<a href="Install.php?install[action]=logout&install[context]=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments28 = array();
$arguments28['value'] = $currentVariableContainer->getOrNull('context');
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = NULL;
$arguments28['doubleEncode'] = true;
$renderChildrenClosure29 = function() {return NULL;};
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());

$output0 .= (!is_string($value30) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments28['encoding'] !== NULL ? $arguments28['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments28['doubleEncode']));

$output0 .= '&install[controller]=tool" class="btn btn-warning btn-block">Logout from Install Tool</a>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('contextService'), 'backendContext', $renderingContext));
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() {return NULL;};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<a href="../../../index.php" class="btn btn-default btn-block">Backend admin</a>
			<a href="../../../../index.php" class="btn btn-default btn-block">Frontend website</a>
			';
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output33 .= '
		';
return $output33;
};
$arguments31['__thenClosure'] = function() {return NULL;};
$arguments31['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<a href="../../../index.php" class="btn btn-default btn-block">Backend admin</a>
			<a href="../../../../index.php" class="btn btn-default btn-block">Frontend website</a>
			';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
	</div>
</div>
';


return $output0;
}


}
#1484737730    10341     