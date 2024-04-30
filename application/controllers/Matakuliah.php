<?php
class Matakuliah extends CI_Controller{
    public function index(){
        $this->load->view('view-form-matakuliah');
    }

    public function cetak(){
        $rules = [
            [
                'field' => 'kode',
                'label' => 'Kode Matakuliah',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode Matakuliah harus diisi.',
                    'min_length' => 'Kode terlalu pendek, minimal 3 karakter.'
                ]
            ],
            [
                'field' => 'nama',
                'label' => 'Nama Matakuliah',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Matakuliah harus diisi.',
                    'min_length' => 'Nama terlalu pendek, minimal 3 karakter.'
                ]
            ],
            [
                'field' => 'sks',
                'label' => 'SKS',
                'rules' => 'required|integer|exact_length[1]',
                'errors' => [
                    'required' => 'Jumlah SKS harus diisi.',
                    'integer' => 'SKS harus berupa angka.',
                    'exact_length' => 'SKS harus berupa satu digit angka.'
                ]
            ],
            [
                'field' => 'status',
                'label' => 'Status Matakuliah',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Matakuliah harus diisi.',
                ]
            ],
        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->output->set_status_header(400);
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
                'status' => $this->input->post('status')
            ];
            
            $this->output->set_status_header(201);
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
