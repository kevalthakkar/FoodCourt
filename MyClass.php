<?php
    class MyClass{
        private $manager;
        public function __construct() {
            $this->manager=new MongoDB\Driver\Manager("mongodb://localhost:27017");
        }
        function registeration($u,$p,$e,$m,$bd){
            $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->insert(['username'=>$u,'password'=>$p,'email'=>$e,'mobile'=>$m,'bdate'=>$bd]);
            $res= $this->manager->executeBulkWrite('test.users',$bulk);
            return $res->getInsertedCount();
                    
        }
        function login($u,$p){
            $filter=['username'=>$u,'password'=>$p];
            $q=new MongoDB\Driver\Query($filter);
            $cursor= $this->manager->executeQuery('test.users',$q);
            
            return $cursor;
                    
        }
        function foodInsert($i,$nm,$t,$p){
            $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->insert(['id'=>$i,'name'=>$nm,'type'=>$t,'price'=>$p]);
            $res= $this->manager->executeBulkWrite('test.food',$bulk);
            return $res->getInsertedCount();
        }
        function allFoodData(){
            $filter=[];
            $q=new MongoDB\Driver\Query($filter);
            $cursor= $this->manager->executeQuery('test.food',$q);
            
            return $cursor;
        }
        function foodDataUpdate($i){
            $filter=['id'=>$i];
            $q=new MongoDB\Driver\Query($filter);
            $cursor= $this->manager->executeQuery('test.food',$q);
            
            return $cursor;
        }
        function update($i,$nm,$t,$p){
            $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->update(['id'=>$i],['$set'=>['name'=>$nm,'type'=>$t,'price'=>$p]]);
            $res= $this->manager->executeBulkWrite('test.food',$bulk);
            return $res->getModifiedCount();
        }
        function delete($i){
            $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->delete(['id'=>$i]);
            $res= $this->manager->executeBulkWrite('test.food',$bulk);
            return $res->getdeletedCount();
                    
        }
        function cart($i,$nm,$t,$p,$qty,$tot,$unm){
            $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->insert(['id'=>$i,'name'=>$nm,'type'=>$t,'price'=>$p,'qty'=>$qty,'total'=>$tot,'unm'=>$unm]);
            $res= $this->manager->executeBulkWrite('test.cart',$bulk);
            return $res->getInsertedCount();
        }
        function UpdateCart($i,$u){
            $filter=['id'=>$i,'unm'=>$u];
            $q=new MongoDB\Driver\Query($filter);
            $cursor= $this->manager->executeQuery('test.cart',$q);
            
            return $cursor;
        }
        function updateCartQty($i,$unm,$qty,$total){
            $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->update(['id'=>$i ,'unm'=>$unm],['$set'=>['qty'=>$qty,'total'=>$total]]);
            $res= $this->manager->executeBulkWrite('test.cart',$bulk);
            return $res->getModifiedCount();
        }
        function CartDetail($unm){
            $filter=['unm'=>$unm];
            $q=new MongoDB\Driver\Query($filter);
            $cursor= $this->manager->executeQuery('test.cart',$q);
            
            return $cursor;
        }
        function deleteCartDetail($unm){
             $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->delete(['unm'=>$unm]);
            $res= $this->manager->executeBulkWrite('test.cart',$bulk);
            return $res->getdeletedCount();
        }
        function myOrder($i,$nm,$t,$p,$q,$to,$un){
            $bulk=new MongoDB\Driver\BulkWrite;
            $bulk->insert(['id'=>$i,'name'=>$nm,'type'=>$t,'price'=>$p,'qty'=>$q,'total'=>$to,'date'=> date("d/m/y"),"unm"=>$un]);
            $res= $this->manager->executeBulkWrite('test.myorder',$bulk);
            return $res->getInsertedCount();
        }
        function fetchOrder($unm){
            $filter=['unm'=>$unm];
            $q=new MongoDB\Driver\Query($filter);
            $cursor= $this->manager->executeQuery('test.myorder',$q);
            
            return $cursor;
        }
        function profile($unm){
            $filter=['username'=>$unm];
            $q=new MongoDB\Driver\Query($filter);
            $cursor= $this->manager->executeQuery('test.users',$q);
            
            return $cursor;
        }
    }
?>
