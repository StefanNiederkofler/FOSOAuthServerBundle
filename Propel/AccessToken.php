<?php

namespace FOS\OAuthServerBundle\Propel;



/**
 * Skeleton subclass for representing a row from one of the subclasses of the 'token' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.vendor.friendsofsymfony.oauth-server-bundle.FOS.OAuthServerBundle.Propel
 */
class AccessToken extends Token {

	/**
	 * Constructs a new AccessToken class, setting the class_key column to TokenPeer::CLASSKEY_2.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->setClassKey(TokenPeer::CLASSKEY_2);
	}

} // AccessToken
