<?php
/**
 * Class Loader
 *
 * Class Loader which loads the class_slug class and runs it
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 * @version 0.0.1
 */

class Mildthemes_Class_Loader {

	protected $class;		//The class being loaded
	protected $class_slug;	//The class slug
	protected $class_name;	//The class name
	protected $actions;		//Actions to be added
	protected $filters;		//Filters to be applied

	public function __construct( $params ) {

		// Initialization 
		$this->class_slug = $params['class_slug'];
		$this->classname = 'Mildthemes_' . str_replace( '-', '_', $this->class_slug );
		$this->actions = array();
		$this->filters = array();

		// Loading dependencies and instantiation of the new class, specified by $class_slug
		$this->load_dependencies();
		$this->class = new $this->classname( $this, $params );
		if ( method_exists( $this->class, 'load_dependencies' ) ) {
			$this->class->load_dependencies();
		}

		// Running the class methods
		if ( method_exists( $this->class, 'run' ) ) {
			$this->class->run();
		}

		// Running actions and filters         
        $this->run_actions();
        $this->run_filters();
	}

	private function load_dependencies() {
		require_once( LIBS_DIR . '/' . $this->class_slug . '.php' );
    }

	public function add_action( $hook, $component, $callback ) {
		$this->actions = $this->add( $this->actions, $hook, $component, $callback );
	}

	public function add_filter( $hook, $component, $callback ) {
		$this->filters = $this->add( $this->filters, $hook, $component, $callback );
	}

	private function add( $hooks, $hook, $component, $callback ) {
		$hooks[] = array(
			'hook'      => $hook,
			'component' => $component,
			'callback'  => $callback
		);

		return $hooks;
	}

	public function remove_action( $hook, $component, $callback ) {
			remove_action( $hook, $callback );
	}

	public function remove_filter( $hook, $component, $callback ) {
			remove_filter( $hook, $callback );

	}

	public function run_actions() {
		foreach ( $this->actions as $hook ) {
			add_action( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
		}
	}

	public function run_filters() {
		foreach ( $this->filters as $hook ) {
			add_filter( $hook['hook'], array( $hook['component'], $hook['callback'] ) );
		}
	}
}
?>