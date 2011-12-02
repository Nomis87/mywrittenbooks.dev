<?php

/**
 * Basemwb_user
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property timestamp $generated_at
 * @property timestamp $updated_at
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $picturepath
 * @property boolean $activated
 * @property Doctrine_Collection $mwb_object_writer
 * @property Doctrine_Collection $mwb_buydobject_user
 * 
 * @method timestamp           getGeneratedAt()         Returns the current record's "generated_at" value
 * @method timestamp           getUpdatedAt()           Returns the current record's "updated_at" value
 * @method integer             getUserId()              Returns the current record's "user_id" value
 * @method string              getFirstname()           Returns the current record's "firstname" value
 * @method string              getLastname()            Returns the current record's "lastname" value
 * @method string              getEmail()               Returns the current record's "email" value
 * @method string              getUsername()            Returns the current record's "username" value
 * @method string              getPassword()            Returns the current record's "password" value
 * @method string              getPicturepath()         Returns the current record's "picturepath" value
 * @method boolean             getActivated()           Returns the current record's "activated" value
 * @method Doctrine_Collection getMwbObjectWriter()     Returns the current record's "mwb_object_writer" collection
 * @method Doctrine_Collection getMwbBuydobjectUser()   Returns the current record's "mwb_buydobject_user" collection
 * @method mwb_user            setGeneratedAt()         Sets the current record's "generated_at" value
 * @method mwb_user            setUpdatedAt()           Sets the current record's "updated_at" value
 * @method mwb_user            setUserId()              Sets the current record's "user_id" value
 * @method mwb_user            setFirstname()           Sets the current record's "firstname" value
 * @method mwb_user            setLastname()            Sets the current record's "lastname" value
 * @method mwb_user            setEmail()               Sets the current record's "email" value
 * @method mwb_user            setUsername()            Sets the current record's "username" value
 * @method mwb_user            setPassword()            Sets the current record's "password" value
 * @method mwb_user            setPicturepath()         Sets the current record's "picturepath" value
 * @method mwb_user            setActivated()           Sets the current record's "activated" value
 * @method mwb_user            setMwbObjectWriter()     Sets the current record's "mwb_object_writer" collection
 * @method mwb_user            setMwbBuydobjectUser()   Sets the current record's "mwb_buydobject_user" collection
 * 
 * @package    mywrittenbooks.dev
 * @subpackage model
 * @author     Tobias Simon
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basemwb_user extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mwb_user');
        $this->hasColumn('generated_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('updated_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('firstname', 'string', 40, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 40,
             ));
        $this->hasColumn('lastname', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('email', 'string', 40, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 40,
             ));
        $this->hasColumn('username', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('password', 'string', 40, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 40,
             ));
        $this->hasColumn('picturepath', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('activated', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('mwb_object as mwb_object_writer', array(
             'local' => 'user_id',
             'foreign' => 'writer'));

        $this->hasMany('mwb_boughtObject as mwb_buydobject_user', array(
             'local' => 'user_id',
             'foreign' => 'user'));
    }
}