<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcFlowInstrumentType extends IfcDistributionControlElementType{

	static public $elementName = 'IFCFLOWINSTRUMENTTYPE';

	static public $translationFR = 'Type d\'instrument d\'installation fluides';

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
			'name' => 'ApplicableOccurrence',
			'class' => 'Type\IfcIdentifier',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'HasPropertySets',
			'class' => 'Entity\IfcPropertySetDefinition',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'RepresentationMaps',
			'class' => 'Entity\IfcRepresentationMap',
			'type' => 'array',
			'optional' => true,
			'min' => 1,
		],
		[
			'name' => 'Tag',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'ElementType',
			'class' => 'Type\IfcLabel',
			'type' => 'object',
			'optional' => true,
		],
		[
			'name' => 'PredefinedType',
			'class' => 'Type\IfcFlowInstrumentTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcFlowInstrumentType
SUBTYPE OF (IfcDistributionControlElementType);
PredefinedType : IfcFlowInstrumentTypeEnum;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcFlowInstrumentTypeEnum.USERDEFINED) OR
((PredefinedType = IfcFlowInstrumentTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
END_ENTITY;
*/
