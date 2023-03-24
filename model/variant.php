<?php
class product
{
    private  int $id_variant;
    private string $designation;
    private string $image;
    private int $id_product;
    public function getid()
    {
        return $this->id_variant;
    }
    public function getdesignation()
    {
        return $this->designation;
    }
    public function getimage()
    {
        return $this->image;
    }   
    public function getid_product()
    {
        return $this->id_product;
    }   

    public function setdesignation(string $designation)
    {
        $this->designation=$designation;
    }
    public function setimage(int $image)
    {
        $this->image=$image;
    }
    public function setid_product(int $id_product)
    {
        $this->id_product=$id_product;
    }   


    public function __construct(string $designation,string $image, int $id_product)
    {
        $this->designation=$designation;
        $this->image=$image;
        $this->id_product=$id_product;
    }
}