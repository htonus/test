<?php
/******************************************************************************
 *   Copyright (C) 2012 by Mikhail Cherviakov                                 *
 *   email: htonus@gmail.com                                                  *
 ******************************************************************************/
/* $Id$ */

/**
 * Description of Application
 *
 * @author htonus
 */
final class Application
{
	private $allowedAreas = array(
		'main'
	);
	
	public function run()
	{
		if (!Session::isStarted())
			Session::start ();
		
		$request = HttpRequest::create()->
			setGet($_GET)->
			setPost($_POST)->
			setCookie($_COOKIE)->
			setFiles($_FILES)->
			setServer($_SERVER)->
			setSession($_SESSION);
		
		$area = $this->getArea($request);
		
		switch (area) {
			case 'main':
				$chain = new $area();
				break;
		}
		
		$this->attachResolver($request);
		
		$mav = $chain->handleRequest($request);
		
		$this->render($mav, $request);
	}
	
	private function getArea(HttpRequest $request)
	{
		$area = Form::create()->
			add(
				Primitive::string('area')->
				addImportFilter(Filter::trim())->
				setDefault('main')
			)->
			import($request->getGet())->
			importMore($request->getPost())->
			getActualValue('area');
		
		if (!in_array($area, $this->allowedAreas))
			throw new SecurityException('error:404');
		
		$request->setAttachedVar('area', $area);
		
		return $area;
	}
	
	private function render(ModelAndView $mav, HttpRequest $request)
	{
		$model = $mav->getModel();
		$view = $mav->getView();
		
		if ($view instanceof RedirectView) {
			return $view->render($model);
		}
		
		$resolver = $request->getAttachedVar('resolver');
		
		if (
			empty($view)
			&& $request->hasAttachedVar('area')
		) {
			$view = $request->getAttachedVar('area');
		}
		
		if (is_string($view)) {
			$view = $resolver->resolve($view);
		}
		
		if ($view instanceof View) {
			$model->set('area', $request->getAttachedVar('area'));
			$model->set('action', $request->getAttachedVar('action'));
			
			$view->render($model);
		}
	}
	
	private function attachResolver(HttpRequest $request)
	{
		$resolver = MultiPrefixPhpViewResolver::create()->
			setViewClassName('SimplePhpView')->
			setPostfix(EXT_TPL)->
			addPrefix(PATH_TEMPLATES);
		
		$request->setAttachedVar('resolver', $resolver);
		
		return $this;
	}
}
