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
			{
			$this->strHTML='
			<ifReady
				class="block cursor no-select"
				onclick="objPlayer.play(this,\''.$this->strAudio.'\');"
				style="
					width		:46px;
					height		:44px;
					text-align	:center;
					color		:#FFF;
					/*background-color:#dddbdb;*/
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
						width		:42px;
						height		:42px;
						margin-top	:1px;
						margin-left	:1px;
						"
					>
					<recordLabel
						class="block border"
						style="
							/*background-color: #282828;*/
							/*background-color: #FFF;*/
							/*border-radius	: 100%;*/
							width		: 38px;
							height		: 38px;
							text-align	: center;
							line-height	: 36px;
							margin		: auto;
							margin-top	: 1px;
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
				class="block cursor no-select"
				onclick="objPlayer.stop();"
				style="
					color		:#FFF;
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					/*background-color:#cbdff4;*/
					"
				>
				<recordAudioData
					class="block no-select"
					style="
						text-align	:center;
						width		:42px;
						height		:42px;
						margin-top	:1px;
						margin-left	:1px;
						"
					>
					<recordLabel
						class="block border"
						style="
							/*color		: #000;*/
							/*background-color: #282828;*/
							/*background-color: #FFF;*/
							/*border-radius	: 100%;*/
							width		: 38px;
							height		: 38px;
							line-height	: 36px;
							margin		: auto;
							margin-top	: 1px;
							padding		: 0;
							"
						>
						<ifEN
							title="Press to stop playing."
							>
							□
						</ifEN>
						<ifRU
							title="Нажмите чтобы остановить воспроизведение."
							>
							□
						</ifRU>
					</recordLabel>
				</recordAudioData>
			</ifPlaying>
			<ifLoadingAudio
				class="block cursor no-select"
				onclick="objPlayer.stop();"
				style="
					color		:#000;
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					background-color:#95bff2; 
					"
				>
				<recordAudioData
					class="block no-select border"
					style="
						text-align	:center;
						width		:42px;
						height		:42px;
						margin-top	:1px;
						margin-left	:1px;
						"
					>
					<recordLabel
						class="block border"
						style="
							color		: #000;
							/*background-color: #282828;*/
							background-color: #FFF;
							/*border-radius	: 100%;*/
							width		: 38px;
							height		: 38px;
							line-height	: 36px;
							margin		: auto;
							margin-top	: 1px;
							padding		: 0;
							"
						>'.
						VectorKIIM_elementWaiting4Event_statisticalMembrane::strHTML($objKIIM);
					'</recordLabel>
				</recordAudioData>
			</ifLoadingAudio>

			<ifNoConnection
				class="block cursor no-select"
				onclick="objPlayer.play(this,\''.$this->strAudio.'\');"
				style="
					color		:#000;
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
			id="playerControlAlwaysVisible"
			class="left border-left border-right border-bottom no-select"
			style="	
				text-align	:center;
				height		:100%;
				width		:20px;
				background-color:#e3e3e3;
				margin-right	:1px;
			"
			>'.
			'<ifOverload
				class	="abs"
				style="
					display		:none;
					color		:#fff;
					background-color:red;
					height		:20px;
					line-height	:20px;
					width		:100vw;
					top		:20px;
					left		:0px;
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
				class="block cursor layer_3_2 no-select"
				onclick="objPlayer.stop();"
				style="
					height		:20px;
					line-height	:20px;
					text-align	:center;
					display		:none;
					color		:#000;
					background-color:yellow;
					"
				>
				<ifRU 
					title="Для отмены загрузки радио станции нажмите."
					>
					☒
				</ifRU>
				<ifEN
					title="To stop loading this audio stream just press."
					>
					☒
				</ifEN>
			</ifLoadingAudio>
			<ifLoadingAudio
				class="abs cursor layer_3_2 no-select"
				onclick="objPlayer.stop();"
				style="
					left		:0px;
					top		:20px;
					width		:100vw;
					height		:40px;
					line-height	:20px;
					text-align	:center;
					display		:none;
					background-color:yellow;
					"
				>
				<ifRU>
					Подключаюсь к радиостанции.... Нажмите чтобы отменить загрузку.
				</ifRU>
				<ifEN>
					Loading.... Press to stop.
				</ifEN>
			</ifLoadingAudio>
			<ifPlaying
				class="block cursor layer_3_2 no-select"
				onclick="objPlayer.stop();"
				style="
					color		:#fff;
					display		:none;
					height		:20px;
					line-height	:21px;
					text-align	:center;
					background-color:#6fb6ff;
					"
				>'.
				PlayerEventIndicator::strHTML().
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
				id="playerControlAlwaysVisiblePlaying"
				class="abs cursor layer_3_2 select"
				onclick="objPlayer.stop();"
				style="
					left		:0;
					top		:20px;
					width		:100vw;
					color		:#fff;
					display		:none;
					height		:40px;
					text-align	:left;
					background-color:#6fb6ff;
					"
				>
				<ifRU>
					....
				</ifRU>
				<ifEN>
					....
				</ifEN>
			</ifPlaying>
			<ifNoConnection
				class="cursor layer_3_2 no-select"
				onclick="objPlayer.objAudio.play();"
				style="
					display		:none;
					height		:40px;
					text-align	:center;
					background-color:rgba(255,255,255,0.82);
					"
				>⚠
			</ifNoConnection>
			<ifNoConnection
				class="abs cursor layer_3_2 no-select"
				onclick="objPlayer.objAudio.play();"
				style="
					top		:20px;
					left		:0px;
					display		:none;
					height		:40px;
					text-align	:center;
					background-color:rgba(245, 178, 178, 0.82);
					width		:100vw;
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
				class="block cursor layer_3_2 no-select"
				onclick="
					var objPlayerIndicatorMembrane			=this.nextElementSibling;
					objPlayer.objAudio.src				=b64clr(objPlayerIndicatorMembrane.getAttribute(\'playerId\'));
					objPlayer.objAudio.play();
					"
				style="
					color		:#fff;
					display		:none;
					height		:20px;
					text-align	:center;
					line-height	:19px;
					background-color:green;
					"
				>'.
				PlayerEventIndicator::strHTML().
				'<ifRU>
					▷
				</ifRU>
				<ifEN>
					▷
				</ifEN>
			</ifStopped>
			<ifStopped
				id="playerControlAlwaysVisibleStopped"
				class="abs cursor layer_3_2 select"
				onclick="
					objPlayer.objAudio.src			=b64clr(this.getAttribute(\'playerId\'));
					objPlayer.objAudio.play();
					"
				style="
					left		:0;
					top		:20px;
					width		:100vw;
					color		:#777;
					display		:none;
					height		:40px;
					line-height	:21px;
					text-align	:center;
					background-color:#FFF;
					"
				>
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
			var objPlayer=new Player();
			
			console.log(\'EDRO: Loaded player global control sensor+indicator (objPlayer.objVisibleControls)\');
		</script>
		';
		return $str;
		}
	public static function strDeclareJs()
		{
		?>
		<script>
		class Player
			{
			constructor()
				{
				console.log('[=^+v]EDRO: Run Player.constructor().');

				this.objAudio			=document.createElement('audio');
				this.strCurrentID		='';
				this.strPlayingID		='';
				this.strStationName		='';
				this.objAudio.crossorigin	="use-credentials";
				this.objVisibleControls		=document.getElementById('playerControlAlwaysVisible');
				this.objVisibleControlsPlaying	=document.getElementById('playerControlAlwaysVisiblePlaying');
				this.objVisibleControlsStopped	=document.getElementById('playerControlAlwaysVisibleStopped');
				this.objDebugString		=document.getElementById('strPlayerPlayEventsDebugString');
				this.objCurrentBlock;
				this.objPlayingBlock;
				this.bIzWhileHumanEvent		=false;
				this.bIzPlayedOnceEvent		=false;
				this.bIzNeedToBeStoppedEvent	=false;
				this.objDebugString.innerHTML='objPlayer.objAudio.construct';
				this.objAudio.onloadstart=function()
					{
					objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onloadstart';
					console.log('[=^]EDRO: Get PLayer.loadStart().');
					console.log(objPlayer.objAudio.readyState);
					objKIIM_StatisticalMembrane._incTime();
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
					console.log('[=^]EDRO: Finish get PLayer.loadStart().');
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onloadstart .bIzWhileHumanEvent=false;';
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.onwaiting=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onWaiting';
					console.log('EDRO: Get PLayer.onWaiting().');
					console.log('EDRO: Trying to load().');
					objPlayer.objAudio.load();
					objPlayer.bIzWhileHumanEvent=false;
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onWaiting .bIzWhileHumanEvent=false;';
					console.log('EDRO: Finish get PLayer.onWaiting().');
					}
				this.objAudio.oncanplay=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplay';
					console.log('[^^]EDRO: Get PLayer.CanPlay().');

					console.log('[=>]EDRO: Run Player.webAudio.api.play() .');
					objPlayer.objAudio.play();

					console.log('EDRO: Finish get PLayer.CanPlay().');
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.oncanplay .bIzWhileHumanEvent=false;';
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.oncanplaythrough=function()
					{
					objPlayer.objDebugString.innerHTML='objPlayer.objAudio.oncanplaythrough .bIzWhileHumanEvent=false;';
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.onplaying=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPlaying';
					console.log('[=>]EDRO: Get PLayer.onPlaying().');
					objKIIM_StatisticalMembrane._stop();
					objPlayer.bIzPlayedOnceEvent=true;
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.className	+=' playing';

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					console.log('[=>]EDRO: Finish get PLayer.onPlaying().');
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPlaying bIzWhileHumanEvent=false';
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.onended=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onEnded bIzWhileHumanEvent=false';
					console.log('[=>]EDRO: Get PLayer.onEnded.');
					}
				this.objAudio.onpause=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause start->';
					console.log('[==]EDRO: Get Player.Pause()');
					//console.log(objPlayer.objAudio);
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause currentBlock->';
						console.log('[==]EDRO: Finish currentBlock');
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.classList.remove('playing');
						objPlayer.objCurrentBlock.classList.remove('errorAudio');
						if(objPlayer.bIzWhileHumanEvent==false)
							{
							objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause currentBlock->bIzWhileHumanEvent==false';
							console.log('[==]EDRO: Finish currentBlock human event');
							if(objPlayer.bIzPlayedOnceEvent)
								{
								objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onPause currentBlock->bIzWhileHumanEvent==false->objPlayer.bIzPlayedOnceEvent';
								console.log('[=!]EDRO: Stop playing. Audio was playing, but we got unnormal stop event. We need to resume playing ');
								}
							objPlayer.objVisibleControls.className	+=' overload';
							objPlayer.objCurrentBlock.className	+=' overload';
							//objPlayer.objAudio.load();

							console.log('[=!^]EDRO: Run Player.webAudio.api.load(). Trying to fix connction autoatically.');

							objPlayer.objAudio.load();
							objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause->objPlayer.bIzWhileHumanEvent->objPlayer.objAudio.load();';
							//objPlayer.objAudio.play();
							//objPlayer.play();
							}
						else //isHumanEvent
							{
							objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause->objPlayer.!bIzWhileHumanEvent->objPlayer.src drop;';
							console.log('[==]EDRO: Finish get human event Player.Pause()');
							objPlayer.bIzNeedToBeStoppedEvent	=true;
							objPlayer.objAudio.src			='';
							}
						}
					console.log('[==]EDRO: Finish get Player.Pause()');
					objPlayer.objVisibleControls.className	+=' stopped';
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onPause end start->objPlayer.bIzWhileOnHumanEvent=false';
					objPlayer.bIzWhileOnHumanEvent=false;
					}
				this.objAudio.onerror=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError start->';
					objKIIM_StatisticalMembrane._stop();
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objKIIM_StatisticalMembrane._stop()->';
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('overload');
					console.log('[=?]EDRO: Get Player.error()');

					objPlayer.objPlayingBlock		=document.getElementById(objPlayer.strPlayingID);
					if(objPlayer.objPlayingBlock)
						{
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.classList.remove('overload');

						if(objPlayer.bIzNeedToBeStoppedEvent)
							{
							objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objPlayer.objPlayingBlock  objPlayer.bIzNeedToBeStoppedEvent=true->';
							console.log('[==1]EDRO: Complete human event Player.Pause()');
							objPlayer.objPlayingBlock.classList.remove('errorAudio');
							objPlayer.objVisibleControls.className	+=' stopped';
							}
						else
							{
							objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objPlayer.objPlayingBlock  objPlayer.bIzNeedToBeStoppedEvent=false->';
							console.log('[==]EDRO: get error event');
							objPlayer.objPlayingBlock.className	+=' errorAudio';
							}
						}
					if(objPlayer.bIzNeedToBeStoppedEvent)
						{
						console.log('[==2]EDRO: Complete human event Player.Pause()');
						objPlayer.objVisibleControls.classList.remove('errorAudio');
						objPlayer.bIzNeedToBeStoppedEvent=false;
						objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError objPlayer.bIzNeedToBeStoppedEvent=false; was true flag->';
						return true;
						}
					objPlayer.objVisibleControls.className	+=' errorAudio';
					if(objPlayer.bIzPlayedOnceEvent)
						{
						console.log('[=!^v]EDRO: Audio was playing, but connection was lost. Trying to fix connction error autoatically.');

						//console.log('EDRO: Run Player.webAudio.api.pause().');
						//objPlayer.objAudio.pause();

						console.log('[=^v+]EDRO: Run Player.webAudio.api.load(). Trying to resume. ');
						objPlayer.objAudio.load();
						objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError bIzPlayedOnce>Event=true flag objPlayer.objAudio.load()->';
						}
					console.log('[=!^x]EDRO: Finish get Player.error(). Error is unfixable.');
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onError dropHumanEvent flag->';
					objPlayer.bIzWhileOnHumanEvent=false;
					}
				this.objAudio.onstalled=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onStalled';
					console.log('[=>]EDRO: Get PLayer.onStalled.');
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onStalled-> .load()';
					objPlayer.objAudio.load();
					}
				this.objAudio.onabort=function()
					{
					objKIIM_StatisticalMembrane._stop();
					console.log('[=x]EDRO: Get Player.abort()');
					console.log('[=x]EDRO: Finish get Player.abort().');
					objPlayer.bIzWhileHumanEvent=false;
					//objPlayer.objDebugString.innerHTML='objPlayer.objAudio.onAbort dropHumanEvent flag->';
					}
				this.objAudio.onsuspend=function()
					{
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onSuspend';
					console.log('[=>]EDRO: Get PLayer.onSuspend.');
					objPlayer.objDebugString.innerHTML+='objPlayer.objAudio.onSuspend-> .huy()';
					objPlayer.objAudio.play();
					}
				console.log('[=^+v]EDRO: Finish run Player.constructor().');
				}
			play(obj, strAudio)
				{
				console.log('[=>]EDRO: Run Player.play().');
				objPlayer.objDebugString.innerHTML+='objPlayer.Play->';
				objPlayer.objVisibleControlsPlaying.innerHTML='';
				objPlayer.bIzWhileHumanEvent	=true;
				objPlayer.bIzPlayedOnceEvent	=false;

				if(objPlayer.strPlayingID!=false)
					{
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');
					
					objPlayer.objPlayingBlock	=document.getElementById(objPlayer.strPlayingID);
					
					if(objPlayer.objPlayingBlock)
						{
						objPlayer.objPlayingBlock.classList.remove('overload');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('errorAudio');
						}
					}
				objPlayer.objVisibleControls.className	+=' loadingAudio';

				//objPlayer.objCurrentBlock		=obj.parentNode.parentNode;
				if(typeof(obj)=='object')
					{
					let objStation				=obj.parentNode.parentNode.parentNode;
					objPlayer.strCurrentID			=objStation.id;
					objPlayer.objAudio.src			=b64clr(strAudio);
										objKIIM_StatisticalMembrane._start(objStation);
					}
				objPlayer.objCurrentBlock			=document.getElementById(objPlayer.strCurrentID);
				objPlayer.strStationName			=objPlayer.objCurrentBlock.getElementsByTagName('h2')[0].innerHTML;
				objPlayer.objVisibleControlsPlaying.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.setAttribute('playerId', strAudio);
				
				objPlayer.objCurrentBlock.className		+=' loadingAudio';
				
				objPlayer.strPlayingID				=objPlayer.strCurrentID;

				console.log('[>>]EDRO: Run Player.webAudio.api.load().');
				objPlayer.objAudio.load();

				console.log('[=>]EDRO: Finish run Player.play().');
				}
			stop(strIsHumanOr='Unknown')
				{
				console.log('[==]EDRO: Run Player.stop() .');
				objPlayer.objDebugString.innerHTML+='objPlayer.Stop->';
				objPlayer.bIzWhileHumanEvent		=true;
				objPlayer.bIzPlayedOnceEvent		=false;
				objPlayer.bIzNeedToBeStoppedEvent	=true;

				console.log('[=||]EDRO: Run Player.webAudio.pause() .');
				objPlayer.objAudio.pause();
				objPlayer.objAudio.src			='';

				console.log('[==]EDRO:Run Finish Player.stop() .');
				}
			updateOnReload()
				{
				console.log('[(><)]EDRO: Run Player.updateOnReload() .');
				objPlayer.objDebugString.innerHTML+='objPlayer.updateOnReload->';
				if(objPlayer.objVisibleControls.classList.contains('playing'))
					{
				objPlayer.objDebugString.innerHTML='objPlayer. has playing flag->';
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objDebugString.innerHTML+='objPlayer. is current block->';
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					}
				if(objPlayer.objVisibleControls.classList.contains('loadingAudio'))
					{
					objPlayer.objDebugString.innerHTML+='objPlayer. has loadingAudio block->';
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objDebugString.innerHTML+='objPlayer. adding loadingAudio flag to current block->';
						objPlayer.objCurrentBlock.className	+=' loadingAudio';
						}
					}
				console.log('[(><)]EDRO: Finish run Player.updateOnReload() .');
				}
			}
		</script>
		<?php
		}
	}
?>