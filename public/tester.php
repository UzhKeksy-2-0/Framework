<?php
require_once './bootsrap.php';
use app\core\Application;
use app\models\Product;

Product::connect('h56.hvosting.ua','UzhKeksy','84FFKeW5','flower_shop',3260);
$prod = new Product();
$prod->name = 'kakado';
$prod->discription = 'wooow';
$prod->price = 23;
$prod->save();
//dbObject::autoload("product");
$products = Product::get(4);
foreach($products as $product){
   echo $product->name . '<br>';
}
//var_dump($product);




//  $app = new Application();

      //  $app->router->get('/',function(){
      //     return 'Hello world';
      //  });
      //$app->run();
      //use  app\controller\UK_Controller;
      // var_dump($data->files->logs->error);*/
   // $data = new MysqliDb([
   //    'hostname' => 'h56.hvosting.ua',
   // 	'user' => 'UzhKeksy',
   // 	'password' => '84FFKeW5',
   // 	'database' => 'flower_shop',
   //    'port'=> 3260,
   //    'timeout' => 10,
   //    'socket' => 'mysqli',
   //    'charset' => 'utf8'
   // ]);
   // $data->insert('product',[
   //       'id'=>NULL,
   //       'category_id'=>2,
   //       'name'=>'test',
   //       'discription'=>'tester',
   //       'price'=>12

   // IMPORTANT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
   //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11!!!!!!!!!!!!!!!!
   // $test = new mysqli('h56.hvosting.ua','UzhKeksy','84FFKeW5','flower_shop',3260);
   // $query = "INSERT INTO `product` (id, category_id, name, discription, price) VALUES (NULL, 2, 'sd', 'dssd', 23);";
   // echo $test->query($query) != 1;
   // //echo mysqli_query($test,$query) != 1;
   // $data = new mysqli('localhost','root','','Flovers');
   // $query = "
   // INSERT INTO category (id, name, discrition) VALUES (NULL, 'zd', 'sd');
   // ";
   // $ins = mysqli_query($data,$query) or die('error');
   //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

   // $sql = new MysqliDb('h56.hvosting.ua','UzhKeksy','84FFKeW5','flower_shop',3260);
   // $data = Array(
   //    'id' => NULL,
   //    'category_id' => 1,
   //    'name' => 'sd',
   //    'discription' => 'dss',
   //    'price' => 23
   // );
   // $id = $sql->insert('product',$data);
   // if($id){
   //    echo 'hu';
   // }
   // dbObject::autoload();
   // echo '<pre>';
   // $user = $sql->where('id',2);
   // var_dump($user);

