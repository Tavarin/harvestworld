<?php
  echo "var assets = [";
  $path = 'crops';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'crops/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'floors';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'floors/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'icons';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'icons/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'npcs/Charles';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'npcs/Charles/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'npcs/Derek';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'npcs/Derek/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'npcs/Jane';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'npcs/Jane/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'npcs/Maurice';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'npcs/Maurice/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'npcs/Peter';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'npcs/Peter/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'npcs/Sandra';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'npcs/Sandra/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'objects';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'objects/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'player';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'player/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'tools';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'tools/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'walls/brick';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'walls/brick/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'walls/wood';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'walls/wood/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'walls/fence';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'walls/fence/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'animals/horse';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'animals/horse/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  $path = 'animals/cow';
  $files = [];
  $handle = @opendir('./' . $path . '/');
  while ($file = @readdir($handle)) 
    ("." !== $file && ".." !== $file) && array_push($files, $file);
  @closedir($handle);
  for ($n = 0; $n < sizeof($files); $n++) {
    echo "'animals/cow/" . $files[$n] . "',";
  }
  unset($handle,$ext,$file,$path);
  
  echo "'farmBackground.png','farmBackground1.png'];";
?>

var numAsset = 0;

function loadAssets() {
  passOut = true;
  if (numAsset < assets.length) {
    imageWait(numAsset);
  } else {
    if (window.location.href.indexOf('Game.php') > -1) {
      loadGame();
    } else {
      loadTown();
    }
  }
}

function imageWait(num) {
  newWidth = 200*(num/assets.length) + "px";
  loadBarBack.style.width = newWidth;
  numAsset = num + 1;
  
  var img = new Image();
  img.onload = function() { loadAssets(); }
  img.src = assets[num];
}