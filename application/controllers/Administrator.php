<?php
class Administrator extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('backend/user');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) 
        {
        $data['title'] = 'Login ';
        $this->load->view('templates2/header', $data);
        $this->load->view('backend/login');
        $this->load->view('templates2/footer');
        }else{
            // validasinya sukses   
            $this->_login('backend/admin');
        }
        
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        
        // jika usernya ada
        if ($user) {
           // jika user aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('backend/admin');
                    }else{
                        redirect('backend/user');
                    }
                    
                }else{
                // jika password salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                  Password anda salah</div>');
                redirect('Administrator');
                }
            }else{
            // jika user tidak aktif
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                  Akun tidak aktif</div>');
                redirect('Administrator');
            }
        } else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
              Akun tidak terdaftar</div>');
            redirect('Administrator');
        }


    }


    public function registration()
    {
        if ($this->session->userdata('username')) {
            redirect('backend/user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', ['matches' => 'password tidak sama!',
            'min_length' => 'password harus lebih dari 5 karakter!']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) 
        {
        $data['title'] = 'user registration';
        $this->load->view('templates2/header', $data);
        $this->load->view('backend/registration');
        $this->load->view('templates2/footer');
        } else{
            $data = [

                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($this->input->post('username',true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()

            ];

            $this->db->insert('user',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
              Kamu telah berhasil membuat akun. silahkan login</div>');
            redirect('Administrator');
        }
        
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
              Kamu telah keluar</div>');
            redirect('Administrator');
    }


    public function blocked()
    {
        echo "access blocked";
    }

 }  