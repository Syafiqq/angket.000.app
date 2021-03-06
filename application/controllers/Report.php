<?php
/**
 * This <angket.000.app> project created by :
 * Name         : syafiq
 * Date / Time  : 06 May 2017, 5:23 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('api_facade');
        $this->load->library('session');
        if (!isset($_SESSION['user']['auth']))
        {
            redirect('/auth/login');
        }
        // Your own constructor code
    }

    public function index()
    {
        $this->print();
    }

    public function print()
    {
        switch ($_SESSION['user']['auth']['role'])
        {
            case 'counselor' :
            {

                $this->load->view('report/print/print-report-counselor');

                return;
            }
            case 'student' :
            {
                $this->load->view('report/print/print-report-student');

                return;
            }
        }
    }

    public function display()
    {
        switch ($_SESSION['user']['auth']['role'])
        {
            case 'counselor' :
            {

                redirect('/student');

                return;
            }
            case 'student' :
            {
                if (isset($_GET['answer']))
                {
                    $this->load->model('minventory', 'inventory');
                    $answered = $this->inventory->getAnsweredUserByAnswerID($_SESSION['user']['auth']['id'], $_GET['answer']);
                    if (count($answered) > 0)
                    {
                        $this->load->view('report/display/display-report-student');

                        return;
                    }
                }
                redirect('/inventory');

                return;
            }
        }
    }
}