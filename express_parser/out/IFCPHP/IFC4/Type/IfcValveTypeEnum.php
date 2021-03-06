<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcValveTypeEnum extends IFC\Common{

	static public $elementName = 'IFCVALVETYPEENUM';

	static public $translationFR = 'Enumération des types de vanne';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'AIRRELEASE',
			'ANTIVACUUM',
			'CHANGEOVER',
			'CHECK',
			'COMMISSIONING',
			'DIVERTING',
			'DRAWOFFCOCK',
			'DOUBLECHECK',
			'DOUBLEREGULATING',
			'FAUCET',
			'FLUSHING',
			'GASCOCK',
			'GASTAP',
			'ISOLATING',
			'MIXING',
			'PRESSUREREDUCING',
			'PRESSURERELIEF',
			'REGULATING',
			'SAFETYCUTOFF',
			'STEAMTRAP',
			'STOPCOCK',
			'USERDEFINED',
			'NOTDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcValveTypeEnum = ENUMERATION OF
(AIRRELEASE
,ANTIVACUUM
,CHANGEOVER
,CHECK
,COMMISSIONING
,DIVERTING
,DRAWOFFCOCK
,DOUBLECHECK
,DOUBLEREGULATING
,FAUCET
,FLUSHING
,GASCOCK
,GASTAP
,ISOLATING
,MIXING
,PRESSUREREDUCING
,PRESSURERELIEF
,REGULATING
,SAFETYCUTOFF
,STEAMTRAP
,STOPCOCK
,USERDEFINED
,NOTDEFINED);
END_TYPE;
*/
