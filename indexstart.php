<?php
?>

<!DOCTYPE HTML>
<html lang="EN">
    <head>
        <title>StarCraft</title>
        <meta charset="UTF-8"/>
        <meta name="keywords" content="starcraft,html5,game,starcraft html5,starcraft online,starcraft web"/>
        <meta name="description" content="HTML5 version of StarCraft game"/>
        <meta name="author" content="Ryuta Gloomyson"/>
		<meta http-equiv="Clear-Site-Data: '*'"/>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/mapStyle.css" />
        <link rel="stylesheet" href="css/buttonStyle.css" />
        <link rel="stylesheet" href="css/portraitStyle.css" />
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body>


        <div id="GameLoading" class="GameLayer">
            <div class="LoadingDiv">
                <div class="LoadingMsg">Now Loading...</div>
                <div class="LoadingBlock">
                    <div class="LoadedBlock"></div>
                </div>
            </div>
        </div>
        <div id="GameStart" class="GameLayer">
		
            <div class="levelSelectionBg">
			<center><input type="button" onclick="location.href='index.php';" value="Go to Homepage" />  <input type="button" onclick="location.href='manual.php';" value="Description" /> <input type="button" onclick="location.href='https://google.com';" value="Exit Web-Game" /></center>
			<h3><span> <font color="white">&nbsp;SELECT NUMBER GAME START!&nbsp;</font> </span></h3>
</div>
        </div>
        <div id="GamePlay" class="GameLayer" race="Terran">
            <canvas id="backCanvas"></canvas>
            <canvas id="middleCanvas"></canvas>
            <canvas id="frontCanvas"></canvas>
            <canvas id="fogCanvas"></canvas>
            <div class="panel_Map">
                <canvas name="mini_map" width="130" height="130"></canvas>
            </div>
            <div class="panel_Info">
                <div class="infoLeft">
                    <div name="portrait"></div>
                    <div id="HP_SP">
                        <span class="_Shield"><span class="shield"></span>/<span class="SP"></span></span> <span class="_Health"><span class="life"></span>/<span class="HP"></span></span>
                    </div>
                    <div id="MP">
                        <span class="_Magic"><span class="magic"></span>/<span class="MP"></span></span>
                    </div>
                </div>
                <div class="infoCenter">
                    <font color="green"><h3 class="name"></h3></font>
                    <p class="detector">Detector</p>
                    <p class="kill">Kill:<span></span></p>
                    <p class="damage">Damage:<span></span></p>
                    <p class="armor">Armor:<span></span></p>
                    <p class="plasma">Plasma:<span></span></p>
                    <p class="passenger">Passenger:<span></span></p>
                    <p class="icons"></p>
                </div>
                <div class="infoRight">
                    <div class="upgraded">
                        Upgraded:
                        <div name="icon"></div>
                        <div name="icon"></div>
                        <div name="icon"></div>
                    </div>
                    <div class="upgrading">
                        <div name="icon"></div>
                        <div name="processing">
                            <span></span>%<br>
                            <div class="processBar">
                                <div class="processedBar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="override">
                    <div class="multiSelection"><div name="portrait" class="Lurker"></div></div>
                </div>
            </div>
            <div class="panel_Control"></div>
            <div class="warning_Box"></div>
            <div id="cheat_Box">
                Message: <input type="text" id="cheatInput" />
            </div>
            <div class="message_Box"></div>
            <div class="resource_Box">
                <div class="mine"></div>
                <span class="mineNum"></span>
                <div class="gas"></div>
                <span class="gasNum"></span>
                <div class="man"></div>
                <span class="manNum"><span></span>/<span></span></span>
            </div>
            <div class="tooltip_Box">
                <div class="itemName"></div>
                <div class="cost">
                    <div class="mine"></div>
                    <span class="mineNum"></span>
                    <div class="gas"></div>
                    <span class="gasNum"></span>
                    <div class="man"></div>
                    <span class="manNum"></span>
                    <div class="magic"></div>
                    <span class="magicNum"></span>
                </div>
            </div>
        </div>
        <div id="GameWin" class="GameLayer"></br></br><center><input type="button" onclick="location.href='index.php';" value="Go to Select Game Levels" /> <input type="button" onclick="location.href='https://google.com';" value="Exit Web-game" /></center></div>
        <div id="GameLose" class="GameLayer"></br></br><center><input type="button" onclick="location.href='index.php';" value="Go to Select Game Levels" /> <input type="button" onclick="location.href='https://google.com';" value="Exit Web-game" /></center></div>

        <script src="Utils/jquery.min.js"></script>
        <script src="Utils/gFrame.js"></script>
        <script src="Utils/sourceLoader.js"></script>
        <script src="Characters/Gobj.js"></script>
        <script src="Characters/Burst.js"></script>
        <script src="Characters/Animation.js"></script>
        <script src="Characters/Units.js"></script>
        <script src="Characters/Magic.js"></script>
        <script src="Characters/Upgrade.js"></script>
        <script src="Characters/Building.js"></script>
        <script src="Characters/Zerg.js"></script>
        <script src="Characters/Terran.js"></script>
        <script src="Characters/Protoss.js"></script>
        <script src="Characters/Neutral.js"></script>
        <script src="Characters/Hero.js"></script>
        <script src="Characters/Bullets.js"></script>
        <script src="Characters/Button.js"></script>
        <script src="Characters/Map.js"></script>
        <script src="GameRule/Multiplayer.js"></script>
        <script src="GameRule/Resource.js"></script>
        <script src="GameRule/Referee.js"></script>
        <script src="GameRule/Game.js"></script>
        <script src="GameRule/Levels.js"></script>
        <script src="GameRule/Cheat.js"></script>
        <script src="Controller/mouseController.js"></script>
        <script src="Controller/keyController.js"></script>
        <script>
		
            //########## AutoStart ##########//
            $(function(){
                Game.init();
            });
        </script>
    </body>
</html>
