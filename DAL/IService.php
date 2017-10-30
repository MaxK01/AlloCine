<?php

interface IService
{
    public function Create($params);
    
    public function Read();
    
    public function UpDate();
    
    public function Delete();
    
    public function FindAll();
    
    public function  FindById($id);
    
    public function  FindByOne($critere);
    
    public function  FindLast();
}
