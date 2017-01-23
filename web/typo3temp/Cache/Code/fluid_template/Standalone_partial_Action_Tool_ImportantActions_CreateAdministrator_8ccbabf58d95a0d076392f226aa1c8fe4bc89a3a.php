<?php
class FluidCache_Standalone_partial_Action_Tool_ImportantActions_CreateAdministrator_8ccbabf58d95a0d076392f226aa1c8fe4bc89a3a extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h3>Create backend administrator user</h3>
<p>
	You should use this function only if there are no admin users in the database, for instance if this is a blank database.
	After you\'ve created the user, log in and add the rest of the user information, like email and real name.
</p>
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
		<label for="t3-install-username" class="col-sm-3 control-label">Username:</label>
		<div class="col-sm-9">
			<input
					id="t3-install-username"
					class="t3-install-form-input-text form-control"
					type="text"
					name="install[values][newUserUsername]"
					autocomplete="off"
					/>
		</div>
	</div>
	<div class="form-group">
		<label for="t3-install-password" class="col-sm-3 control-label">Password:</label>
		<div class="col-sm-9">
			<input
					id="t3-install-password"
					class="t3-install-form-input-text t3-install-form-password-strength form-control"
					type="password"
					name="install[values][newUserPassword]"
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
					name="install[values][newUserPasswordCheck]"
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
$array4['name'] = 'createAdministrator';
$array4['text'] = 'Create administrator user';
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
#1485159813    3364      