    <?php
    
        echo "Welcome, " . strtoupper("human") . "!\r\n\r\n";
        //Most of the language syntax and functions can be found here.
        //A sample program was performed to show the outcome of each step.
        
        function version($v,$w) {
            echo "[Version " . $v . "]\r\n";
            echo "[Written by " . $w . "]\r\n\r\n";
        }
        
        version("1.5","Mohammed Atoum");
        
        echo "Here, you can find some statics and details about two tech moguls, Brandon and Michael.\r\n";
        echo "__________________________\r\n\r\n";
        
        class Computer {
         public $name;
         public $version = 10;
         public function __construct($name) {
             $this->name = $name; }
         public function Greet() {
             return $this->name . " uses Windows " . $this->version . "."; }
         }
         
         $user1 = new Computer("Brandon");
         echo $user1->greet() . "\r\n";
         if(is_a($user1,"Computer")) {
             echo "He is a registered web user.\r\n\r\n"; }
         
         class Mobile extends Computer {
            public function Greet() {
               $version = 4;
             return $this->name . " uses Android " . $version . "."; }
         }
         
         $user2 = new Mobile("Michael");
         echo $user2->greet() . "\r\n";
         if(is_a($user2,"Computer")) {
             echo "He is a registered mobile user.\r\n\r\n"; }
             
         echo $user1->name . "'s username is: " . substr($user1->name, 0, 4) . ".\r\n";
         echo $user2->name . "'s username is: " . substr($user2->name, 0, 4) . ".\r\n\r\n";        
         
         $brands = array("First"=>"Dell","Second"=>"Toshiba","Third"=>"Lenovo");
         echo "-Available Brands:\r\n";
         array_push($brands, "Samsung");
         foreach($brands as $order=>$brand) {
             if($order == "0") {
             echo "Fourth" . ": " . $brand . "\r\n"; }
             else {
             echo $order . ": " . $brand . "\r\n"; }
         }
         
        echo "* " . $user1->name . "'s laptop brand is " . $brands["First"] . ".\r\n";
        echo "* " . $user2->name . "'s laptop brand is " . $brands["Third"] . ".\r\n";
         
         class Software {
             public $fm;
             const fm = true; }
         
         $check = false;
         if(property_exists("Software","fm")) {
             if(Software::fm == true) {
                 $check = true;
                 echo "\r\n-File Manager is installed on their software.\r\n\r\n"; }
             else {
                 echo "\r\n-File Manager is not found (404).\r\n\r\n"; }
         }
         
         if($check == true) {
             $webApps = array("My Computer","My Documents","Network Manager");
             $length = count($webApps);
             echo "The applications of " . $user1->name . ":\r\n";
             for($i = 0; $i < $length; $i++) {
                 echo $i+1 . ". " . $webApps[$i] . "\r\n"; }
             
             $mobApps = array(array("Facebook", "Messenger"),array("Gmail","YouTube"),array("Camera","Flash"));
             $length = count($mobApps);
             echo "\r\nThe main applications of " . $user2->name . ":\r\n";
             for($i = 0; $i < $length; $i++) {
                 echo $i+1 . ". " . $mobApps{$i}{0} . "\r\n"; }
             
             echo "\r\nThe secondary applications of " . $user2->name . ":\r\n";
             $counter = 0;
             do{
                 echo $counter+1 . ". " . $mobApps{$counter}{1} . "\r\n";
                 $counter += 1;                 
             }while($counter != $length); }
         else {
             echo "Applications cannot be downloaded.\r\n"; }

         $hours = rand(1,24);             
         echo "\r\n" . $user1->name . " spends " . $hours . " hours daily on his device.\r\n";
         switch ($hours):
             case $hours<=12:
                 echo "It is a fair amount of hours.\r\n";
                 break;
             case $hours>12:
                 echo "That is pretty too much!\r\n";
                 break;
         endswitch;
         
         $hours = rand(1,60);             
         echo "\r\n" . $user2->name . " uses his device for " . $hours . " minutes per hour.\r\n";
         switch ($hours):
             case $hours<=30:
                 echo "It is a fair amount of hours.\r\n\r\n";
                 break;
             case $hours>30:
                 echo "That is pretty too much!\r\n\r\n";
                 break;
         endswitch;
         
         echo $user1->name . "'s favorite numbers are: ";
         $numbersOne = array(9, 4, 2, 8, 7);
         sort($numbersOne);
         echo join(",",$numbersOne) . "\r\n";
         
         echo $user2->name . "'s favorite numbers are: ";
         $numbersTwo = array(29, 68, 12, 15);
         rsort($numbersTwo);
         echo join(",",$numbersTwo) . "\r\n\r\n";
         
    ?>
