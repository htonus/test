<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2012-06-26 17:56:21                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoType extends NamedObject
	{
		protected $parent = null;
		protected $left = null;
		protected $right = null;
		
		/**
		 * @return Type
		**/
		public function getParent()
		{
			return $this->parent;
		}
		
		/**
		 * @return Type
		**/
		public function setParent(Type $parent)
		{
			$this->parent = $parent;
			
			return $this;
		}
		
		/**
		 * @return Type
		**/
		public function dropParent()
		{
			$this->parent = null;
			
			return $this;
		}
		
		public function getLeft()
		{
			return $this->left;
		}
		
		/**
		 * @return Type
		**/
		public function setLeft($left)
		{
			$this->left = $left;
			
			return $this;
		}
		
		public function getRight()
		{
			return $this->right;
		}
		
		/**
		 * @return Type
		**/
		public function setRight($right)
		{
			$this->right = $right;
			
			return $this;
		}
	}
?>