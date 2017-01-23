<?php
class FluidCache_Standalone_partial_Action_Tool_ImportantActions_CoreUpdateButton_727ee6e597d6b46edc703559894720c20aa96dae extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h3>Core update</h3>

<p>
	The install tool can automatically update the TYPO3 CMS core to its latest
	minor release if certain criteria are met.
</p>

<div id="coreUpdate">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('enableCoreUpdate'));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<div id="buttonTemplate">
				<fieldset class="t3-install-form-submit">
					<button class="btn btn-default" type="submit" name="coreUpdateCheckForUpdate" data-action="checkForUpdate">
							Check for core updates
					</button>
				</fieldset>
			</div>
		';
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments6 = array();
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
			<div class="typo3-message alert alert-notice">
				<div class="header-container">
					<div class="message-header">
						<strong>Disabled</strong>
					</div>
				</div>
				<div class="message-body">
					This feature is disabled in this installation.<br />
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('composerMode'));
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments12 = array();
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(Composer Mode is active. Please update using composer commands.)
						';
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments14 = array();
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(The environment variable was set <code>TYPO3_DISABLE_CORE_UPDATER=1</code>.)
						';
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '
					';
return $output11;
};
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(Composer Mode is active. Please update using composer commands.)
						';
};
$arguments9['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(The environment variable was set <code>TYPO3_DISABLE_CORE_UPDATER=1</code>.)
						';
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
				</div>
			</div>
		';
return $output8;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<div id="buttonTemplate">
				<fieldset class="t3-install-form-submit">
					<button class="btn btn-default" type="submit" name="coreUpdateCheckForUpdate" data-action="checkForUpdate">
							Check for core updates
					</button>
				</fieldset>
			</div>
		';
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
			<div class="typo3-message alert alert-notice">
				<div class="header-container">
					<div class="message-header">
						<strong>Disabled</strong>
					</div>
				</div>
				<div class="message-body">
					This feature is disabled in this installation.<br />
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('composerMode'));
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments20 = array();
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(Composer Mode is active. Please update using composer commands.)
						';
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments22 = array();
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(The environment variable was set <code>TYPO3_DISABLE_CORE_UPDATER=1</code>.)
						';
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output19 .= '
					';
return $output19;
};
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(Composer Mode is active. Please update using composer commands.)
						';
};
$arguments17['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
							(The environment variable was set <code>TYPO3_DISABLE_CORE_UPDATER=1</code>.)
						';
};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
				</div>
			</div>
		';
return $output16;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';


return $output0;
}


}
#1485159813    8422      