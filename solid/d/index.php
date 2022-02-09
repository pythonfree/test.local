<?php

interface IFoodProvider
{
    public function getFood();
}

class Wife implements IFoodProvider
{

    public function getFood()
    {
        $food = 'SomeHomeFood';
        return $food;
    }
}

class Restaurant implements IFoodProvider
{
    public function getFood()
    {
        $food = 'SomeRastaurantFood';
        return $food;
    }
}

//сильная зависимость от жены
//сложно менять архитектуру
class LowRankingMale
{
    public function eat()
    {
        $wife = new Wife();
        $food = $wife->getFood();
        return $food;
    }
}

//код гибче, можно использовать разных жен
//но все равно зависимость от жены есть
//зависимость построена от деталей
class AverageRankingMale
{
    private $wife;

    public function __constructor(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat()
    {
        $food = $this->wife->getFood();
        return $food;
    }
}


//не важно кто готовит еду, жена или ресторан
//глалвное он должен обеспечивать нужный интерфейс
//не зависим от класса, а зависим от абстракции
class HighRankingMale
{
    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider)
    {
        $this->foodProvider = $foodProvider;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();
        return $food;
    }

}