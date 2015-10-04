<?php 
if (jApp::config()->compilation['checkCacheFiletime']&&(

 filemtime('C:\wamp2\www\jelix\neoinformatique/modules/neoinformatique/daos/news.dao.xml') > 1443729217)){ return false;
}
else {
 require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_neoinformatique_Jx_news_Jx_mysql extends jDaoRecordBase {
 public $sujet;
 public $texte;
 public $news_date;
   public function getSelector() { return "neoinformatique~news"; }
   public function getProperties() { return cDao_neoinformatique_Jx_news_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_neoinformatique_Jx_news_Jx_mysql::$_pkFields; }
}

class cDao_neoinformatique_Jx_news_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'news' => 
  array (
    'name' => 'news',
    'realname' => 'news',
    'pk' => 
    array (
      0 => 'id_news',
    ),
    'fields' => 
    array (
      0 => 'sujet',
      1 => 'texte',
      2 => 'news_date',
    ),
  ),
);
   protected $_primaryTable = 'news';
   protected $_selectClause='SELECT `news`.`sujet`, `news`.`texte`, `news`.`news_date`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_neoinformatique_Jx_news_Jx_mysql';
   protected $_daoSelector = 'neoinformatique~news';
   public static $_properties = array (
  'sujet' => 
  array (
    'name' => 'sujet',
    'fieldName' => 'sujet',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'news',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 255,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
    'comment' => '',
  ),
  'texte' => 
  array (
    'name' => 'texte',
    'fieldName' => 'texte',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'text',
    'unifiedType' => 'text',
    'table' => 'news',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
    'comment' => '',
  ),
  'news_date' => 
  array (
    'name' => 'news_date',
    'fieldName' => 'news_date',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'news',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
    'comment' => '',
  ),
);
   public static $_pkFields = array();
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('news').'` AS `news`';
}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  ';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  ';
}
public function insert ($record){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('news').'` (
`sujet`,`texte`,`news_date`
) VALUES (
'.($record->sujet === null ? 'NULL' : $this->_conn->quote2($record->sujet,false)).', '.($record->texte === null ? 'NULL' : $this->_conn->quote2($record->texte,false)).', '.($record->news_date === null ? 'NULL' : $this->_conn->quote2($record->news_date,false)).'
)';
   $result = $this->_conn->exec ($query);
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('news').'` SET 
 `sujet`= '.($record->sujet === null ? 'NULL' : $this->_conn->quote2($record->sujet,false)).', `texte`= '.($record->texte === null ? 'NULL' : $this->_conn->quote2($record->texte,false)).', `news_date`= '.($record->news_date === null ? 'NULL' : $this->_conn->quote2($record->news_date,false)).'
 where  
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
 return true; }