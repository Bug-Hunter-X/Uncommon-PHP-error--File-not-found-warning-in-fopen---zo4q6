function myFunction() {
  // This line will cause an error if the file doesn't exist.
  $file = fopen("nonexistent_file.txt", "r"); 
  // ... rest of the code ...
}