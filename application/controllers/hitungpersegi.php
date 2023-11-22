<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hitunglaundry extends CI_Controller
{
function __construct()
{
     parent::__construct();
     $this->load->library('laundry');
}
function index()
{
$this->laundry->total_harga("setrika", "6.5", false, true);
 echo "<br/>";
 $this->laundry->total_harga("cuci dan setrika", "8", true, true);
 echo "<br/>";
 $this->laundry->total_harga("cuci dan setrika", "3.5", false, false);
 echo "<br/>";
 }
}