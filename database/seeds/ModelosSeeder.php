<?php

use Illuminate\Database\Seeder;
use App\Entities\Admin\Models;

class ModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* `tecnica3`.`models` */
		$models = array(
		  array('id' => '3','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3G 8GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '4','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3G 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '5','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3G 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '6','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3GS 8GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '7','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3GS 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '8','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3GS 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '9','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4G 8GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '10','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4G 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '11','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4G 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '12','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4S 8GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '13','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4S 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '14','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4S 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '15','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4S 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '16','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5G 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '17','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5G  32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '18','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5G 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '19','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5C 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '20','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5C 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '21','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5C 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '22','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5S 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '23','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5S 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '24','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5S 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '25','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod TOUCH 4G 8GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '26','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod TOUCH 4G 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '27','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod TOUCH 4G 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '28','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod TOUCH 4G 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '29','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod NANO 6G 8GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '30','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod NANO 6G 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '31','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 2G 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '32','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 2G 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '33','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 2G 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '34','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 2G 16GB 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '35','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 2G 32GB 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '36','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 2G 64GB 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '37','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 3G 16GB 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '38','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 3G 32GB 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '39','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 3G 64GB 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '40','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 3G 16GB  ','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '41','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 3G 32GB  ','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '42','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 3G 64GB  ','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '43','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G 16GB  ','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '44','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G 32GB  ','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '45','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G 64GB  ','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '46','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G 16GB  3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '47','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G 32GB  3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '48','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G 64GB  3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '49','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '8350i','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '50','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '8520','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '51','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '8900','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '52','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9300','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '53','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9500','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '54','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9530','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '55','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9520','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '56','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9550','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '57','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9700','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '58','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9780','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '59','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9800','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '60','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9810','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '61','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9900','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '62','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9320','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '63','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9790','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '64','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9360','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '65','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Q10','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '66','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Z10','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '67','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => '9380','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '3'),
		  array('id' => '68','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad MINI 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '69','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad MINI 32GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '70','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad MINI 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '71','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'S2','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '72','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'S3','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '73','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'S4','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '74','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Note 1','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '75','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Note 2','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '76','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Note 3','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '77','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'S3 Mini','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '78','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'S4 Mini','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '79','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4S','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '80','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 4G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '81','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '82','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 3GS','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '83','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '84','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 5S','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '86','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '87','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 2G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '88','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 1G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '89','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '90','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPad 4G 3G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '91','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod TOUCH 5G','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '92','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod NANO','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '93','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 's5','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '94','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'core i8260','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '95','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'fame s6810','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '96','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'trend s7560','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '97','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'win i8550','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '98','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'advance i9070','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '2'),
		  array('id' => '99','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod Video','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '100','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPod Classic','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '101','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Macbook Pro','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '102','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Macbook air','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '103','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'Macbook White','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '104','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '105','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6 Plus','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '106','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '107','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '108','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6 128GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '109','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6 Plus 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '111','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6 Plus 128GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '112','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6S','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '113','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6S 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '114','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6S 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '115','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6S 128GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '116','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6S Plus 128GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '117','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6S Plus 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '118','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6S Plus 16GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11'),
		  array('id' => '121','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00','deleted_at' => NULL,'name' => 'iPhone 6 Plus 64GB','status' => '','patentamiento' => '0','pack_service' => '0','min_stock' => '0','types_id' => '0','stock_discount' => '1','brands_id' => '11')
		);
		
		Models::insert($models);
    }
}