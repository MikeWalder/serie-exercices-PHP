<?php
class FruitManager{
    public static function getFruitsFromDB(){
        $pdo2 = MyPDO::getPDO();
        $statement = $pdo2->prepare("SELECT * FROM fruit");
        $statement->execute();
        $fruits = $statement->fetchAll();
        // $fruitsTab = [];

        foreach ($fruits as $fruit) {
            Fruits::$fruitsTab[] = new Fruits($fruit['nom'], $fruit['poids'], $fruit['prix']);
        }
    }
}
