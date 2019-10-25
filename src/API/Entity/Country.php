<?php


namespace App\API\Entity;


class Country implements \JsonSerializable {
    private $id;
    private $nom;
    private $city_id;

    /**
     * @return mixed
     */
    public function getId (){
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId ($id): void{
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName (){
        return $this->nom;
    }

    /**
     * @param mixed $name
     */
    public function setName ($name): void{
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCityId (){
        return $this->city_id;
    }

    /**
     * @param mixed $city_id
     */
    public function setCityId ($city_id): void{
        $this->city_id = $city_id;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link  https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize ():array {
        return [
            'id' => $this->getId(),
            'nom' => $this->getName(),
            'pays' => $this->getCityId()

        ];
    }

}