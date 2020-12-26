<?php
namespace App\Myclasses;

use function PHPUnit\Framework\returnSelf;

class MyService
{
  private $serial;
  private $id = -1;
  private $msg = 'no id...';
  private $data=['Hello', 'Welcome', 'Bye'];
  // private $myservice;

  public function __construct()
  {
    $this->serial = rand();
    echo "「" . $this->serial . "」";
  }

  // public static function getInstance()
  // {
  //   return self::$myservice ?? self::$myservice = 
  //   new MyService();
  // }

  public function setId($id)
  {
    $this->id = $id;
    if ($id >= 0 && $id < count($this->data))
    {
      $this->msg = "select id:" .$id .', data:"' . $this->data[$id] . '"';
    }
  }

  public function say()
  {
    return $this->msg;
  }

  public function data(int $id)
  {
    return $this->data[$id];
  }

  public function alldata()
  {
    return $this->data;
  }
}