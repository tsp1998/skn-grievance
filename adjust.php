<?php
switch ($Department) {
	case '1':
		$Department = 'CSE';
		break;
	case '2':
		$Department = 'Mechanical';
		break;
	case '3':
		$Department = 'EnTC';
		break;
	case '4':
		$Department = 'Civil';
		break;
	case '5':
		$Department = 'Electrical';
		break;
	case '6':
		$Department = 'First Year';
		break;

	default:
		$Department = '';
		break;
}

switch ($Position) {
	case '1':
		$Position = 'Student';
		break;
	case '2':
		$Position = 'Teacher';
		break;
	case '3':
		$Position = 'Other Stakeholder';
		break;
	default:
		$Position = '';
		break;
}


switch ($Year) {
	case '1':
		$Year = 'First Year';
		break;
	case '2':
		$Year = 'Second Year';
		break;
	case '3':
		$Year = 'Third Year';
		break;
	case '4':
		$Year = 'Final Year';
		break;
	default:
		$Year = '';
		break;
}

switch ($Division) {
	case '1':
		$Division = 'A';
		break;
	case '2':
		$Division = 'B';
		break;
	case '3':
		$Division = 'C';
		break;
	case '4':
		$Division = 'D';
		break;
	case '5':
		$Division = 'E';
		break;
	case '6':
		$Division = '-';
		break;
	default:
		$Division = '';
		break;
}

switch ($Concern) {
	case '1':
		$Concern = 'Ragging';
		break;
	case '2':
		$Concern = 'Sexual Harassment';
		break;
	case '3':
		$Concern = 'Campus Related';
		break;
	case '4':
		$Concern = 'Faculty Related';
		break;
	case '5':
		$Concern = 'Library Related';
		break;
	case '6':
		$Concern = 'Other';
		break;
	default:
		$Concern = '';
		break;
}
