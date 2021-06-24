<?php
defined('BASEPATH') or exit('No direct script access allowed');

class getuser extends CI_Controller
{
    var $table = 'member';
    var $id = 'id_member';
    var $tableJoin = '';
    var $column_order = ['', 'nama_member', 'email_member', 'status', 'nohp', 'alamat_member'];
    var $column_search = ['nama_member', 'email_member', 'status', 'nohp', 'alamat_member'];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('my_model', 'my', true);
    }

    public function ajax_list()
    {
        $list = $this->my->get_datatables();
        $data = [];
        $no = 1;

        foreach ($list as $li) {
            $row = [];
            $row[] = $no++;
            $row[] = $li->nama_member;
            $row[] = $li->email_member;
            $row[] = $li->status;
            $row[] = $li->nohp;
            $row[] = $li->alamat;
            $row[] =
                '<a class="btn btn-sm btn-warning text-white" href="#" 
         title="Edit" onclick="edit_menu(' . "'" . $li->id_member . "'" . ')">
			<i class="fa fa-pencil-alt mr-1"></i> Edit</a>';
            $data[] = $row;
        }

        $output = [
            'draw'            => $_POST['draw'],
            'recordsTotal'    => $this->my->count_all(),
            'recordsFiltered' => $this->my->count_filtered(),
            'data'            => $data
        ];

        echo json_encode($output);
    }

    public function get_data()
    {
        $data = $this->my->get_by_id($this->input->post('id', true));
        echo json_encode($data);
    }

    public function action()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');

        if ($this->form_validation->run() != false) {
            $data = [
                'title' => $this->input->post('title', true),
                'url'  => $this->input->post('url', true),
                'icon'  => $this->input->post('icon', true),
                'is_active'  => $this->input->post('is_active', true)
            ];

            $id = $this->input->post('id', true);

            // For Update
            if (!empty($id)) {
                $this->my->update(['id' => $id], $data);
                $status = true;
            }
            // For Insert
            else {
                $this->my->save($data);
                $status = true;
            }

            echo json_encode(["status" => $status]);
        }
    }

    public function delete()
    {
        $this->my->delete($this->input->post('id', true));
        echo json_encode(["status" => TRUE]);
    }
}

/* End of file Contact.php */
