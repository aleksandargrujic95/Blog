<?php 
class Post_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){
		if($limit){
			$this->db->limit($limit, $offset);
		}
		if($slug === FALSE){
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		$query = $this->db->get_where('posts', array('slug'=>$slug));
		return $query->row_array();
	}
	public function create_post($post_image1){
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'user_id' => $this->session->userdata('user_id'),
			'post_image1' => $post_image1
		);
		return $this->db->insert('posts', $data);
	}
	public function delete_post($id){
		$this->db->where('id', $id);
		$this->db->delete('posts');
		return true;
	}
	public function update_post(){
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body')
		);
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('posts', $data);
	}
	public function delete_post_image1($post_id, $post_image1)
    {
            $post_id = $this->input->post('post_id');
            $post_image1 = $this->input->post('post_image1');

            $this->group_model->delete_group($post_id, $post_image1);
            redirect('product_group');
    }
}