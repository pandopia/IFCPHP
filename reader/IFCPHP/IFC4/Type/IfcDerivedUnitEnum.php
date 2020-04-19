<?php

namespace IFCPHP\IFC4\Type;
use IFCPHP\IFC4 as IFC;

class IfcDerivedUnitEnum extends IFC\Common{

	static public $elementName = 'IFCDERIVEDUNITENUM';

	static public $translationFR = 'Enumération des unités dérivées';

	static public $params = [[
		'class' => 'Base\Value',
		'type' => 'object',
		'enum' => [
			'ANGULARVELOCITYUNIT',
			'AREADENSITYUNIT',
			'COMPOUNDPLANEANGLEUNIT',
			'DYNAMICVISCOSITYUNIT',
			'HEATFLUXDENSITYUNIT',
			'INTEGERCOUNTRATEUNIT',
			'ISOTHERMALMOISTURECAPACITYUNIT',
			'KINEMATICVISCOSITYUNIT',
			'LINEARVELOCITYUNIT',
			'MASSDENSITYUNIT',
			'MASSFLOWRATEUNIT',
			'MOISTUREDIFFUSIVITYUNIT',
			'MOLECULARWEIGHTUNIT',
			'SPECIFICHEATCAPACITYUNIT',
			'THERMALADMITTANCEUNIT',
			'THERMALCONDUCTANCEUNIT',
			'THERMALRESISTANCEUNIT',
			'THERMALTRANSMITTANCEUNIT',
			'VAPORPERMEABILITYUNIT',
			'VOLUMETRICFLOWRATEUNIT',
			'ROTATIONALFREQUENCYUNIT',
			'TORQUEUNIT',
			'MOMENTOFINERTIAUNIT',
			'LINEARMOMENTUNIT',
			'LINEARFORCEUNIT',
			'PLANARFORCEUNIT',
			'MODULUSOFELASTICITYUNIT',
			'SHEARMODULUSUNIT',
			'LINEARSTIFFNESSUNIT',
			'ROTATIONALSTIFFNESSUNIT',
			'MODULUSOFSUBGRADEREACTIONUNIT',
			'ACCELERATIONUNIT',
			'CURVATUREUNIT',
			'HEATINGVALUEUNIT',
			'IONCONCENTRATIONUNIT',
			'LUMINOUSINTENSITYDISTRIBUTIONUNIT',
			'MASSPERLENGTHUNIT',
			'MODULUSOFLINEARSUBGRADEREACTIONUNIT',
			'MODULUSOFROTATIONALSUBGRADEREACTIONUNIT',
			'PHUNIT',
			'ROTATIONALMASSUNIT',
			'SECTIONAREAINTEGRALUNIT',
			'SECTIONMODULUSUNIT',
			'SOUNDPOWERLEVELUNIT',
			'SOUNDPOWERUNIT',
			'SOUNDPRESSURELEVELUNIT',
			'SOUNDPRESSUREUNIT',
			'TEMPERATUREGRADIENTUNIT',
			'TEMPERATURERATEOFCHANGEUNIT',
			'THERMALEXPANSIONCOEFFICIENTUNIT',
			'WARPINGCONSTANTUNIT',
			'WARPINGMOMENTUNIT',
			'USERDEFINED',
		],
	]];
}
/* DEFINITION
TYPE IfcDerivedUnitEnum = ENUMERATION OF
(ANGULARVELOCITYUNIT
,AREADENSITYUNIT
,COMPOUNDPLANEANGLEUNIT
,DYNAMICVISCOSITYUNIT
,HEATFLUXDENSITYUNIT
,INTEGERCOUNTRATEUNIT
,ISOTHERMALMOISTURECAPACITYUNIT
,KINEMATICVISCOSITYUNIT
,LINEARVELOCITYUNIT
,MASSDENSITYUNIT
,MASSFLOWRATEUNIT
,MOISTUREDIFFUSIVITYUNIT
,MOLECULARWEIGHTUNIT
,SPECIFICHEATCAPACITYUNIT
,THERMALADMITTANCEUNIT
,THERMALCONDUCTANCEUNIT
,THERMALRESISTANCEUNIT
,THERMALTRANSMITTANCEUNIT
,VAPORPERMEABILITYUNIT
,VOLUMETRICFLOWRATEUNIT
,ROTATIONALFREQUENCYUNIT
,TORQUEUNIT
,MOMENTOFINERTIAUNIT
,LINEARMOMENTUNIT
,LINEARFORCEUNIT
,PLANARFORCEUNIT
,MODULUSOFELASTICITYUNIT
,SHEARMODULUSUNIT
,LINEARSTIFFNESSUNIT
,ROTATIONALSTIFFNESSUNIT
,MODULUSOFSUBGRADEREACTIONUNIT
,ACCELERATIONUNIT
,CURVATUREUNIT
,HEATINGVALUEUNIT
,IONCONCENTRATIONUNIT
,LUMINOUSINTENSITYDISTRIBUTIONUNIT
,MASSPERLENGTHUNIT
,MODULUSOFLINEARSUBGRADEREACTIONUNIT
,MODULUSOFROTATIONALSUBGRADEREACTIONUNIT
,PHUNIT
,ROTATIONALMASSUNIT
,SECTIONAREAINTEGRALUNIT
,SECTIONMODULUSUNIT
,SOUNDPOWERLEVELUNIT
,SOUNDPOWERUNIT
,SOUNDPRESSURELEVELUNIT
,SOUNDPRESSUREUNIT
,TEMPERATUREGRADIENTUNIT
,TEMPERATURERATEOFCHANGEUNIT
,THERMALEXPANSIONCOEFFICIENTUNIT
,WARPINGCONSTANTUNIT
,WARPINGMOMENTUNIT
,USERDEFINED);
END_TYPE;
*/
