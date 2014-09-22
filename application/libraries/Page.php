<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 9/22/14
 * Time: 10:22 AM
 */

class Page {

    private $ci;
    function __construct(){
     $this->ci = &ci::get_instance();
        $this->ci->load->library('pagination');
    }


    public function makepages($url,$total,$per_page){

        $config['base_url'] = base_url($url);
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = '3';
        //config

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = '&laquo;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '&raquo;';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->ci->pagination->initialize($config);

        return $this->ci->pagination->create_links();
    }
} 