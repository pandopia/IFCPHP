<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcRoleEnum extends IFC\Common{

	static public $elementName = 'IFCROLEENUM';

	static public $translationFR = 'Énumération des rôles';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'SUPPLIER',
			'MANUFACTURER',
			'CONTRACTOR',
			'SUBCONTRACTOR',
			'ARCHITECT',
			'STRUCTURALENGINEER',
			'COSTENGINEER',
			'CLIENT',
			'BUILDINGOWNER',
			'BUILDINGOPERATOR',
			'MECHANICALENGINEER',
			'ELECTRICALENGINEER',
			'PROJECTMANAGER',
			'FACILITIESMANAGER',
			'CIVILENGINEER',
			'COMMISSIONINGENGINEER',
			'ENGINEER',
			'OWNER',
			'CONSULTANT',
			'CONSTRUCTIONMANAGER',
			'FIELDCONSTRUCTIONMANAGER',
			'RESELLER',
			'USERDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcRoleEnum = ENUMERATION OF
(SUPPLIER
,MANUFACTURER
,CONTRACTOR
,SUBCONTRACTOR
,ARCHITECT
,STRUCTURALENGINEER
,COSTENGINEER
,CLIENT
,BUILDINGOWNER
,BUILDINGOPERATOR
,MECHANICALENGINEER
,ELECTRICALENGINEER
,PROJECTMANAGER
,FACILITIESMANAGER
,CIVILENGINEER
,COMMISSIONINGENGINEER
,ENGINEER
,OWNER
,CONSULTANT
,CONSTRUCTIONMANAGER
,FIELDCONSTRUCTIONMANAGER
,RESELLER
,USERDEFINED);
END_TYPE;
*/