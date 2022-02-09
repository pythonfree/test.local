<?php


interface WorkAbleInterface
{
    public function work();
}

interface SleepAbleInterface
{
    public function sleep();
}

class HumanWorker implements WorkAbleInterface, SleepAbleInterface
{
    public function work()
    {
        // TODO: Implement work() method.
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
    }

}

class RobotWorker implements WorkAbleInterface
{

    /**
     * @return mixed
     */
    public function work()
    {
        // TODO: Implement work() method.
    }
}



//interface workerInterface
//{
//    public function work();
//    public function sleep();
//}
//
//
//class HumanWorker implements workerInterface
//{
//    public function work()
//    {
//        // TODO: Implement work() method.
//    }
//
//    public function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//}
//
//class RobotWorker implements workerInterface
//{
//    public function sleep()
//    {
//        // TODO: Implement sleep() method.
//    }
//    public function work()
//    {
//        // TODO: not needed!
//    }
//}