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
 $this->laundry->hitung_total_harga("setrika", "5", false, true);
echo "<br/>";
 $this->laundry->hitung_total_harga("cuci dan setrika", "9", true, true);
 echo "<br/>";
$this->laundry->hitung_total_harga("cuci dan setrika", "5", false, false);
echo "<br/>";
 }
}