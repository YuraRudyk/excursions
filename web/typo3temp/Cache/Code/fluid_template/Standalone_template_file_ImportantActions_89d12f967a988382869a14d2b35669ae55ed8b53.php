<?php
class FluidCache_Standalone_template_file_ImportantActions_89d12f967a988382869a14d2b35669ae55ed8b53 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'ToolAuthenticated';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>Important actions</h1>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = $currentVariableContainer->getOrNull('actionMessages');
$arguments1['as'] = 'statusMessage';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'Action/Common/StatusMessage';
// Rendering Array
$array5 = array();
$array5['message'] = $currentVariableContainer->getOrNull('statusMessage');
$arguments4['arguments'] = $array5;
$arguments4['section'] = NULL;
$arguments4['optional'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure6, $renderingContext);

$output3 .= '
	';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'Action/Tool/ImportantActions/SystemInformation';
$arguments7['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments9 = array();
// Rendering Boolean node
$arguments9['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('databaseAnalyzerSuggestion'));
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
$output14 = '';

$output14 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerData';
$arguments15['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments15['section'] = NULL;
$arguments15['optional'] = false;
$renderChildrenClosure16 = function() {return NULL;};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
		';
return $output14;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments17 = array();
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerButton';
$arguments20['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
		';
return $output19;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output11 .= '
	';
return $output11;
};
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerData';
$arguments23['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure24 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
		';
return $output22;
};
$arguments9['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerButton';
$arguments26['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure27 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
		';
return $output25;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments28 = array();
$arguments28['partial'] = 'Action/Tool/ImportantActions/ClearAllCache';
$arguments28['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments28['section'] = NULL;
$arguments28['optional'] = false;
$renderChildrenClosure29 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments30 = array();
$arguments30['partial'] = 'Action/Tool/ImportantActions/ClearOpcodeCache';
$arguments30['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments30['section'] = NULL;
$arguments30['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'Action/Tool/ImportantActions/ExtensionCompatibilityTester';
$arguments32['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments32['section'] = NULL;
$arguments32['optional'] = false;
$renderChildrenClosure33 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments34 = array();
$arguments34['partial'] = 'Action/Tool/ImportantActions/CoreUpdateButton';
$arguments34['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments34['section'] = NULL;
$arguments34['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments36 = array();
$arguments36['partial'] = 'Action/Tool/ImportantActions/NewInstallToolPassword';
$arguments36['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments36['section'] = NULL;
$arguments36['optional'] = false;
$renderChildrenClosure37 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments38 = array();
$arguments38['partial'] = 'Action/Tool/ImportantActions/ChangeSiteName';
$arguments38['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments38['section'] = NULL;
$arguments38['optional'] = false;
$renderChildrenClosure39 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments40 = array();
$arguments40['partial'] = 'Action/Tool/ImportantActions/SetNewEncryptionKey';
$arguments40['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments40['section'] = NULL;
$arguments40['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments42 = array();
$arguments42['partial'] = 'Action/Tool/ImportantActions/CreateAdministrator';
$arguments42['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments42['section'] = NULL;
$arguments42['optional'] = false;
$renderChildrenClosure43 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '

';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output44 = '';

$output44 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments45 = array();
$arguments45['name'] = 'ToolAuthenticated';
$renderChildrenClosure46 = function() {return NULL;};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output44 .= $viewHelper47->initializeArgumentsAndRender();

$output44 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments48 = array();
$arguments48['name'] = 'Content';
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
	<h1>Important actions</h1>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments51 = array();
$arguments51['each'] = $currentVariableContainer->getOrNull('actionMessages');
$arguments51['as'] = 'statusMessage';
$arguments51['key'] = '';
$arguments51['reverse'] = false;
$arguments51['iteration'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments54 = array();
$arguments54['partial'] = 'Action/Common/StatusMessage';
// Rendering Array
$array55 = array();
$array55['message'] = $currentVariableContainer->getOrNull('statusMessage');
$arguments54['arguments'] = $array55;
$arguments54['section'] = NULL;
$arguments54['optional'] = false;
$renderChildrenClosure56 = function() {return NULL;};

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments54, $renderChildrenClosure56, $renderingContext);

$output53 .= '
	';
return $output53;
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments57 = array();
$arguments57['partial'] = 'Action/Tool/ImportantActions/SystemInformation';
$arguments57['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments57['section'] = NULL;
$arguments57['optional'] = false;
$renderChildrenClosure58 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments59 = array();
// Rendering Boolean node
$arguments59['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('databaseAnalyzerSuggestion'));
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments62 = array();
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments65 = array();
$arguments65['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerData';
$arguments65['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments65['section'] = NULL;
$arguments65['optional'] = false;
$renderChildrenClosure66 = function() {return NULL;};

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
		';
return $output64;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments67 = array();
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments70 = array();
$arguments70['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerButton';
$arguments70['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments70['section'] = NULL;
$arguments70['optional'] = false;
$renderChildrenClosure71 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
		';
return $output69;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output61 .= '
	';
return $output61;
};
$arguments59['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments73 = array();
$arguments73['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerData';
$arguments73['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments73['section'] = NULL;
$arguments73['optional'] = false;
$renderChildrenClosure74 = function() {return NULL;};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
		';
return $output72;
};
$arguments59['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments76 = array();
$arguments76['partial'] = 'Action/Tool/ImportantActions/DatabaseAnalyzerButton';
$arguments76['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments76['section'] = NULL;
$arguments76['optional'] = false;
$renderChildrenClosure77 = function() {return NULL;};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
		';
return $output75;
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments78 = array();
$arguments78['partial'] = 'Action/Tool/ImportantActions/ClearAllCache';
$arguments78['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments78['section'] = NULL;
$arguments78['optional'] = false;
$renderChildrenClosure79 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments80 = array();
$arguments80['partial'] = 'Action/Tool/ImportantActions/ClearOpcodeCache';
$arguments80['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments80['section'] = NULL;
$arguments80['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output50 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments82 = array();
$arguments82['partial'] = 'Action/Tool/ImportantActions/ExtensionCompatibilityTester';
$arguments82['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments82['section'] = NULL;
$arguments82['optional'] = false;
$renderChildrenClosure83 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments84 = array();
$arguments84['partial'] = 'Action/Tool/ImportantActions/CoreUpdateButton';
$arguments84['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments84['section'] = NULL;
$arguments84['optional'] = false;
$renderChildrenClosure85 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments86 = array();
$arguments86['partial'] = 'Action/Tool/ImportantActions/NewInstallToolPassword';
$arguments86['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments86['section'] = NULL;
$arguments86['optional'] = false;
$renderChildrenClosure87 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments88 = array();
$arguments88['partial'] = 'Action/Tool/ImportantActions/ChangeSiteName';
$arguments88['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments88['section'] = NULL;
$arguments88['optional'] = false;
$renderChildrenClosure89 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments90 = array();
$arguments90['partial'] = 'Action/Tool/ImportantActions/SetNewEncryptionKey';
$arguments90['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments90['section'] = NULL;
$arguments90['optional'] = false;
$renderChildrenClosure91 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output50 .= '
	<hr />

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments92 = array();
$arguments92['partial'] = 'Action/Tool/ImportantActions/CreateAdministrator';
$arguments92['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments92['section'] = NULL;
$arguments92['optional'] = false;
$renderChildrenClosure93 = function() {return NULL;};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output50 .= '

';
return $output50;
};

$output44 .= '';

$output44 .= '
';


return $output44;
}


}
#1485159813    22336     