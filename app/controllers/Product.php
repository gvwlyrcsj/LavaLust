<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product extends Controller {
    
    public function __construct(){
        parent::__construct();
        $this->call->model('product_model');
    }

    public function read() {
        $data['users'] = $this->product_model->read();
        $data['name'] = "Lavalust CRUD";
        $this->call->view('user/display', $data);
    }

    public function create() {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('last_name')
                    ->required('Last name is required.')
                    ->alpha();
            $this->form_validation
                ->name('first_name')
                    ->required('First name is required.');
            $this->form_validation
                ->name('email')
                    ->required('Email is required.');
            $this->form_validation
                ->name('gender')
                    ->required('Gender is required.')
                    ->alpha();
            $this->form_validation
                ->name('address')
                    ->required('Address is required.')
                    ->max_length(200);
                    
            if($this->form_validation->run()) {
                $last_name = $this->io->post('last_name');
                $first_name = $this->io->post('first_name');
                $email = $this->io->post('email');
                $gender = $this->io->post('gender');
                $address = $this->io->post('address'); 
                
                if($this->product_model->create($last_name, $first_name, $email, $gender, $address)) {
                    set_flash_alert('success', 'User was successfully added.');
                    redirect('user/add');
                } 

            } else {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('user/add');
            }
        }
        $this->call->view('user/create'); 
    }
    
    public function update($id) {        
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('last_name')
                    ->required('Last name is required.');
            $this->form_validation
                ->name('first_name')
                    ->required('First name is required.');
            $this->form_validation
                ->name('email')
                    ->required('Email is required.');
            $this->form_validation
                ->name('gender')
                    ->required('Gender is required.');
            $this->form_validation
                ->name('address')
                    ->required('Address is required.')
                    ->max_length(200);
                
            if($this->form_validation->run()) {
                $last_name = $this->io->post('last_name');
                $first_name = $this->io->post('first_name');
                $email = $this->io->post('email');
                $gender = $this->io->post('gender');
                $address = $this->io->post('address'); 
                
                if($this->product_model->update($id, $last_name, $first_name, $email, $gender, $address)) {
                    set_flash_alert('success', 'User was successfully updated.');
                    redirect('user/display/');
                } 
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('user/update/' . $id);
            }
        }

        $data['user'] = $this->product_model->get_one($id);
        $this->call->view('user/update', $data);
    }
    
    public function delete($id) {
        if($this->product_model->delete($id)) {
            set_flash_alert('success', 'Product was deleted successfully.');
            redirect('user/display');
        } else {
            set_flash_alert('danger', 'Something went wrong.');
            redirect('user/display');
        }
    }
}         
?>
