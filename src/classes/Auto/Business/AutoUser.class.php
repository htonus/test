<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.0.9 at 2012-06-25 23:41:38                         *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoUser extends IdentifiableObject
	{
		protected $username = null;
		protected $password = null;
		protected $email = null;
		
		public function getUsername()
		{
			return $this->username;
		}
		
		/**
		 * @return User
		**/
		public function setUsername($username)
		{
			$this->username = $username;
			
			return $this;
		}
		
		public function getPassword()
		{
			return $this->password;
		}
		
		/**
		 * @return User
		**/
		public function setPassword($password)
		{
			$this->password = $password;
			
			return $this;
		}
		
		public function getEmail()
		{
			return $this->email;
		}
		
		/**
		 * @return User
		**/
		public function setEmail($email)
		{
			$this->email = $email;
			
			return $this;
		}
	}
?>