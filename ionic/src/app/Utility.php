<?php
##################################################
#
# Copyright ? 2015 by B and C Sense LLP, Singapore
#
# All  information  contained herein and provided  by
# B and C Sense LLP, Singapore in response to related
# matters is considered confidential and proprietary.
#
# All rights  reserved.  No part of this  publication
# may be  copied, reproduced,  modified  published or
# distributed  to, or  for, any third parties without
# the express prior written  consent of B and C Sense
# LLP, Singapore
#
# For  permission  requests,  email to   the  author,
# subject “Attn: Use of Work”  at the  address  below
#
# Email: info@bcsense.com
# HP: +65-8396-9159
#
##################################################

class Utility
{
    ////////////////////////////////////
    // logToFile
    ////////////////////////////////////
    // INPUT:
    // 1. $log_path: path write log file
    // 2. $suffix: Suffix of log file name
    // 3. $msg: message
    public function logToFile($log_path, $suffix, $msg)
    {
        if ($log_path == "") {
            $log_path = '/var/log/apache2/api_web/';
        }
        // Getting Year Month and Date
        $year = date("Y");
        $month = date("m");
        $date = date("d");
        $hh24 = date("H");
        // Target log directory
        $dir = $log_path . "$year/$month/$date";

        if (! is_dir($dir)) {
            mkdir($dir, 0775, true);
        }
        // Target log file
        $file = "$dir/$hh24$suffix";

        // Getting current time
        $time = date("H:i:s");

        // Count the line
        $lines = explode("\n", trim($msg));
        $number_lines = count($lines);

        // Multiple lines log
        if ($number_lines > 1) {
            // Log message
            $message = "$year-$month-$date $time -----------------------\n";
            // Put to log file
            file_put_contents($file, $message, FILE_APPEND);
        }

        foreach ($lines as $line) {
            // Log message
            $message = "$year-$month-$date $time $line\n";
            // Put to log file
            file_put_contents($file, $message, FILE_APPEND);
        }

    }

    public function getAttribute($get_list)
    {
        $raw = "";
        $arr_list = $get_list;
        if (count($get_list) == 0) {
            $log = "Request: ".count($get_list);
            $this->logToFile("_err_req.log", $log);
            //exit;
        }
        foreach ($get_list as $key => &$value) {
            $arr_list[$key] = str_replace("+", " ", $value);
            if ($raw != "") {
                $raw .= "&";
            }
            $raw .= $key."=".$value;
        }
        return array('raw' => $raw,
           'list' => $arr_list);
    }

    /////////////////////////////////////
    // boolean validateString ($str)
    // Only alphanumeric string
    /////////////////////////////////////
    // INPUT:
    // 1. $str = String to validation
    /////////////////////////////////////
    // OUTPUT:
    // TRUE = Valid
    // FALSE = Invalid
    /////////////////////////////////////
    function validateString($str)
    {
        return preg_match('/^[a-zA-Z0-9_-]+$/', $str, $result);
    }

    /////////////////////////////////////
    // boolean validateNumber ($str)
    // Only numeric values
    /////////////////////////////////////
    // INPUT:
    // 1. $str = String to validation
    /////////////////////////////////////
    // OUTPUT:
    // TRUE = Valid
    // FALSE = Invalid
    /////////////////////////////////////
    public function validateNumber($str)
    {
        return preg_match('/^[0-9]+$/', $str, $result);
    }

    /////////////////////////////////////
    // boolean validateStrDate ($str)
    // Only numeric values
    /////////////////////////////////////
    // INPUT:
    // 1. $str = String to validation
    /////////////////////////////////////
    // OUTPUT:
    // TRUE = Valid
    // FALSE = Invalid
    /////////////////////////////////////
    public function validateStrDate($str)
    {
        return preg_match('/^[0-9-\.\/]+$/', $str, $result);
    }

    /////////////////////////////////////
    // boolean validateText ($str)
    // Only alphanumeric string
    /////////////////////////////////////
    // INPUT:
    // 1. $str = String to validation
    /////////////////////////////////////
    // OUTPUT:
    // TRUE = Valid
    // FALSE = Invalid
    /////////////////////////////////////
    public function validateText($str)
    {
        if ((isset($str)) && ($str != "")) {
            return preg_match('/^[ก-๙เa-zA-Z0-9_\-@%#()\/\.: \r\n]+$/', $str, $result);
        } else {
            return false;
        }
    }

    /////////////////////////////////////
    // boolean validateTextTH ($str)
    // Only alphanumeric string
    /////////////////////////////////////
    // INPUT:
    // 1. $str = String to validation
    /////////////////////////////////////
    // OUTPUT:
    // TRUE = Valid
    // FALSE = Invalid
    /////////////////////////////////////
    public function validateTextTH($str)
    {
        if ((isset($str)) && ($str != "")) {
            return preg_match('/^[ก-๙เ ]+$/', $str, $result);
        } else {
            return false;
        }
    }

    ////////////////////////////////////
    // gmapGeo
    // Create Array for Google Map GeoJSON
    ////////////////////////////////////
    // INPUT:
    // 1. $coordinates = data structure of GeoJSON ex. [[[11,22],[33,44]]]
    // 2. $geo_array = Geo array for prepare convert to JSON
    /////////////////////////////////////
    // OUTPUT:
    // $geo_array = list of array for mat GeoJSON
    /////////////////////////////////////
    function gmapGeo($coordinates, $index)//, $geo_array)
    {
        if ($coordinates != "") {
            // Add destinamtion position latitude and longitude of polygon if position count is odd number //
            $coordinates =  json_decode($coordinates, true);
            if (count($coordinates[0])%2 <> 0) {
                $coordinates[0][count($coordinates[0])] = $coordinates[0][0];
            }
            $coordinates = json_encode($coordinates, true);

            // Initial geo_array //
            $geo_array = array("id"   => $index,
                               "geom" => array("type"        => "MultiPolygon",
                                               "coordinates" => array($coordinates)
                                         )
                         );
        }
        /*
        // Initail index //
        if (($index == "") || ($index <= 0)) {
            $index = count($geo_array);
        }
        
        if ($index > 0) {
            // Index more than 0 or geo_array have value //
            $geo_array[$index] = array("id"   => $index,
                                  "geom" => array("type"        => "MultiPolygon",
                                                  "coordinates" => array($coordinates)
                                            )
                            );
        } else if ((count($geo_array) == 0) || ($index == 0)) {
            // Initial geo_array start index = 0 //
            $geo_array = array(array("id"   => $index,
                                     "geom" => array("type"        => "MultiPolygon",
                                                     "coordinates" => array($coordinates)
                                               )
                               )
                         );
        }
        */
        return json_encode($geo_array);
    }

    ////////////////////////////////////
    // convertToIntArray
    // Convert format array by remove column name
    ////////////////////////////////////
    // INPUT:
    // 1. $obj_db = fetch data result
    // 2. $index_array = column name is converted to integer
    /////////////////////////////////////
    // OUTPUT:
    // $results = list of array format array(v1,v2,v3,...v(n))
    /////////////////////////////////////
    function convertToIntArray($obj_db, $index_array)
    {
        $loop = 0;
        // Convert format array //
        foreach ($obj_db as $value) {
            $results[$loop++] = $value[$index_array];
        }
        return $results;
    }

    function checkThaiID($pid) {
        if(strlen($pid) != 13) return false;

        for($i=0, $sum=0; $i<12;$i++)
            $sum += (int)($pid{$i})*(13-$i);
        if((11-($sum%11))%10 == (int)($pid{12}))
            return true;

        return false;
    }
}
?>
