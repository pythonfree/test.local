<?php


class Logger
{
    public function log($value)
    {
        echo 'Logging...' . $value;
    }
}



class Product
{
    private $price;
    private $logger;

    public function __constructor()
    {
        $this->logger = new Logger();
    }

    public function setPrice($price)
    {
        $this->price = $price;
        $this->logger->log($price);
    }
}

(new Product())->setPrice(10000);










//class Product
//{
//    protected $price;
//
//    public function log($value)
//    {
//        echo 'Logging...' . $value;
//    }
//
//    public function setPrice($price)
//    {
//        $this->price = $price;
//        $this->log($price);
//    }
//
//
//}
//
//(new Product())->setPrice(1000);