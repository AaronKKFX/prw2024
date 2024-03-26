<?php
while (true) {
  $n = intval(fgets(STDIN));
  if ($n == 0) {
    break;
  }

  $text = array();
  $max_length = 0;

  for ($i = 0; $i < $n; $i++) {
    $line = trim(fgets(STDIN));
    $line = preg_replace('/\s+/', ' ', $line);
    $text[] = $line;
    $length = strlen($line);
    if ($length > $max_length) {
      $max_length = $length;
    }
  }

  foreach ($text as $line) {
    $spaces = $max_length - strlen($line);
    echo str_repeat(" ", $spaces) . $line . "\n";
  }
  $last_case = trim(fgets(STDIN));
  if ($last_case !== '0') {
    echo "\n";
    fseek(STDIN, -strlen($last_case)-1, SEEK_CUR);
  }
}
?>