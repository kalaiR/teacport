<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_Providermodel extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  // Job provider profile
  public function get_provider_profile($status) {

    $model_data['status'] = 0;
    $model_data['error'] = 0;

    // Update data
    if($status=='update') {
      $start_date = date('Y-m-d',strtotime($this->input->post('val_sdate')));
      $end_date = date('Y-m-d',strtotime($this->input->post('val_edate')));
      $profile_update_org_data = array( 
                              'organization_name' => $this->input->post('organization_name'),
                              'organization_logo' => $this->input->post('organization_logo'),
                              'organization_status' => $this->input->post('organization_status'),
                              'registrant_designation' => $this->input->post('registrant_designation'),
                              'registrant_date_of_birth' => $this->input->post('registrant_dob'),
                              'registrant_email_id' => $this->input->post('registrant_email'),
                              'registrant_mobile_no' => $this->input->post('registrant_mobile'),
                              'registrant_name' => $this->input->post('registrant_name'),
                              'organization_district_id' => $this->input->post('organization_district'),
                              'organization_address_3' => $this->input->post('org_addr_3'),
                              'organization_address_2' => $this->input->post('org_addr_2'),
                              'organization_address_1' => $this->input->post('org_addr_1'),
                              'organization_institution_type_id' => $this->input->post('institution_type')
                            );
      // $profile_update_org_sub_data = array( 
      //                         'is_email_validity' => $this->input->post('email_valid'), 
      //                         'is_sms_validity' => $this->input->post('sms_valid'),
      //                         'is_resume_validity' => $this->input->post('resume_valid'),
      //                         'subscription_status' => $this->input->post('subscription_status'),
      //                       );
      $profile_update_org_where = '( organization_id="'.$this->input->post('rid').'")'; 
      $this->db->set($profile_update_org_data);                         
      $this->db->where($profile_update_org_where);
      $this->db->update("tr_organization_profile", $profile_update_org_data); 

      // $profile_update_org_sub_where = '( organization_id="'.$this->input->post('rid').'" and organization_subscription_status=1)'; 
      // $this->db->set($profile_update_org_sub_data);                         
      // $this->db->where($profile_update_org_sub_where);
      // $this->db->update("tr_organization_subscription", $profile_update_org_sub_data);

      $model_data['status'] = "Updated Successfully";
      $model_data['error'] = 2;   
    }

    // Delete data
    else if($status =='delete') {
      $profile_delete_org_where = '(organization_id="'.$this->input->post('rid').'")';
      $profile_delete_org_sub_where = '(organization_id="'.$this->input->post('rid').'")';
      $this->db->delete("tr_organization_profile", $profile_delete_org_where); 
      $this->db->delete("tr_organization_subscription", $profile_delete_org_sub_where); 
      $model_data['status'] = "Deleted Successfully";
      $model_data['error'] = 2;
    }

    // View
    $this->db->select('*');
    $this->db->from('tr_organization_profile');
    $this->db->order_by('organization_id','desc');
    // $this->db->join('tr_organization_subscription os','op.organization_id=os.organization_id','left');
    // $this->db->join('tr_subscription s','os.subscription_id=s.subscription_id','left');
    // $this->db->group_by('org_id');
    // $this->db->where('os.organization_subscription_status','1');
    // $this->db->or_where('os.organization_subscription_status',NULL);
    $model_data['provider_profile'] = $this->db->get()->result_array();

    // echo "<pre>";
    // print_r($model_data['provider_profile']);
    // echo "</pre>";


    //   $subscription_where = '(tos.organization_id="1")';

    // $this->db->select('*');
    // $this->db->from('tr_organization_subscription tos');
    // $this->db->join('tr_subscription ts','tos.subscription_id=ts.subscription_id','inner');
    // $this->db->join('tr_organization_upgrade_or_renewal our','tos.organization_subscription_id=our.organization_subscription_id','left');
    // $model_data['payment_details'] = $this->db->where($subscription_where)->order_by('tos.organization_subscription_id desc,our.organization_upgrade_id desc,our.upgrade_or_renewal_id desc')->get()->result_array();

    //     echo "<pre>";
    // print_r(get_provider_subscription($model_data['payment_details']));
    // echo "</pre>";




    return $model_data;
  }

  // Job provider profile - ajax
  public function get_full_provider_profile($value) {
    $provider_profile_where = '(op.organization_id="'.$value.'" )';
    $this->db->select('op.organization_id as org_id,op.*,os.*,it.*,os.*,d.*');
    $this->db->from('tr_organization_profile op');
    $this->db->join('tr_organization_subscription os','op.organization_id=os.organization_id','left');
    $this->db->join('tr_subscription s','os.subscription_id=s.subscription_id','left');
    $this->db->join('tr_institution_type it','op.organization_institution_type_id=it.institution_type_id','left');
    $this->db->join('tr_district d','op.organization_district_id=d.district_id','left');
    $this->db->order_by('os.organization_subscription_status','desc');
    $this->db->group_by('org_id');
    $model_data['provider_full_profile'] = $this->db->where($provider_profile_where)->get()->row_array();
    $model_data['payment_details'] =  array();

    $subscription_where = '(tos.organization_id="'.$value.'")';

    $this->db->select('*');
    $this->db->from('tr_organization_subscription tos');
    $this->db->join('tr_subscription ts','tos.subscription_id=ts.subscription_id','inner');
    $this->db->join('tr_organization_upgrade_or_renewal our','tos.organization_subscription_id=our.organization_subscription_id','left');
    $model_data['payment_details'] = $this->db->where($subscription_where)->order_by('tos.organization_subscription_id desc,our.organization_upgrade_id desc,our.upgrade_or_renewal_id desc')->get()->result_array();
    return $model_data;
  }

  // Job provider profile
  public function get_provider_vacancy($status) {


    $model_data['status'] = 0;
    $model_data['error'] = 0;
    // Update data
    if($status=='update') {
      $vacancy_get_where   = "vacancies_organization_id =" . "'" . $this->input->post('org_name') . "' AND vacancies_job_title =" . "'" . $this->input->post('job_title') . "' AND vacancies_id NOT IN (". $this->input->post('rid').")";
      $vacancy_get = $this->db->get_where('tr_organization_vacancies',$vacancy_get_where);
      if($vacancy_get -> num_rows() > 0 ) {
        $model_data['status'] = "Already exists";
        $model_data['error'] = 1;
      }
      else {
        if($this->input->post('vac_pos_name')) {
          $pos_name = $this->input->post('vac_pos_name');
        }
        else {
          $pos_name = NULL;
        }
        $vacancy_update_data = array( 
                                'vacancies_job_title' => $this->input->post('job_title'),
                                'vacancies_organization_id' => $this->input->post('org_name'),
                                'vacancies_available' => $this->input->post('vac_available'),
                                'vacancies_open_date' => $this->input->post('vac_open_date'),
                                'vacancies_close_date' => $this->input->post('vac_end_date'),
                                'vacancies_start_salary' => $this->input->post('job_min_salary'),
                                'vacancies_end_salary' => $this->input->post('job_max_salary'),
                                'vacancies_status' => $this->input->post('vac_status'),
                                'vacancies_qualification_id' => $this->input->post('qualification_name'),
                                'vacancies_experience' => $this->input->post('vac_experience'),
                                'vacancies_class_level_id' => $this->input->post('vac_class'),
                                'vacancies_university_board_id' => $this->input->post('vac_univ_name'),
                                'vacancies_subject_id' => $this->input->post('vac_sub_name'),
                                'vacancies_department_id' => $this->input->post('vac_dept_name'),
                                'vacancies_applicable_posting_id' => $pos_name,
                                'vacancies_medium' => $this->input->post('vac_medium'),
                                'vacancies_accommodation_info' => $this->input->post('vac_accom'),
                                'vacancies_instruction' => $this->input->post('vac_instruction'),
                                'vacancies_interview_start_date' => $this->input->post('vac_inter_sdate'),
                                'vacancies_end_date' => $this->input->post('vac_inter_edate')
                              );
        $vacancy_update_where = '( vacancies_id="'.$this->input->post('rid').'")'; 
        $this->db->set($vacancy_update_data); 
        $this->db->where($vacancy_update_where);
        $this->db->update("tr_organization_vacancies", $vacancy_update_data); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2;
      }
    }

    // Delete data
    else if($status =='delete') {
      $vacancy_delete_where = '(vacancies_id="'.$this->input->post('rid').'")';
      $this->db->delete("tr_organization_vacancies", $vacancy_delete_where); 
      $model_data['status'] = "Deleted Successfully";
      $model_data['error'] = 2;
    }

    // View
    $this->db->select('*');
    $this->db->from('tr_organization_vacancies ov');
    $this->db->join('tr_organization_profile op','ov.vacancies_organization_id=op.organization_id','inner');
    $this->db->join('tr_educational_qualification eq','ov.vacancies_qualification_id=eq.educational_qualification_id','inner');
    $this->db->join('tr_class_level cl','ov.vacancies_class_level_id=cl.class_level_id','inner');
    $this->db->join('tr_university_board ub','ov.vacancies_university_board_id=ub.education_board_id','inner');
    $this->db->join('tr_departments td','ov.vacancies_department_id=td.departments_id','inner');
    $this->db->join('tr_applicable_posting tap','ov.vacancies_applicable_posting_id=tap.posting_id','left');
    $this->db->join('tr_subject s','ov.vacancies_subject_id=s.subject_id','inner');
    $model_data['provider_vacancy'] = $this->db->get()->result_array();
    return $model_data;
  }

  // Job provider vacancy - ajax
  public function get_full_provider_vacancy($value) {
    $provider_vacancy_query = $this->db->query("SELECT * FROM tr_educational_qualification AS c INNER JOIN ( SELECT *, SUBSTRING_INDEX( SUBSTRING_INDEX( t.vacancies_qualification_id, ',', n.n ) , ',', -1 ) value FROM tr_organization_vacancies t CROSS JOIN numbers n WHERE n.n <=1 + ( LENGTH( t.vacancies_qualification_id ) - LENGTH( REPLACE( t.vacancies_qualification_id, ',', ''))) ) AS a ON a.value = c.educational_qualification_id INNER JOIN tr_organization_profile AS op ON a.vacancies_organization_id=op.organization_id INNER JOIN tr_class_level AS cl ON a.vacancies_class_level_id=cl.class_level_id INNER JOIN tr_university_board AS ub ON a.vacancies_university_board_id=ub.education_board_id INNER JOIN tr_subject AS s ON a.vacancies_subject_id=s.subject_id INNER JOIN tr_departments AS td ON a.vacancies_department_id=td.departments_id LEFT JOIN tr_applicable_posting AS tap ON a.vacancies_applicable_posting_id=tap.posting_id WHERE a.vacancies_id='$value'");
    $provider_vacancy = $provider_vacancy_query->result_array();  
    return $provider_vacancy;
  }

  // Organization_activity - Add Edit Delete View
  public function teacport_organization_activities($status)
  {
    $model_data['status'] = 0;
    $model_data['error'] = 0;

    // Update data
    if($status=='update') {
      $activity_get_where = "activity_organization_id =" . "'" . $this->input->post('act_org_name') . "' AND activity_candidate_id =" . "'" . $this->input->post('act_cand_name') . "' AND activity_id NOT IN (". $this->input->post('rid').")";
      $activity_get = $this->db->get_where('tr_organization_activity',$activity_get_where);

      if($activity_get -> num_rows() > 0) {
        $model_data['status'] = "Already exist";
        $model_data['error'] = 1;     
      }
      else {
        if($this->input->post('act_vac_name')) {
          $vac_name = $this->input->post('act_vac_name');
        }
        else {
          $vac_name = NULL;
        }
        
        $activity_update_data = array( 
                                    'activity_organization_id' => $this->input->post('act_org_name'),
                                    'activity_candidate_id' => $this->input->post('act_cand_name'),
                                    'activity_vacancy_id' => $vac_name,
                                    'is_sms_sent' => $this->input->post('act_sms'),
                                    'is_email_sent' => $this->input->post('act_email'),
                                    'is_resume_downloaded' => $this->input->post('act_resume')
                                  );
        $activity_update_where = '(activity_id="'.$this->input->post('rid').'")'; 
        $this->db->set($activity_update_data); 
        $this->db->where($activity_update_where);
        $this->db->update("tr_organization_activity", $activity_update_data); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2;
      }
    }

    // Delete data
    else if($status =='delete') {
      $district_delete_data = '(activity_id="'.$this->input->post('rid').'")';
      $this->db->delete("tr_organization_activity", $district_delete_data); 
      $model_data['status'] = "Deleted Successfully";
      $model_data['error'] = 2;
    }

    // View
    $this->db->select('*');
    $this->db->from('tr_organization_activity oa');
    $this->db->join('tr_candidate_profile cp','oa.activity_candidate_id=cp.candidate_id','inner');
    $this->db->join('tr_organization_profile op','oa.activity_organization_id=op.organization_id','inner');
    $this->db->join('tr_organization_vacancies ov','oa.activity_vacancy_id=ov.vacancies_id','left');
    $this->db->order_by('oa.activity_id','desc');
    $model_data['pro_activities'] = $this->db->get()->result_array();
    return $model_data;
  }

  // Job provider ads
  public function get_provider_ads($status) {

    $model_data['status'] = 0;
    $model_data['error'] = 0;

    // Update data
    if($status=='update') {
      $ads_get_where = "premium_ads_name =" . "'" . $this->input->post('ads_name') . "' AND organization_id =" . "'" . $this->input->post('org_name') . "' AND premium_ads_id NOT IN (". $this->input->post('rid').")";
      $ads_get = $this->db->get_where('tr_premium_ads',$ads_get_where);
      if($ads_get->num_rows() > 0) {
        $model_data['error'] = 1;
        $model_data['status'] = "Already exists";
      }
      else {
        $ads_update_data = array( 
                                'premium_ads_name' => $this->input->post('ads_name'),
                                'ads_image_path' => $this->input->post('ads_logo'),
                                'organization_id' => $this->input->post('org_name'),
                                'ad_visible_days' => $this->input->post('ads_days'),
                                'is_admin_verified' => $this->input->post('admin_verify'),
                                'premium_ads_status' => $this->input->post('ads_status')
                              );
        $ads_update_where = '( premium_ads_id="'.$this->input->post('rid').'")'; 
        $this->db->set($ads_update_data); 
        $this->db->where($ads_update_where);
        $this->db->update("tr_premium_ads", $ads_update_data); 
        $model_data['status'] = "Updated Successfully";
        $model_data['error'] = 2; 
      }  
    }

    // Delete data
    else if($status =='delete') {
      $ads_delete_where = '(premium_ads_id="'.$this->input->post('rid').'")';
      $this->db->delete("tr_premium_ads", $ads_delete_where); 
      $model_data['status'] = "Deleted Successfully";
      $model_data['error'] = 2;
    }

    // View
    $this->db->select('*');
    $this->db->from('tr_premium_ads pa');
    $this->db->join('tr_organization_profile op','pa.organization_id=op.organization_id','inner');
    $model_data['provider_ads'] = $this->db->order_by('pa.premium_ads_id','desc')->get()->result_array();
    return $model_data;
  }

  // Job provider profile - ajax
  public function get_full_provider_ads($value) {
    $ads_where = '(premium_ads_id="'.$value.'")';
    $model_data = $this->db->get_where('tr_premium_ads',$ads_where)->row_array();
    return $model_data;
  }

  public function get_provider_transaction(){
    // View
    $this->db->select('*');
    $this->db->from('tr_payumoney_transaction trans');
    $this->db->join('tr_organization_profile org','org.organization_id=trans.organization_id','left');
    $model_data= $this->db->order_by('trans.transaction_id','desc')->get()->result_array();
    return $model_data;
  }
  
  // Job provider profile - ajax
  public function get_provider_transaction_full_view($value) {
    $trans_where = '(transaction_id="'.$value.'")';
    $this->db->select('*');
    $this->db->from('tr_payumoney_transaction trans');
    $this->db->join('tr_organization_profile org','org.organization_id=trans.organization_id','left');
    $this->db->where($trans_where);  
    $model_data = $this->db->get()->row_array();
    return $model_data;
  }
  
}

/* End of file Job_Providermodel.php */
/* Location: ./application/controllers/Job_Providermodel.php */