<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$img_width = 800;
$img_height = 600;

header('Content-type: image/png');
$img = imagecreatetruecolor($img_width, $img_height);
$black = imagecolorallocate($img, 0, 0, 0);
imagefill($img, 0, 0, $black); // заливка
class quadangle
{
    public $x1,
        $y1,
        $x2,
        $y2,
        $x3,
        $y3,
        $x4,
        $y4,
        $x5,
        $y5,
        $r1,
        $r2,
        $x6,
        $y6,
        $img_width,
        $img_height,
        $img,
        $angle;
    function __construct(
        $x1,
        $y1,
        $x2,
        $y2,
        $x3,
        $y3,
        $x4,
        $y4,
        $x5,
        $y5,
        $r1,
        $r2,
        $x6,
        $y6,
        $img_width,
        $img_height,
        $img,
        $angle
    ) {
        $this->x1 = $x1; // ширина
        $this->y1 = $y1; // высота
        $this->x2 = $x2;
        $this->y2 = $y2;
        $this->x3 = $x3;
        $this->y3 = $y3;
        $this->x4 = $x4;
        $this->y4 = $y4;
        $this->x5 = $x5;
        $this->y5 = $y5;
        $this->r1 = $r1;
        $this->r2 = $r2;
        $this->x6 = $x6;
        $this->y6 = $y6;
        $this->img_width = $img_width;
        $this->img_height = $img_height;
        $this->img = $img;
        $this->angle = $angle;
    }
    function quadangle()
    {
        $R = rand(0, 255);
        $G = rand(0, 255);
        $B = rand(0, 255);
        $color = imagecolorallocate($this->img, $R, $G, $B);
        //quadangle
        imagerectangle(
            $this->img,
            $this->x1, // ширина
            $this->y1, // высота
            $this->x2,
            $this->y2,
            $color
        );
        $d = (int) sqrt(
            pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)
        );
        $s = pow($d, 2) / 2;
        $array = [$s, $R, $G, $B];
        return $array;
    }
    function multipath()
    {
        $R = rand(0, 255);
        $G = rand(0, 255);
        $B = rand(0, 255);
        $color = imagecolorallocate($this->img, $R, $G, $B);
        //threeangle and many angle
        imagepolygon(
            $this->img,
            [
                $this->x1,
                $this->y1,
                $this->x2,
                $this->y2,
                $this->x3,
                $this->y3,
                $this->x4,
                $this->y4,
                $this->x5,
                $this->y5,
            ],
            $this->angle,
            $color
        );
        if ($this->angle === 3) {
            $a = sqrt(
                pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)
            );
            $b = sqrt(
                pow($this->x2 - $this->x3, 2) + pow($this->y2 - $this->y3, 2)
            );
            $c = sqrt(
                pow($this->x1 - $this->x3, 2) + pow($this->y1 - $this->y3, 2)
            );
            $p = (int) ($a + $c + $a) / 2;
            $s = (int) sqrt($p * ($p - $a) * ($p - $b) * ($p - $a));
        } else {
            $c = sqrt(
                pow($this->x1 - $this->x2, 2) + pow($this->y1 - $this->y2, 2)
            );
            $b = sqrt(
                pow($this->x2 - $this->x3, 2) + pow($this->y2 - $this->y3, 2)
            );
            $d = sqrt(
                pow($this->x3 - $this->x4, 2) + pow($this->y3 - $this->y4, 2)
            );
            $a = sqrt(
                pow($this->x4 - $this->x1, 2) + pow($this->y4 - $this->y1, 2)
            );
            //$h = (int) sqrt(pow($c, 2) - pow(pow($a - $b, 2) + pow($c, 2) - pow($d, 2) / (2 * ($a - $b)), 2));
            $s =
                (($a + $b) / 2) *
                sqrt(
                    pow($c, 2) -
                        (pow($a - $b, 2) + (pow($c, 2) - pow($d, 2))) /
                            (2 * ($a - $b))
                );
        }
        $array = [(int) $s, $R, $G, $B];
        return $array;
    }
    function circle()
    {
        $R = rand(0, 255);
        $G = rand(0, 255);
        $B = rand(0, 255);
        $color = imagecolorallocate($this->img, $R, $G, $B);
        imageellipse(
            $this->img,
            $this->x6,
            $this->y6,
            $this->r1,
            $this->r2,
            $color
        ); //circle
        $s = (int) (pi() * pow($this->r1, 2)) / 4;
        $array = [$s, $R, $G, $B];
        return $array;
    }
}
for ($i = 0; $i < 2; $i++) {
    $i2 = $i * 10;
    $draw = new quadangle(
        ($xx1 = rand(0, 100)),
        ($yy1 = rand(0, 100)),
        ($xx2 = rand(120, 200)),
        ($yy2 = rand(120, 200)),
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        $img_width,
        $img_height,
        $img,
        0
    );
    [$s, $R, $G, $B] = $draw->quadangle();
    $color = imagecolorallocate($img, $R, $G, $B);
    imagestring(
        $img,
        2,
        10,
        $i2 + 250,
        'quadangle ' .
            $i .
            ' = ' .
            $s .
            ' px^2' .
            ' Color = R' .
            $R .
            ' G' .
            $G .
            ' B' .
            $B,
        $color
    );
    $draw->quadangle(); // threeangle
    $draw = new quadangle(
        ($xx1 = rand(220, 300)),
        ($yy1 = rand(130, 200)),
        ($xx2 = rand(320, 350)),
        ($yy2 = rand(100, 120)),
        ($xx3 = rand(400, 420)),
        ($yy3 = rand(130, 200)),
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        $img_width,
        $img_height,
        $img,
        3
    );
    [$s, $R, $G, $B] = $draw->multipath();
    $color = imagecolorallocate($img, $R, $G, $B);
    imagestring(
        $img,
        2,
        200,
        $i2 + 0,
        'threeangle ' .
            $i .
            ' = ' .
            $s .
            ' px' .
            ' Color = R' .
            $R .
            ' G' .
            $G .
            ' B' .
            $B,
        $color
    );
    $draw->multipath();
    $draw = new quadangle(
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        ($d = rand(10, 50)),
        $d,
        rand(400, 500),
        rand(90, 110),
        $img_width,
        $img_height,
        $img,
        0
    );
    [$s, $R, $G, $B] = $draw->circle();
    $color = imagecolorallocate($img, $R, $G, $B);
    imagestring(
        $img,
        2,
        350,
        $i2 + 250,
        'circle ' .
            $i .
            ' = ' .
            $s .
            ' px' .
            ' Color = R' .
            $R .
            ' G' .
            $G .
            ' B' .
            $B,
        $color
    );
    $draw->circle();
    $draw = new quadangle( //trapezoid
        ($xx1 = rand(550, 600)),
        ($yy1 = rand(140, 170)),
        ($xx2 = rand(620, 650)),
        ($yy2 = rand(110, 110)),
        ($xx3 = rand(660, 700)),
        ($yy3 = rand(120, 120)),
        ($xx4 = rand(720, 780)),
        ($yy4 = rand(150, 170)),
        $xx1,
        $yy1,
        0,
        0,
        0,
        0,
        $img_width,
        $img_height,
        $img,
        5
    );
    [$s, $R, $G, $B] = $draw->multipath();
    $color = imagecolorallocate($img, $R, $G, $B);
    imagestring(
        $img,
        2,
        520,
        $i2 + 0,
        'trapezoid ' .
            $i .
            ' = ' .
            $s .
            ' px' .
            ' Color = R' .
            $R .
            ' G' .
            $G .
            ' B' .
            $B,
        $color
    );
    $draw->multipath();
}
imagejpeg($img);
?>