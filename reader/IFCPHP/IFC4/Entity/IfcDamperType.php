<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcDamperType extends IfcFlowControllerType{

	static public $elementName = 'IFCDAMPERTYPE';

	static public $translationFR = 'Type de détecteur d\'incendie';

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
			'class' => 'Type\IfcDamperTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* DEFINITION
ENTITY IfcDamperType
SUBTYPE OF (IfcFlowControllerType);
PredefinedType : IfcDamperTypeEnum;
WHERE
CorrectPredefinedType : (PredefinedType <> IfcDamperTypeEnum.USERDEFINED) OR
((PredefinedType = IfcDamperTypeEnum.USERDEFINED) AND EXISTS(SELF\IfcElementType.ElementType));
END_ENTITY;
*/
