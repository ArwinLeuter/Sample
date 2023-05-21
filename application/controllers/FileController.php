<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileController extends CI_Controller {

    public function index(){
        $this->load->view("file_view");
    }

    public function viewFile($fileUrl)
{
    // Get the file extension
    $fileExtension = pathinfo($fileUrl, PATHINFO_EXTENSION);
    
    // Set the appropriate MIME type based on the file extension
    $mimeTypes = array(
        'pdf' => 'application/pdf',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'xls' => 'application/vnd.ms-excel',
        'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        // Add more file extensions and MIME types as needed
    );
    
    if (isset($mimeTypes[$fileExtension])) {
        $mimeType = $mimeTypes[$fileExtension];
        
        // Set the appropriate headers
        header('Content-type: ' . $mimeType);
        header('Content-Disposition: inline; filename="' . basename($fileUrl) . '"');
        
        // Read the file and output it to the browser
        readfile($fileUrl);
    } else {
        // File extension not supported, handle the error as needed
        echo 'File format not supported.';
    }
}





}
