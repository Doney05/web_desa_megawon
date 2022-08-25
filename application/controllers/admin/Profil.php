<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil_m');
        $this->load->model('menu_m');
        is_logged_in();
    }

    public function desa()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['gambaran_umum'] = $profil->getGambaranUmum();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/desa');
        $this->load->view('_partials/footer');
    }

    public function updateProfilDesa($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['profilDesa'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_profil_desa');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateProfilDesa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">profil desa berhasil diupdate!</div>');
            redirect('admin/profil/desa');
        }
    }

    public function pemdes()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['profilPemdes'] = $profil->getProfilPemdes();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/pemdes');
        $this->load->view('_partials/footer');
    }

    public function updateProfilPemdes($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['profilPemdes'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_profil_pemdes');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateProfilPemdes();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil pemerintah desa berhasil diupdate!</div>');
            redirect('admin/profil/pemdes');
        }
    }

    public function bpd()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['profilBpd'] = $profil->getProfilBpd();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/bpd');
        $this->load->view('_partials/footer');
    }

    public function updateProfilBpd($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['profilBpd'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_profil_bpd');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateProfilBpd();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">profil BPD berhasil diupdate!</div>');
            redirect('admin/profil/bpd');
        }
    }

    public function sejarah()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['sejarahDesa'] = $profil->getSejarahDesa();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/sejarah');
        $this->load->view('_partials/footer');
    }

    public function updateSejarahDesa($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['sejarahDesa'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_sejarah_desa');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateSejarahDesa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sejarah desa berhasil diupdate!</div>');
            redirect('admin/profil/sejarah');
        }
    }

    public function visi_misi()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['VisiMisi'] = $profil->getVisiMisi();
        $data['title'] = "Profil";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/visi_misi');
        $this->load->view('_partials/footer');
    }

    public function updateVisiMisi($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['VisiMisi'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_visi_misi');
            $this->load->view('_partials/footer');
        } else {
            $profil->updateVisiMisi();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Visi Misi desa berhasil diupdate!</div>');
            redirect('admin/profil/visi_misi');
        }
    }

    public function Potensi_Desa()
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $data['menu'] = $menu->getAll();
        $data['PotensiDesa'] = $profil->getPotensiDesa();
        $data['title'] = "Warisan Budaya Desa";

        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/top-menu');
        $this->load->view('admin/profil/potensi_desa');
        $this->load->view('_partials/footer');
    }

    public function updatePotensiDesa($id = null)
    {
        $menu = $this->menu_m;
        $profil = $this->profil_m;
        $rules = $profil->rules();
        $validation = $this->form_validation->set_rules($rules);

        if ($validation->run() == false) {
            $data['title'] = "Profil";
            $data['menu'] = $menu->getAll();
            $data['PotensiDesa'] = $profil->getById($id);
            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/top-menu');
            $this->load->view('admin/profil/edit_potensi_desa');
            $this->load->view('_partials/footer');
        } else {
            $profil->updatePotensiDesa();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Potensi desa berhasil diupdate!</div>');
            redirect('admin/profil/potensi_desa');
        }
    }


}
