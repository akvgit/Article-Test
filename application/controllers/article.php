<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article extends MY_Controller {

   protected $models = array('article');
   
   public function index()
	{
      $this->data['articles'] = $this->article->get_all();
	  $this->data['title'] = 'Articles';
	}
	
	public function create()
	{
	   $this->data['title'] = 'Add Article';
	   if($this->input->post('submit'))
	   {
	     $article = array(
						'title' => $this->input->post('title'),
						'body' =>$this->input->post('body'));
						
		if($article_id = $this->article->insert($article))
		{
		   $this->session->set_flashdata('flashSuccess', 'The details saved successfully');
		   redirect(base_url("article"));
		}
	   }
	}
	
	public function update($id)
	{
	  $this->data['title'] = 'Edit Article';
	  $this->load->library('form_validation');
	  
	  $article = $this->article->get($id);
	  $this->data['article'] = $article;
	  $this->form_validation->set_defaults($article);
	  if($this->input->post('submit'))
	  {
	    $article = array(
		              'title' => $this->input->post('title'),
					  'body' => $this->input->post('body')
					  );
		if($this->article->update($id,$article))
		{
		  redirect(base_url('article'));
		}
	  }
	}
	
	public function delete($id)
	{
	  if($this->article->delete($id))
	  {
	    redirect(base_url('article'));
	  }
	}
   
}

/* End of file article.php */
/* Location: ./application/controllers/article.php */
