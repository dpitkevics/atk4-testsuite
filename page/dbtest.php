<?php
class page_dbtest extends Page {
    function init(){
        parent::init();

        // If you want to use database on all pages - move next line into Frontend.php, init() method
        $this->api->dbConnect();
        $x=$this->api->db->dsql()->expr('show tables')->get();
        var_dump($x);

        $this->add('HtmlElement')
            ->setElement('P')
            ->set('Successfully connected to database.');
    }
}
