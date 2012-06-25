<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.0.9 at 2012-06-25 23:41:38                         *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	$schema = new DBSchema();
	
	$schema->
		addTable(
			DBTable::create('user')->
			addColumn(
				DBColumn::create(
					DataType::create(DataType::BIGINT)->
					setNull(false),
					'id'
				)->
				setPrimaryKey(true)->
				setAutoincrement(true)
			)->
			addColumn(
				DBColumn::create(
					DataType::create(DataType::VARCHAR)->
					setNull(false)->
					setSize(32),
					'username'
				)
			)->
			addColumn(
				DBColumn::create(
					DataType::create(DataType::VARCHAR)->
					setNull(false)->
					setSize(32),
					'password'
				)
			)->
			addColumn(
				DBColumn::create(
					DataType::create(DataType::VARCHAR)->
					setNull(false)->
					setSize(128),
					'email'
				)
			)
		);
	
?>