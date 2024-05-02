<?php
     class cart
    {
       
        public function __construct(
            private int $quantity,
            private float $totalPrice){}

        public function getTotalPrice():float
        {
            return $this->totalPrice;
        }
        public function setTotalPrice(int $price):void
        {
            $this->totalPrice=$price;
        }

        public function discount($discount):void
        {
            if ($this->totalPrice>=100) 
            {
                $this->totalPrice-=$this->totalPrice*($discount/100);
            }else
            {
                $this->totalPrice-=0;
            }
            
        }
    }
?>
