<?php

/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class Player
	{
	private $arr;
	private $strHTML;
	private $strAudio;
	public function __construct($_objKIIM, $_strAudio)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strAudio=base64_encode($_strAudio);
				        unset($_strAudio);
		//$this->arr=$_arrData;
		if(!empty($this->strAudio))
			{//
			$this->strHTML=VectorKIIM_elementWaiting4Event_statisticalMembrane::strHTML($objKIIM).
			    '<ifReady
				class="block cursor no-select TC1 BC1"
				onclick="objPlayer.play(this,\''.$this->strAudio.'\');"
				style="
					/*background-color:#dddbdb;*/
					/*width		:46px;*/
					/*height	:44px;*/
					text-align	:center;
					"
				>
				<ifOverload
					style="
						display:none;
						"
					>
					<ifEN>
						<marquee>Station overloaded. Please try another or less bitrate Kbps, this stations
						  sounds with less quality but  this is situable for slower internet.</marquee>
					</ifEN>
					<ifRU>
						<marquee>Станция  перегружена. Попробуйте другую или вырырайте станцию с меньшим качеством КБит/сек, 
						но годной для более медленного интернета.</marquee>
					</ifRU>
				</ifOverload>
				<recordLabelAudioMeta
					class="block no-select"
					style="
						text-align	:center;
						width		:34px;
						height		:34px;
						margin-top	:3px;
						margin-left	:3px;
						"
					>
					<recordLabel
						class="block border"
						style="
							/*background-color: #282828;*/
							/*background-color: #FFF;*/
							/*border-radius	: 100%;*/
							width		: 32px;
							height		: 32px;
							text-align	: center;
							line-height	: 31px;
							margin		: 0;
							padding		: 0;
							"
						>
						<ifEN
							title="Play station"
							>▷
						</ifEN>
						<ifRU
							title="Нажмите чтобы начать слушать радио."
							>▷
						</ifRU>
					</recordLabel>
				</recordLabelAudioMeta>
			</ifReady>
			<ifPlaying
				class="block cursor TC1 BC1 no-select"
				onclick="objPlayer.stop();"
				style="
					/*background-color:#cbdff4;*/
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					"
				>
				<recordAudioData
					class="block no-select"
					style="
						width		:34px;
						height		:34px;
						text-align	:center;
						margin-top	:3px;
						margin-left	:3px;
						"
					>
					<recordLabel
						class="block border"
						style="
							color		:#2d90f5;
							/*background-color: #282828;*/
							/*background-color: #FFF;*/
							/*border-radius	: 100%;*/
							width		: 32px;
							height		: 32px;
							text-align	: center;
							line-height	: 31px;
							margin		: 0;
							padding		: 0;
							"
						>
						<ifEN
							title="Press to stop playing."
							>
							■
						</ifEN>
						<ifRU
							title="Нажмите чтобы остановить воспроизведение."
							>
							■
						</ifRU>
					</recordLabel>
				</recordAudioData>
			</ifPlaying>
			<ifLoadingAudio
				class="block cursor no-select"
				onclick="objPlayer.stop();"
				style="
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					color		:#000;
					background-color:#95bff2; 
					"
				>
				<recordAudioData
					class="block no-select border"
					style="
						width		:34px;
						height		:34px;
						text-align	:center;
						margin-top	:3px;
						margin-left	:3px;
						"
					>
					<recordLabel
						class="block border TC3"
						style="
							/*background-color: #282828;*/
							/*background-color: #FFF;*/
							/*border-radius	: 100%;*/
							width		: 32px;
							height		: 32px;
							text-align	: center;
							line-height	: 31px;
							margin		: 0;
							padding		: 0;
							"
						>
					</recordLabel>
				</recordAudioData>
			</ifLoadingAudio>
			<ifNoConnection
				class="block cursor TC2 BC1 no-select"
				onclick="objPlayer.play(this,\''.$this->strAudio.'\');"
				style="
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					background-color:rgba(255,255,255,0.82);
					"
				>
				<ifEN>
					<marquee>This  station is currently offline. Please try another one.</marquee>
				</ifEN>
				<ifRU>
					<marquee>"Эта радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. 
					Пока станция недоступна, попробуйте послушать другую.</marquee>
				</ifRU>
			</ifNoConnection>';
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_strAudio)
		{
		$objShader=new Player($_objKIIM, $_strAudio);
		return $objShader->strHTML;
		}
	public static function strIndicatorTop()
		{
		//Новый год  🎄🎅
		//✰✰
		//★
		//🌠
		$str='
		<playerControlAlwaysVisible
			id	="playerControlAlwaysVisible"
			class	="left no-select BC2"
			style	="
				text-align	:left;
				width		:20px;
				height		:100%;
				margin-right	:1px;
				"
			>'.
			'
			<ifReady
				class	="abs V99 block cursor BC1 TC1 layer_2_2 select scrollerY"
				style	="
					text-align	:left;
					Width		:100vw;
					height		:40px;
					"
				>
				<Hfic_Samin
					class="block right"
					style="
						top		:0;
						right		:0;
						width		:40px;
						height		:100%;
						"
					>
					<image
						title="Hfic: Is there any hifi sound can i hear?" 
						src="/Hfic_Samin.jpg" 
						class="block right" 
						style="
							height:100%;
							"
					/>
				</Hfic_Samin>
				<ifRU>
					<paragraph></paragraph>Приветствуем вас в HiFiIntelligentClub. Для безопасного использования, без HTTPS, мы стартовали 
					наше приложение в сети onion. Тестируем периодически уже сейчас. 
					Скоро запустим в стабильную работу. Onion сервер - это более защищённая версия сайта и приложения, 
					чем http версия.<br/>
					<b>Hfic Samin, HiFi Intelligent Club президент.</b>
				</ifRU>
				<ifEN>
					<paragraph></paragraph>Hello dear listener of HiFiIntelligentClub. To secure your data we are configuring and
					testing onion secure radio service. Some times it is avaliable online. We will inform about
					more stable version.<br/>
					<b>Hfic Samin, HiFi Intelligent Club president.</b>
				</ifEN>
			</ifReady>
			<ifOverload
				class	="abs"
				style	="
					display		:none;
					top		:20px;
					left		:0px;
					width		:100vw;
					height		:20px;
					line-height	:20px;
					color		:#fff;
					background-color:red;
					"
				>
				<ifEN>
					<marquee>This station rejects playing. May be this station is overload or your internet connection is not enoght. Can\'t stay connected. You can try to listen another station</marquee>
				</ifEN>
				<ifRU>
					<marquee>Не получается подключиться к выбранной радиостанции. Возможно станция перегружена или интернет канал слишком мал, чтобы воспроизводить выбранную станцию. Вы можете попробовать выбрать другую радиостанцию.</marquee>
				</ifRU>
			</ifOverload>
			<ifLoadingAudio
				class	="block cursor layer_2_2 no-select"
				onclick	="objPlayer.stop();"
				style	="
					display		:none;
					height		:20px;
					line-height	:20px;
					text-align	:center;
					color		:#000;
					background-color:yellow;
					"
				>
				<ifRU 
					title	="Для отмены загрузки радио станции нажмите."
					>
					☒
				</ifRU>
				<ifEN
					title	="To stop loading this audio stream just press."
					>
					☒
				</ifEN>
			</ifLoadingAudio>
			<ifLoadingAudio

				class	="abs cursor TC3 layer_2_2 no-select"
				style	="
					display		:none;
					top		:20px;
					left		:0px;
					width		:100vw;
					height		:40px;
					text-align	:center;
					line-height	:20px;
					background-color:yellow;
					"
				>
				<playerLoadingButton
					class	="block left BLJ TC3 BC3"
					id	="playerControlAlwaysVisibleLoading"
					onclick	="objPlayer.stop();"
					style	="
						text-align	:center;
						height		:100%;
						width		:19%;
						line-height	:38px;
						font-size	:x-large;
						"
					>
					<ifRU
						title="Нажмите чтобы отменить подключение"
						>
						☒
					</ifRU>
					<ifEN
						title="Press to stop connecting"
						>
						☒
					</ifEN>
				</playerLoadingButton>
				<playerLoadingText
					id	="playerControlAlwaysVisibleLoadingText"
					class="block left scrollerY TC1"
					style	="
						height		:100%;
						width		:60%;
						"
					>
					<ifRU>
						Подключаюсь к радиостанции...
					</ifRU>
					<ifEN>
						Connecting to radiostation.... 
					</ifEN>
				</playerLoadingText>
				<playerLoadingStat
					id	="playerControlAlwaysVisibleLoadingStat"
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:center;
						height		:100%;
						width		:19%;
						line-height	:38px;
						"
					>
					
				</playerLoadingStat>
			</ifLoadingAudio>
			<ifPlaying
				class="block cursor layer_2_2 no-select TC3"
				onclick	="objPlayer.stop();"
				style	="
					display		:none;
					height		:20px;
					line-height	:21px;
					text-align	:center;
					background-color:#2d90f5;
					"
				>'.
				//PlayerEventIndicator::strHTML(). Osciloscope - disabled temporary
				'<ifRU 
					title="Для остановки воспроизведения нажмите."
					>
					■
				</ifRU>
				<ifEN
					title="To stop plaing this audio stream just press."
					>
					■
				</ifEN>
			</ifPlaying>
			<ifPlaying
				class	="abs cursor layer_2_2 select TC3"
				style	="
					display		:none;
					top		:20px;
					left		:0;
					width		:100vw;
					height		:40px;
					text-align	:left;
					background-color:#2d90f5;
					"
				>
				<playerPlayingButton
					class	="block left border-left TC3 BC3"
					onclick	="objPlayer.stop();"
					style="
						text-align	:center;
						height		:100%;
						width		:19%;
						line-height	:38px;
						"
					>
					■
				</playerPlayingButton>
				<playerPlayingText
					id	="playerControlAlwaysVisiblePlaying"
					class	="block left scrollerY"
					onclick	=""
					style="
						height		:100%;
						width		:60%;
						"
					>
				</playerPlayingText>
				<playerPlayButtonStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:center;
						height		:100%;
						width		:19%;
						line-height	:38px;
						"
					>
					
				</playerPlayButtonStat>
			</ifPlaying>
			<ifNoConnection
				class	="cursor layer_2_2 no-select BC1 TC1"
				onclick	="objPlayer.objAudio.play();"
				style	="
					display		:none;
					color		:#000;
					height		:40px;
					text-align	:center;
					"
				>⚠
			</ifNoConnection>
			<ifNoConnection
				class	="abs cursor layer_2_2 no-select BC1 TC1"
				onclick	="objPlayer.objAudio.play();"
				style	="
					display		:none;
					width		:100vw;
					height		:40px;
					top		:20px;
					left		:0px;
					text-align	:center;
					"
				>
				<ifRU>
					<marquee>Радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. 
					Попробуйте выбрать выбрать другую радиостанцию из списка.</marquee>
				</ifRU>
				<ifEN>
					<marquee>This station is currently offline. Please chose another station from station\'s list.</marquee>
				</ifEN>
			</ifNoConnection>
			<ifStopped
				class	="block cursor layer_2_2 BC1 no-select "
				onclick	="
					var objPlayerIndicatorMembrane			=this.nextElementSibling;
					objPlayer.objAudio.src				=b64clr(objPlayerIndicatorMembrane.getAttribute(\'playerId\'));
					objPlayer.objAudio.play();
					"
				style	="
					display		:none;
					height		:20px;
					text-align	:center;
					line-height	:19px;
					background-color:green;
					"
				>'.
				//PlayerEventIndicator::strHTML(). Osciloscope - disabled temporary
				'
				▷
			</ifStopped>
			<ifStopped
				class	="abs cursor layer_2_2 BC1 select"
				style	="
					display		:none;
					left		:0;
					top		:20px;
					width		:100vw;
					height		:40px;
					line-height	:21px;
					text-align	:center;
					color		:#777;
					"
				>
				<playerPlayButton
					class	="block left BLL TC3 BC3"
					onclick	="
						objPlayer.objAudio.src			=b64clr(this.getAttribute(\'playerId\'));
						objPlayer.objAudio.play();
						"
					style	="
						text-align	:center;
						height		:100%;
						width		:19%;
						line-height	:38px;
						"
					>
					▷
				</playerPlayButton>
				<playerPlayText
					id	="playerControlAlwaysVisibleStopped"
					class	="block left scrollerY"
					style	="
						height		:100%;
						width		:80%;
						"
					>
				</playerPlayText>
			</ifStopped>
		</playerControlAlwaysVisible>
		';
		$str.=Player::strInitJs();
		return $str;
		}
	public static function strInitJs()
		{
		$str='
		<script>
			console.log(\'[V]EDRO.Objects.Player: Init Player\');

			var objPlayer=new Player();
			
			console.log(\'[.]EDRO.Objects.Player: Init Player\');
		</script>
		';
		return $str;
		}
	public static function _DeclareJs()
		{
		?>
		<script>
		console.log('[V]EDRO.Objects.Player: Declare Player');
		class Player
			{
			constructor()
				{
				console.log('[Vv]EDRO.Objects.Player: Player.constructor()');

				this.objAudio			=document.createElement('audio');
				this.objStation			='';
				this.strCurrentID		='';
				this.strPlayingID		='';
				this.strStationName		='';
				this.objAudio.crossorigin	="use-credentials";
				this.objVisibleControls		=document.getElementById('playerControlAlwaysVisible');
				this.objVisibleControlsStat	=document.getElementById('playerControlAlwaysVisibleLoadingStat');
				this.objVisibleControlsText	=document.getElementById('playerControlAlwaysVisibleLoadingText');
				this.objVisibleControlsLoading	=document.getElementById('playerControlAlwaysVisibleLoading');
				this.objVisibleControlsPlaying	=document.getElementById('playerControlAlwaysVisiblePlaying');
				this.objVisibleControlsStopped	=document.getElementById('playerControlAlwaysVisibleStopped');
				this.objDebugString		=document.getElementById('strPlayerPlayEventsDebugString');
				this.objCurrentBlock;
				this.objPlayingBlock;
				this.bIzWhileHumanEvent		=false;
				this.bIzPlayedOnceEvent		=false;
				this.bIzNeedToBeStoppedEvent	=false;
				this.bIzWeThinkPlayerIsPlaying	=false;
				//this.objDebugString.innerHTML	='objPlayer.objAudio.construct<br/>';
				this.objAudio.onloadstart	=function()
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onloadstart<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onLoadStart');
					//console.log(objPlayer.objAudio.readyState);
					//console.log(objPlayer.objStation);
					objKIIM_StatisticalMembrane._start(objPlayer.objStation);
					//objKIIM_StatisticalMembrane._incTime();
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');
					objPlayer.objVisibleControls.className	+=' loadingAudio';

					objPlayer.objCurrentBlock.classList.remove('loadingAudio');
					objPlayer.objCurrentBlock.classList.remove('playing');
					objPlayer.objCurrentBlock.classList.remove('errorAudio');
					objPlayer.objCurrentBlock.classList.remove('overload');
					objPlayer.objCurrentBlock.className	+=' loadingAudio';

					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onloadstart .bIzWhileHumanEvent=false;<br/>';
					objPlayer.bIzWhileHumanEvent=false;
					console.log('[...]EDRO.Objects.Player: onLoadStart');
					}
				this.objAudio.onwaiting		=function()
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onWaiting<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onWaiting()');
					console.log('[Vvv]EDRO.Objects.Player: objAudio.Load()');
					objPlayer.objAudio.load();
					console.log('[Vvv]EDRO.Objects.Player: AFTER:objAudio.Load()');
					objPlayer.bIzWhileHumanEvent=false;
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onWaiting .bIzWhileHumanEvent=false;<br/>';
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onWaiting()');
					}
				this.objAudio.oncanplay		=function()
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplay<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onCanPlay()');

					console.log('[Vvv]EDRO.Objects.Player: objAudio.play()');
					objPlayer.objAudio.play();
					console.log('[Vvv]EDRO.Objects.Player: AFTER:objAudio.play()');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplay .bIzWhileHumanEvent=false;<br/>';
					//this.bIzWeThinkPlayerIsPlaying	=true;
					objPlayer.bIzWhileHumanEvent	=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: objAudio.play()');
					}
				this.objAudio.oncanplaythrough	=function()
					{
					console.log('[Vvv]EDRO.Objects.Player: onCanPlayThrough()');
					console.log('[Vvv]EDRO.Objects.Player: objAudio.play()');
					objPlayer.objAudio.play();
					console.log('[Vvv]EDRO.Objects.Player: AFTER:objAudio.play()');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplaythrough .bIzWhileHumanEvent=false;<br/>';
					//this.bIzWeThinkPlayerIsPlaying	=true;
					objPlayer.bIzWhileHumanEvent	=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onCanPlayThrough()');
					}
				this.objAudio.onplaying		=function()
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPlaying<br/>';
					console.log('[Vvv]EDRO.Objects.Player: onPlaying()');
					this.bIzWeThinkPlayerIsPlaying		=true;
					console.log('[Vvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=true');
					objKIIM_StatisticalMembrane._stop();
					//objPlayer.bIzPlayedOnceEvent		=true; //New - 30.08.2020
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.className	+=' playing';

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						console.log('[Vvvv]EDRO.Objects.Player: objCurrentBlock+Playing');
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.className	+=' playing';
						console.log('[....]EDRO.Objects.Player: objCurrentBlock+Playing');
						}
					console.log('[...]EDRO.Objects.Player: onPlaying()');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPlaying bIzWhileHumanEvent=false<br/>';
					objPlayer.bIzWhileHumanEvent=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onPlaying()');
					}
				this.objAudio.onended		=function()
					{
					console.log('[Vvv]EDRO.Objects.Player: onEnded()');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onEnded bIzWhileHumanEvent=false<br/>';










					console.log('[Vvv]EDRO.Objects.Player: objAudio.load()');
					objPlayer.objAudio.load(); //++ New - 30.08.2020
					console.log('[Vvv]EDRO.Objects.Player: AFTER:objAudio.load()');
					console.log('[...]EDRO.Objects.Player: onEnded()');
					}
				this.objAudio.onpause		=function()
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause start-><br/>';
					console.log('[Vvv]EDRO.Objects.Player: onPause()');
					//console.log(objPlayer.objAudio);
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						console.log('[Vvvv]EDRO.Objects.Player: objCurrentBlock');
						//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause currentBlock-><br/>';
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.classList.remove('playing');
						objPlayer.objCurrentBlock.classList.remove('errorAudio');
						if(objPlayer.bIzWhileHumanEvent==false)
							{
							console.log('[Vvvvv]EDRO.Objects.Player: objCurrentBlock');
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause currentBlock->bIzWhileHumanEvent==false<br/>';
							/*if(objPlayer.bIzPlayedOnceEvent)
								{
								//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause currentBlock-><br/>';
								//objPlayer.objDebugString.innerHTML+='bIzWhileHumanEvent==false->objPlayer.bIzPlayedOnceEvent<br/>';
								console.log('[=!]EDRO: Stop playing. Audio was playing, but we got unnormal stop event. We need to resume playing ');
								}*/
							objPlayer.objVisibleControls.className	+=' overload';
							objPlayer.objCurrentBlock.className	+=' overload';
							//objPlayer.objAudio.load();

							
							console.log('[Vvvvv]EDRO.Objects.Player: load()');
							objPlayer.objAudio.load();
							console.log('[Vvvvv]EDRO.Objects.Player: AFTER:load()');
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause-><br/>';
							//objPlayer.objDebugString.innerHTML+='objPlayer.bIzWhileHumanEvent->objPlayer.objAudio.load();<br/>';
							//objPlayer.objAudio.play();
							//objPlayer.play();
							console.log('[.....]EDRO.Objects.Player: objCurrentBlock');
							}
						else //isHumanEvent
							{
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause->objPlayer.!bIzWhileHumanEvent->objPlayer.src drop;<br/>';
							console.log('[Vvvvv]EDRO.Objects.Player: !objCurrentBlock(Stop)');
							this.bIzWeThinkPlayerIsPlaying		=false;
							console.log('[Vvvvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=false');
							objPlayer.bIzNeedToBeStoppedEvent	=true;
							console.log('[Vvvvv]EDRO.Objects.Player: .bIzNeedToBeStoppedEvent=true');
							objPlayer.objAudio.src			='';
							console.log('[Vvvvv]EDRO.Objects.Player: ZzzuzzZ real stop patch 2009, progressed by assminog to total stop event 2020.');
							objPlayer.objVisibleControls.className	+=' stopped';
							console.log('[.....]EDRO.Objects.Player: !objCurrentBlock(Stop)');
							}
						console.log('[....]EDRO.Objects.Player: objCurrentBlock');
						}
					
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause end start->objPlayer.bIzWhileOnHumanEvent=false<br/>';
					objPlayer.bIzWhileOnHumanEvent=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileOnHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onPause()');
					}
				this.objAudio.onerror		=function()
					{
					console.log('[Vvv]EDRO.Objects.Player: onError');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError start-><br/>';
					
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objKIIM_StatisticalMembrane._stop()-><br/>';
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('overload');
					

					objPlayer.objPlayingBlock		=document.getElementById(objPlayer.strPlayingID);
					if(objPlayer.objPlayingBlock)
						{
						console.log('[Vvvv]EDRO.Objects.Player: objPlayingBlock');
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.classList.remove('overload');

						if(objPlayer.bIzNeedToBeStoppedEvent)
							{
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objPlayer.objPlayingBlock<br/>';
							//objPlayer.objDebugString.innerHTML+='objPlayer.bIzNeedToBeStoppedEvent=true-><br/>';
							console.log('[Vvvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent?');
							objPlayer.objPlayingBlock.classList.remove('errorAudio');
							objPlayer.objVisibleControls.className	+=' stopped';
							objKIIM_StatisticalMembrane._stop();
							objPlayer.bIzNeedToBeStoppedEvent	=false;
							console.log('[Vvvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=false');
							this.bIzWeThinkPlayerIsPlaying		=false;
							console.log('[Vvvvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=false');
							console.log('[=====]EDRO.Objects.Player: bIzNeedToBeStoppedEvent?');
							return true;
							}
						else
							{
							//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objPlayer.objPlayingBlock<br/>';
							//objPlayer.objDebugString.innerHTML+='objPlayer.bIzNeedToBeStoppedEvent=false-><br/>';
							console.log('[Vvvvv]EDRO.Objects.Player: !bIzNeedToBeStoppedEvent?');
							objPlayer.objPlayingBlock.className	+=' errorAudio';
							console.log('[.....]EDRO.Objects.Player: !bIzNeedToBeStoppedEvent?');
							//objKIIM_StatisticalMembrane._error();
							}
						console.log('[....]EDRO.Objects.Player: objPlayingBlock');
						}
					if(objPlayer.bIzNeedToBeStoppedEvent)
						{
						console.log('[Vvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent?');
						objPlayer.objVisibleControls.classList.remove('errorAudio');
						objPlayer.bIzNeedToBeStoppedEvent	=false;
						console.log('[Vvvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=false');
						this.bIzWeThinkPlayerIsPlaying		=false;
						console.log('[Vvvv]EDRO.Objects.Player: bIzWeThinkPlayerIsPlaying=false');
						//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError<br/>';
						//objPlayer.objDebugString.innerHTML+='objPlayer.bIzNeedToBeStoppedEvent=false; was true flag-><br/>';
						objKIIM_StatisticalMembrane._stop();
						console.log('[====]EDRO.Objects.Player: bIzNeedToBeStoppedEvent?');
						return true;
						}

					objKIIM_StatisticalMembrane._error();
					objPlayer.objVisibleControls.className	+=' errorAudio';
					console.log('[Vvv]EDRO.Objects.Player: objPlayingBlock.setError+');
					/*
					if(objPlayer.bIzPlayedOnceEvent)  //New - 30.08.2020
						{
						console.log('[=!^x]EDRO: Finish get Player.error(). Error is unfixable.');
						console.log('[=!^v]EDRO: Audio was playing, but connection was lost. Trying to fix connction error autoatically.');

						//console.log('EDRO: Run Player.webAudio.api.pause().');
						//objPlayer.objAudio.pause();

						console.log('[=^v+]EDRO: Run Player.webAudio.api.load(). Trying to resume. ');
						//?objPlayer.objAudio.load();
						//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError bIzPlayedOnce><br/>';
						//objPlayer.objDebugString.innerHTML+='Event=true flag objPlayer.objAudio.load()-><br/>';
						}
					*/

					objPlayer.bIzWhileOnHumanEvent=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileOnHumanEvent=false');
					objPlayer.objAudio.load();
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError dropHumanEvent flag->';
					//objKIIM_StatisticalMembrane._stop();
					objPlayer.bIzWhileOnHumanEvent=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileOnHumanEvent=false');
					console.log('[...]EDRO.Objects.Player: onError');
					}
				this.objAudio.onstalled		=function()
					{
					console.log('[Vvv]EDRO.Objects.Player: objAudio.onstalled');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onStalled<br/><br/>';
					objPlayer.bIzWhileHumanEvent	=false; //+ new!  30.08.2020
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					//objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onStalled-> .load()<br/>';
					objKIIM_StatisticalMembrane._error();
					objPlayer.objAudio.load();
					console.log('[...]EDRO.Objects.Player: objAudio.onstalled');
					}
				this.objAudio.onabort		=function() //Abort is allowed in Russia. But we disallow abort. Abort is a murder death kill! Hfic Samin.
					{
					console.log('[Vvv]EDRO.Objects.Player: onAbort');
					objKIIM_StatisticalMembrane._error();
					objPlayer.bIzWhileHumanEvent		=false;
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					objPlayer.bIzNeedToBeStoppedEvent	=true;
					console.log('[Vvv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=true');
					//objPlayer.objAudio.pause();  //+ new!  30.08.2020
					////objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onAbort dropHumanEvent flag->';
					console.log('[...]EDRO.Objects.Player: onAbort');
					}
				this.objAudio.onsuspend		=function()
					{
					console.log('[Vvv]EDRO.Objects.Player: onSspend');
					//objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onSuspend<br/>'; //drop 
					objPlayer.bIzWhileHumanEvent	=false; //+ new!  30.08.2020
					console.log('[Vvv]EDRO.Objects.Player: bIzWhileHumanEvent=false');
					//objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onSuspend-> .huy()<br/>'; //drop log
					objPlayer.objAudio.play();
					console.log('[...]EDRO.Objects.Player: onSspend');
					}
				console.log('[..]EDRO.Objects.Player: Player.constructor()');
				}
			play(obj, strAudio)
				{
				console.log('[Vv]EDRO.Objects.Player: play()');
				//objPlayer.objDebugString.innerHTML+='objPlayer.Play-><br/>';
				objPlayer.objVisibleControlsPlaying.innerHTML='';
				console.log('[Vv]EDRO.Objects.Player: clear.Indicator.Playing');
				objPlayer.bIzWhileHumanEvent	=true;
				console.log('[Vv]EDRO.Objects.Player: bIzWhileHumanEvent=true');
				objPlayer.bIzPlayedOnceEvent	=false;
				console.log('[Vv]EDRO.Objects.Player: bIzPlayedOnceEvent=false');

				if(objPlayer.strPlayingID!=false)
					{
					console.log('[Vvv]EDRO.Objects.Player: strPlayingID!=false');
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');


					objPlayer.objPlayingBlock	=document.getElementById(objPlayer.strPlayingID);
					console.log('[Vvv]EDRO.Objects.Player: reload.objPlayer');
					if(objPlayer.objPlayingBlock)
						{
						console.log('[Vvvv]EDRO.Objects.Player: reload.objPlayingBlock?');
						objPlayer.objPlayingBlock.classList.remove('overload');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('errorAudio');
						console.log('[....]EDRO.Objects.Player: reload.objPlayingBlock?');
						}
					console.log('[...]EDRO.Objects.Player: strPlayingID!=false');
					}

				objPlayer.objVisibleControls.className	+=' loadingAudio';
				console.log('[Vv]EDRO.Objects.Player: +loadingAudio');
				//objPlayer.objCurrentBlock		=obj.parentNode.parentNode;
				if(typeof(obj)=='object')
					{
					console.log('[Vvv]EDRO.Objects.Player: obj==object?');
					objPlayer.objStation			=obj.parentNode.parentNode.parentNode;
					objPlayer.strCurrentID			=objPlayer.objStation.id;
					objPlayer.objAudio.src			=b64clr(strAudio);
					console.log('[...]EDRO.Objects.Player: obj==object?');
					}
				objPlayer.objCurrentBlock			=document.getElementById(objPlayer.strCurrentID);
				console.log('[Vv]EDRO.Objects.Player: loadCurrentBlock by objPlayer.strCurrentID');
				objPlayer.strStationName			=objPlayer.objCurrentBlock.getElementsByTagName('strScrolling')[0].innerHTML;
				objPlayer.objVisibleControlsPlaying.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.setAttribute('playerId', strAudio);

				objPlayer.objCurrentBlock.className		+=' loadingAudio';
				console.log('[Vv]EDRO.Objects.Player: +loadingAudio');
				objPlayer.strPlayingID				=objPlayer.strCurrentID;
				console.log('[Vv]EDRO.Objects.Player: Current>>Playing');
				objPlayer.bIzWhileHumanEvent			=false;
				console.log('[Vv]EDRO.Objects.Player: .bIzWhileHumanEvent=false');
				objPlayer.objAudio.load();

				console.log('[..]EDRO.Objects.Player: play()');
				}
			stop(strIsHumanOr='Unknown')
				{
				console.log('[Vv]EDRO.Objects.Player: stop()');
				//objPlayer.objDebugString.innerHTML+='objPlayer.Stop-><br/>';
				objPlayer.bIzWhileHumanEvent		=true;
				console.log('[Vv]EDRO.Objects.Player: bIzWhileHumanEvent=true');
				objPlayer.bIzPlayedOnceEvent		=false;
				console.log('[Vv]EDRO.Objects.Player: bIzPlayedOnceEvent=false');
				objPlayer.bIzNeedToBeStoppedEvent	=true;
				console.log('[Vv]EDRO.Objects.Player: bIzNeedToBeStoppedEvent=true');

				console.log('[Vv]EDRO.Objects.Player: BEFORE:pause()');
				objPlayer.objAudio.pause();
				console.log('[V]EDRO.Objects.Player: AFTER:pause()');
				objPlayer.objAudio.src			='';
				console.log('[Vv]EDRO.Objects.Player: ZzzuzzZ real stop patch 2009, progressed by assminog to total stop event 2020.');
				console.log('[..]EDRO.Objects.Player: stop()');
				}
			updateOnReload()
				{
				console.log('[Vv]EDRO.Objects.Player: updateOnReload()');
				//objPlayer.objDebugString.innerHTML+='objPlayer.updateOnReload-><br/>';
				if(objPlayer.objVisibleControls.classList.contains('playing'))
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer. has playing flag-><br/>';
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						//objPlayer.objDebugString.innerHTML+='objPlayer. is current block-><br/>';
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					}
				if(objPlayer.objVisibleControls.classList.contains('loadingAudio'))
					{
					//objPlayer.objDebugString.innerHTML+='objPlayer. has loadingAudio block-><br/>';
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						//objPlayer.objDebugString.innerHTML+='objPlayer. adding loadingAudio flag to current block-><br/>';
						objPlayer.objCurrentBlock.className	+=' loadingAudio';
						}
					}
				console.log('[..]EDRO.Objects.Player: updateOnReload()');
				}
			keepCurrentState()
				{
				console.log('[Vv]EDRO.Objects.Player: keepCurrentState()');
				console.log('[..]EDRO.Objects.Player: keepCurrentState()');
				}
			}
		</script>
		console.log('[.]EDRO.Objects.Player: Declare Player');
		<?php
		}
	}
?>