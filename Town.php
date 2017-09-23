<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Harvest World Game Test</title>

<style type='text/css'>
a {
  opacity:0.6;
}

@font-face {
    font-family: "Juice";
    src: url("fonts/Juice.TTF");
}
@font-face {
    font-family: "Brennan";
    src: url("fonts/Brennan.TTF");
}

a:hover {
  opacity:1;
}

body {
  background-color:#EFEFEF;
  font-family:"Juice";
}

.loadBarFront {
  position:absolute;
  left:364px;
  top:296px;
  z-index:11;
}

.loadBarBack {
  position:absolute;
  left:364px;
  top:296px;
  z-index:10;
}

.loadBarImage {
  position:absolute;
  top:96px;
  left:160px;
  z-index:9;
}

.assetBox {
  position:absolute;
  top:-60px;
  left:0px;
  width:32px;
  height:32px;
  overflow:hidden;
}

.assetImage {
  position:absolute;
  top:0px;
  left:0px;
  width:32px;
  height:32px;
  overflow:hidden;
}

.clock {
  font-size:24px;
  position:absolute;
  z-index:8;
  top:0px;
  left:0px;
  width:96px;
  height:62px;
  text-align:center;
  padding-top:5px;
  background-image:url(clockBack.png);
}

.money {
  font-size:14px;
  position:absolute;
  top:62px;
  left:0px;
  z-index:8;
  width:96px;
  height:18px;
  text-align:center;
  padding-top:0px;
  background-image:url(moneyBack.png);
}

.player {
  position:absolute;
  left:448px;
  top:286px;
  z-index:5;
}

.tool {
  position:absolute;
  left:439px;
  top:279px;
  z-index:6;
}

.currentItem {
  position:absolute;
  left:448px;
  top:320px;
  z-index:5;
  opacity:0.3;
}

.mobileDiv {
  position:absolute;
  width:852px;
  min-height:420px;
  height:420px;
  top:96px;
  left:0px;
  overflow:hidden;
}

.gameDiv {
  position:absolute;
  width:608px;
  min-height:416px;
  height:416px;
  top:96px;
  left:160px;
  overflow:hidden;
  background-image:url(Background1.png);
}

.backDiv {
  width:2208px;
  height:1760px;
  position:absolute;
  left:-672px;
  top:-1312px;
  z-index:0;
  background-image:url(townBackground.png);
}

.floorDiv {
  width:928px;
  height:608px;
  position:absolute;
  left:-384px;
  top:-1120px;
  z-index:1;
}

.wallDiv {
  width:928px;
  height:608px;
  position:absolute;
  left:-384px;
  top:-1120px;
  z-index:2;
}

.objectDiv {
  width:928px;
  height:608px;
  position:absolute;
  left:-384px;
  top:-1120px;
  z-index:3;
}

.npcDiv {
  width:928px;
  height:1120px;
  position:absolute;
  left:-384px;
  top:-1312px;
  z-index:4;
}

.weatherDiv {
  width:608px;
  height:416px;
  position:absolute;
  left:160px;
  top:96px;
  z-index:7;
}

.dayDiv {
  width:608px;
  height:416px;
  position:absolute;
  left:160px;
  top:96px;
  z-index:7;
  background:#000000;
  opacity:0.4;
}

.storeDiv {
  position:absolute;
  top:0px;
  left:144px;
  width:320px;
  height:288px;
  z-index:8;
  background-image:url(store.png);
  font-size:13px;
  font-family:"Brennan";
}

.storBackDiv {
  position:absolute;
  top:26px;
  left:222px;
  width:92px;
  height:236px;
  overflow:hidden;
}

.storDiv {
  position:absolute;
  top:26px;
  left:6px;
  width:210px;
  height:236px;
  overflow:hidden;
}

.store {
  float:left;
  width:26px;
}

.backpackDiv {
  position:absolute;
  top:288px;
  left:544px;
  width:64px;
  height:64px;
  z-index:8;
  background-image:url(backpack.png);
  font-size:10px;
  font-family:"Brennan";
}

.needsDiv {
  position:absolute;
  top:352px;
  left:512px;
  width:96px;
  height:64px;
  z-index:8;
  background-color:#FF0004;
}

.needsFront {
  position:absolute;
  top:0px;
  left:0px;
  z-index:10;
  background-image:url(needsFront.png);
  width:96px;
  min-height:64px;
}

.messageDiv {
  position:absolute;
  top:281px;
  left:125px;
  width:357px;
  height:135px;
  z-index:8;
  background-color:#FF0004;
  background-image:url(messageBack.png);
  text-align:center;
  padding:10px;
  padding-bottom:15px;
  vertical-align:center;
  font-size:14px;
  font-family:"Brennan";
}

.messageImage {
  float:left;
  margin:10px;
}

.needBar {
  position:absolute;
  width:5px;
  z-index:8;
}

</style>

<script type='text/javascript'>

var boundUp = 192;
var boundRight = -1312;
var boundDown = -1120;
var boundLeft = 288;

var farmWalls = [];
var farmFloors = [];
var farmObjects = [];
var farmCrops = [];
var farmNPCs = [];
var farmAnimals = [];

<? include('loadAssets.php'); ?>

function checkAction() {
  coordinates = getCoordinates().split(',');
  coorX = parseInt(coordinates[0]);
  coorY = parseInt(coordinates[1]);
  var dontDismount = false;
  
  if (mounted == true) {
    if (npcs[0] != '') {
	    for (n = 0; n < npcs.length; n++) {
        var npc = npcs[n];
	      if (npc[1] == coorX && npc[2] == coorY) {
          dontDismount = true;
          getDialogue(npc[0],npc[4]);
          break;
        }
      }
    }
    if (dontDismount == false) {
      var animal = animals[0];
      dismount(animal[2],animal[3]);
    }
  } else {
    if (coorX == 14 && coorY == 30) {
      whichBox = 'Seeds';
      openStore();
    }
  
    if (coorX == 28 && coorY == 29) {
      whichBox = 'Building';
      openStore();
    }
     
    if (coorX == 36 && coorY == 30) {
      whichBox = 'Household';
      openStore();
    }
  
    if (coorX > -1 && coorY > -1) {
      if (objects[0] != '') {
	      for (n = 0; n < objects.length; n++) {
          var object = objects[n].split(',');
	        if (object[0] == 'bed' && object[1] == coorX && object[2] == coorY) {
            startSleep(n,coorX,coorY);
            break;
          } else if (object[0] == 'crop' && object[1] == coorX && object[2] == coorY) {
            pickCrop(object[3]);
            break;
          } else if (object[0] == 'toilet' && object[1] == coorX && object[2] == coorY) {
            useBathroom = true;
            useToilet(n,coorX,coorY);
            break;
          }
        }
      }
    }
  
    if (npcs[0] != '') {
	    for (n = 0; n < npcs.length; n++) {
        var npc = npcs[n];
	      if (npc[1] == coorX && npc[2] == coorY) {
          getDialogue(npc[0],npc[4]);
          break;
        }
      }
    }
  
    if (animals[0] != '') {
	    for (n = 0; n < animals.length; n++) {
        var animal = animals[n];
	      if (animal[2] == coorX && animal[3] == coorY) {
          if (animal[0] == 'horse' && mountable == true) {
            mountHorse(coorX,coorY,animal[5]); 
          }
        }
      }
    }
  }
  
  dontDismount = false;
}

function displayCoordinates() {
  var coorX = (288 - parseInt(floorScreen.style.left))/32;
  var coorY = (192 - parseInt(floorScreen.style.top))/32;
  
  document.getElementById('currCoordinates').innerHTML = coorX + "," + coorY;
  setTimeout('displayCoordinates()', 250);
}

</script>

<script src='scripts/variables.js'></script>
<script src='scripts/clock.js'></script>
<script src='scripts/movement.js'></script>
<script src='scripts/shop.js'></script>
<script src='scripts/crops.js'></script>
<script src='scripts/redrawWorld.js'></script>
<script src='scripts/otherFunctions.js'></script>
<script src='scripts/npcs.js'></script>
<script src='scripts/npcDialogue.js'></script>
<script src='scripts/townObjects.js'></script>
<script src='scripts/mobileControls.js'></script>
<script src='scripts/controls.js'></script>
<script src='scripts/cinematics.js'></script>
<script src='scripts/animals.js'></script>
<script src='scripts/saveLoad.js'></script>

</head>

<body onkeydown='whichKeyDown(event)' onkeyup='whichKeyUp(event)' onLoad='loadAssets()'>

<img src='loadingFront.png' class='loadBarFront' id='loadBarFront' style='opacity:1;' />
<img src='loadingBack.png' class='loadBarBack' id='loadBarBack' style='opacity:1;width:0px;height:15px;' />
<img src='loadingImage.png' class='loadBarImage' id='loadBarImage' style='opacity:1;' />

<img src='player/playerUS.png' class='player' id='player' />

<div id='mobileDiv' class='mobileDiv' style='opacity:0;'>
  <img src='mobileControls.png' id='mobileImage' usemap='#mobileControls' />
  
  <map name='mobileControls'>
    <area shape="rect" coords="60,146,96,190" alt="W" onmousedown="whichClick('wtap')">
    <area shape="rect" coords="102,196,144,232" alt="D" onmousedown="whichClick('dtap')">
    <area shape="rect" coords="60,240,96,284" alt="S" onmousedown="whichClick('stap')">
    <area shape="rect" coords="8,200,50,232" alt="D" onmousedown="whichClick('atap')">
    
    <area shape="circle" coords="810,54,32" alt="E" onmousedown="whichClick('e')">
    <area shape="circle" coords="810,137,32" alt="Q" onmousedown="whichClick('q')">
    <area shape="circle" coords="810,216,32" alt="R" onmousedown="whichClick('r')">
    <area shape="circle" coords="810,295,32" alt="G" onmousedown="whichClick('g')">
    <area shape="circle" coords="810,376,32" alt="Space" onmousedown="whichClick('space')">
  </map>
</div>

<div class='gameDiv' id='gameScreen' background='Background.png'>
  <div class='clock' id='clock'>
  </div>
  
  <div class='money' id='money'>
    $1000
  </div>
  
  <div class='backDiv' id='backScreen' style='top:-1312px;left:-672px;background-image:url(townBackground.png);'>
  </div>
  
  <div class='floorDiv' id='floorScreen' style='top:-1120px;left:-384px;'>
  </div>

  <div class='wallDiv' id='wallScreen' style='top:-1120px;left:-384px;'>
  </div>

  <div class='objectDiv' id='objectScreen' style='top:-1120px;left:-384px;'>
  </div>
  
  <div class='npcDiv' id='npcScreen' style='top:-1312px;left:-384px;'>
  </div>
  
  <div class='needsDiv' id='needs'>
    <div class='needsFront' id='needsFront'></div>
    <img id='sleepBar' class='needBar' src='needBar.png' style='height:44px;top:6px;left:8px;' />
    <img id='bathroomBar' class='needBar' src='needBar.png' style='height:44px;top:6px;left:22px;' />
    <img id='showerBar' class='needBar' src='needBar.png' style='height:44px;top:6px;left:37px;' />
  </div>
  
  <div class='backpackDiv' id='backpack'>
    <div style='height:18px;width:18px;position:absolute;top:3px;left:4px;' id='itemNumbers'></div>
    <img src='icons/none.png' style='height:32px;width:32px;position:absolute;top:16px;left:16px;' id='equipItem' />
    <div style='height:18px;width:60px;position:absolute;top:44px;left:0px;text-align:right;' id='weightNumber'>wt. 0/40</div>
  </div>
  
  <div class='messageDiv' id='messageDiv' style='opacity:0;'>
  </div>
  
  <div class='storeDiv' id='storeDiv' style='opacity:0;'>
    <div style='position:absolute;top:7px;left:4px;' id='storTitleDiv'>
    </div>
    <div style='position:absolute;top:7px;left:244px;' id='storTitleDiv1'>
    </div>
    <div class='storBackDiv' id='storBackDiv'>
      <div class='storBackInner' id='storBackInner' style='position:absolute;top:0px;left:0px;'>
      </div>
    </div>
    
    <div class='storDiv' id='storDiv'>
      <div class='storInner' id='storInner' style='position:absolute;top:0px;left:0px;'>
      </div>
    </div>
    
    <img src='storageArrow.png' style='position:absolute;top:260px;left:0px;opacity:0.3;' id='storArrow' />
    <div id='totalCost' style='position:absolute;top:265px;left:80px;'>Total Cost $0</div>
    <img src='storageArrow.png' style='position:absolute;top:260px;left:230px;opacity:0.3;' id='storBackArrow' />
  </div>
</div>

<div class='weatherDiv' id='weatherScreen'>
</div>
  
<div class='dayDiv' id='dayScreen' style='background:#000000;opacity:0.4;'>
</div>

<span id='soundEffects' >
</span>

<b><a onclick='mobileHide()'>Show/Hide Mobile Controls</a></b><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<p style='font-size:14px;font-family:Verdana;'>
<br /><br />
For more information visit the game's <a href='documentation/index.php'>Documentation</a>.
<br /><br />
<b>GENERAL CONTROLS</b><br />
Movement = WASD<br />
Switch Selected Item = Q<br />
Place Current Object = R<br />
Use Selected Tool = Spacebar<br />
Interact With Object or NPC = E<br />
Remove Object = G<br />
<br />
<b>STORAGE CONTROLS</b><br />
Navigate Storage = WS<br />
Move object Into/Out of Storage = AD<br />
Switch Storage Focus = R<br />
Close Storage = E<br /><br />
Some Non Player Character Sprites made by Marvelous Interactive for Nintendo<br />
All other art and assets made by Tavarin Web Design
</p>
<div id='currCoordinates'></div>
</body>
</html>

<script type='text/javascript'>
  var loadBarFront = document.getElementById('loadBarFront');
  var loadBarBack = document.getElementById('loadBarBack');
  var loadBarImage = document.getElementById('loadBarImage');

  var clock = document.getElementById('clock');
  var money = document.getElementById('money');
  var messageBox = document.getElementById('messageDiv');
  
  var backScreen = document.getElementById('backScreen');
  var floorScreen = document.getElementById('floorScreen');
  var wallScreen = document.getElementById('wallScreen');
  var objectScreen = document.getElementById('objectScreen');
  var npcScreen = document.getElementById('npcScreen');
  var weatherScreen = document.getElementById('weatherScreen');
  var dayScreen = document.getElementById('dayScreen');
  
  var player = document.getElementById('player');
  var currentItem = document.getElementById('currentItem');
  var equipItem = document.getElementById('equipItem');
  var itemNumbers = document.getElementById('itemNumbers');
  var weightNumber = document.getElementById('weightNumber');
  var tool = document.getElementById('tool');
  var soundEffects = document.getElementById('soundEffects');
  
  var storeDiv = document.getElementById('storeDiv');
  var storBackDiv = document.getElementById('storBackInner');
  var storDiv = document.getElementById('storInner');
  
  var sleepBar = document.getElementById('sleepBar');
  var bathroomBar = document.getElementById('bathroomBar');
  var showerBar = document.getElementById('showerBar');
  
  var currCoordinates = document.getElementById('currCoordinates');
</script>