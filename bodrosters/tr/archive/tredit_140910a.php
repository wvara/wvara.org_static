<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>members</title>
<style type="text/css">
	hr.pme-hr		     { border: 0px solid; padding: 0px; margin: 0px; border-top-width: 1px; height: 1px; }
	table.pme-main 	     { border: #004d9c 1px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	table.pme-navigation { border: #004d9c 0px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	th.pme-header	     { border: #004d9c 1px solid; padding: 4px; background: #add8e6; }
	td.pme-key-0, td.pme-value-0, td.pme-help-0, td.pme-navigation-0, td.pme-cell-0,
	td.pme-key-1, td.pme-value-1, td.pme-help-0, td.pme-navigation-1, td.pme-cell-1,
	td.pme-sortinfo, td.pme-filter { border: #004d9c 1px solid; padding: 3px; }
	td.pme-buttons { text-align: left;   }
	td.pme-message { text-align: center; }
	td.pme-stats   { text-align: right;  }
</style>
</head>
<body>
<h3>WVARA Members</h3>
<?php

/*
 * IMPORTANT NOTE: This generated file contains only a subset of huge amount
 * of options that can be used with phpMyEdit. To get information about all
 * features offered by phpMyEdit, check official documentation. It is available
 * online and also for download on phpMyEdit project management page:
 *
 * http://platon.sk/projects/main_page.php?project_id=5
 */

//Code change 6/4/16 W6PK: moved database login information from here to dbaccess.php.

require '/home/wvara/usr/etc/dbaccess.php';
//dbaccess.php provides  $dbaccess_comment, $dbaccess_hostname, $dbaccess_dbname,
//   $dbaccess_pwd, $dbaccess_username.

// MySQL host name, user name, password, database, and table
$opts['hn'] = $dbaccess_hostname;
$opts['un'] = $dbaccess_username;
$opts['pw'] = $dbaccess_pwd;
$opts['db'] = $dbaccess_dbname;
$opts['tb'] = 'members';

$readonly = 'LCFVR';

// Name of field which is the unique key
$opts['key'] = 'mid';

// Type of key field (int/real/string/date etc.)
$opts['key_type'] = 'int';

// Sorting field(s)
$opts['sort_field'] = array('mid');

// Number of records to display on the screen
// Value of -1 lists all records in a table
$opts['inc'] = 10;

// Options you wish to give the users
// A - add,  C - change, P - copy, V - view, D - delete,
// F - filter, I - initial sort suppressed
$opts['options'] = 'ACDVF';

// Number of lines to display on multiple selection filters
$opts['multiple'] = '4';

// Navigation style: B - buttons (default), T - text links, G - graphic links
// Buttons position: U - up, D - down (default)
$opts['navigation'] = 'UDB';

// Display special page elements
$opts['display'] = array(
	'form'  => true,
	'query' => true,
	'sort'  => true,
	'time'  => true,
	'tabs'  => true
);

// Set default prefixes for variables
$opts['js']['prefix']               = 'PME_js_';
$opts['dhtml']['prefix']            = 'PME_dhtml_';
$opts['cgi']['prefix']['operation'] = 'PME_op_';
$opts['cgi']['prefix']['sys']       = 'PME_sys_';
$opts['cgi']['prefix']['data']      = 'PME_data_';

/* Get the user's default language and use it if possible or you can
   specify particular one you want to use. Refer to official documentation
   for list of available languages. */
$opts['language'] = $HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE'];

/* Table-level filter capability. If set, it is included in the WHERE clause
   of any generated SELECT statement in SQL query. This gives you ability to
   work only with subset of data from table.

$opts['filters'] = "column1 like '%11%' AND column2<17";
$opts['filters'] = "section_id = 9";
$opts['filters'] = "PMEtable0.sessions_count > 200";
*/

/* Field definitions
   
Fields will be displayed left to right on the screen in the order in which they
appear in generated list. Here are some most used field options documented.

['name'] is the title used for column headings, etc.;
['maxlen'] maximum length to display add/edit/search input boxes
['trimlen'] maximum length of string content to display in row listing
['width'] is an optional display width specification for the column
          e.g.  ['width'] = '100px';
['mask'] a string that is used by sprintf() to format field output
['sort'] true or false; means the users may sort the display on this column
['strip_tags'] true or false; whether to strip tags from content
['nowrap'] true or false; whether this field should get a NOWRAP
['select'] T - text, N - numeric, D - drop-down, M - multiple selection
['options'] optional parameter to control whether a field is displayed
  L - list, F - filter, A - add, C - change, P - copy, D - delete, V - view
            Another flags are:
            R - indicates that a field is read only
            W - indicates that a field is a password field
            H - indicates that a field is to be hidden and marked as hidden
['URL'] is used to make a field 'clickable' in the display
        e.g.: 'mailto:$value', 'http://$value' or '$page?stuff';
['URLtarget']  HTML target link specification (for example: _blank)
['textarea']['rows'] and/or ['textarea']['cols']
  specifies a textarea is to be used to give multi-line input
  e.g. ['textarea']['rows'] = 5; ['textarea']['cols'] = 10
['values'] restricts user input to the specified constants,
           e.g. ['values'] = array('A','B','C') or ['values'] = range(1,99)
['values']['table'] and ['values']['column'] restricts user input
  to the values found in the specified column of another table
['values']['description'] = 'desc_column'
  The optional ['values']['description'] field allows the value(s) displayed
  to the user to be different to those in the ['values']['column'] field.
  This is useful for giving more meaning to column values. Multiple
  descriptions fields are also possible. Check documentation for this.
*/

$opts['fdd']['mid'] = array(
  'name'     => 'Mid',
  'select'   => 'T',
  'options'  => 'AVPDR', // auto increment
  'maxlen'   => 10,
  'default'  => '0',
  'sort'     => true
);
$opts['fdd']['C'] = array(
  'name'     => 'Call',
  'select'   => 'T',
  'maxlen'   => 10,
  'sort'     => true
);
$opts['fdd']['FirstName'] = array(
  'name'     => 'First Name',
  'select'   => 'T',
  'maxlen'   => 32,
  'sort'     => true
);
$opts['fdd']['LastName'] = array(
  'name'     => 'Last Name',
  'select'   => 'T',
  'maxlen'   => 64,
  'sort'     => true
);
$opts['fdd']['Handle'] = array(
  'name'     => 'Handle',
  'select'   => 'T',
  'maxlen'   => 32,
  'sort'     => true
);
$opts['fdd']['Spouse'] = array(
  'name'     => 'Spouse',
  'select'   => 'T',
  'maxlen'   => 32,
  'sort'     => true
);
$opts['fdd']['StreetAddress'] = array(
  'name'     => 'Street Address',
  'select'   => 'T',
  'maxlen'   => 128,
  'sort'     => true
);
$opts['fdd']['City'] = array(
  'name'     => 'City',
  'select'   => 'T',
  'maxlen'   => 64,
  'sort'     => true
);
$opts['fdd']['State'] = array(
  'name'     => 'State',
  'select'   => 'T',
  'maxlen'   => 32,
  'sort'     => true
);
$opts['fdd']['Zip'] = array(
  'name'     => 'Zip',
  'select'   => 'T',
  'maxlen'   => 16,
  'sort'     => true
);
$opts['fdd']['Phone'] = array(
  'name'     => 'Phone',
  'select'   => 'T',
  'maxlen'   => 32,
  'sort'     => true
);
$opts['fdd']['LicClass'] = array(
  'name'     => 'Lic Class',
  'select'   => 'T',
  'maxlen'   => 4,
  'values'   => array(
                  'E',
                  'A',
                  'G',
                  'T',
                  'P',
                  'N',
                  ''),
  'default'  =>	'',
  'sort'     => true
);
$opts['fdd']['LicClass']['colattrs'] = 'align="center"';
$opts['fdd']['ARRLMemb'] = array(
  'name'     => 'ARRL Memb?',
  'select'   => 'T',
  'maxlen'   => 5,
  'values'   => array(
                  "TRUE",
                  "FALSE",
                  ""),
  'default'  =>	"",
  'sort'     => true
);
$opts['fdd']['ARRLMemb']['colattrs'] = 'align="center"';
$opts['fdd']['PaymentDate'] = array(
  'name'     => 'Last Payment Date',
  'select'   => 'T',
  'maxlen'   => 19,
  'sort'     => true
);
$opts['fdd']['CheckNumber'] = array(
  'name'     => 'Check# or PAYPAL',
  'select'   => 'T',
  'maxlen'   => 12,
  'default'  =>	"PAYPAL",
  'sort'     => true
);
$opts['fdd']['CheckNumber']['colattrs'] = 'align="center"';
$opts['fdd']['TotalPayt'] = array(
  'name'     => 'Total Payt',
  'select'   => 'T',
  'maxlen'   => 12,
  'sort'     => true
);
$opts['fdd']['TotalPayt']['colattrs'] = 'align="right"';
$opts['fdd']['MembDuesPayt'] = array(
  'name'     => 'Memb Dues Payt',
  'select'   => 'T',
  'maxlen'   => 12,
  'sort'     => true
);
$opts['fdd']['MembDuesPayt']['colattrs'] = 'align="right"';
$opts['fdd']['RptrDuesPayt'] = array(
  'name'     => 'Rptr Dues Payt',
  'select'   => 'T',
  'maxlen'   => 12,
  'sort'     => true
);
$opts['fdd']['RptrDuesPayt']['colattrs'] = 'align="right"';
$opts['fdd']['OtherPayt'] = array(
  'name'     => 'Other Payt',
  'select'   => 'T',
  'maxlen'   => 12,
  'sort'     => true
);
$opts['fdd']['OtherPayt']['colattrs'] = 'align="right"';
$opts['fdd']['DuesPaidThru'] = array(
  'name'     => 'Dues Paid Thru',
  'select'   => 'T',
  'maxlen'   => 4,
  'sort'     => true
);
$opts['fdd']['DuesPaidThru']['colattrs'] = 'align="center"';
$opts['fdd']['Status'] = array(
  'name'     => 'Status',
  'select'   => 'T',
  'maxlen'   => 9,
  'values'   => array(
                  "Life",
                  "Regular",
		  "Family",
                  "Inactive",
                  "SK",
                  ""),
  'default'  =>	"",
  'sort'     => true
);
$opts['fdd']['Status']['colattrs'] = 'align="center"';
$opts['fdd']['RptrMemb'] = array(
  'name'     => 'Rptr Memb?',
  'select'   => 'T',
  'maxlen'   => 5,
  'values'   => array(
                  "TRUE",
                  "FALSE",
                  ""),
  'default'  =>	"",
  'sort'     => true
);
$opts['fdd']['RptrMemb']['colattrs'] = 'align="center"';
$opts['fdd']['AutoCode'] = array(
  'name'     => 'Auto Code',
  'select'   => 'T',
  'maxlen'   => 8,
  'default'  =>	'',
  'sort'     => true
);
$opts['fdd']['AutoCode']['colattrs'] = 'align="center"';
$opts['fdd']['Badge'] = array(
  'name'     => 'Badge',
  'select'   => 'T',
  'maxlen'   => 9,
  'values'   => array(
                  "Purchased",
                  "Ordered",
                  "Delivered",
                  "No Badge",
                  ""),
  'default'  =>	"",
  'sort'     => true
);
$opts['fdd']['Badge']['colattrs'] = 'align="center"';
$opts['fdd']['Email'] = array(
  'name'     => 'Email',
  'select'   => 'T',
  'maxlen'   => 32,
  'default'  =>	'',
  'sort'     => true
);
$opts['fdd']['HideStreetAddr'] = array(
  'name'     => 'Hide Street Addr?',
  'select'   => 'T',
  'maxlen'   => 5,
  'values'   => array(
                  "TRUE",
                  "FALSE"),
  'default'  =>	"FALSE",
  'sort'     => true
);
$opts['fdd']['HideStreetAddr']['colattrs'] = 'align="center"';
$opts['fdd']['HidePhone'] = array(
  'name'     => 'Hide Phone?',
  'select'   => 'T',
  'maxlen'   => 5,
  'values'   => array(
                  "TRUE",
                  "FALSE"),
  'default'  =>	"FALSE",
  'sort'     => true
);
$opts['fdd']['HidePhone']['colattrs'] = 'align="center"';
$opts['fdd']['HideEmail'] = array(
  'name'     => 'Hide Email?',
  'select'   => 'T',
  'maxlen'   => 5,
  'values'   => array(
                  "TRUE",
                  "FALSE"),
  'default'  =>	"FALSE",
  'sort'     => true
);
$opts['fdd']['HideEmail']['colattrs'] = 'align="center"';
$opts['fdd']['HideAll'] = array(
  'name'     => 'Hide All?',
  'select'   => 'T',
  'maxlen'   => 5,
  'values'   => array(
                  "TRUE",
                  "FALSE"),
  'default'  =>	"FALSE",
  'sort'     => true
);
$opts['fdd']['HideAll']['colattrs'] = 'align="center"';
$opts['fdd']['Comments'] = array(
  'name'     => 'Comments',
  'select'   => 'T',
  'maxlen'   => 16777215,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
//$opts['fdd']['Password'] = array(
//  'name'     => 'Password',
//  'select'   => 'T',
//  $opts['options'] = 'ACDVF',
//  'maxlen'   => 32,
//  'sort'     => true
//);

//DEBUG:
//print "\n";
//echo "opts";
//print "\n";
//print $opts[hn];
//print "\n";
//print $opts[un];
//print "\n";
//print $opts[pw];
//print "\n";
//print $opts[db];
//print "\n";
//print $opts[tb];
//print "\n";
// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>


</body>
</html>

