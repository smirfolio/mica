<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: MicaSearch.proto
//   Date: 2014-07-15 16:33:21

namespace obiba\mica {

  class QueryDto extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $from = 0;

    /**  @var int */
    public $size = 10;

    /**  @var boolean */
    public $detailed = TRUE;

    /**  @var \obiba\mica\FilteredQueryDto */
    public $filteredQuery = NULL;


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.QueryDto');

      // REQUIRED INT32 from = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "from";
      $f->type = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->default = 0;
      $descriptor->addField($f);

      // REQUIRED INT32 size = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 2;
      $f->name = "size";
      $f->type = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->default = 10;
      $descriptor->addField($f);

      // REQUIRED BOOL detailed = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 3;
      $f->name = "detailed";
      $f->type = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->default = TRUE;
      $descriptor->addField($f);

      // REQUIRED MESSAGE filteredQuery = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 4;
      $f->name = "filteredQuery";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\obiba\mica\FilteredQueryDto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <from> has a value
     *
     * @return boolean
     */
    public function hasFrom() {
      return $this->_has(1);
    }

    /**
     * Clear <from> value
     *
     * @return \obiba\mica\QueryDto
     */
    public function clearFrom() {
      return $this->_clear(1);
    }

    /**
     * Get <from> value
     *
     * @return int
     */
    public function getFrom() {
      return $this->_get(1);
    }

    /**
     * Set <from> value
     *
     * @param int $value
     * @return \obiba\mica\QueryDto
     */
    public function setFrom($value) {
      return $this->_set(1, $value);
    }

    /**
     * Check if <size> has a value
     *
     * @return boolean
     */
    public function hasSize() {
      return $this->_has(2);
    }

    /**
     * Clear <size> value
     *
     * @return \obiba\mica\QueryDto
     */
    public function clearSize() {
      return $this->_clear(2);
    }

    /**
     * Get <size> value
     *
     * @return int
     */
    public function getSize() {
      return $this->_get(2);
    }

    /**
     * Set <size> value
     *
     * @param int $value
     * @return \obiba\mica\QueryDto
     */
    public function setSize($value) {
      return $this->_set(2, $value);
    }

    /**
     * Check if <detailed> has a value
     *
     * @return boolean
     */
    public function hasDetailed() {
      return $this->_has(3);
    }

    /**
     * Clear <detailed> value
     *
     * @return \obiba\mica\QueryDto
     */
    public function clearDetailed() {
      return $this->_clear(3);
    }

    /**
     * Get <detailed> value
     *
     * @return boolean
     */
    public function getDetailed() {
      return $this->_get(3);
    }

    /**
     * Set <detailed> value
     *
     * @param boolean $value
     * @return \obiba\mica\QueryDto
     */
    public function setDetailed($value) {
      return $this->_set(3, $value);
    }

    /**
     * Check if <filteredQuery> has a value
     *
     * @return boolean
     */
    public function hasFilteredQuery() {
      return $this->_has(4);
    }

    /**
     * Clear <filteredQuery> value
     *
     * @return \obiba\mica\QueryDto
     */
    public function clearFilteredQuery() {
      return $this->_clear(4);
    }

    /**
     * Get <filteredQuery> value
     *
     * @return \obiba\mica\FilteredQueryDto
     */
    public function getFilteredQuery() {
      return $this->_get(4);
    }

    /**
     * Set <filteredQuery> value
     *
     * @param \obiba\mica\FilteredQueryDto $value
     * @return \obiba\mica\QueryDto
     */
    public function setFilteredQuery(\obiba\mica\FilteredQueryDto $value) {
      return $this->_set(4, $value);
    }
  }
}

namespace obiba\mica {

  class FilteredQueryDto extends \DrSlump\Protobuf\Message {

    /**  @var \obiba\mica\BoolFilterQueryDto */
    public $filter = NULL;


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.FilteredQueryDto');

      // REQUIRED MESSAGE filter = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "filter";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\obiba\mica\BoolFilterQueryDto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <filter> has a value
     *
     * @return boolean
     */
    public function hasFilter() {
      return $this->_has(1);
    }

    /**
     * Clear <filter> value
     *
     * @return \obiba\mica\FilteredQueryDto
     */
    public function clearFilter() {
      return $this->_clear(1);
    }

    /**
     * Get <filter> value
     *
     * @return \obiba\mica\BoolFilterQueryDto
     */
    public function getFilter() {
      return $this->_get(1);
    }

    /**
     * Set <filter> value
     *
     * @param \obiba\mica\BoolFilterQueryDto $value
     * @return \obiba\mica\FilteredQueryDto
     */
    public function setFilter(\obiba\mica\BoolFilterQueryDto $value) {
      return $this->_set(1, $value);
    }
  }
}

namespace obiba\mica {

  class BoolFilterQueryDto extends \DrSlump\Protobuf\Message {

    /**  @var \obiba\mica\TermsQueryDto[] */
    public $terms = array();


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.BoolFilterQueryDto');

      // REPEATED MESSAGE terms = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "terms";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\obiba\mica\TermsQueryDto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <terms> has a value
     *
     * @return boolean
     */
    public function hasTerms() {
      return $this->_has(1);
    }

    /**
     * Clear <terms> value
     *
     * @return \obiba\mica\BoolFilterQueryDto
     */
    public function clearTerms() {
      return $this->_clear(1);
    }

    /**
     * Get <terms> value
     *
     * @param int $idx
     * @return \obiba\mica\TermsQueryDto
     */
    public function getTerms($idx = NULL) {
      return $this->_get(1, $idx);
    }

    /**
     * Set <terms> value
     *
     * @param \obiba\mica\TermsQueryDto $value
     * @return \obiba\mica\BoolFilterQueryDto
     */
    public function setTerms(\obiba\mica\TermsQueryDto $value, $idx = NULL) {
      return $this->_set(1, $value, $idx);
    }

    /**
     * Get all elements of <terms>
     *
     * @return \obiba\mica\TermsQueryDto[]
     */
    public function getTermsList() {
      return $this->_get(1);
    }

    /**
     * Add a new element to <terms>
     *
     * @param \obiba\mica\TermsQueryDto $value
     * @return \obiba\mica\BoolFilterQueryDto
     */
    public function addTerms(\obiba\mica\TermsQueryDto $value) {
      return $this->_add(1, $value);
    }
  }
}

namespace obiba\mica {

  class TermsQueryDto extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $field = NULL;

    /**  @var string[] */
    public $values = array();


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.TermsQueryDto');

      // REQUIRED STRING field = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "field";
      $f->type = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REPEATED STRING values = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 2;
      $f->name = "values";
      $f->type = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <field> has a value
     *
     * @return boolean
     */
    public function hasField() {
      return $this->_has(1);
    }

    /**
     * Clear <field> value
     *
     * @return \obiba\mica\TermsQueryDto
     */
    public function clearField() {
      return $this->_clear(1);
    }

    /**
     * Get <field> value
     *
     * @return string
     */
    public function getField() {
      return $this->_get(1);
    }

    /**
     * Set <field> value
     *
     * @param string $value
     * @return \obiba\mica\TermsQueryDto
     */
    public function setField($value) {
      return $this->_set(1, $value);
    }

    /**
     * Check if <values> has a value
     *
     * @return boolean
     */
    public function hasValues() {
      return $this->_has(2);
    }

    /**
     * Clear <values> value
     *
     * @return \obiba\mica\TermsQueryDto
     */
    public function clearValues() {
      return $this->_clear(2);
    }

    /**
     * Get <values> value
     *
     * @param int $idx
     * @return string
     */
    public function getValues($idx = NULL) {
      return $this->_get(2, $idx);
    }

    /**
     * Set <values> value
     *
     * @param string $value
     * @return \obiba\mica\TermsQueryDto
     */
    public function setValues($value, $idx = NULL) {
      return $this->_set(2, $value, $idx);
    }

    /**
     * Get all elements of <values>
     *
     * @return string[]
     */
    public function getValuesList() {
      return $this->_get(2);
    }

    /**
     * Add a new element to <values>
     *
     * @param string $value
     * @return \obiba\mica\TermsQueryDto
     */
    public function addValues($value) {
      return $this->_add(2, $value);
    }
  }
}

namespace obiba\mica {

  class QueryResultDto extends \DrSlump\Protobuf\Message {

    /**  @var \obiba\mica\AggregationResultDto[] */
    public $aggs = array();

    /**  @var int */
    public $totalHits = NULL;


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.QueryResultDto');

      // REPEATED MESSAGE aggs = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "aggs";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\obiba\mica\AggregationResultDto';
      $descriptor->addField($f);

      // REQUIRED INT32 totalHits = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 2;
      $f->name = "totalHits";
      $f->type = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <aggs> has a value
     *
     * @return boolean
     */
    public function hasAggs() {
      return $this->_has(1);
    }

    /**
     * Clear <aggs> value
     *
     * @return \obiba\mica\QueryResultDto
     */
    public function clearAggs() {
      return $this->_clear(1);
    }

    /**
     * Get <aggs> value
     *
     * @param int $idx
     * @return \obiba\mica\AggregationResultDto
     */
    public function getAggs($idx = NULL) {
      return $this->_get(1, $idx);
    }

    /**
     * Set <aggs> value
     *
     * @param \obiba\mica\AggregationResultDto $value
     * @return \obiba\mica\QueryResultDto
     */
    public function setAggs(\obiba\mica\AggregationResultDto $value, $idx = NULL) {
      return $this->_set(1, $value, $idx);
    }

    /**
     * Get all elements of <aggs>
     *
     * @return \obiba\mica\AggregationResultDto[]
     */
    public function getAggsList() {
      return $this->_get(1);
    }

    /**
     * Add a new element to <aggs>
     *
     * @param \obiba\mica\AggregationResultDto $value
     * @return \obiba\mica\QueryResultDto
     */
    public function addAggs(\obiba\mica\AggregationResultDto $value) {
      return $this->_add(1, $value);
    }

    /**
     * Check if <totalHits> has a value
     *
     * @return boolean
     */
    public function hasTotalHits() {
      return $this->_has(2);
    }

    /**
     * Clear <totalHits> value
     *
     * @return \obiba\mica\QueryResultDto
     */
    public function clearTotalHits() {
      return $this->_clear(2);
    }

    /**
     * Get <totalHits> value
     *
     * @return int
     */
    public function getTotalHits() {
      return $this->_get(2);
    }

    /**
     * Set <totalHits> value
     *
     * @param int $value
     * @return \obiba\mica\QueryResultDto
     */
    public function setTotalHits($value) {
      return $this->_set(2, $value);
    }
  }
}

namespace obiba\mica {

  class StudyResultDto extends \DrSlump\Protobuf\Message {

    /**  @var \obiba\mica\StudySummaryDto[] */
    public $summaries = array();

    /**  @var \obiba\mica\StudyDto[] */
    public $studies = array();


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.StudyResultDto');

      // REPEATED MESSAGE summaries = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "summaries";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\obiba\mica\StudySummaryDto';
      $descriptor->addField($f);

      // REPEATED MESSAGE studies = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 2;
      $f->name = "studies";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\obiba\mica\StudyDto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <summaries> has a value
     *
     * @return boolean
     */
    public function hasSummaries() {
      return $this->_has(1);
    }

    /**
     * Clear <summaries> value
     *
     * @return \obiba\mica\StudyResultDto
     */
    public function clearSummaries() {
      return $this->_clear(1);
    }

    /**
     * Get <summaries> value
     *
     * @param int $idx
     * @return \obiba\mica\StudySummaryDto
     */
    public function getSummaries($idx = NULL) {
      return $this->_get(1, $idx);
    }

    /**
     * Set <summaries> value
     *
     * @param \obiba\mica\StudySummaryDto $value
     * @return \obiba\mica\StudyResultDto
     */
    public function setSummaries(\obiba\mica\StudySummaryDto $value, $idx = NULL) {
      return $this->_set(1, $value, $idx);
    }

    /**
     * Get all elements of <summaries>
     *
     * @return \obiba\mica\StudySummaryDto[]
     */
    public function getSummariesList() {
      return $this->_get(1);
    }

    /**
     * Add a new element to <summaries>
     *
     * @param \obiba\mica\StudySummaryDto $value
     * @return \obiba\mica\StudyResultDto
     */
    public function addSummaries(\obiba\mica\StudySummaryDto $value) {
      return $this->_add(1, $value);
    }

    /**
     * Check if <studies> has a value
     *
     * @return boolean
     */
    public function hasStudies() {
      return $this->_has(2);
    }

    /**
     * Clear <studies> value
     *
     * @return \obiba\mica\StudyResultDto
     */
    public function clearStudies() {
      return $this->_clear(2);
    }

    /**
     * Get <studies> value
     *
     * @param int $idx
     * @return \obiba\mica\StudyDto
     */
    public function getStudies($idx = NULL) {
      return $this->_get(2, $idx);
    }

    /**
     * Set <studies> value
     *
     * @param \obiba\mica\StudyDto $value
     * @return \obiba\mica\StudyResultDto
     */
    public function setStudies(\obiba\mica\StudyDto $value, $idx = NULL) {
      return $this->_set(2, $value, $idx);
    }

    /**
     * Get all elements of <studies>
     *
     * @return \obiba\mica\StudyDto[]
     */
    public function getStudiesList() {
      return $this->_get(2);
    }

    /**
     * Add a new element to <studies>
     *
     * @param \obiba\mica\StudyDto $value
     * @return \obiba\mica\StudyResultDto
     */
    public function addStudies(\obiba\mica\StudyDto $value) {
      return $this->_add(2, $value);
    }
  }
}

namespace obiba\mica {

  class DatasetVariableResultDto extends \DrSlump\Protobuf\Message {

    /**  @var \obiba\mica\DatasetVariableResolverDto[] */
    public $summaries = array();

    /**  @var \obiba\mica\DatasetVariableDto[] */
    public $variables = array();


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.DatasetVariableResultDto');

      // REPEATED MESSAGE summaries = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "summaries";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\obiba\mica\DatasetVariableResolverDto';
      $descriptor->addField($f);

      // REPEATED MESSAGE variables = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 2;
      $f->name = "variables";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\obiba\mica\DatasetVariableDto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <summaries> has a value
     *
     * @return boolean
     */
    public function hasSummaries() {
      return $this->_has(1);
    }

    /**
     * Clear <summaries> value
     *
     * @return \obiba\mica\DatasetVariableResultDto
     */
    public function clearSummaries() {
      return $this->_clear(1);
    }

    /**
     * Get <summaries> value
     *
     * @param int $idx
     * @return \obiba\mica\DatasetVariableResolverDto
     */
    public function getSummaries($idx = NULL) {
      return $this->_get(1, $idx);
    }

    /**
     * Set <summaries> value
     *
     * @param \obiba\mica\DatasetVariableResolverDto $value
     * @return \obiba\mica\DatasetVariableResultDto
     */
    public function setSummaries(\obiba\mica\DatasetVariableResolverDto $value, $idx = NULL) {
      return $this->_set(1, $value, $idx);
    }

    /**
     * Get all elements of <summaries>
     *
     * @return \obiba\mica\DatasetVariableResolverDto[]
     */
    public function getSummariesList() {
      return $this->_get(1);
    }

    /**
     * Add a new element to <summaries>
     *
     * @param \obiba\mica\DatasetVariableResolverDto $value
     * @return \obiba\mica\DatasetVariableResultDto
     */
    public function addSummaries(\obiba\mica\DatasetVariableResolverDto $value) {
      return $this->_add(1, $value);
    }

    /**
     * Check if <variables> has a value
     *
     * @return boolean
     */
    public function hasVariables() {
      return $this->_has(2);
    }

    /**
     * Clear <variables> value
     *
     * @return \obiba\mica\DatasetVariableResultDto
     */
    public function clearVariables() {
      return $this->_clear(2);
    }

    /**
     * Get <variables> value
     *
     * @param int $idx
     * @return \obiba\mica\DatasetVariableDto
     */
    public function getVariables($idx = NULL) {
      return $this->_get(2, $idx);
    }

    /**
     * Set <variables> value
     *
     * @param \obiba\mica\DatasetVariableDto $value
     * @return \obiba\mica\DatasetVariableResultDto
     */
    public function setVariables(\obiba\mica\DatasetVariableDto $value, $idx = NULL) {
      return $this->_set(2, $value, $idx);
    }

    /**
     * Get all elements of <variables>
     *
     * @return \obiba\mica\DatasetVariableDto[]
     */
    public function getVariablesList() {
      return $this->_get(2);
    }

    /**
     * Add a new element to <variables>
     *
     * @param \obiba\mica\DatasetVariableDto $value
     * @return \obiba\mica\DatasetVariableResultDto
     */
    public function addVariables(\obiba\mica\DatasetVariableDto $value) {
      return $this->_add(2, $value);
    }
  }
}

namespace obiba\mica\AggregationResultDto {

  class TermsAggregationResultDto extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $key = NULL;

    /**  @var int */
    public $count = NULL;


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.AggregationResultDto.TermsAggregationResultDto');

      // REQUIRED STRING key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "key";
      $f->type = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED INT32 count = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 2;
      $f->name = "count";
      $f->type = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <key> has a value
     *
     * @return boolean
     */
    public function hasKey() {
      return $this->_has(1);
    }

    /**
     * Clear <key> value
     *
     * @return \obiba\mica\AggregationResultDto\TermsAggregationResultDto
     */
    public function clearKey() {
      return $this->_clear(1);
    }

    /**
     * Get <key> value
     *
     * @return string
     */
    public function getKey() {
      return $this->_get(1);
    }

    /**
     * Set <key> value
     *
     * @param string $value
     * @return \obiba\mica\AggregationResultDto\TermsAggregationResultDto
     */
    public function setKey($value) {
      return $this->_set(1, $value);
    }

    /**
     * Check if <count> has a value
     *
     * @return boolean
     */
    public function hasCount() {
      return $this->_has(2);
    }

    /**
     * Clear <count> value
     *
     * @return \obiba\mica\AggregationResultDto\TermsAggregationResultDto
     */
    public function clearCount() {
      return $this->_clear(2);
    }

    /**
     * Get <count> value
     *
     * @return int
     */
    public function getCount() {
      return $this->_get(2);
    }

    /**
     * Set <count> value
     *
     * @param int $value
     * @return \obiba\mica\AggregationResultDto\TermsAggregationResultDto
     */
    public function setCount($value) {
      return $this->_set(2, $value);
    }
  }
}

namespace obiba\mica {

  class AggregationResultDto extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $aggregation = NULL;

    /**  @var \obiba\mica\AggregationResultDto\TermsAggregationResultDto[] */
    public $termsAggregations = array();


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor() {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'obiba.mica.AggregationResultDto');

      // REQUIRED STRING aggregation = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 1;
      $f->name = "aggregation";
      $f->type = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REPEATED MESSAGE termsAggregations = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number = 2;
      $f->name = "termsAggregations";
      $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\obiba\mica\AggregationResultDto\TermsAggregationResultDto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), TRUE);
      }

      return $descriptor;
    }

    /**
     * Check if <aggregation> has a value
     *
     * @return boolean
     */
    public function hasAggregation() {
      return $this->_has(1);
    }

    /**
     * Clear <aggregation> value
     *
     * @return \obiba\mica\AggregationResultDto
     */
    public function clearAggregation() {
      return $this->_clear(1);
    }

    /**
     * Get <aggregation> value
     *
     * @return string
     */
    public function getAggregation() {
      return $this->_get(1);
    }

    /**
     * Set <aggregation> value
     *
     * @param string $value
     * @return \obiba\mica\AggregationResultDto
     */
    public function setAggregation($value) {
      return $this->_set(1, $value);
    }

    /**
     * Check if <termsAggregations> has a value
     *
     * @return boolean
     */
    public function hasTermsAggregations() {
      return $this->_has(2);
    }

    /**
     * Clear <termsAggregations> value
     *
     * @return \obiba\mica\AggregationResultDto
     */
    public function clearTermsAggregations() {
      return $this->_clear(2);
    }

    /**
     * Get <termsAggregations> value
     *
     * @param int $idx
     * @return \obiba\mica\AggregationResultDto\TermsAggregationResultDto
     */
    public function getTermsAggregations($idx = NULL) {
      return $this->_get(2, $idx);
    }

    /**
     * Set <termsAggregations> value
     *
     * @param \obiba\mica\AggregationResultDto\TermsAggregationResultDto $value
     * @return \obiba\mica\AggregationResultDto
     */
    public function setTermsAggregations(\obiba\mica\AggregationResultDto\TermsAggregationResultDto $value, $idx = NULL) {
      return $this->_set(2, $value, $idx);
    }

    /**
     * Get all elements of <termsAggregations>
     *
     * @return \obiba\mica\AggregationResultDto\TermsAggregationResultDto[]
     */
    public function getTermsAggregationsList() {
      return $this->_get(2);
    }

    /**
     * Add a new element to <termsAggregations>
     *
     * @param \obiba\mica\AggregationResultDto\TermsAggregationResultDto $value
     * @return \obiba\mica\AggregationResultDto
     */
    public function addTermsAggregations(\obiba\mica\AggregationResultDto\TermsAggregationResultDto $value) {
      return $this->_add(2, $value);
    }
  }
}

namespace {
  \obiba\mica\QueryResultDto::extension(function () {
    // OPTIONAL MESSAGE obiba.mica.StudyResultDto.result = 1000
    $f = new \DrSlump\Protobuf\Field();
    $f->number = 1000;
    $f->name = "obiba.mica.StudyResultDto.result";
    $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
    $f->rule = \DrSlump\Protobuf::RULE_OPTIONAL;
    $f->reference = '\obiba\mica\StudyResultDto';
    return $f;
  });
  \obiba\mica\QueryResultDto::extension(function () {
    // OPTIONAL MESSAGE obiba.mica.DatasetVariableResultDto.result = 1001
    $f = new \DrSlump\Protobuf\Field();
    $f->number = 1001;
    $f->name = "obiba.mica.DatasetVariableResultDto.result";
    $f->type = \DrSlump\Protobuf::TYPE_MESSAGE;
    $f->rule = \DrSlump\Protobuf::RULE_OPTIONAL;
    $f->reference = '\obiba\mica\DatasetVariableResultDto';
    return $f;
  });
}