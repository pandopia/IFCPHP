<?php

namespace IFCPHP\IFC4\Entity;
use IFCPHP\IFC4 as IFC;

class IfcStructuralCurveMember extends IfcStructuralMember{

	static public $elementName = 'IFCSTRUCTURALCURVEMEMBER';

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
			'name' => 'PredefinedType',
			'class' => 'Type\IfcStructuralCurveMemberTypeEnum',
			'type' => 'object',
			'optional' => false,
		],
		[
			'name' => 'Axis',
			'class' => 'Entity\IfcDirection',
			'type' => 'object',
			'optional' => false,
		],
	];
}
/* SUPERTYPE
	IfcStructuralCurveMemberVarying
*/


/* DEFINITION
ENTITY IfcStructuralCurveMember
SUPERTYPE OF (ONEOF
(IfcStructuralCurveMemberVarying))
SUBTYPE OF (IfcStructuralMember);
PredefinedType : IfcStructuralCurveMemberTypeEnum;
Axis : IfcDirection;
WHERE
HasObjectType : (PredefinedType <> IfcStructuralCurveMemberTypeEnum.USERDEFINED) OR EXISTS(SELF\IfcObject.ObjectType);
END_ENTITY;
*/
