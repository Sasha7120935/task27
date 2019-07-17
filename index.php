<?php

abstract class TaxiType
{
    abstract public function getCarType() : ICarType;

    public function callCar()
    {
        $carType = $this->getCarType();

        echo '<pre>';

        echo ('car-> ' . $carType->getCarType());
        echo ('Price-> ' . $carType->getCarPrice());
    }
}
class EconomyTaxi extends TaxiType
{
    public function getCarType(): ICarType
    {

        return new EconomyCar();
    }
}
class StandardTaxi extends TaxiType
{
    public function getCarType(): ICarType
    {

        return new StandardCar();
    }
}
class LuxTaxi extends TaxiType
{
    public function getCarType(): ICarType
    {

        return new LuxCar();
    }
}
interface ICarType
{
    public function getCarType() : string;
    public function getCarPrice() : float;

}
class EconomyCar implements ICarType {

    public function getCarType(): string
    {
        return "Lada";
    }
    public function getCarPrice(): float
    {
        return 20.55;
    }

}
class StandardCar implements ICarType {

    public function getCarType(): string
    {
        return "Skoda";
    }
    public function getCarPrice(): float
    {
        return 150.55;
    }
}
class LuxCar implements ICarType{

    public function getCarType(): string
    {
        return "Audi";
    }
    public function getCarPrice(): float
    {
        return 255.25;
    }
}
function callTaxi(TaxiType $taxiType)

{
    $taxiType->callCar();
}

callTaxi(new EconomyTaxi());
callTaxi(new StandardTaxi());
callTaxi(new LuxTaxi());

