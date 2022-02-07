<?php


interface ILogger
{
    public function log($value);
}

class DbLogger implements ILogger
{
    private function saveToDb($value)
    {
        echo 'Logging in Db...' . $value;
    }

    public function log($value)
    {
        $this->saveToDb($value);
    }
}


class Logger implements ILogger
{
    private function saveToFile($value)
    {
        echo 'logging in file...' . $value;
    }

    public function log($value)
    {
        $this->saveToFile($value);
    }
}

//class Logger
//{
//    private function saveToFile($value)
//    {
//        echo 'Logging in file...' . $value;
//    }
//
//    public function log($value)
//    {
//        $this->saveToFile($value);
//    }
//}

class Product
{
    private $price;
    private $logger;

    public function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        $this->logger->log($price);
    }

}

(new Product(new DbLogger()))->setPrice(1000);
//(new Product(new Logger()))->setPrice(1000);