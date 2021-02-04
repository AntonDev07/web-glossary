<?php 


class Data {

	private static $ds; // $data store to save $data-provider

	public static function initialize(DataProvider $data_provider)
	{	
		return self::$ds = $data_provider;
	}
    
   	public static function get_terms()
    {
    	return self::$ds->get_terms(); 
    }

    public static function get_term($term)
    {
    	return self::$ds->get_term($term); 
    }

    public static function search_terms($search)
    {
    	return self::$ds->search_terms($search); 
    }

    public static function add_term($term, $definition)
    {
    	return self::$ds->add_term($term, $definition); 
    }

    public static function update_term($original_term, $new_term, $definition)
    {
    	return self::$ds->update_term($original_term, $new_term, $definition); 
    }

    public static function delete_term($term)
    {
    	return self::$ds->delete_term($term); 
    }


    public static function set_data($arr)
    {
    	return self::$ds->set_data($arr); 
    }


    public static function get_data()
    {
    	return self::$ds->get_data(); 
    }
}
