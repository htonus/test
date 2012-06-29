<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of main
 *
 * @author htonus
 */
final class controllerUser extends MethodMappedController
{
	public function __construct()
	{
		
		$this->
			setMethodMappingList(
				array(
					'index'	=> 'actionIndex',
				)
			)->
			setDefaultAction('index');
	}
	
	public function actionIndex(HttpRequest $request)
	{
		$model = Model::create();
		
		$list = User::dao()->getPlainList();
		
		$model->set('list', $list);
		
		$mav = ModelAndView::create()->
			setModel($model);
		
		return $mav;
	}
}
