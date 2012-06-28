<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.0.9 at 2012-06-28 11:04:08                         *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoSale extends NamedObject
	{
		protected $description = null;
		protected $user = null;
		protected $userId = null;
		protected $items = null;
		
		public function getDescription()
		{
			return $this->description;
		}
		
		/**
		 * @return Sale
		**/
		public function setDescription($description)
		{
			$this->description = $description;
			
			return $this;
		}
		
		/**
		 * @return User
		**/
		public function getUser()
		{
			if (!$this->user && $this->userId) {
				$this->user = User::dao()->getById($this->userId);
			}
			
			return $this->user;
		}
		
		public function getUserId()
		{
			return $this->userId;
		}
		
		/**
		 * @return Sale
		**/
		public function setUser(User $user)
		{
			$this->user = $user;
			$this->userId = $user->getId();
			
			return $this;
		}
		
		/**
		 * @return Sale
		**/
		public function setUserId($id)
		{
			$this->user = null;
			$this->userId = $id;
			
			return $this;
		}
		
		/**
		 * @return Sale
		**/
		public function dropUser()
		{
			$this->user = null;
			$this->userId = null;
			
			return $this;
		}
		
		/**
		 * @return SaleItemsDAO
		**/
		public function getItems($lazy = false)
		{
			if (!$this->items || ($this->items->isLazy() != $lazy)) {
				$this->items = new SaleItemsDAO($this, $lazy);
			}
			
			return $this->items;
		}
		
		/**
		 * @return Sale
		**/
		public function fillItems($collection, $lazy = false)
		{
			$this->items = new SaleItemsDAO($this, $lazy);
			
			if (!$this->id) {
				throw new WrongStateException(
					'i do not know which object i belong to'
				);
			}
			
			$this->items->mergeList($collection);
			
			return $this;
		}
	}
?>