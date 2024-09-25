<?php
    function checkRemoteFileExists($remoteFile){
        $file_headers = @get_headers($remoteFile);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $exists = false;
        }
        else {
            $exists = true;
        }
        return $exists;
    }

    function getRemoteFiles($files2Read){
        global $local_path;

        if(count($files2Read) > 0){
            foreach($files2Read as $filename => $url){
                $arrContextOptions = array(
                    "ssl"=> array(
                        "verify_peer"=> false,
                        "verify_peer_name"=> false,
                    ),
                );



                if(checkRemoteFileExists($url)){
                    //$live_version = file_get_contents($url, false, $arrContextOptions);
                    $live_version = file_get_contents($url, false, stream_context_create($arrContextOptions));

                    if($live_version !== FALSE) {
                        // would like to check first if there are differences between these two files
                        file_put_contents($local_path.$filename,$live_version);
                    }
                }
            }
        }

    }

    function loadRemoteFiles($files2Read){
        global $local_path;

        if(count($files2Read) > 0){
            foreach($files2Read as $filename => $url){
                if(file_exists($local_path.$filename)){
                    include_once($local_path.$filename);
                }
            }
        }
    }

    /**********************************************************************************
    helper function to ensure that the taken variable from the url is clear and safe

    we could use mysqli_real_escape_string() instead,
    but all of our landing pages doesn't have connection with a db
     **********************************************************************************/
    function mres($value){
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");
        return str_replace($search, $replace, $value);
    }


    function fix_language($cta_link,$lng){

        $return_me = '';
        if(!empty($lng)){
            if(strpos($cta_link,'?') !== false){
                $cta_link .= '&lng='.$lng;
            }else{
                $cta_link .= '?lng='.$lng;
            }
            $return_me = $cta_link;

        }
        return $return_me;
    }
