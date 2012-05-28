<?php
/**
 * COPS (Calibre OPDS PHP Server) class file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     S�bastien Lucas <sebastien@slucas.fr>
 */

    $config = array();
  
    /*
     * The directory containing calibre's metadata.db file, with sub-directories
     * containing all the formats.
     * If this directory starts with a / EPUB download will only work with Nginx
     * and if the calibre_internal_directory is set
     */
    $config['calibre_directory'] = './';
    
    /*
     * The internal directory set in nginx config file
     */
    $config['calibre_internal_directory'] = '/Calibre/'; 

    /*
     * Number of books
     */
    $config['cops_recentbooks_limit'] = '50'; 
    
    /*
     * The internal directory set in nginx config file
     */
    $config['cops_title_default'] = "Sebastien's COPS"; 

?>