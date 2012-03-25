<html>
<head>
<title> php case1 - By:Do Anthony </title>
</head>
 
<body>

<?php
class Point {
    public $x;
    public $y;

    function __construct($x,$y) {
        $this->x=$x;
        $this->y=$y;
    }
    function get_x() {
        return($this->x);
    }
    function get_y() {
        return($this->y);
    }
    function dist($p) {
        return(sqrt( pow($this->x-$p->get_x(),2)+
                     pow($this->y-$p->get_y(),2)));
    }
} // Class ends here
$p1=new Point(2,3);
$p2=new Point(3,4);
echo $p1->dist($p2),"<br>";
$p2->x=5;
echo $p1->dist($p2),"\n";
?>
 
</body>
</html>