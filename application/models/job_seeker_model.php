<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_seeker_model extends CI_Model {
	public function __construct()
    {
        parent::__construct();
    }
	public function create_job_seeker($data)
	{
		/*query for check wheather data exist or not */
		$checkquery = $this->db->get_where('tr_candidate_profile', array(
            'candidate_email' => $data['candidate_email'],
        ));
        $count = $checkquery->num_rows();		
		/*check wheather data exist or not */
		if ($count === 0) {
			/* data not exist and insert to database and return verification message */
            $this->db->insert('tr_candidate_profile', $data);
			return 'inserted';
        }
		else{
			/* data exist and return verification message */
			return 'exists';
		}
	}
	public function check_valid_seeker_login($data){
		/*query for check wheather data exist or not */
		$where = "(candidate_email='".$data['candidate_login_data']."' AND candidate_password='".$data['candidate_password']."' AND candidate_status='1' OR candidate_mobile_no='".$data['candidate_login_data']."' AND candidate_password='".$data['candidate_password']."' AND candidate_status='1')";
		$existuser = $this->db->get_where('tr_candidate_profile',$where);
		$count = $existuser->num_rows();
		if ($count === 1) {
            $user_data = $existuser->row_array();
            //print_r($user_data);            
			$user_details['candidate_email'] = $user_data['candidate_email'];
			$user_details['candidate_name'] = $user_data['candidate_name'];
			$user_details['candidate_id'] = $user_data['candidate_id'];
			$user_details['candidate_mobile_no'] = $user_data['candidate_mobile_no'];
			$user_details['candidate_institution_type'] = $user_data['candidate_institution_type'];
			$user_details['user_type'] = 'seeker';
			$user_details['valid_status'] = 'valid';
			return $user_details; 
		}
		else {
			$user_details['valid_status'] = 'invalid';
			return $user_details; 
		}
	}

	/** Seeker Social authentication **/
	public function social_authendication_registration($data)
	{
		/*query for check wheather data exist or not */
		$checkquery = $this->db->get_where('tr_candidate_profile', array(
            'candidate_email' => $data['candidate_email'],
        ));
		$count = $checkquery->num_rows();
		/*check wheather data exist or not */
		if ($count === 0) {
			/* data not exist and insert to database and return verification message */
            $this->db->insert('tr_candidate_profile', $data);
			return 'inserted';
        }
		else{
			/* data exist and return verification message */
			return 'exists';
		}
	}

	/** Seeker Social authentication **/
	public function social_valid_seeker_login($data)
	{
		$where = "(candidate_email='".$data['candidate_email']."' AND candidate_status='1')";
		$existuser = $this->db->get_where('tr_candidate_profile',$where);
		$count = $existuser->num_rows();
		if ($count === 1) {
            $user_data = $existuser->row_array();            
			$user_details['candidate_email'] = $user_data['candidate_email'];
			$user_details['candidate_name'] = $user_data['candidate_name'];			
			$user_details['candidate_id'] = $user_data['candidate_id'];
			$user_details['user_type'] = 'seeker';
			$user_details['valid_status'] = 'valid';
			$user_detalls['login_type'] = $user_data['candidate_registration_type'];
			return $user_details; 
		}
		else {
			$user_details['valid_status'] = 'invalid';
			return $user_details; 
		}
	}

	public function check_has_initial_data($data) {
		
		$where = "(candidate_email='".$data."' AND candidate_status='1')";
		$validuser = $this->db->get_where('tr_candidate_profile',$where);
		$counts = $validuser->num_rows();
		if ($counts === 1) {					
			return 'has_data';
		}
		else{				
			return 'has_no_data';
		}			
	}

	public function job_seeker_update_profile($id,$profile)
	{
	 	$this->db->where('candidate_id', $id);
		$this->db->update('tr_candidate_profile', $profile);
		return 'updated';
	}

	public function get_cand_data_by_id($id)
	{
		$this->db->select('*');    
		$this->db->from('tr_candidate_profile');
		$this->db->join('tr_institution_type', 'tr_candidate_profile.candidate_institution_type = tr_institution_type.institution_type_id','left');
		$this->db->join('tr_district', 'tr_candidate_profile.candidate_district_id = tr_district.district_id','left');
		$this->db->join('tr_state', 'tr_district.district_state_id = tr_state.state_id','left');
		$where = "(tr_candidate_profile.candidate_id='".$id."' AND tr_candidate_profile.candidate_status='1')";
		$this->db->where($where);
		$existuser = $this->db->get()->row_array();
		return $existuser; 
	} 
	// public function get_cand_data_by_mail($email)
	// {
	// 	$this->db->select('*');    
	// 	$this->db->from('tr_candidate_profile');
	// 	$this->db->join('tr_institution_type', ' tr_candidate_profile.candidate_institution_type = tr_institution_type.institution_type_id','left');
	// 	$this->db->join('tr_district', 'tr_candidate_profile.candidate_district_id = tr_district.district_id','left');
	// 	$this->db->join('tr_state', 'tr_district.district_state_id = tr_state.state_id','left');
	// 	$where = "(tr_candidate_profile.candidate_email='".$email."' AND tr_candidate_profile.candidate_status='1')";
	// 	$this->db->where($where);
	// 	$existuser = $this->db->get()->row_array();
	// 	return $existuser; 
	// } 


	public function check_seeker_popup_fields_social($data=array()) {
		$model_data['candidate_data'] =array();
		$mobile_exists_where = "candidate_mobile_no =" . "'" . $data['candidate_mobile_no'] . "' AND candidate_id NOT IN (". $this->input->post('candidate_id').")";

		$mobile_exists = $this->db->get_where('tr_candidate_profile',$mobile_exists_where);
		if($mobile_exists->num_rows() > 0) {
			$model_data['status'] = "Mobile Number Already exists";
		}
		else {
			$email_exists_where = "candidate_email =" . "'" . $data['candidate_email'] . "' AND candidate_id NOT IN (". $this->input->post('candidate_id').")";
			$email_exists = $this->db->get_where('tr_candidate_profile',$email_exists_where);
			if($email_exists->num_rows() > 0) {
				$model_data['status'] = "Email Already exists";
			}
			else {
				$update_where = '(candidate_id="'.$this->input->post('candidate_id').'")';
				$this->db->set($data);
				$this->db->where($update_where);
				$this->db->update('tr_candidate_profile',$data);
				$model_data['status'] = "success";
				$cand_data = $this->db->get_where('tr_candidate_profile',$update_where)->row_array();
				$model_data['candidate_data'] =array(
													'user_type' => 'seeker',
													'candidate_id' => $cand_data['candidate_id'],
													'candidate_name' => $cand_data['candidate_name'],
													'candidate_date_of_birth' => $cand_data['candidate_date_of_birth'],
													'candidate_father_name' => $cand_data['candidate_father_name'],
													'candidate_district_id' => $cand_data['candidate_district_id'],
													'candidate_institution_type' => $cand_data['candidate_institution_type'],
													'candidate_mobile_no' => $cand_data['candidate_email'],
													'candidate_registration_type' => $cand_data['candidate_email'],
													'candidate_image_path' => $cand_data['candidate_image_path'],
													);
			}
		}
		return $model_data;
	}
	
	public function check_seeker_popup_fields($data=array()) {
		$model_data['candidate_data'] =array();
		$update_where = 'candidate_id = "'.$this->input->post('candidate_id').'"';
		$this->db->set($data);
		$this->db->where($update_where);
		$this->db->update('tr_candidate_profile',$data);
		$model_data['status'] = "success";
		$model_data['candidate_data'] =array(
											'user_type' => 'seeker',
											'candidate_id' => $cand_data['candidate_id'],
											'candidate_name' => $cand_data['candidate_name'],
											'candidate_date_of_birth' => $cand_data['candidate_date_of_birth'],
											'candidate_father_name' => $cand_data['candidate_father_name'],
											'candidate_district_id' => $cand_data['candidate_district_id'],
											'candidate_institution_type' => $cand_data['candidate_institution_type'],
											'candidate_mobile_no' => $cand_data['candidate_email'],
											'candidate_registration_type' => $cand_data['candidate_email'],
											'candidate_image_path' => $cand_data['candidate_image_path'],
											);
		return $data;
	}


	public function job_seeker_find_job_counts($ins_id)
	{
		$this->db->from('tr_organization_profile');
		$this->db->join('tr_organization_vacancies','tr_organization_profile.organization_id = tr_organization_vacancies.vacancies_organization_id', 'left');
		$where = "(tr_organization_profile.organization_institution_type_id='".$ins_id."' AND tr_organization_profile.	organization_status='1')";
		$this->db->order_by('organization_id','desc');
		return $this->db->where($where)->count_all_results();
	}

	public function job_seeker_find_jobs($limit,$start,$ins_id)
	{
	 	$this->db->select('*');   
	 	$this->db->from('tr_organization_profile');
		$this->db->join('tr_organization_vacancies','tr_organization_profile.organization_id =	tr_organization_vacancies.vacancies_organization_id','left');
		$where = "(tr_organization_profile.organization_institution_type_id='".$ins_id."' AND tr_organization_profile.	organization_status='1')"; 		
		$this->db->limit($limit,$start);
		$this->db->where($where);
		$findjobsjobdata = $this->db->get();
		return $findjobsjobdata->result_array(); 
	}

	/** to get applied job counts **/
	public function job_seeker_applied_job_counts($ins_id)
	{
		$this->db->from('tr_candidate_applied_job');
		$this->db->join('tr_organization_vacancies','tr_candidate_applied_job.applied_job_vacancies_id = tr_organization_vacancies.vacancies_id', 'left');
		$where = "(tr_candidate_applied_job.applied_job_candidate_id='".$ins_id."' AND tr_candidate_applied_job.	applied_job_status='1')";
		$this->db->order_by('applied_job_id','desc');
		return $this->db->where($where)->count_all_results();
	}

	/** to get applied job records **/
	public function job_seeker_applied_jobs($limit,$start,$ins_id)
	{
	 	$this->db->select('*');   
	 	$this->db->from('tr_candidate_applied_job');
		$this->db->join('tr_organization_vacancies','tr_candidate_applied_job.applied_job_vacancies_id =	tr_organization_vacancies.vacancies_id','left');
		// $this->db->join('tr_organization_profile','tr_organization_vacancies.vacancies_organization_id =	tr_organization_profile.organization_id');
		$where = "(tr_candidate_applied_job.applied_job_candidate_id='".$ins_id."' AND tr_candidate_applied_job.applied_job_status='1')"; 		
		$this->db->limit($limit,$start);
		$this->db->where($where);
		$findjobsjobdata = $this->db->get();
		return $findjobsjobdata->result_array(); 
	}

	public function job_seeker_detail_jobs($ins_id)
	{
	 	$this->db->select('*');   
	 	$this->db->from('tr_organization_vacancies');
		$this->db->join('tr_organization_profile','tr_organization_vacancies.vacancies_organization_id =	tr_organization_profile.organization_id','left');
		$where = "(tr_organization_vacancies.vacancies_id='".$ins_id."' AND tr_organization_vacancies.	vacancies_status='1')"; 				
		$this->db->where($where);
		$findjobsjobdata = $this->db->get();
		return $findjobsjobdata->row_array(); 
	}

	public function get_relatedjob_list()
	{
		$search_product=$this->db->select('*');
        $search_product=$this->db->from('tr_organization_vacancies cp');
        $search_product = $this->db->join('tr_organization_profile op', 'cp.vacancies_organization_id = op.organization_id','inner');
        $where1 = '(cp.vacancies_status=1)';
        $search_product=$this->db->like('cp.vacancies_job_title',$this->input->post('search_keyword'));
        $search_product=$this->db->where($where1);
        $search_product=$this->db->group_by('cp.vacancies_id');
        $query = $this->db->get()->result_array();
        return $query;
	}

	// Get seeker details
	public function get_seeker_details($id)
	{
		$this->db->select('*');
		$this->db->from('tr_candidate_profile cp');
		$this->db->join('tr_candidate_preferance cpre','cp.candidate_id=cpre.candidate_profile_id','left');
		$this->db->where(array('candidate_id' => $id));
		$value = $this->db->get()->row_array();
		// $value = $this->db->get_where('tr_candidate_profile',array('candidate_id' => $id))->row_array();
		return $value;
	}

	// Get seeker applied job details
	public function get_seeker_applied_job($id)
	{
		$value = $this->db->get_where('tr_candidate_applied_job',array('applied_job_candidate_id' => $id, 'applied_job_status' => '1'))->result_array();
		return $value;
	}
	
	// Get seeker education details
	public function get_seeker_education_details($id)
	{
		$value = $this->db->get_where('tr_candidate_education',array('candidate_profile_id' => $id, 'candidate_education_status' => '1'))->result_array();
		return $value;
	}

	// Get seeker experience details
	public function get_seeker_experience_details($id)
	{
		$value = $this->db->get_where('tr_candidate_experience',array('candidate_profile_id' => $id, 'candidate_experience_status' => '1'))->result_array();
		return $value;
	}

	// Get seeker education details
	public function password_change($data=array())
	{
		$password_check_where =  '(candidate_id="'.$data['candidate_id'].'" and candidate_password="'.$data['old_password'].'")';
		$password_check = $this->db->get_where('tr_candidate_profile',$password_check_where);
		if($password_check->num_rows() == 1) {
			$password_update_where = '(candidate_id="'.$data['candidate_id'].'")';
			$password_update_data = array('candidate_password' => $data['new_password']);
			$this->db->set($password_update_data);
			$this->db->where($password_update_where);
			$this->db->update('tr_candidate_profile',$password_update_data);
			$value = "Updated successfully";
		}
		else {
			$value = "Password Not match";
		}
		return $value;
	}
	public function candidate_profile_by_id($id) {
		$cand_where = '(candidate_id="'.$id.'")';
		$value = $this->db->get_where('tr_candidate_profile',$cand_where)->row_array();
		return $value;
	}

	//  Inbox start

	// Inbox unread message count
	public function job_seeker_unread_inbox_count($candidate_id)
	{
	 	$this->db->select('count(is_viewed) as messagecount');    
		$this->db->from('tr_candidate_inbox');
		$where = "(candidate_id='".$candidate_id."' AND candidate_inbox_status='1' AND is_viewed ='0')";
		$this->db->where($where);
		$inboxcount = $this->db->get()->row_array();
		return $inboxcount['messagecount']; 
	}

	public function job_seeker_inbox($candidate_id)
	{
	 	$this->db->select('*');    
		$this->db->from('tr_candidate_inbox ci');
		$this->db->join('tr_organization_profile op', 'ci.candidate_organization_id = op.organization_id');
		$this->db->join('tr_organization_vacancies ov', 'ci.candidate_vacancy_id = ov.vacancies_id');
		$where = "(ci.candidate_id='".$candidate_id."' AND ci.candidate_inbox_status='1')";
		$this->db->order_by('ci.candidate_inbox_id','desc');
		$this->db->where($where);
		$inboxdata = $this->db->get();
		return $inboxdata->result_array(); 
	}

	public function job_seeker_inbox_ajax($candidate_id,$lastid)
	{
	 	$this->db->select('*');    
		$this->db->from('tr_candidate_inbox ci');
		$this->db->join('tr_organization_profile op', 'ci.candidate_organization_id = op.organization_id');
		$this->db->join('tr_organization_vacancies ov', 'ci.candidate_vacancy_id = ov.vacancies_id');
		$where = "(ci.candidate_id='".$candidate_id."' AND ci.candidate_inbox_status='1' AND ci.candidate_inbox_id > '".$lastid."')";
		$this->db->order_by('ci.candidate_inbox_id','desc');
		$this->db->where($where);
		$inboxdata = $this->db->get();
		return $inboxdata->result_array(); 
	}

	public function job_seeker_inbox_full_data($id)
	{
		// Update viewd status
		$this->db->set('is_viewed','1');
		$this->db->where('candidate_inbox_id',$id);
		$this->db->update('tr_candidate_inbox');

	 	$this->db->select('*');    
		$this->db->from('tr_candidate_inbox ci');
		$this->db->join('tr_organization_profile op', 'ci.candidate_organization_id = op.organization_id');
		$this->db->join('tr_organization_vacancies ov', 'ci.candidate_vacancy_id = ov.vacancies_id');
		$this->db->join('tr_district d', 'op.organization_district_id = d.district_id','left');
		$where = "(ci.candidate_inbox_id='".$id."' AND ci.candidate_inbox_status='1')";
		$this->db->where($where);
		$data['inbox_data'] = $this->db->get()->row_array();
		return $data; 
	}
	//  Inbox end

	// Edit profile updation
	public function editprofile_validation($data=array()) {
		if(!$this->input->post('cand_fresh')) {
			$fresh = 0 ;
		}
		else {
			$fresh = 1 ;
		}
		// Check Mobile Number or Email already exists or not
		$mobile_exists_where = "candidate_mobile_no =" . "'" . $data['cand_mobile'] . "' AND candidate_id NOT IN (". $this->input->post('cand_pro').")";

		$mobile_exists = $this->db->get_where('tr_candidate_profile',$mobile_exists_where);
		if($mobile_exists->num_rows() > 0) {
			$model_data['status'] = "Mobile Number Already exists";
		}
		else {
			$email_exists_where = "candidate_email =" . "'" . $data['cand_email'] . "' AND candidate_id NOT IN (". $this->input->post('cand_pro').")";
			$email_exists = $this->db->get_where('tr_candidate_profile',$email_exists_where);
			if($email_exists->num_rows() > 0) {
				$model_data['status'] = "Email Already exists";
			}
			else {
				// Updation in profile table
				$profile_update_data = array(
								'candidate_name' => $data['cand_firstname'],
								'candidate_gender' => $data['cand_gen'],
								'candidate_date_of_birth' => date('Y-m-d',strtotime($data['cand_dob'])),
								'candidate_father_name' => $data['cand_fa_name'],
								'candidate_image_path' => $data['cand_pic'],
								'candidate_marital_status' => $data['cand_marital'],
								'candidate_district_id' => $data['cand_native_dis'],
								'candidate_mother_tongue' => $data['cand_mother_ton'],
								'candidate_language_known' => implode(',',$data['cand_known_lan']),
								'candidate_nationality' => $data['cand_nation'],
								'candidate_religion' => $data['cand_religion'],
								'candidate_community' => $data['cand_communal'],
								'candidate_is_physically_challenged' => $data['cand_phy'],
								'candidate_address_1' => $data['cand_addr1'],
								'candidate_address_2' => $data['cand_addr2'],
								'candidate_live_district_id' => $data['cand_live_dis'],
								'candidate_pincode' => $data['cand_pincode'],
								'candidate_email' => $data['cand_email'],
								'candidate_mobile_no' => $data['cand_mobile'],
								'candidate_facebook_url' => $data['cand_facebook'],
								'candidate_googleplus_url' => $data['cand_google'],
								'candidate_linkedin_url' => $data['cand_linkedin'],
								'candidate_tet_exam_status' => $data['cand_tet'],
								'candidate_interest_subject_id' => $data['cand_int_sub'],
								'candidate_extra_curricular_id' => implode(',',$data['cand_extra_cur']),
								'candidate_is_fresher' => $fresh,
								);
				$this->db->set($profile_update_data);
				$this->db->where('candidate_id',$data['cand_pro']);
				$this->db->update('tr_candidate_profile',$profile_update_data);	
				// Updation in preference table
				$prefrence_update_data = array(
										'candidate_posting_applied_for' => implode(',',$data['cand_posts']),
										'candidate_expecting_start_salary' => $data['cand_start_sal'],
										'candidate_expecting_end_salary' => $data['cand_end_sal'],
										'candidate_willing_class_level_id' => implode(',',$data['cand_class']),
										'candidate_willing_subject_id' => implode(',',$data['cand_sub'])
										);
				$this->db->set($prefrence_update_data);
				$this->db->where('candidate_preferance_id',$data['cand_pre']);
				$this->db->update('tr_candidate_preferance',$prefrence_update_data);
				// Updation in education table
				$data_education = array_map(null,$data['cand_qual'],$data['cand_yop'],$data['cand_med'],$data['cand_dept'],$data['cand_board'],$data['cand_percen'],$data['cand_edu']);
				foreach ($data_education as $edu_key => $edu_val) {
					if(!empty($edu_val[6])) {
						$education_update_data = array(
										'candidate_education_qualification_id' => $edu_val[0],
										'candidate_education_yop' => $edu_val[1],
										'candidate_medium_of_inst_id' => $edu_val[2],
										'candidate_education_department_id' => $edu_val[3],
										'candidate_edu_board' => $edu_val[4],
										'candidate_education_percentage' => $edu_val[5]
										);
						$this->db->set($education_update_data);
						$this->db->where('candidate_education_id',$edu_val[6]);
						$this->db->update('tr_candidate_education',$education_update_data);
					}
					else {
						$education_insert_data = array(
										'candidate_education_qualification_id' => $edu_val[0],
										'candidate_education_yop' => $edu_val[1],
										'candidate_medium_of_inst_id' => $edu_val[2],
										'candidate_education_department_id' => $edu_val[3],
										'candidate_edu_board' => $edu_val[4],
										'candidate_education_percentage' => $edu_val[5],
										'candidate_profile_id' => $data['cand_pro'],
										'candidate_education_status' => '1'
										);
						$this->db->insert('tr_candidate_education',$education_insert_data);
					}
				}
				// Updation in experience table
				if($fresh == 0 ) {
					$data_experience = array_map(null,$data['cand_exp_class'],$data['cand_exp_sub'],$data['cand_exp_board'],$data['cand_exp_yr'],$data['cand_exp']);
					foreach ($data_experience as $exp_key => $exp_val) {
						if(!empty($exp_val[4])) {
							$experience_update_data = array(
											'candidate_experience_class_level_id' => $exp_val[0],
											'candidate_experience_subject_id' => $exp_val[1],
											'candidate_experience_board' => $exp_val[2],
											'candidate_experience_year' => $exp_val[3]
											);
							$this->db->set($experience_update_data);
							$this->db->where('candidate_experience_id',$edu_val[4]);
							$this->db->update('tr_candidate_experience',$experience_update_data);
						}
						else {
							$experience_insert_data = array(
											'candidate_experience_class_level_id' => $exp_val[0],
											'candidate_experience_subject_id' => $exp_val[1],
											'candidate_experience_board' => $exp_val[2],
											'candidate_experience_year' => $exp_val[3],
											'candidate_profile_id' => $data['cand_pro'],
											'candidate_experience_status' => 1
											);
							$this->db->insert('tr_candidate_experience',$experience_insert_data);
						}
					}
				}
				$status = "success";
			}
		}
		return $status;
	}

	//get 
	public function qualification_ids($value){
		$this->db->select('*');    
		$this->db->from('tr_educational_qualification');
		$where = "(educational_qualification_id in (".$value.") AND educational_qualification_status='1')";
		$this->db->where($where);
		$subjectdata = $this->db->get();
		return $subjectdata->result_array(); 
	}

	public function medium_of_instruction($value){
		$this->db->select('*');    
		$this->db->from('tr_languages');
		$where = "(language_name like '%".$value."%' AND language_status='1')";
		$this->db->where($where);
		$subjectdata = $this->db->get();
		return $subjectdata->result_array(); 
	}

	public function job_seeker_applied_job($appliedjobdata)
	{
	 	if($this->db->insert('tr_organizaion_inbox', $appliedjobdata)){
	 		return TRUE;
	 	}
		else{
			return FALSE;
		}
	}

	public function job_seeker_candidatejob($appliedjobdata)
	{
	 	if($this->db->insert('tr_candidate_applied_job', $appliedjobdata)){
	 		return TRUE;
	 	}
		else{
			return FALSE;
		}
	}

} // End