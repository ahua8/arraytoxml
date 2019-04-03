<?php
include './arr2xml.php';
header('Content-type:text/xml');
$data = array(
    'order' => array(
        'list' => array(
            'books' => array(
                'book'=> array(
                    array('name'=> 'PHP','price'=>100.00,'author'=>'aaron'),
                    array('name'=> 'Java','price'=>50.00,'author'=>'jack'),
                    array('name'=> 'Javascript','price'=>90.00,'author'=>'daimonn'),
                    array('name'=> 'HTML','price'=>10.00,'author'=>'james'),
                )
            ),
            'foods' => array(
                'food' => array(
                    array('name'=>'apple','price'=>5),
                    array('name'=>'banana','price'=>4)
                )
            ),
            'date' => date('Y-m-d\TH:i:s')
        ),
        'page' => 0,
        'pagesize'=> 20
    )
);

echo arr2xml($data);
