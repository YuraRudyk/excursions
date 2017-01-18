<?php
class FluidCache_Standalone_partial_Action_Tool_ImportantActions_NewInstallToolPassword_f4b0675e60f66a7554667b0478a8c125c57de0c2 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h3>Change install tool password</h3>
<form method="post" class="form-horizontal">
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
	<div class="form-group">
		<label for="t3-install-password" class="col-sm-3 control-label">Enter new password:</label>
		<div class="col-sm-9">
			<input
				id="t3-install-password"
				class="t3-install-form-input-text t3-install-form-password-strength form-control"
				type="password"
				name="install[values][newInstallToolPassword]"
				autocomplete="off"
			/>
		</div>
	</div>
	<div class="form-group">
		<label for="t3-install-password-repeat" class="col-sm-3 control-label">Repeat password:</label>
		<div class="col-sm-9">
			<input
					id="t3-install-password-repeat"
					class="t3-install-form-input-text form-control"
					type="password"
					name="install[values][newInstallToolPasswordCheck]"
					autocomplete="off"
					/>
		</div>
	</div>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments3 = array();
$arguments3['partial'] = 'Action/Common/SubmitButton';
// Rendering Array
$array4 = array();
$array4['name'] = 'changeInstallToolPassword';
$array4['text'] = 'Set new password';
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
#1484737730    2798      