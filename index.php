
$animal_speed =
    [
        ['animal'=>'rabbit','speed'=>22],
        ['animal'=>'elephant','speed'=>52],
        ['animal'=>'cheetah','speed'=>3],//gepard
        ['animal'=>'antelope','speed'=>7],
        ['animal'=>'fox','speed'=>16],
    ];


function animal_catch(){
    global $animal_speed;
    $random_key = array_rand($animal_speed,1);
    //for ($i=0;$i<count($animal_speed);$i++)
   //{
        if ($animal_speed[$random_key]['speed']>20 || $animal_speed[$random_key]['speed']>40){
            echo $animal_speed[$random_key]['animal'];
        }elseif ($animal_speed[$random_key]['speed']>10){
            echo $animal_speed[$random_key]['animal'];
        }elseif ($animal_speed[$random_key]['speed']>1 && $animal_speed[$random_key]['speed']<10){
            $random_key1 = array_rand($animal_speed,1);
                echo $animal_speed[$random_key1]['animal'];
        }
   // }
}
animal_catch();
