<?php

// $weekdays = 10;

// switch($weekdays) {
//     case 1:
//         echo "today is Monday";
//         break;
//         case 2:
//             echo "today is Tuesday";
//             break;
//             case 3: 
//                 echo "today is Wednesday";
//                 break;
//                 case 4:
//                     echo "today is Thrusday";
//                     break;
//                     case 5:
//                         echo "today is Friday";
//                         break;
//                         case 6:
//                             echo "Today is Saturday";
//                             break;
//                             case 7:
//                                 echo "today is sunday";
//                                 break;
//                                 default:
//                                 echo "Enter a Valid week day "; 
// }


$age= 18;
switch(true){
    case ($age >=15 && $age <= 20):
        echo "you are not eligble";
        break;
        case($age >=21 && $age <= 30 ):
            echo "you are not eligible.";
            break;
            default:
            echo "Enter the valid age";
            
}
?>