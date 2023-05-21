<?php
class download_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('download_model');
    }

    public function index(){
        $this->load->view('Auth/download');
    }

    // ------------- englishdownload -------------------//
public function download_file($filename) {
    // get file data from model based on filename
    $file_data = $this->download_model->get_file_data($filename);

    // check if file data exists
    if(!empty($file_data)) {
        // set headers
        if (isset($file_data['mime_type'])) {
            header('Content-Type: '.$file_data['mime_type']);

        }
        header('Content-Disposition: attachment; filename="' . $file_data['files'] . '"');
        if (isset($file_data['file_size'])) {
            header('Content-Length: ' . $file_data['file_size']);

        }

        // output file content
        echo $file_data['file_content'];

    }
    else {
        // show error message
        echo "File not found!";
    }
}


       // ------------- mathdownload -------------------//
public function download_file1($filename) {
    // get file data from model based on filename
    $file_data = $this->download_model->get_file_data1($filename);

    // check if file data exists
    if(!empty($file_data)) {
        // set headers
        if (isset($file_data['mime_type'])) {
            header('Content-Type: '.$file_data['mime_type']);
        }
        header('Content-Disposition: attachment; filename="' . $file_data['files'] . '"');
        if (isset($file_data['file_size'])) {
            header('Content-Length: ' . $file_data['file_size']);
        }

        // output file content
        echo $file_data['file_content'];
    }
    else {
        // show error message
        echo "File not found!";
    }
}

     
       // ------------- science download -------------------//
public function download_file2($filename) {
    // get file data from model based on filename
    $file_data = $this->download_model->get_file_data2($filename);

    // check if file data exists
    if(!empty($file_data)) {
        // set headers
        if (isset($file_data['mime_type'])) {
            header('Content-Type: '.$file_data['mime_type']);
        }
        header('Content-Disposition: attachment; filename="' . $file_data['files'] . '"');
        if (isset($file_data['file_size'])) {
            header('Content-Length: ' . $file_data['file_size']);
        }

        // output file content
        echo $file_data['file_content'];
    }
    else {
        // show error message
        echo "File not found!";
    }
}

    
       // ------------- filipino download -------------------//
public function download_file3($filename) {
    // get file data from model based on filename
    $file_data = $this->download_model->get_file_data3($filename);

    // check if file data exists
    if(!empty($file_data)) {
        // set headers
        if (isset($file_data['mime_type'])) {
            header('Content-Type: '.$file_data['mime_type']);
        }
        header('Content-Disposition: attachment; filename="' . $file_data['files'] . '"');
        if (isset($file_data['file_size'])) {
            header('Content-Length: ' . $file_data['file_size']);
        }

        // output file content
        echo $file_data['file_content'];
    }
    else {
        // show error message
        echo "File not found!";
    }
}

    
       // ------------- pe download -------------------//
public function download_file4($filename) {
    // get file data from model based on filename
    $file_data = $this->download_model->get_file_data4($filename);

    // check if file data exists
    if(!empty($file_data)) {
        // set headers
        if (isset($file_data['mime_type'])) {
            header('Content-Type: '.$file_data['mime_type']);
        }
        header('Content-Disposition: attachment; filename="' . $file_data['files'] . '"');
        if (isset($file_data['file_size'])) {
            header('Content-Length: ' . $file_data['file_size']);
        }

        // output file content
        echo $file_data['file_content'];
    }
    else {
        // show error message
        echo "File not found!";
    }
}

     
       // ------------- ap download -------------------//
public function download_file5($filename) {
    // get file data from model based on filename
    $file_data = $this->download_model->get_file_data5($filename);

    // check if file data exists
    if(!empty($file_data)) {
        // set headers
        if (isset($file_data['mime_type'])) {
            header('Content-Type: '.$file_data['mime_type']);
        }
        header('Content-Disposition: attachment; filename="' . $file_data['files'] . '"');
        if (isset($file_data['file_size'])) {
            header('Content-Length: ' . $file_data['file_size']);
        }

        // output file content
        echo $file_data['file_content'];
    }
    else {
        // show error message
        echo "File not found!";
    }
}
}

?>