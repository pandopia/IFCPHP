<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcBurnerType extends IfcEnergyConversionDeviceType{

	static public $elementName = 'IFCBURNERTYPE';

	static public $translationFR = 'Type de brûleur';

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
			'class' => 'Type\IfcBurnerTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcBurnerType
SUBTYPE OF (IfcEnergyConversionDeviceType);
PredefinedType : IfcBurnerTypeEnum;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcBurnerTypeEnum.USERDEFINED) OR
((PredefinedType = IfcBurnerTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
END_ENTITY;
*/
