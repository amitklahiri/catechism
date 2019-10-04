<?php 
class User extends CI_Model
{
	public function signup($data)
	{
		$config['upload_path'] = 'public/upload/profile/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size'] = '100';
	    $config['max_width']  = '1024';
	    $config['max_height']  = '768';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = TRUE;
	    $config['remove_spaces'] = TRUE;

		$this->upload->initialize($config);
		
		$upload_file_details = $this->upload->do_upload('picture');
		
		$upload_file_name = '';
		foreach ($this->upload->data() as $key => $val) {
			if ($key === 'file_name') {
				$upload_file_name = $val;
				break;
			}
		}

		if (empty($upload_file_name)) {
			$error = $this->upload->display_errors();
		} else {
			if ($this->db->insert('users', [
				'name' 			=> $data['name'], 
				'email' 		=> $data['email'], 
				'password' 		=> password_hash($data['password'], PASSWORD_DEFAULT), 
				'picture' 		=> $upload_file_name, 
				'user_type' 	=> 'S', 
				'user_status' 	=> 'A', 
			])) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}

	public function signin()
	{
		
	}
}
