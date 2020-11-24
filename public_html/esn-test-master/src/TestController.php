<?php

namespace EsnTest;

use EsnTest\Controller\EsnFetcher;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

/**
 * Class for the exercise.
 */
class TestController extends EsnFetcher {

    /**
    * Returns the needed data for solving task 4.
    *
    * You might need extra functions for this test.
    *
    * @return array with variables needed in Twig template
    *
    */
    public function getDataT4() {

        // Get sections from the ESN Api
        $sections = json_decode($this->getRequest('sections'), TRUE);

        //initialize the result array
        $res = array();
        foreach ($sections as $section){

            //initialize the current section array
            $currentSection = array();

            $currentSection['label'] = $section['label'];
            $currentSection['code'] = $section['code'];
            $currentSection['website'] = $section['website'];

            if(!array_key_exists($section['country'], $res)){
                $res[$section['country']]['country'] = $section['country'];
                $res[$section['country']]['country_code'] = $section['cc'];
                $res[$section['country']]['sections'] = array();
            }

            array_push($res[$section['country']]['sections'], $currentSection);

        }

        ksort($res);

        return $res;
    }

    /**
    * Returns the needed data for solving task 5.
    *
    * You might need extra functions for this test.
    *
    * @return array with variables needed in Twig template
    */
    public function getDataT5() {

        // Get sections from the ESN Api
        $sections = json_decode($this->getRequest('sections'), TRUE);

        //read barcodes from the file
        $reader = new Xlsx();
        $spreadsheet = $reader->load("codes.xlsx");
        $workSheet = $spreadsheet->getSheetByName('Barcodes');
        $col = 'A';
        $ind = '2';
        while (!empty($workSheet->getCell($col.$ind)->getValue())){
            $codes[] = $workSheet->getCell($col.$ind)->getValue();
            $ind++;
        }

        //initialize the result array
        $res = array();

        //get information from ESN API for all the codes read from .xlsx file
        foreach ($codes as $code){

            $current['card_exists'] = 0;
            $current['code'] = $code;
            $current['card_info'] = $this->getCardData($code);

            //change the ESN code to real name for section
            if(!empty($current['card_info'])){
                $current['card_exists'] = 1;
                foreach ($sections as $section) {
                    if($section['code'] == $current['card_info']['section_code']){
                        $current['card_info']['section_code'] = $section['label'];
                        break;
                    }
                }
                //check if is leap year
                $oneYear = date('L', strtotime($current['card_info']['card_date'])) ? ' + 365' : ' + 364';
                $expirationDate = date(
                    'Y-m-d',
                    strtotime($current['card_info']['card_date'] . $oneYear . ' day' )
                );

                $current['card_info']['card_expiration_date'] = $expirationDate;
            }
            array_push($res, $current);

        }

        return $res;
    }

}