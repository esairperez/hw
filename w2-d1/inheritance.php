
<?php
	class Car {
	var $Color;
	var $Year;
	var $Engine;
	var $Gear;
	var $Wheels;
	var $Make;
	var $Model;
	var $Tires;
	var $Capacity;
	var $SteeringWheel;
		Function __Construct(){;}
		Function __Brake(){;}
		Function __Accelerate(){;}
		Function __Turn(){;}
		Function __Power(){;}
		Function __Fuel(){;}
}

class Tesla extends car{
		Function __Construct(){;}		
		Function __DriveTrain(){;}
		Function __Battery(){;}
		Function __Engine(){;}

}

 

 
class SemiTruck extends car{
		Function __Construct(){;}
		Function __Trailer(){;}
		Function __FreightCargo(){;}
		Function __FrontAxles(){;}
		Function __DriveAxles(){;}
		Function __Motor(){;}
		Function __Gears(){;}
		Function __AirBrakes(){;}
	
}
?>
