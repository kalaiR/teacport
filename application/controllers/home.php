<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
    	
        parent::__construct();
        $this->load->library(array('form_validation','session','captcha')); 
		$this->load->model(array('job_provider_model','common_model'));
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $home['job_results'] = $this->common_model->get_job_list();
		$home['totalvacancy'] = $this->common_model->vacancies_count();
		$home['totalcandidate'] = $this->common_model->candidate_count();
		$home['totalorganization'] = $this->common_model->organization_count();
		$home['allposting'] = $this->common_model->applicable_posting();
		$home['alldistrict'] = $this->common_model->get_all_district();
	    $this->load->view('index',$home);
	}
	public function featured_job()
	{
		$session_data = $this->session->all_userdata();
		if(isset($session_data['login_session']))
		{
			$categories['search_results'] = $this->common_model->get_search_list();
        $this->load->view('vacancies',$categories);
		}
	    else {
		    redirect('login/seeker');
		}
	}
	public function aboutus()
	{
		$this->load->view('aboutus');
	}
	public function contactus()
	{
		if($_POST){
			$session_data = $this->session->all_userdata();
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div
			$this->form_validation->set_rules('contact_us_name', 'Name', 'trim|required|alpha|xss_clean|min_length[3]');
			$this->form_validation->set_rules('contact_us_email', 'Email ID', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('contact_us_mobile', 'Mobile', 'trim|required|numeric|min_length[10]|max_length[15]|xss_clean');
			$this->form_validation->set_rules('contact_us_subject', 'Subject', 'trim|required|alpha_numeric_spaces|min_length[4]|max_length[100]|xss_clean');
			$this->form_validation->set_rules('contact_us_message', 'Message', 'trim|required|min_length[10]|max_length[700]|xss_clean');
			if ($this->form_validation->run()){
				
				$contact_us_data = array(
										'feedback_form_title' => $this->input->post('contact_us_subject'),
										'feedback_form_message' => 'Hi, My name is '.$this->input->post('contact_us_name').'. '.$this->input->post('contact_us_subject').' Mobile number: '.$this->input->post('contact_us_mobile').' .Email address: '.$this->input->post('contact_us_email'),
										'is_organization' => 0,
										'is_candidate' => 0,
										'is_guest_user' =>1,
										'is_viewed'=>0,
										'feedback_form_status'=>1
									);
				if($this->common_model->guest_user_feedback($contact_us_data)){
					$data['contact_server_msg'] = 'Thank you for contact us! Our customer representative contact you soon!!';
					$this->load->view('contactus',$data);
				}
				else{
					$data['contact_server_msg'] = 'Some thing wrong data insertion process! Please try again!!';
					$this->load->view('contactus',$data);
				}
			}
			else{
				$this->load->view('contactus');
			}
		}
		else{
			$this->load->view('contactus');
		}
	}
	//Akila Created
	public function pricing(){
		$data['subcription_plan'] = $this->common_model->subcription_plan();
		$this->load->view('pricing',$data);
	}
	public function faq(){
		$this->load->view('faq');
	}
	public function allinstitutions(){
		$categories['allinstitutions_results'] = $this->common_model->get_allinstitutions_list();
		$this->load->view('all-institutions',$categories);
	}
	public function vacancies()
	{
		$session_data = $this->session->all_userdata();
		if(isset($session_data['login_session']))
		{
			$categories['search_results'] = $this->common_model->get_search_list();
        $this->load->view('vacancies',$categories);
		}
	    else {
		    redirect('login/seeker');
		}
		
	}
	public function search_section()
    {
    	$categories['search_results'] = $this->common_model->get_search_list();
        $this->load->view('vacancies',$categories);
    }

	// Added By Siva
    public function search_results() {

    	if($this->input->post('search_keyword') || $this->input->post('search_amount') || $this->input->post('search_location')) {
    		$inputs = array(
        				'keyword' => $this->input->post('search_keyword'),
        				'amount' => $this->input->post('search_amount'),
        				'location' => $this->input->post('search_location')
        				);
    		$this->session->set_userdata('search_inputs',$inputs); // To store search inputs in session
    	}
    	$search_inputs = $this->session->userdata('search_inputs'); // To get search inputs from session

    	// Pagination values
    	$per_page = 1;


    	$offset = ($this->uri->segment(2)) ? ($this->uri->segment(2)-1)*$per_page : 0;
        $search_results = $this->common_model->get_search_results($per_page, $offset,$search_inputs);
    	$total_rows = $search_results['total_rows'];
    	$data["search_results"] = $search_results['search_results'];

    	//pagination
		$this->load->library('pagination');

		// Pagination configuration
  		$config['base_url'] = base_url().'search';
		$config['per_page'] = $per_page;
		$config['total_rows'] = $total_rows;
		$config['uri_segment'] = 2;
		$config['num_links'] = $total_rows;
		$config['use_page_numbers'] = TRUE;

    	// Custom Configuration
		$config['full_tag_open'] = '<div class="full_pagination">';
		$config['full_tag_close'] = '</div>';
		$config['next_tag_open'] = '<span class="prev_next_pagination">';
		$config['next_tag_close'] = '</span>';
		$config['prev_tag_open'] = '<span class="prev_next_pagination">';
		$config['prev_tag_close'] = '</span>';
		$config['num_tag_open'] = '<span class="num_pagination">';
		$config['num_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<span class="cur_pagination">';
		$config['cur_tag_close'] = '</span>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';


		$this->pagination->initialize($config);

		$pagination_links = $this->pagination->create_links();
		$data["links"] = $pagination_links;
       
       	//load the view
        $this->load->view('search_result', $data);
  	}


	public function informations()
	{
		$this->load->view('information');
	}
	public function terms()
	{
		$this->load->view('terms');
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */