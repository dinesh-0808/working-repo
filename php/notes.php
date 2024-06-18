<?php

// class person {
//     public $fullname = false;
//     public $givenname = false;
//     public $familyname = false;
//     public $room = false;

//     function get_name() {
//         if($this->fullname !== false) return $this->fullname;
//         if($this->familyname !==false && $this->givenname !== false) {
//             return $this->givenname." ".$this->familyname;
//         }
//         return false;
//     }
// }

// $chuck = new person();
// $chuck->fullname = "chuck chucky";
// echo $chuck->get_name();

// class temp {
//     public static $count = false;

//     function __construct(){
//         self::$count++;
//         echo "constructor called:". self::$count ."\n";
//     }
//     function __destruct(){
//         echo "destructor created\n";
//     }
    
// }
// echo temp::$count."\n";
// $one = new temp();
// echo temp::$count."\n";
// $two = new temp();
// echo temp::$count."\n";
// $three = new temp();
// echo temp::$count."\n";

class hello{
    public $lang = false;
    function __construct($lang){
        $this->lang = $lang;
    }

    function greet(){
        echo $this->lang."\n";
        if($this->lang == 'es'){
            echo "hola\n";
        }
        else {
            echo "hello hi\n";
        }
    }
}

// $one = new hello('es');
// $one->greet();


class social extends hello {
    function bye() {
        if($this->lang == "es"){
           return "Au revoir"; 
        }
        return "goodbye";
    
    }
}


?>
