<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcSubContractResource extends IfcConstructionResource{

	static public $elementName = 'IFCSUBCONTRACTRESOURCE';

	static public $translationFR = 'Ressource de sous-traitance';

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
			'name' => 'Identification',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'LongDescription',
			'class' => 'Type\IfcText',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'Usage',
			'class' => 'Entity\IfcResourceTime',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'BaseCosts',
			'class' => 'Entity\IfcAppliedValue',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'BaseQuantity',
			'class' => 'Entity\IfcPhysicalQuantity',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcSubContractResourceTypeEnum',
			'type' => 'object',
			'optional' => true,
		],
	];
}
/* DEFINITION
ENTITY IfcSubContractResource
SUBTYPE OF (IfcConstructionResource);
PredefinedType : OPTIONAL IfcSubContractResourceTypeEnum;
WHERE
CorrectPredefinedType : NOT(EXISTS(PredefinedType)) OR
(PredefinedType <> IfcSubContractResourceTypeEnum.USERDEFINED) OR
((PredefinedType = IfcSubContractResourceTypeEnum.USERDEFINED) AND EXISTS (SELF\IfcObject.ObjectType));
END_ENTITY;
*/
