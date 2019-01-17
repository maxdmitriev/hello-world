/* PHP convert text into computer friendly */
  
  
  /* $string = get_sub_field( 'input_label' ); */
  
  $string = 'LA. LA       LA?|*?!<<>@+=-'

  $no_spaces_string = str_replace(' ', '_', $string);

  $find = array('/_+/', '/[^A-Za-z0-9\-_]/');
  $replace =  array('_','');

  echo (strtolower(preg_replace($find, $replace, $no_spaces_string))); // output 'la_la_la'
