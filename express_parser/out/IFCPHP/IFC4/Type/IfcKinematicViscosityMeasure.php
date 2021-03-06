<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcKinematicViscosityMeasure extends IFC\Common{

	static public $elementName = 'IFCKINEMATICVISCOSITYMEASURE';

	static public $translationFR = 'Mesure de viscosité cinématique';

	static public $params = [[
		'class' => 'Base\Real',
		'type' => 'object',
	]];
}
/* DEFINITION
TYPE IfcKinematicViscosityMeasure = REAL;
END_TYPE;
*/
