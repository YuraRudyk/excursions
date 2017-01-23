<?php
class FluidCache_Standalone_partial_Action_Tool_ImportantActions_SystemInformation_012c29232096a7c3257c7a5ea76b68047c2ab999 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '

<h3>Main system information</h3>
<table class="table table-striped table-bordered">
	<tr>
		<td>Operating system:</td>
		<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = $currentVariableContainer->getOrNull('operatingSystem');
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '</strong></td>
	</tr>
	<tr>
		<td>PHP version:</td>
		<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Install\ViewHelpers\ConstantViewHelper
$arguments4 = array();
$arguments4['name'] = 'PHP_VERSION';
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Install\ViewHelpers\ConstantViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '</strong></td>
	</tr>
	<tr>
		<td>PHP CGI detected:</td>
		<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments6 = array();
// Rendering Boolean node
$arguments6['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('cgiDetected'));
$arguments6['then'] = 'Yes';
$arguments6['else'] = 'No';
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '</strong></td>
	</tr>
	<tr>
		<td>Database name:</td>
		<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments8 = array();
$arguments8['value'] = $currentVariableContainer->getOrNull('databaseName');
$arguments8['keepQuotes'] = false;
$arguments8['encoding'] = NULL;
$arguments8['doubleEncode'] = true;
$renderChildrenClosure9 = function() {return NULL;};
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output0 .= (!is_string($value10) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments8['encoding'] !== NULL ? $arguments8['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments8['doubleEncode']));

$output0 .= '</strong></td>
	</tr>
	<tr>
		<td>Database username:</td>
		<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = $currentVariableContainer->getOrNull('databaseUsername');
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = NULL;
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() {return NULL;};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output0 .= (!is_string($value13) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments11['encoding'] !== NULL ? $arguments11['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments11['doubleEncode']));

$output0 .= '</strong></td>
	</tr>
	<tr>
		<td>Database host:</td>
		<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = $currentVariableContainer->getOrNull('databaseHost');
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output0 .= (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode']));

$output0 .= '</strong></td>
	</tr>
	<tr>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('databasePort'));
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
$output22 = '';

$output22 .= '
			<td>Database port:</td>
			<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = $currentVariableContainer->getOrNull('databasePort');
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output22 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output22 .= '</strong></td>
		';
return $output22;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
			<td>Database socket:</td>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('databaseSocket'));
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments32 = array();
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
					<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = $currentVariableContainer->getOrNull('databaseSocket');
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output34 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output34 .= '</strong></td>
				';
return $output34;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments38 = array();
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<td><em>default socket</em> </td>
				';
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output31 .= '
			';
return $output31;
};
$arguments29['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
					<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = $currentVariableContainer->getOrNull('databaseSocket');
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output40 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));

$output40 .= '</strong></td>
				';
return $output40;
};
$arguments29['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<td><em>default socket</em> </td>
				';
};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
		';
return $output28;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output19 .= '
	';
return $output19;
};
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
			<td>Database port:</td>
			<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = $currentVariableContainer->getOrNull('databasePort');
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output44 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output44 .= '</strong></td>
		';
return $output44;
};
$arguments17['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
			<td>Database socket:</td>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('databaseSocket'));
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments52 = array();
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
					<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = $currentVariableContainer->getOrNull('databaseSocket');
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output54 .= (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));

$output54 .= '</strong></td>
				';
return $output54;
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments58 = array();
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<td><em>default socket</em> </td>
				';
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output51 .= '
			';
return $output51;
};
$arguments49['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
					<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = $currentVariableContainer->getOrNull('databaseSocket');
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());

$output60 .= (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));

$output60 .= '</strong></td>
				';
return $output60;
};
$arguments49['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<td><em>default socket</em> </td>
				';
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
		';
return $output48;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
	</tr>
	<tr>
		<td>Database tables:</td>
		<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = $currentVariableContainer->getOrNull('databaseNumberOfTables');
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output0 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output0 .= '</strong></td>
	</tr>
</table>
';


return $output0;
}


}
#1485159813    17221     