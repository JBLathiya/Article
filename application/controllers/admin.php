<?php
class Admin extends MY_Controller {
 public function dashboard()
 {
 	$this->load->library('pagination');
 	$config = [
    'base_url'  =>base_url('index.php/admin/dashboard'),
    'per_page'  =>5,
    'total_rows'=> $this->articles->num_rows(),
    'full_tag_open'=>"<ul class='pagination'>",
    'full_tag_close'=>"</ul>",
    'first_tag_open' =>'<li>',
    'first_tag_close'=>'</li>',
    'last_tag_open' =>'<li>',
    'last_tag_close'=>'</li>',
    'next_tag_open' =>'<li>',
    'next_tag_close'=>'</li>',
    'prev_tag_open' =>'<li>',
    'prev_tag_close'=>'</li>',
    'num_tag_open' =>'<li>',
    'num_tag_close'=>'</li>',
    'cur_tag_open'=>"<li class='active'><a>",
    'cur_tag_close'=>"</a></li>"


 	];
   $this->pagination->initialize($config);
	$articles = $this->articles->articles_list($config['per_page'], $this->uri->segment(3) );
	$this->load->view('admin/dashboard',['articles'=>$articles]);
 }

public function add_article()
{
       $this->load->view('admin/add_article');
       
}

public function store_article()
{
	$config = [
  'upload_path'=>'./uploads',
  'allowed_types'=>'jpg|png|gif|jpeg',
  'max_size'=>'0',
  'max_width'=>'10000000000',
  'max_height'=>'100000',
  

];
	$this->load->library('upload',$config);
	$this->form_validation->set_error_delimiters('<p class="text-danger")>',"</p>");
if ( $this->form_validation->run('add_article_rule') && $this->upload->do_upload()) {
	$post = $this->input->post();
	unset($post['submit']);
	$data = $this->upload->data();
	echo "<pre>";
	 //print_r($data); exit;
	 $image_path = base_url("uploads/".$data['raw_name'].$data['file_ext']);
     //echo $image_path; exit;
	 $post['image_path'] = $image_path;
	return $this->_flashRedirect(
    $this->articles->add_article($post),
	"Article Added Successfuly....",
	"Article Failed To Add. Please Try Again."
	);
	}else
	{
		$upload_error = $this->upload->display_errors();
		$this->load->view('admin/add_article',compact('upload_error'));
		
	}
	
}
public function edit_article($article_id)
{
   $article = $this->articles->find_article($article_id);
 $this->load->view('admin/edit_article',['article'=>$article]);
}
public function update_article($article_id)
{
	$this->form_validation->set_error_delimiters('<p class="text-danger")>',"</p>");
if ( $this->form_validation->run('add_article_rule')) {
	$post = $this->input->post();
	unset($post['submit']);
	 return $this->_flashRedirect(
	$this->articles->update_article($article_id,$post),
	"Article Updated Successfuly....",
	"Article Failed To Update. Please Try Again"
); 	
	}else
	{
		$this->load->view('admin/edit_article');
		
	}
}
public function delete_article()
{
$article_id =$this->input->post('article_id');
return $this->_flashRedirect(
	$this->articles->delete_article($article_id),
	"Article Deleted Successfuly....",
	"Article Failed To Delete. Please Try Again"
); 	

}
public function __construct()
{

	parent::__construct();
	if(! $this->session->userdata('user_id'))
	return redirect('login');
$this ->load->model('articlesmodel','articles');
}
private function _flashRedirect($successful,$successMessage,$failureMessage)
{

	if($successful)
	{
		 $this->session->set_flashdata('feedback',$successMessage);
		 $this->session->set_flashdata('feedback_class','alert-success');
	}else
	{
            $this->session->set_flashdata('feedback',$failureMessage);
		    $this->session->set_flashdata('feedback_class','alert-danger');


	}
	  return redirect('admin/dashboard'); 
}
}	

	
