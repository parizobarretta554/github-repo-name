<?php
$repo_name = "github-repo-name";

if (!isset($_GET['commit']) || $_GET['commit'] != 'true') {
  header("HTTP/1.0 403 Forbidden");
  die("Only valid requests with the ?commit=true parameter are allowed.");
}

// Get the current commit hash from the repo
$commit_hash = exec('cd ' . $repo_name . '; git rev-parse HEAD');

// Print the commit hash to the output
echo($commit_hash);
?>