<?php
inrterface ICategoty {
  public Add($Name,$Parrent=null);
  public GetById($Id);
  publuc GetByName($Name);
}
class Category implements ICategoty  {
  public Parent = null;
  public Name = null;
}
interface IProduct {
  public GetById($Id);
  public GetByName($Name);
  public GetByCategory($CategoryId);
  publuc GetBySeller($SellerId);
  public Add();
}
abstract class ProductBase implements IProduct  {
  public Categoty;
  public Seller = null;
  public Number = 0;
  public Name = null;
  public Type = 0; // 0=Undefined, 1=Normal, 2=Digital
  public Price = array();
  public Picture = array();
}

abstract class ProductNormal extends ProductBase {
  public Quantity = 0;
}

abstract class ProductDigital extends ProductBase {

}
interface ICustomer {
  public Add($Name, $Address, $Email);
  public GetById($Id);
}
class Customer implements ICustomer {
  public Name = null;
  public Address = null;
  public Email = null;
}
interface ISeller {
  function GetById($Id);
  function GetByName($Name);
  function Add($Name);
}
class Seller implements ISeller {
  public Name = null;
 }

?>