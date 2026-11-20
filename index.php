<?php

class Continent
{
  public $nameContinent;
  
  public function __construct($continent)
  {
    $this->nameContinent = $continent;
  }
  
}
class Country extends Continent
{
  public $nameCountry;
  
  public function __construct($continent , $country)
  {
    parent::__construct($continent);
    $this->nameCountry = $country;
    }
  
}
class Region extends Country
{
    public $nameRegion;

    
    public function __construct($continent , $country , $region)

    {

        parent::__construct($continent , $country);
        $this->nameRegion = $region;
    }
}
class Province extends Region
{
    public $nameProvince;

    
    public function __construct($continent , $country , $region , $province)

    {

        parent::__construct($continent , $country , $region);
        $this->nameProvince = $province;
    }
}
class City extends Province
{
    public $nameCity;

    
    public function __construct($continent , $country , $region , $province , $city)

    {

        parent::__construct($continent , $country , $region , $province);
        $this->nameCity = $city;
    }
}
class Street extends City
{
    public $nameStreet;

    
    public function __construct($continent , $country , $region , $province , $city , $street)

    {

        parent::__construct($continent , $country , $region , $province , $city);
        $this->nameStreet = $street;

    }
   
}


class Indirizzo extends Street 
{
    public $nameIo ;
    public function __construct($continent , $country , $region , $province , $city , $street , $io)
    {
        parent::__construct($continent , $country , $region , $province , $city , $street);
        $this->nameIo = $io;
    }

    public function getMyLocation(){
        echo $this->nameIo . $this->nameContinent . $this->nameCountry . $this->nameRegion . $this->nameProvince . $this->nameCity . $this->nameStreet;
    }

}



$myLocation = new Indirizzo("Europa," , "Italia," , "Puglia," , "BA," , "Bari," , "Strada San Giorgio Martire 2D \n" , "Mi trovo in ");

$myLocation->getMyLocation();


// Ho creato le classi che sono ognuna figlia dell'altra per poi concatenarle tra di loro nel metodo creato alla fine per fare uscire la frase nel terminale