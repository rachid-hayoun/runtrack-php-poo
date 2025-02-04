<?php
class operation{
    public int $nombre1;
    public int $nombre2;
    public function __construct(int $nombre1, int $nombre2){
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;}
}
$operation = new operation(1,2);
echo $operation->nombre1;
?>
