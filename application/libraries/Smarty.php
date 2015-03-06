<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Smarty Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Smarty
 * @author		Kepler Gelotte
 * @link		http://www.coolphptools.com/codeigniter-smarty
 */
require_once( APPPATH . '/vendor/autoload.php' );

class CI_Smarty extends Smarty {

    function __construct() {
        parent::__construct();

        $this->compile_dir = APPPATH . "views/templates_c";
        $this->template_dir = APPPATH . "views/";
        $this->assign('APPPATH', APPPATH);
        $this->assign('BASEPATH', BASEPATH);
        // Assign CodeIgniter object by reference to CI
        if (method_exists($this, 'assignByRef')) {
            $ci = & get_instance();
            $this->assignByRef("ci", $ci);
        }
        // get a Code Igniter instance
        $CI = &get_instance();
        //foreach($CI->config->config as $key=>$v){
        $this->assign('g', $CI->config->config);
        //}
        //$smarty->assign($_assign, $value);
        log_message('debug', "Smarty Class Initialized");
    }

    /**
     *  Parse a template using the Smarty engine
     *
     * This is a convenience method that combines assign() and
     * display() into one step. 
     *
     * Values to assign are passed in an associative array of
     * name => value pairs.
     *
     * If the output is to be returned as a string to the caller
     * instead of being output, pass true as the third parameter.
     *
     * @access	public
     * @param	string
     * @param	array
     * @param	bool
     * @return	string
     */
    function view($template, $data = array(), $return = FALSE) {
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $this->assign($key, $val);
            }
        }

        if ($return == FALSE) {
            $CI = & get_instance();
            if (method_exists($CI->output, 'set_output')) {
                $CI->output->set_output($this->fetch($template));
            } else {
                $CI->output->final_output = $this->fetch($template);
            }
            return;
        } else {
            return $this->fetch($template);
        }
    }

    function viewdata($data = array(), $type = 'json') {
        switch ($type) {
            case 'json':
                header('Content-Type: application/json');
                echo json_encode($data);
                break;
            case 'xml':
                header('Content-Type: text/xml');
                $xml = array2xml($data);
                //$xml = new SimpleXMLElement('<root/>');
                //$data = array_flip($data); 
                //array_walk_recursive($data, array($xml, 'addChild'));
                //echo $xml->asXML();
                echo $xml;
                break;
        }
    }

    function json($data = array()) {
        $this->viewdata($data, 'json');
    }

    function xml($data = array()) {
        $this->viewdata($data, 'xml');
    }

}

// END Smarty Class
