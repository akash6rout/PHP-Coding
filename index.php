<?php
//echo "Hello World";
// $first =15;
// echo $first;
// $second = "akash";
// $third = "kumar";
// echo $second.$third."HELLO!"."1";

    // $a=10;
    // $b=3;
    // $d=5;
    // $c=$a+$b;
    // echo "\nadd:\t".$c;
    // $c=$a-$b;
    // echo "\nsubt:\t".$c;
    // $c=$a*$b;
    // echo "\n mult:\t".$c;
    // $c=$a%$b;
    // echo "\n mod:\t".$c;
    // $d++;
    // echo "increment:".$d;

    // $x=5;
    // $y=5;

    // var_dump($x==$y);

    // $a=1;
    // $b=0;
    // $c=$a && $b;
    // var_dump($c);

    // $x=5;
    // $x > 7 ? $flag ="Yes": $flag ="No";
    // var_dump($flag);

    // $a=5;
    // $b=6;
    // echo $a."\n";
    // $a+=$b;
    // echo $a."\n";

    // $first = 800;
    // echo $first;

    // $firstName = "WsCube";
    // $lastName = " Tech";
    // echo $firstName.$lastName;

    // echo $fullName = "Akash Kumar Rout";

    // $age = 10;
    //  
    // if($age >= 18){
        // echo "Yes You Can Vote";
    // }else{
        // echo "No You Can Not";
    // }

    // $age = 17;

    // if($age>=18){
        // echo "Yes you can vote";
    // }elseif($age == 17){
        // echo "Please wait one more year";
    // }else{
        // echo "You Cannot vote";
    // }

    //  NESTED IF - ELSE
    // $age =67;

    // if($age>=18){
        // if($age<66){
            // echo "Yes you can vote";
        // }else{
            // echo "You cannot vote anymore";
        // }
    // }else{
        // echo "you cannot vote";
    // }

    // INTRODUCTION TO ARRAY
        //index array
        // $arr1 = array("Car1","Car2","Car3");
        // $arr1[3]="Car4";

        //associate array
        // $arr2 = array(
            // 'name'=> 'akah kumar rout',
            // 'company'=> 'akash trading',
            // 'contact'=> array("9668345131","7008606368"),
            // 'age'=> 21,
            // 'status'=> true,
        // );

        // $arr2['test']= "trading";
    
        // echo "<pre>";
        // print_r($arr2);
        // echo "</pre>";

        //function => User defined functions Pre defined functions
        // function greet(){
            // echo " Welcome to Akash Trading ";
        // }
        // greet();

        //Array functions
        $cars = array(
            0 => "Car1",
            1 => "Car2",
            2 => "Car3",
            3 => "Car4",
            4 => "Car5",
            5 => "Car6",
            6 => "Car7",
        );
        // $x=5;
        // if(is_array($cars)){
            // echo "cars is an array";
        // }else{
            // echo "cars is not an array";
        // }
        // echo array_search('Car2',$cars);
        
        //print_r(array_slice($cars,2));
        echo "<pre>";
        print_r($cars);
        echo "</pre>";
        $popped =array_pop($cars);
        echo($popped);
        echo "</pre>"
        // echo "<pre>";
        // $chuncked = array_chunk($cars,2);
        // print_r($chuncked);
        // echo "</pre>";
        

?>