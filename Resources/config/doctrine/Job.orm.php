<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'type',
   'fieldName' => 'type',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'progress',
   'fieldName' => 'progress',
   'type' => 'decimal',
  ));
$metadata->mapField(array(
   'columnName' => 'startdate',
   'fieldName' => 'startdate',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'enddate',
   'fieldName' => 'enddate',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'result',
   'fieldName' => 'result',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);