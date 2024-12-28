function myFunction() {
  $filename = "nonexistent_file.txt";
  if (file_exists($filename)) {
    $file = fopen($filename, "r");
    if ($file) {
      // ... process the file ...
      fclose($file);
    } else {
      // Handle fopen failure (e.g., insufficient permissions)
      echo "Error opening file: $filename\n";
    }
  } else {
    // Handle file not found
    echo "File not found: $filename\n";
  }
} 