 <?php


 $dayOfWeek = date('N');

 switch($dayOfWeek) {
    case 1:
     	echo "Monday" . PHP_EOL;
     	break;
    case 2:
     	echo "Tuesday" . PHP_EOL;
     	break;
    case 3:
     	echo "Wednesday" . PHP_EOL;
     	break;
	case 4:
     	echo "Thursday" . PHP_EOL;
     	break;
    case 5:
     	echo "Friday" . PHP_EOL;
     	break;
    case 6:
     	echo "Saturday" . PHP_EOL;
     	break;
    case 7:
     	echo "Sunday" . PHP_EOL;
     	break;
    default:
		date_default_timezone_set('America/Chicago');
		break;
 }
