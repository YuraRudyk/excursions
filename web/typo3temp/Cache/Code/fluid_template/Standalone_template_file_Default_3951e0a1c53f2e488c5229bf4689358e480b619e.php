<?php
class FluidCache_Standalone_template_file_Default_3951e0a1c53f2e488c5229bf4689358e480b619e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Page';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
        <main>

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments1 = array();
$arguments1['name'] = 'header_background';
$arguments1['value'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
$arguments3 = array();
$arguments3['haystack'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Resource\Record\FalViewHelper
$arguments5 = array();
$arguments5['table'] = 'pages';
$arguments5['field'] = 'media';
$arguments5['uid'] = '2';
$arguments5['record'] = NULL;
$arguments5['as'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Resource\Record\FalViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Resource\Record\FalViewHelper
return $viewHelper7->initializeArgumentsAndRender();
};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper');
$viewHelper8->setArguments($arguments3);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
return $viewHelper8->initializeArgumentsAndRender();
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper');
$viewHelper9->setArguments($arguments1);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '

            
            <div class="out_block">
                <header style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('header_background'), 'url', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output0 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output0 .= ');">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments13 = array();
$arguments13['value'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('content_header');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
                </header>
            </div>

        </main>
    ';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output15 = '';

$output15 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments16 = array();
$arguments16['name'] = 'Page';
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments19 = array();
$arguments19['name'] = 'Main';
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
        <main>

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments22 = array();
$arguments22['name'] = 'header_background';
$arguments22['value'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
$arguments24 = array();
$arguments24['haystack'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Resource\Record\FalViewHelper
$arguments26 = array();
$arguments26['table'] = 'pages';
$arguments26['field'] = 'media';
$arguments26['uid'] = '2';
$arguments26['record'] = NULL;
$arguments26['as'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Resource\Record\FalViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Resource\Record\FalViewHelper
return $viewHelper28->initializeArgumentsAndRender();
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper');
$viewHelper29->setArguments($arguments24);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
return $viewHelper29->initializeArgumentsAndRender();
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper');
$viewHelper30->setArguments($arguments22);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper

$output21 .= $viewHelper30->initializeArgumentsAndRender();

$output21 .= '

            
            <div class="out_block">
                <header style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('header_background'), 'url', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output21 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));

$output21 .= ');">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments34 = array();
$arguments34['value'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('content_header');
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output21 .= '
                </header>
            </div>

        </main>
    ';
return $output21;
};

$output15 .= '';

$output15 .= '
';


return $output15;
}


}
#1484235576    9755      