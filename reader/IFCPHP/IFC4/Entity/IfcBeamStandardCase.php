<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBeamStandardCase extends IfcBeam{

	static public $elementName = 'IFCBEAMSTANDARDCASE';

	static public $translationFR = 'Poutre standard';

	static public $params = [
		[
			'name' => 'GlobalId',
			'class' => 'Type\IfcGloballyUniqueId',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'OwnerHistory',
			'class' => 'Entity\IfcOwnerHistory',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Name',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Description',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ObjectPlacement',
			'class' => 'Entity\IfcObjectPlacement',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Representation',
			'class' => 'Entity\IfcProductRepresentation',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcBeamTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcBeamStandardCase
SUBTYPE OF (IfcBeam);
WHERE
HasMaterialProfileSetUsage : SIZEOF (QUERY(temp <* USEDIN(SELF, 'IFC4.IFCRELASSOCIATES.RELATEDOBJECTS') |
('IFC4.IFCRELASSOCIATESMATERIAL' IN TYPEOF(temp)) AND
('IFC4.IFCMATERIALPROFILESETUSAGE' IN TYPEOF(temp.RelatingMaterial))
)) = 1;
END_ENTITY;
*/
