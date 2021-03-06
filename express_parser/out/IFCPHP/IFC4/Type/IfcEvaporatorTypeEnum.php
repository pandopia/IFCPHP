<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcEvaporatorTypeEnum extends IFC\Common{

	static public $elementName = 'IFCEVAPORATORTYPEENUM';

	static public $translationFR = 'Énumération des types d\'évaporateur';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'DIRECTEXPANSION',
			'DIRECTEXPANSIONSHELLANDTUBE',
			'DIRECTEXPANSIONTUBEINTUBE',
			'DIRECTEXPANSIONBRAZEDPLATE',
			'FLOODEDSHELLANDTUBE',
			'SHELLANDCOIL',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcEvaporatorTypeEnum = ENUMERATION OF
(DIRECTEXPANSION
,DIRECTEXPANSIONSHELLANDTUBE
,DIRECTEXPANSIONTUBEINTUBE
,DIRECTEXPANSIONBRAZEDPLATE
,FLOODEDSHELLANDTUBE
,SHELLANDCOIL
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
