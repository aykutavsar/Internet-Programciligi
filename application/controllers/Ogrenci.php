<?php

class Ogrenci extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ogrenci_model");
    }
    public function getAll()
    {
        $items = $this->ogrenci_model->getAll();
        $viewData = array(
            "items" => $items,
        );
        $this->load->view("tablo", $viewData);
    }
    public function insert()
    {
        $id = $this->input->post("id");
        $ad = $this->input->post("ad");
        $soyad = $this->input->post("soyad");
        $ogrenciNo = $this->input->post("ogrenciNo");
        $sinif = $this->input->post("sinif");
        $insert = $this->ogrenci_model->insert(array(
            "id" => $id,
            "ad" => $ad,
            "soyad" => $soyad,
            "ogrenciNo" => $ogrenciNo,
            "sinif" => $sinif,

        ));
        if ($insert) {
            redirect(base_url("Ogrenci/getAll"));
        } else {
            redirect(base_url("/"));
        }
    }
    public function index()
    {

        $items = $this->ogrenci_model->getAll();

        $viewData = array(
            "items" => $items,
        );

        $this->load->view("ogrenci", $viewData);
    }
}
