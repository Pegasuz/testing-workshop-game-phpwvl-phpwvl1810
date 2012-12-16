<?php

class Application_Model_AccountMapper extends In2it_Model_Mapper
{

    public function getDbTable()
    {
        if (!isset ($this->_dbTable)) {
            $this->setDbTable('Application_Model_DbTable_Account');
        }
        return parent::getDbTable();
    }
}

