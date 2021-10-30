<?php

namespace duynguyen\dadtheme\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class DadboardThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
    	$this->loadRoutesFrom(__DIR__.'/../../routes/dashboard-theme.php');
    	$this->loadViewsFrom(__DIR__.'/../../resources/views', 'dashboard-theme');
    	$this->loadViewsFrom(__DIR__.'/../../resources/views/components', 'elements');
       	$this->bladeViewComponent('elements',[
       		'app-content'=>'app-content',
       		'crumb-item'=>'brd-crumb-item',
       		'crumb'=>'brd-crumb',
       		'card'=>'card',
       		'header-rt'=>'cnt-header-rt', 
       		'header'=>'cnt-header',
       		'main-menu'=>'main-menu',
       		'mnucontent'=>'mnucontent',  
       		'mnucontent-list'=>'mnucontentlst',  
       		'ms-list'=>'ms-list',
       		'nav-item'=>'nav-item',
       		'nvn-header'=>'nvnheader',
       		'table'=>'table',
       	]);
    }

    public function bladeViewComponent($view,array $components)
    {
    	foreach ($components as $prefix => $component) {
			Blade::component($view."::".$component,$prefix);
		}
    }
}