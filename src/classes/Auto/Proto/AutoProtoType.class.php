<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.0.9 at 2012-06-28 10:10:44                         *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoProtoType extends AbstractProtoClass
	{
		protected function makePropertyList()
		{
			return array(
				'id' => LightMetaProperty::fill(new LightMetaProperty(), 'id', null, 'integerIdentifier', 'Type', 8, true, true, false, null, null),
				'name' => LightMetaProperty::fill(new LightMetaProperty(), 'name', null, 'string', null, 128, true, true, false, null, null),
				'parent' => LightMetaProperty::fill(new LightMetaProperty(), 'parent', 'parent_id', 'identifier', 'Type', 8, false, false, false, 1, 2),
				'left' => LightMetaProperty::fill(new LightMetaProperty(), 'left', null, 'integer', null, 4, false, true, false, null, null),
				'right' => LightMetaProperty::fill(new LightMetaProperty(), 'right', null, 'integer', null, 4, false, true, false, null, null)
			);
		}
	}
?>