<?php
class FluidCache_Standalone_template_file_Headcontent_cee2a523c39ed881d38765827f802e9b7db3eb94 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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



return '<div class="in_header_left">
        <div class="header_form">
        <form role="form" action="index.html" method="post" name="form1" enctype="multipart/form-data">
          <input type="text" class="form-control" id="name" name="name" placeholder="Ваше ім\'я">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Ваш номер телефону">
          <!-- <input type="text" class="form-control" id="excursion" name="excursion" placeholder="Оберіть екскурсію"> -->
          <select  class="form-control" id="excursion" name="excursion" class="form-control" >
                  <optgroup>
                    <option value="">Оберіть екскурсію</option>
                  </optgroup>
                  <optgroup label="Екскурсії по Львову">
                    <option value="Середмістя Львова та підземелля">Середньовічний Львів та підземелля</option>
                    <option value="Австрійський Львів">Австрійський Львів</option>
                    <option value="Княжий Львів">Княжий Львів</option>
                    <option value="Сім чудес Львова">Сім чудес Львова</option>
                    <option value="Вечірній Львів">Вечірній Львів</option>
                    <option value="Сакральні пам’ятки Львова">Сакральні пам’ятки Львова</option>
                    <option value="Личаківське кладовище">Личаківське кладовище</option>
                    <option value="Львівська Опера">Львівська Опера</option>
                    <option value="Шляхетське казино">Шляхетське казино</option>
                    <option value="Нетипова екскурсія Львовом">Нетипова екскурсія Львовом</option>
                    <option value="Львів – місто закоханих">Львів – місто закоханих</option>
                  </optgroup>
                  <optgroup label="Автобусні екскурсії">
                    <option value="Автобусна оглядова">Автобусна оглядова</option>
                    <option value="Золота підкова» Львівщини">Золота підкова» Львівщини</option>
                    <option value="Почаївська лавра">Почаївська лавра</option>
                    <option value="Карпатський трамвайчик">Карпатський трамвайчик</option>
                    <option value="Озеро Синевир та водоспад Шипіт">Озеро Синевир та водоспад Шипіт</option>
                    <option value="Жовква та Крехівський монастир">Жовква та Крехівський монастир</option>
                    <option value="Замки Закарпаття">Замки Закарпаття</option>
                  </optgroup>
          </select>
          <input type="submit" class="form-control" id="button" name="but2" value="Відправити">
        </form>
        </div>
</div>';
}


}
#1484737786    4250      