<?php
class FluidCache_Extensionmanager_List_action_index_24882b84a5fc12a5ed630e3145c030cd3c524331 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'installedExtensions';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</h1>
';


return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'List/UploadForm';
$arguments4['section'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$renderChildrenClosure5 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments6 = array();
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'extensionList.search';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$arguments6['value'] = $currentVariableContainer->getOrNull('search');
$arguments6['class'] = 'form-control';
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['dir'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$renderChildrenClosure9 = function() {return NULL;};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper10->setArguments($arguments6);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper10->initializeArgumentsAndRender();

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11 = array();
$arguments11['key'] = 'extensionList.header.title.update';
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'extensionList.header.update';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'extensionList.header.title.activate';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17 = array();
$arguments17['key'] = 'extensionList.header.activate';
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$renderChildrenClosure18 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments19 = array();
$arguments19['key'] = 'extensionList.header.extensionName';
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'extensionList.header.extensionKey';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments23 = array();
$arguments23['key'] = 'extensionList.header.extensionVersion';
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments25 = array();
$arguments25['key'] = 'extensionList.header.extensionState';
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'extensionList.header.extensionActions';
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments29 = array();
$arguments29['each'] = $currentVariableContainer->getOrNull('extensions');
$arguments29['as'] = 'extension';
$arguments29['key'] = 'extensionKey';
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments32 = array();
// Rendering Boolean node
$arguments32['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject', $renderingContext));
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments35 = array();
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));

$output37 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments41 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());
$arguments41['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode'])), -1);
$arguments41['then'] = 'insecure';
$arguments41['else'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure45, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments46 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());
$arguments46['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode'])), -2);
$arguments46['then'] = 'outdated';
$arguments46['else'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure50, $renderingContext);

$output37 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments51 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());
$arguments51['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode'])));
$arguments51['then'] = '';
$arguments51['else'] = 'inactive';
$renderChildrenClosure55 = function() {return NULL;};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure55, $renderingContext);

$output37 .= '">
					';
return $output37;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments56 = array();
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output58 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode'])));
$arguments62['then'] = '';
$arguments62['else'] = 'inactive';
$renderChildrenClosure66 = function() {return NULL;};

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure66, $renderingContext);

$output58 .= '">
					';
return $output58;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output34 .= '
				';
return $output34;
};
$arguments32['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output67 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output67 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments71 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() {return NULL;};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());
$arguments71['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value74) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments72['encoding'] !== NULL ? $arguments72['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments72['doubleEncode'])), -1);
$arguments71['then'] = 'insecure';
$arguments71['else'] = NULL;
$renderChildrenClosure75 = function() {return NULL;};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure75, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments76 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());
$arguments76['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode'])), -2);
$arguments76['then'] = 'outdated';
$arguments76['else'] = NULL;
$renderChildrenClosure80 = function() {return NULL;};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure80, $renderingContext);

$output67 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments81 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() {return NULL;};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());
$arguments81['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode'])));
$arguments81['then'] = '';
$arguments81['else'] = 'inactive';
$renderChildrenClosure85 = function() {return NULL;};

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure85, $renderingContext);

$output67 .= '">
					';
return $output67;
};
$arguments32['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output86 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output86 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = NULL;
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() {return NULL;};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());
$arguments90['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments91['encoding'] !== NULL ? $arguments91['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments91['doubleEncode'])));
$arguments90['then'] = '';
$arguments90['else'] = 'inactive';
$renderChildrenClosure94 = function() {return NULL;};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure94, $renderingContext);

$output86 .= '">
					';
return $output86;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments95 = array();
// Rendering Boolean node
$arguments95['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateAvailable', $renderingContext));
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments98 = array();
// Rendering Boolean node
$arguments98['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext), 'excludeFromUpdates');
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments101 = array();
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'extensionList.updateDisabled';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments106 = array();
$arguments106['identifier'] = 'actions-system-extension-update';
$arguments106['size'] = 'small';
$arguments106['overlay'] = NULL;
$arguments106['state'] = 'default';
$arguments106['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};

$output103 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output103 .= '
								</span>
							';
return $output103;
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments108 = array();
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output110 = '';

$output110 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments111 = array();
$arguments111['action'] = 'updateCommentForUpdatableVersions';
$arguments111['class'] = 'btn btn-default';
// Rendering Array
$array112 = array();
$array112['data-action'] = 'update-extension';
$arguments111['additionalAttributes'] = $array112;
$arguments111['format'] = 'json';
$arguments111['controller'] = 'Download';
// Rendering Array
$array113 = array();
$array113['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array113['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array113['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments111['arguments'] = $array113;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments114 = array();
$arguments114['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array115 = array();
$array115['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments114['arguments'] = $array115;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['extensionName'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};
$arguments111['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure116, $renderingContext);
$arguments111['data'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['pluginName'] = NULL;
$arguments111['pageUid'] = NULL;
$arguments111['pageType'] = 0;
$arguments111['noCache'] = false;
$arguments111['noCacheHash'] = false;
$arguments111['section'] = '';
$arguments111['linkAccessRestrictedPages'] = false;
$arguments111['additionalParams'] = array (
);
$arguments111['absolute'] = false;
$arguments111['addQueryString'] = false;
$arguments111['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments111['addQueryStringMethod'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['name'] = NULL;
$arguments111['rel'] = NULL;
$arguments111['rev'] = NULL;
$arguments111['target'] = NULL;
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments119 = array();
$arguments119['identifier'] = 'actions-system-extension-update';
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure120 = function() {return NULL;};

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
									';
return $output118;
};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper121->setArguments($arguments111);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure117);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output110 .= $viewHelper121->initializeArgumentsAndRender();

$output110 .= '
							';
return $output110;
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output100 .= '
						';
return $output100;
};
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments123 = array();
$arguments123['key'] = 'extensionList.updateDisabled';
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['htmlEscape'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$renderChildrenClosure124 = function() {return NULL;};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments125 = array();
$arguments125['identifier'] = 'actions-system-extension-update';
$arguments125['size'] = 'small';
$arguments125['overlay'] = NULL;
$arguments125['state'] = 'default';
$arguments125['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure126 = function() {return NULL;};

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output122 .= '
								</span>
							';
return $output122;
};
$arguments98['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output127 = '';

$output127 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments128 = array();
$arguments128['action'] = 'updateCommentForUpdatableVersions';
$arguments128['class'] = 'btn btn-default';
// Rendering Array
$array129 = array();
$array129['data-action'] = 'update-extension';
$arguments128['additionalAttributes'] = $array129;
$arguments128['format'] = 'json';
$arguments128['controller'] = 'Download';
// Rendering Array
$array130 = array();
$array130['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array130['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array130['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments128['arguments'] = $array130;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments131 = array();
$arguments131['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array132 = array();
$array132['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments131['arguments'] = $array132;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['htmlEscape'] = NULL;
$arguments131['extensionName'] = NULL;
$renderChildrenClosure133 = function() {return NULL;};
$arguments128['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure133, $renderingContext);
$arguments128['data'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['pluginName'] = NULL;
$arguments128['pageUid'] = NULL;
$arguments128['pageType'] = 0;
$arguments128['noCache'] = false;
$arguments128['noCacheHash'] = false;
$arguments128['section'] = '';
$arguments128['linkAccessRestrictedPages'] = false;
$arguments128['additionalParams'] = array (
);
$arguments128['absolute'] = false;
$arguments128['addQueryString'] = false;
$arguments128['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments128['addQueryStringMethod'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['name'] = NULL;
$arguments128['rel'] = NULL;
$arguments128['rev'] = NULL;
$arguments128['target'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output135 = '';

$output135 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments136 = array();
$arguments136['identifier'] = 'actions-system-extension-update';
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure137 = function() {return NULL;};

$output135 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
									';
return $output135;
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper138->setArguments($arguments128);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output127 .= $viewHelper138->initializeArgumentsAndRender();

$output127 .= '
							';
return $output127;
};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
					';
return $output97;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output31 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments139 = array();
// Rendering Boolean node
$arguments139['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext));
$arguments139['then'] = 'active';
$arguments139['else'] = 'inactive';
$renderChildrenClosure140 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output31 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments141 = array();
$arguments141['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$renderChildrenClosure142 = function() {return NULL;};
$viewHelper143 = $self->getViewHelper('$viewHelper143', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper143->setArguments($arguments141);
$viewHelper143->setRenderingContext($renderingContext);
$viewHelper143->setRenderChildrenClosure($renderChildrenClosure142);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output31 .= $viewHelper143->initializeArgumentsAndRender();

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments144 = array();
// Rendering Boolean node
$arguments144['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output146 = '';

$output146 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments147 = array();
$arguments147['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments147['keepQuotes'] = false;
$arguments147['encoding'] = NULL;
$arguments147['doubleEncode'] = true;
$renderChildrenClosure148 = function() {return NULL;};
$value149 = ($arguments147['value'] !== NULL ? $arguments147['value'] : $renderChildrenClosure148());

$output146 .= (!is_string($value149) ? $value149 : htmlspecialchars($value149, ($arguments147['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments147['encoding'] !== NULL ? $arguments147['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments147['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments150 = array();
$arguments150['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments150['keepQuotes'] = false;
$arguments150['encoding'] = NULL;
$arguments150['doubleEncode'] = true;
$renderChildrenClosure151 = function() {return NULL;};
$value152 = ($arguments150['value'] !== NULL ? $arguments150['value'] : $renderChildrenClosure151());

$output146 .= (!is_string($value152) ? $value152 : htmlspecialchars($value152, ($arguments150['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments150['encoding'] !== NULL ? $arguments150['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments150['doubleEncode']));

$output146 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments153 = array();
$arguments153['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments153['keepQuotes'] = false;
$arguments153['encoding'] = NULL;
$arguments153['doubleEncode'] = true;
$renderChildrenClosure154 = function() {return NULL;};
$value155 = ($arguments153['value'] !== NULL ? $arguments153['value'] : $renderChildrenClosure154());

$output146 .= (!is_string($value155) ? $value155 : htmlspecialchars($value155, ($arguments153['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments153['encoding'] !== NULL ? $arguments153['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments153['doubleEncode']));

$output146 .= '" />
					';
return $output146;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output31 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments156 = array();
$arguments156['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments156['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments156['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['name'] = NULL;
$arguments156['rel'] = NULL;
$arguments156['rev'] = NULL;
$arguments156['target'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = NULL;
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() {return NULL;};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());
return (!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments158['encoding'] !== NULL ? $arguments158['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments158['doubleEncode']));
};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper161->setArguments($arguments156);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output31 .= $viewHelper161->initializeArgumentsAndRender();

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output31 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output31 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output31 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output31 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments168 = array();
$arguments168['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments168['keepQuotes'] = false;
$arguments168['encoding'] = NULL;
$arguments168['doubleEncode'] = true;
$renderChildrenClosure169 = function() {return NULL;};
$value170 = ($arguments168['value'] !== NULL ? $arguments168['value'] : $renderChildrenClosure169());

$output31 .= (!is_string($value170) ? $value170 : htmlspecialchars($value170, ($arguments168['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments168['encoding'] !== NULL ? $arguments168['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments168['doubleEncode']));

$output31 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() {return NULL;};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());

$output31 .= (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));

$output31 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments174 = array();
$arguments174['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output176 = '';

$output176 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments177 = array();
$arguments177['class'] = 'btn btn-default';
$arguments177['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments178 = array();
$arguments178['key'] = 'extensionList.configure';
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['htmlEscape'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$renderChildrenClosure179 = function() {return NULL;};
$arguments177['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['forceConfiguration'] = true;
$arguments177['showDescription'] = false;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['name'] = NULL;
$arguments177['rel'] = NULL;
$arguments177['rev'] = NULL;
$arguments177['target'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments182 = array();
$arguments182['identifier'] = 'actions-system-extension-configure';
$arguments182['size'] = 'small';
$arguments182['overlay'] = NULL;
$arguments182['state'] = 'default';
$arguments182['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure183 = function() {return NULL;};

$output181 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
							';
return $output181;
};
$viewHelper184 = $self->getViewHelper('$viewHelper184', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper184->setArguments($arguments177);
$viewHelper184->setRenderingContext($renderingContext);
$viewHelper184->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output176 .= $viewHelper184->initializeArgumentsAndRender();

$output176 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments185 = array();
$arguments185['class'] = 'btn btn-default';
$arguments185['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments185['additionalAttributes'] = NULL;
$arguments185['data'] = NULL;
$arguments185['dir'] = NULL;
$arguments185['id'] = NULL;
$arguments185['lang'] = NULL;
$arguments185['style'] = NULL;
$arguments185['title'] = NULL;
$arguments185['accesskey'] = NULL;
$arguments185['tabindex'] = NULL;
$arguments185['onclick'] = NULL;
$arguments185['name'] = NULL;
$arguments185['rel'] = NULL;
$arguments185['rev'] = NULL;
$arguments185['target'] = NULL;
$renderChildrenClosure186 = function() {return NULL;};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper187->setArguments($arguments185);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure186);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output176 .= $viewHelper187->initializeArgumentsAndRender();

$output176 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments188 = array();
$arguments188['class'] = 'btn btn-default';
$arguments188['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments188['additionalAttributes'] = NULL;
$arguments188['data'] = NULL;
$arguments188['dir'] = NULL;
$arguments188['id'] = NULL;
$arguments188['lang'] = NULL;
$arguments188['style'] = NULL;
$arguments188['title'] = NULL;
$arguments188['accesskey'] = NULL;
$arguments188['tabindex'] = NULL;
$arguments188['onclick'] = NULL;
$arguments188['name'] = NULL;
$arguments188['rel'] = NULL;
$arguments188['rev'] = NULL;
$arguments188['target'] = NULL;
$renderChildrenClosure189 = function() {return NULL;};
$viewHelper190 = $self->getViewHelper('$viewHelper190', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper190->setArguments($arguments188);
$viewHelper190->setRenderingContext($renderingContext);
$viewHelper190->setRenderChildrenClosure($renderChildrenClosure189);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output176 .= $viewHelper190->initializeArgumentsAndRender();

$output176 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments191 = array();
$arguments191['action'] = 'downloadExtensionZip';
$arguments191['controller'] = 'Action';
// Rendering Array
$array192 = array();
$array192['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments191['arguments'] = $array192;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments193 = array();
$arguments193['key'] = 'extensionList.downloadzip';
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['htmlEscape'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$renderChildrenClosure194 = function() {return NULL;};
$arguments191['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['pluginName'] = NULL;
$arguments191['pageUid'] = NULL;
$arguments191['pageType'] = 0;
$arguments191['noCache'] = false;
$arguments191['noCacheHash'] = false;
$arguments191['section'] = '';
$arguments191['format'] = '';
$arguments191['linkAccessRestrictedPages'] = false;
$arguments191['additionalParams'] = array (
);
$arguments191['absolute'] = false;
$arguments191['addQueryString'] = false;
$arguments191['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments191['addQueryStringMethod'] = NULL;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$arguments191['name'] = NULL;
$arguments191['rel'] = NULL;
$arguments191['rev'] = NULL;
$arguments191['target'] = NULL;
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output196 = '';

$output196 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments197 = array();
$arguments197['identifier'] = 'actions-system-extension-download';
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$arguments197['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure198 = function() {return NULL;};

$output196 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output196 .= '
								';
return $output196;
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper199->setArguments($arguments191);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure195);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output176 .= $viewHelper199->initializeArgumentsAndRender();

$output176 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments200 = array();
$arguments200['class'] = 'btn btn-default';
$arguments200['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['name'] = NULL;
$arguments200['rel'] = NULL;
$arguments200['rev'] = NULL;
$arguments200['target'] = NULL;
$renderChildrenClosure201 = function() {return NULL;};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output176 .= $viewHelper202->initializeArgumentsAndRender();

$output176 .= '
						';
return $output176;
};
$viewHelper203 = $self->getViewHelper('$viewHelper203', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper203->setArguments($arguments174);
$viewHelper203->setRenderingContext($renderingContext);
$viewHelper203->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output31 .= $viewHelper203->initializeArgumentsAndRender();

$output31 .= '
					</div>
				</td>
				</tr>
			';
return $output31;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';


return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output204 = '';

$output204 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments205 = array();
$arguments205['name'] = 'main';
$renderChildrenClosure206 = function() {return NULL;};
$viewHelper207 = $self->getViewHelper('$viewHelper207', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper207->setArguments($arguments205);
$viewHelper207->setRenderingContext($renderingContext);
$viewHelper207->setRenderChildrenClosure($renderChildrenClosure206);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output204 .= $viewHelper207->initializeArgumentsAndRender();

$output204 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments208 = array();
$arguments208['name'] = 'headline';
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output210 = '';

$output210 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments211 = array();
$arguments211['key'] = 'installedExtensions';
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['htmlEscape'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$renderChildrenClosure212 = function() {return NULL;};

$output210 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '</h1>
';
return $output210;
};

$output204 .= '';

$output204 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments213 = array();
$arguments213['name'] = 'content';
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output215 = '';

$output215 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments216 = array();
$arguments216['partial'] = 'List/UploadForm';
$arguments216['section'] = NULL;
$arguments216['arguments'] = array (
);
$arguments216['optional'] = false;
$renderChildrenClosure217 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments218 = array();
$arguments218['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments219 = array();
$arguments219['key'] = 'extensionList.search';
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['htmlEscape'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$renderChildrenClosure220 = function() {return NULL;};
$arguments218['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);
$arguments218['id'] = 'Tx_Extensionmanager_extensionkey';
$arguments218['value'] = $currentVariableContainer->getOrNull('search');
$arguments218['class'] = 'form-control';
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['required'] = false;
$arguments218['type'] = 'text';
$arguments218['property'] = NULL;
$arguments218['autofocus'] = NULL;
$arguments218['disabled'] = NULL;
$arguments218['maxlength'] = NULL;
$arguments218['readonly'] = NULL;
$arguments218['size'] = NULL;
$arguments218['pattern'] = NULL;
$arguments218['errorClass'] = 'f3-form-error';
$arguments218['dir'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$renderChildrenClosure221 = function() {return NULL;};
$viewHelper222 = $self->getViewHelper('$viewHelper222', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper222->setArguments($arguments218);
$viewHelper222->setRenderingContext($renderingContext);
$viewHelper222->setRenderChildrenClosure($renderChildrenClosure221);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output215 .= $viewHelper222->initializeArgumentsAndRender();

$output215 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments223 = array();
$arguments223['key'] = 'extensionList.header.title.update';
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['htmlEscape'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$renderChildrenClosure224 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output215 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments225 = array();
$arguments225['key'] = 'extensionList.header.update';
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['htmlEscape'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$renderChildrenClosure226 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output215 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments227 = array();
$arguments227['key'] = 'extensionList.header.title.activate';
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$renderChildrenClosure228 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output215 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments229 = array();
$arguments229['key'] = 'extensionList.header.activate';
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['htmlEscape'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$renderChildrenClosure230 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output215 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments231 = array();
$arguments231['key'] = 'extensionList.header.extensionName';
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$renderChildrenClosure232 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output215 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments233 = array();
$arguments233['key'] = 'extensionList.header.extensionKey';
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$renderChildrenClosure234 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output215 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments235 = array();
$arguments235['key'] = 'extensionList.header.extensionVersion';
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$renderChildrenClosure236 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output215 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments237 = array();
$arguments237['key'] = 'extensionList.header.extensionState';
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['htmlEscape'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$renderChildrenClosure238 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output215 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments239 = array();
$arguments239['key'] = 'extensionList.header.extensionActions';
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$renderChildrenClosure240 = function() {return NULL;};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output215 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments241 = array();
$arguments241['each'] = $currentVariableContainer->getOrNull('extensions');
$arguments241['as'] = 'extension';
$arguments241['key'] = 'extensionKey';
$arguments241['reverse'] = false;
$arguments241['iteration'] = NULL;
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output243 = '';

$output243 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments244 = array();
// Rendering Boolean node
$arguments244['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject', $renderingContext));
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output246 = '';

$output246 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments247 = array();
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output249 = '';

$output249 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments250 = array();
$arguments250['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments250['keepQuotes'] = false;
$arguments250['encoding'] = NULL;
$arguments250['doubleEncode'] = true;
$renderChildrenClosure251 = function() {return NULL;};
$value252 = ($arguments250['value'] !== NULL ? $arguments250['value'] : $renderChildrenClosure251());

$output249 .= (!is_string($value252) ? $value252 : htmlspecialchars($value252, ($arguments250['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments250['encoding'] !== NULL ? $arguments250['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments250['doubleEncode']));

$output249 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments253 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments254 = array();
$arguments254['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments254['keepQuotes'] = false;
$arguments254['encoding'] = NULL;
$arguments254['doubleEncode'] = true;
$renderChildrenClosure255 = function() {return NULL;};
$value256 = ($arguments254['value'] !== NULL ? $arguments254['value'] : $renderChildrenClosure255());
$arguments253['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value256) ? $value256 : htmlspecialchars($value256, ($arguments254['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments254['encoding'] !== NULL ? $arguments254['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments254['doubleEncode'])), -1);
$arguments253['then'] = 'insecure';
$arguments253['else'] = NULL;
$renderChildrenClosure257 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure257, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments258 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments259 = array();
$arguments259['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments259['keepQuotes'] = false;
$arguments259['encoding'] = NULL;
$arguments259['doubleEncode'] = true;
$renderChildrenClosure260 = function() {return NULL;};
$value261 = ($arguments259['value'] !== NULL ? $arguments259['value'] : $renderChildrenClosure260());
$arguments258['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value261) ? $value261 : htmlspecialchars($value261, ($arguments259['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments259['encoding'] !== NULL ? $arguments259['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments259['doubleEncode'])), -2);
$arguments258['then'] = 'outdated';
$arguments258['else'] = NULL;
$renderChildrenClosure262 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure262, $renderingContext);

$output249 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments263 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments264 = array();
$arguments264['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments264['keepQuotes'] = false;
$arguments264['encoding'] = NULL;
$arguments264['doubleEncode'] = true;
$renderChildrenClosure265 = function() {return NULL;};
$value266 = ($arguments264['value'] !== NULL ? $arguments264['value'] : $renderChildrenClosure265());
$arguments263['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value266) ? $value266 : htmlspecialchars($value266, ($arguments264['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments264['encoding'] !== NULL ? $arguments264['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments264['doubleEncode'])));
$arguments263['then'] = '';
$arguments263['else'] = 'inactive';
$renderChildrenClosure267 = function() {return NULL;};

$output249 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure267, $renderingContext);

$output249 .= '">
					';
return $output249;
};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments268 = array();
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output270 = '';

$output270 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments271 = array();
$arguments271['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments271['keepQuotes'] = false;
$arguments271['encoding'] = NULL;
$arguments271['doubleEncode'] = true;
$renderChildrenClosure272 = function() {return NULL;};
$value273 = ($arguments271['value'] !== NULL ? $arguments271['value'] : $renderChildrenClosure272());

$output270 .= (!is_string($value273) ? $value273 : htmlspecialchars($value273, ($arguments271['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments271['encoding'] !== NULL ? $arguments271['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments271['doubleEncode']));

$output270 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments274 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments275 = array();
$arguments275['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments275['keepQuotes'] = false;
$arguments275['encoding'] = NULL;
$arguments275['doubleEncode'] = true;
$renderChildrenClosure276 = function() {return NULL;};
$value277 = ($arguments275['value'] !== NULL ? $arguments275['value'] : $renderChildrenClosure276());
$arguments274['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value277) ? $value277 : htmlspecialchars($value277, ($arguments275['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments275['encoding'] !== NULL ? $arguments275['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments275['doubleEncode'])));
$arguments274['then'] = '';
$arguments274['else'] = 'inactive';
$renderChildrenClosure278 = function() {return NULL;};

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure278, $renderingContext);

$output270 .= '">
					';
return $output270;
};

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output246 .= '
				';
return $output246;
};
$arguments244['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output279 = '';

$output279 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments280 = array();
$arguments280['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments280['keepQuotes'] = false;
$arguments280['encoding'] = NULL;
$arguments280['doubleEncode'] = true;
$renderChildrenClosure281 = function() {return NULL;};
$value282 = ($arguments280['value'] !== NULL ? $arguments280['value'] : $renderChildrenClosure281());

$output279 .= (!is_string($value282) ? $value282 : htmlspecialchars($value282, ($arguments280['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments280['encoding'] !== NULL ? $arguments280['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments280['doubleEncode']));

$output279 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments283 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments284 = array();
$arguments284['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments284['keepQuotes'] = false;
$arguments284['encoding'] = NULL;
$arguments284['doubleEncode'] = true;
$renderChildrenClosure285 = function() {return NULL;};
$value286 = ($arguments284['value'] !== NULL ? $arguments284['value'] : $renderChildrenClosure285());
$arguments283['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value286) ? $value286 : htmlspecialchars($value286, ($arguments284['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments284['encoding'] !== NULL ? $arguments284['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments284['doubleEncode'])), -1);
$arguments283['then'] = 'insecure';
$arguments283['else'] = NULL;
$renderChildrenClosure287 = function() {return NULL;};

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure287, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments288 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments289 = array();
$arguments289['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.reviewState', $renderingContext);
$arguments289['keepQuotes'] = false;
$arguments289['encoding'] = NULL;
$arguments289['doubleEncode'] = true;
$renderChildrenClosure290 = function() {return NULL;};
$value291 = ($arguments289['value'] !== NULL ? $arguments289['value'] : $renderChildrenClosure290());
$arguments288['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', (!is_string($value291) ? $value291 : htmlspecialchars($value291, ($arguments289['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments289['encoding'] !== NULL ? $arguments289['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments289['doubleEncode'])), -2);
$arguments288['then'] = 'outdated';
$arguments288['else'] = NULL;
$renderChildrenClosure292 = function() {return NULL;};

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure292, $renderingContext);

$output279 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments293 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments294 = array();
$arguments294['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments294['keepQuotes'] = false;
$arguments294['encoding'] = NULL;
$arguments294['doubleEncode'] = true;
$renderChildrenClosure295 = function() {return NULL;};
$value296 = ($arguments294['value'] !== NULL ? $arguments294['value'] : $renderChildrenClosure295());
$arguments293['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value296) ? $value296 : htmlspecialchars($value296, ($arguments294['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments294['encoding'] !== NULL ? $arguments294['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments294['doubleEncode'])));
$arguments293['then'] = '';
$arguments293['else'] = 'inactive';
$renderChildrenClosure297 = function() {return NULL;};

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure297, $renderingContext);

$output279 .= '">
					';
return $output279;
};
$arguments244['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output298 = '';

$output298 .= '
						<tr id="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments299 = array();
$arguments299['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments299['keepQuotes'] = false;
$arguments299['encoding'] = NULL;
$arguments299['doubleEncode'] = true;
$renderChildrenClosure300 = function() {return NULL;};
$value301 = ($arguments299['value'] !== NULL ? $arguments299['value'] : $renderChildrenClosure300());

$output298 .= (!is_string($value301) ? $value301 : htmlspecialchars($value301, ($arguments299['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments299['encoding'] !== NULL ? $arguments299['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments299['doubleEncode']));

$output298 .= '" class="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments302 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments303 = array();
$arguments303['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext);
$arguments303['keepQuotes'] = false;
$arguments303['encoding'] = NULL;
$arguments303['doubleEncode'] = true;
$renderChildrenClosure304 = function() {return NULL;};
$value305 = ($arguments303['value'] !== NULL ? $arguments303['value'] : $renderChildrenClosure304());
$arguments302['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value305) ? $value305 : htmlspecialchars($value305, ($arguments303['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments303['encoding'] !== NULL ? $arguments303['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments303['doubleEncode'])));
$arguments302['then'] = '';
$arguments302['else'] = 'inactive';
$renderChildrenClosure306 = function() {return NULL;};

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure306, $renderingContext);

$output298 .= '">
					';
return $output298;
};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments307 = array();
// Rendering Boolean node
$arguments307['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateAvailable', $renderingContext));
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output309 = '';

$output309 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments310 = array();
// Rendering Boolean node
$arguments310['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext), 'excludeFromUpdates');
$arguments310['then'] = NULL;
$arguments310['else'] = NULL;
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output312 = '';

$output312 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments313 = array();
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output315 = '';

$output315 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments316 = array();
$arguments316['key'] = 'extensionList.updateDisabled';
$arguments316['id'] = NULL;
$arguments316['default'] = NULL;
$arguments316['htmlEscape'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['extensionName'] = NULL;
$renderChildrenClosure317 = function() {return NULL;};

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments318 = array();
$arguments318['identifier'] = 'actions-system-extension-update';
$arguments318['size'] = 'small';
$arguments318['overlay'] = NULL;
$arguments318['state'] = 'default';
$arguments318['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure319 = function() {return NULL;};

$output315 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output315 .= '
								</span>
							';
return $output315;
};

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments320 = array();
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output322 = '';

$output322 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments323 = array();
$arguments323['action'] = 'updateCommentForUpdatableVersions';
$arguments323['class'] = 'btn btn-default';
// Rendering Array
$array324 = array();
$array324['data-action'] = 'update-extension';
$arguments323['additionalAttributes'] = $array324;
$arguments323['format'] = 'json';
$arguments323['controller'] = 'Download';
// Rendering Array
$array325 = array();
$array325['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array325['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array325['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments323['arguments'] = $array325;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments326 = array();
$arguments326['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array327 = array();
$array327['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments326['arguments'] = $array327;
$arguments326['id'] = NULL;
$arguments326['default'] = NULL;
$arguments326['htmlEscape'] = NULL;
$arguments326['extensionName'] = NULL;
$renderChildrenClosure328 = function() {return NULL;};
$arguments323['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments326, $renderChildrenClosure328, $renderingContext);
$arguments323['data'] = NULL;
$arguments323['extensionName'] = NULL;
$arguments323['pluginName'] = NULL;
$arguments323['pageUid'] = NULL;
$arguments323['pageType'] = 0;
$arguments323['noCache'] = false;
$arguments323['noCacheHash'] = false;
$arguments323['section'] = '';
$arguments323['linkAccessRestrictedPages'] = false;
$arguments323['additionalParams'] = array (
);
$arguments323['absolute'] = false;
$arguments323['addQueryString'] = false;
$arguments323['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments323['addQueryStringMethod'] = NULL;
$arguments323['dir'] = NULL;
$arguments323['id'] = NULL;
$arguments323['lang'] = NULL;
$arguments323['style'] = NULL;
$arguments323['accesskey'] = NULL;
$arguments323['tabindex'] = NULL;
$arguments323['onclick'] = NULL;
$arguments323['name'] = NULL;
$arguments323['rel'] = NULL;
$arguments323['rev'] = NULL;
$arguments323['target'] = NULL;
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output330 = '';

$output330 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments331 = array();
$arguments331['identifier'] = 'actions-system-extension-update';
$arguments331['size'] = 'small';
$arguments331['overlay'] = NULL;
$arguments331['state'] = 'default';
$arguments331['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure332 = function() {return NULL;};

$output330 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= '
									';
return $output330;
};
$viewHelper333 = $self->getViewHelper('$viewHelper333', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper333->setArguments($arguments323);
$viewHelper333->setRenderingContext($renderingContext);
$viewHelper333->setRenderChildrenClosure($renderChildrenClosure329);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output322 .= $viewHelper333->initializeArgumentsAndRender();

$output322 .= '
							';
return $output322;
};

$output312 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output312 .= '
						';
return $output312;
};
$arguments310['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output334 = '';

$output334 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments335 = array();
$arguments335['key'] = 'extensionList.updateDisabled';
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['htmlEscape'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$renderChildrenClosure336 = function() {return NULL;};

$output334 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments337 = array();
$arguments337['identifier'] = 'actions-system-extension-update';
$arguments337['size'] = 'small';
$arguments337['overlay'] = NULL;
$arguments337['state'] = 'default';
$arguments337['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure338 = function() {return NULL;};

$output334 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output334 .= '
								</span>
							';
return $output334;
};
$arguments310['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output339 = '';

$output339 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments340 = array();
$arguments340['action'] = 'updateCommentForUpdatableVersions';
$arguments340['class'] = 'btn btn-default';
// Rendering Array
$array341 = array();
$array341['data-action'] = 'update-extension';
$arguments340['additionalAttributes'] = $array341;
$arguments340['format'] = 'json';
$arguments340['controller'] = 'Download';
// Rendering Array
$array342 = array();
$array342['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$array342['integerVersionStart'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'terObject.integerVersion', $renderingContext);
$array342['integerVersionStop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.integerVersion', $renderingContext);
$arguments340['arguments'] = $array342;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments343 = array();
$arguments343['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array344 = array();
$array344['0'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'updateToVersion.version', $renderingContext);
$arguments343['arguments'] = $array344;
$arguments343['id'] = NULL;
$arguments343['default'] = NULL;
$arguments343['htmlEscape'] = NULL;
$arguments343['extensionName'] = NULL;
$renderChildrenClosure345 = function() {return NULL;};
$arguments340['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments343, $renderChildrenClosure345, $renderingContext);
$arguments340['data'] = NULL;
$arguments340['extensionName'] = NULL;
$arguments340['pluginName'] = NULL;
$arguments340['pageUid'] = NULL;
$arguments340['pageType'] = 0;
$arguments340['noCache'] = false;
$arguments340['noCacheHash'] = false;
$arguments340['section'] = '';
$arguments340['linkAccessRestrictedPages'] = false;
$arguments340['additionalParams'] = array (
);
$arguments340['absolute'] = false;
$arguments340['addQueryString'] = false;
$arguments340['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments340['addQueryStringMethod'] = NULL;
$arguments340['dir'] = NULL;
$arguments340['id'] = NULL;
$arguments340['lang'] = NULL;
$arguments340['style'] = NULL;
$arguments340['accesskey'] = NULL;
$arguments340['tabindex'] = NULL;
$arguments340['onclick'] = NULL;
$arguments340['name'] = NULL;
$arguments340['rel'] = NULL;
$arguments340['rev'] = NULL;
$arguments340['target'] = NULL;
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output347 = '';

$output347 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments348 = array();
$arguments348['identifier'] = 'actions-system-extension-update';
$arguments348['size'] = 'small';
$arguments348['overlay'] = NULL;
$arguments348['state'] = 'default';
$arguments348['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure349 = function() {return NULL;};

$output347 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output347 .= '
									';
return $output347;
};
$viewHelper350 = $self->getViewHelper('$viewHelper350', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper350->setArguments($arguments340);
$viewHelper350->setRenderingContext($renderingContext);
$viewHelper350->setRenderChildrenClosure($renderChildrenClosure346);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output339 .= $viewHelper350->initializeArgumentsAndRender();

$output339 .= '
							';
return $output339;
};

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
					';
return $output309;
};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output243 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments351 = array();
// Rendering Boolean node
$arguments351['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'installed', $renderingContext));
$arguments351['then'] = 'active';
$arguments351['else'] = 'inactive';
$renderChildrenClosure352 = function() {return NULL;};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output243 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$arguments353 = array();
$arguments353['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments353['additionalAttributes'] = NULL;
$arguments353['data'] = NULL;
$arguments353['class'] = NULL;
$arguments353['dir'] = NULL;
$arguments353['id'] = NULL;
$arguments353['lang'] = NULL;
$arguments353['style'] = NULL;
$arguments353['title'] = NULL;
$arguments353['accesskey'] = NULL;
$arguments353['tabindex'] = NULL;
$arguments353['onclick'] = NULL;
$arguments353['name'] = NULL;
$arguments353['rel'] = NULL;
$arguments353['rev'] = NULL;
$arguments353['target'] = NULL;
$renderChildrenClosure354 = function() {return NULL;};
$viewHelper355 = $self->getViewHelper('$viewHelper355', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper');
$viewHelper355->setArguments($arguments353);
$viewHelper355->setRenderingContext($renderingContext);
$viewHelper355->setRenderChildrenClosure($renderChildrenClosure354);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper

$output243 .= $viewHelper355->initializeArgumentsAndRender();

$output243 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments356 = array();
// Rendering Boolean node
$arguments356['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext));
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output358 = '';

$output358 .= '
						<img class="ext-icon" src="../';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments359 = array();
$arguments359['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'siteRelPath', $renderingContext);
$arguments359['keepQuotes'] = false;
$arguments359['encoding'] = NULL;
$arguments359['doubleEncode'] = true;
$renderChildrenClosure360 = function() {return NULL;};
$value361 = ($arguments359['value'] !== NULL ? $arguments359['value'] : $renderChildrenClosure360());

$output358 .= (!is_string($value361) ? $value361 : htmlspecialchars($value361, ($arguments359['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments359['encoding'] !== NULL ? $arguments359['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments359['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments362 = array();
$arguments362['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'ext_icon', $renderingContext);
$arguments362['keepQuotes'] = false;
$arguments362['encoding'] = NULL;
$arguments362['doubleEncode'] = true;
$renderChildrenClosure363 = function() {return NULL;};
$value364 = ($arguments362['value'] !== NULL ? $arguments362['value'] : $renderChildrenClosure363());

$output358 .= (!is_string($value364) ? $value364 : htmlspecialchars($value364, ($arguments362['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments362['encoding'] !== NULL ? $arguments362['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments362['doubleEncode']));

$output358 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments365 = array();
$arguments365['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments365['keepQuotes'] = false;
$arguments365['encoding'] = NULL;
$arguments365['doubleEncode'] = true;
$renderChildrenClosure366 = function() {return NULL;};
$value367 = ($arguments365['value'] !== NULL ? $arguments365['value'] : $renderChildrenClosure366());

$output358 .= (!is_string($value367) ? $value367 : htmlspecialchars($value367, ($arguments365['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments365['encoding'] !== NULL ? $arguments365['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments365['doubleEncode']));

$output358 .= '" />
					';
return $output358;
};

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output243 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments368 = array();
$arguments368['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering Boolean node
$arguments368['forceConfiguration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments368['showDescription'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments368['additionalAttributes'] = NULL;
$arguments368['data'] = NULL;
$arguments368['class'] = NULL;
$arguments368['dir'] = NULL;
$arguments368['id'] = NULL;
$arguments368['lang'] = NULL;
$arguments368['style'] = NULL;
$arguments368['title'] = NULL;
$arguments368['accesskey'] = NULL;
$arguments368['tabindex'] = NULL;
$arguments368['onclick'] = NULL;
$arguments368['name'] = NULL;
$arguments368['rel'] = NULL;
$arguments368['rev'] = NULL;
$arguments368['target'] = NULL;
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments370 = array();
$arguments370['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'title', $renderingContext);
$arguments370['keepQuotes'] = false;
$arguments370['encoding'] = NULL;
$arguments370['doubleEncode'] = true;
$renderChildrenClosure371 = function() {return NULL;};
$value372 = ($arguments370['value'] !== NULL ? $arguments370['value'] : $renderChildrenClosure371());
return (!is_string($value372) ? $value372 : htmlspecialchars($value372, ($arguments370['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments370['encoding'] !== NULL ? $arguments370['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments370['doubleEncode']));
};
$viewHelper373 = $self->getViewHelper('$viewHelper373', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper373->setArguments($arguments368);
$viewHelper373->setRenderingContext($renderingContext);
$viewHelper373->setRenderChildrenClosure($renderChildrenClosure369);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output243 .= $viewHelper373->initializeArgumentsAndRender();

$output243 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments374 = array();
$arguments374['value'] = $currentVariableContainer->getOrNull('extensionKey');
$arguments374['keepQuotes'] = false;
$arguments374['encoding'] = NULL;
$arguments374['doubleEncode'] = true;
$renderChildrenClosure375 = function() {return NULL;};
$value376 = ($arguments374['value'] !== NULL ? $arguments374['value'] : $renderChildrenClosure375());

$output243 .= (!is_string($value376) ? $value376 : htmlspecialchars($value376, ($arguments374['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments374['encoding'] !== NULL ? $arguments374['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments374['doubleEncode']));

$output243 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments377 = array();
$arguments377['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'version', $renderingContext);
$arguments377['keepQuotes'] = false;
$arguments377['encoding'] = NULL;
$arguments377['doubleEncode'] = true;
$renderChildrenClosure378 = function() {return NULL;};
$value379 = ($arguments377['value'] !== NULL ? $arguments377['value'] : $renderChildrenClosure378());

$output243 .= (!is_string($value379) ? $value379 : htmlspecialchars($value379, ($arguments377['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments377['encoding'] !== NULL ? $arguments377['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments377['doubleEncode']));

$output243 .= '
				</td>
				<td>
					<span class="label label-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments380 = array();
$arguments380['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments380['keepQuotes'] = false;
$arguments380['encoding'] = NULL;
$arguments380['doubleEncode'] = true;
$renderChildrenClosure381 = function() {return NULL;};
$value382 = ($arguments380['value'] !== NULL ? $arguments380['value'] : $renderChildrenClosure381());

$output243 .= (!is_string($value382) ? $value382 : htmlspecialchars($value382, ($arguments380['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments380['encoding'] !== NULL ? $arguments380['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments380['doubleEncode']));

$output243 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments383 = array();
$arguments383['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'state', $renderingContext);
$arguments383['keepQuotes'] = false;
$arguments383['encoding'] = NULL;
$arguments383['doubleEncode'] = true;
$renderChildrenClosure384 = function() {return NULL;};
$value385 = ($arguments383['value'] !== NULL ? $arguments383['value'] : $renderChildrenClosure384());

$output243 .= (!is_string($value385) ? $value385 : htmlspecialchars($value385, ($arguments383['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments383['encoding'] !== NULL ? $arguments383['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments383['doubleEncode']));

$output243 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$arguments386 = array();
$arguments386['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments386['additionalAttributes'] = NULL;
$arguments386['data'] = NULL;
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output388 = '';

$output388 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$arguments389 = array();
$arguments389['class'] = 'btn btn-default';
$arguments389['extension'] = $currentVariableContainer->getOrNull('extension');
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments390 = array();
$arguments390['key'] = 'extensionList.configure';
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['htmlEscape'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$renderChildrenClosure391 = function() {return NULL;};
$arguments389['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);
$arguments389['additionalAttributes'] = NULL;
$arguments389['data'] = NULL;
$arguments389['forceConfiguration'] = true;
$arguments389['showDescription'] = false;
$arguments389['dir'] = NULL;
$arguments389['id'] = NULL;
$arguments389['lang'] = NULL;
$arguments389['style'] = NULL;
$arguments389['accesskey'] = NULL;
$arguments389['tabindex'] = NULL;
$arguments389['onclick'] = NULL;
$arguments389['name'] = NULL;
$arguments389['rel'] = NULL;
$arguments389['rev'] = NULL;
$arguments389['target'] = NULL;
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output393 = '';

$output393 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments394 = array();
$arguments394['identifier'] = 'actions-system-extension-configure';
$arguments394['size'] = 'small';
$arguments394['overlay'] = NULL;
$arguments394['state'] = 'default';
$arguments394['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure395 = function() {return NULL;};

$output393 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output393 .= '
							';
return $output393;
};
$viewHelper396 = $self->getViewHelper('$viewHelper396', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper');
$viewHelper396->setArguments($arguments389);
$viewHelper396->setRenderingContext($renderingContext);
$viewHelper396->setRenderChildrenClosure($renderChildrenClosure392);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper

$output388 .= $viewHelper396->initializeArgumentsAndRender();

$output388 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$arguments397 = array();
$arguments397['class'] = 'btn btn-default';
$arguments397['extensionKey'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments397['additionalAttributes'] = NULL;
$arguments397['data'] = NULL;
$arguments397['dir'] = NULL;
$arguments397['id'] = NULL;
$arguments397['lang'] = NULL;
$arguments397['style'] = NULL;
$arguments397['title'] = NULL;
$arguments397['accesskey'] = NULL;
$arguments397['tabindex'] = NULL;
$arguments397['onclick'] = NULL;
$arguments397['name'] = NULL;
$arguments397['rel'] = NULL;
$arguments397['rev'] = NULL;
$arguments397['target'] = NULL;
$renderChildrenClosure398 = function() {return NULL;};
$viewHelper399 = $self->getViewHelper('$viewHelper399', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper');
$viewHelper399->setArguments($arguments397);
$viewHelper399->setRenderingContext($renderingContext);
$viewHelper399->setRenderChildrenClosure($renderChildrenClosure398);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper

$output388 .= $viewHelper399->initializeArgumentsAndRender();

$output388 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$arguments400 = array();
$arguments400['class'] = 'btn btn-default';
$arguments400['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments400['additionalAttributes'] = NULL;
$arguments400['data'] = NULL;
$arguments400['dir'] = NULL;
$arguments400['id'] = NULL;
$arguments400['lang'] = NULL;
$arguments400['style'] = NULL;
$arguments400['title'] = NULL;
$arguments400['accesskey'] = NULL;
$arguments400['tabindex'] = NULL;
$arguments400['onclick'] = NULL;
$arguments400['name'] = NULL;
$arguments400['rel'] = NULL;
$arguments400['rev'] = NULL;
$arguments400['target'] = NULL;
$renderChildrenClosure401 = function() {return NULL;};
$viewHelper402 = $self->getViewHelper('$viewHelper402', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper');
$viewHelper402->setArguments($arguments400);
$viewHelper402->setRenderingContext($renderingContext);
$viewHelper402->setRenderChildrenClosure($renderChildrenClosure401);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper

$output388 .= $viewHelper402->initializeArgumentsAndRender();

$output388 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments403 = array();
$arguments403['action'] = 'downloadExtensionZip';
$arguments403['controller'] = 'Action';
// Rendering Array
$array404 = array();
$array404['extension'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('extension'), 'key', $renderingContext);
$arguments403['arguments'] = $array404;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments405 = array();
$arguments405['key'] = 'extensionList.downloadzip';
$arguments405['id'] = NULL;
$arguments405['default'] = NULL;
$arguments405['htmlEscape'] = NULL;
$arguments405['arguments'] = NULL;
$arguments405['extensionName'] = NULL;
$renderChildrenClosure406 = function() {return NULL;};
$arguments403['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);
$arguments403['additionalAttributes'] = NULL;
$arguments403['data'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['pluginName'] = NULL;
$arguments403['pageUid'] = NULL;
$arguments403['pageType'] = 0;
$arguments403['noCache'] = false;
$arguments403['noCacheHash'] = false;
$arguments403['section'] = '';
$arguments403['format'] = '';
$arguments403['linkAccessRestrictedPages'] = false;
$arguments403['additionalParams'] = array (
);
$arguments403['absolute'] = false;
$arguments403['addQueryString'] = false;
$arguments403['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments403['addQueryStringMethod'] = NULL;
$arguments403['class'] = NULL;
$arguments403['dir'] = NULL;
$arguments403['id'] = NULL;
$arguments403['lang'] = NULL;
$arguments403['style'] = NULL;
$arguments403['accesskey'] = NULL;
$arguments403['tabindex'] = NULL;
$arguments403['onclick'] = NULL;
$arguments403['name'] = NULL;
$arguments403['rel'] = NULL;
$arguments403['rev'] = NULL;
$arguments403['target'] = NULL;
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output408 = '';

$output408 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments409 = array();
$arguments409['identifier'] = 'actions-system-extension-download';
$arguments409['size'] = 'small';
$arguments409['overlay'] = NULL;
$arguments409['state'] = 'default';
$arguments409['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure410 = function() {return NULL;};

$output408 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '
								';
return $output408;
};
$viewHelper411 = $self->getViewHelper('$viewHelper411', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper411->setArguments($arguments403);
$viewHelper411->setRenderingContext($renderingContext);
$viewHelper411->setRenderChildrenClosure($renderChildrenClosure407);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output388 .= $viewHelper411->initializeArgumentsAndRender();

$output388 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$arguments412 = array();
$arguments412['class'] = 'btn btn-default';
$arguments412['extension'] = $currentVariableContainer->getOrNull('extension');
$arguments412['additionalAttributes'] = NULL;
$arguments412['data'] = NULL;
$arguments412['dir'] = NULL;
$arguments412['id'] = NULL;
$arguments412['lang'] = NULL;
$arguments412['style'] = NULL;
$arguments412['title'] = NULL;
$arguments412['accesskey'] = NULL;
$arguments412['tabindex'] = NULL;
$arguments412['onclick'] = NULL;
$arguments412['name'] = NULL;
$arguments412['rel'] = NULL;
$arguments412['rev'] = NULL;
$arguments412['target'] = NULL;
$renderChildrenClosure413 = function() {return NULL;};
$viewHelper414 = $self->getViewHelper('$viewHelper414', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper');
$viewHelper414->setArguments($arguments412);
$viewHelper414->setRenderingContext($renderingContext);
$viewHelper414->setRenderChildrenClosure($renderChildrenClosure413);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper

$output388 .= $viewHelper414->initializeArgumentsAndRender();

$output388 .= '
						';
return $output388;
};
$viewHelper415 = $self->getViewHelper('$viewHelper415', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper');
$viewHelper415->setArguments($arguments386);
$viewHelper415->setRenderingContext($renderingContext);
$viewHelper415->setRenderChildrenClosure($renderChildrenClosure387);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper

$output243 .= $viewHelper415->initializeArgumentsAndRender();

$output243 .= '
					</div>
				</td>
				</tr>
			';
return $output243;
};

$output215 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output215 .= '
		</tbody>
	</table>
	</div>
';
return $output215;
};

$output204 .= '';


return $output204;
}


}
#1484319860    123881    