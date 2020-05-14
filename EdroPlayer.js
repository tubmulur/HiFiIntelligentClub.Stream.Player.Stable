class Player
			{
			constructor()
				{
				console.log('EDRO: Run Player.constructor().');

				this.objAudio			=document.createElement('audio');
				this.strCurrentID		='';
				this.strPlayingID		='';
				this.objAudio.crossorigin	="use-credentials";
				this.objVisibleControls		=document.getElementById('playerControlAlwaysVisible');
				this.objCurrentBlock;
				this.objPlayingBlock;
				this.bIzWhileHumanEvent		=false;
				this.bIzPlayedOnceEvent		=false;

				this.objAudio.onloadstart=function()
					{
					console.log('EDRO: Get PLayer.loadStart().');
					console.log(objPlayer.objAudio.readyState);
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
					console.log('EDRO: Finish get PLayer.loadStart().');
					}
				this.objAudio.onwaiting=function()
					{
					console.log('EDRO: Get PLayer.onWaiting().');
					console.log('EDRO: Finish get PLayer.onWaiting().');
					}
				this.objAudio.oncanplay=function()
					{
					console.log('EDRO: Get PLayer.CanPlay().');

					console.log('EDRO: Run Player.webAudio.api.play() .');
					objPlayer.objAudio.play();

					console.log('EDRO: Finish get PLayer.CanPlay().');
					}
				this.objAudio.oncanplaythrough=function()
					{

					}
				this.objAudio.onplaying=function()
					{
					console.log('EDRO: Get PLayer.onPlaying().');
					objPlayer.bIzPlayedOnceEvent=true;
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.className	+=' playing';

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					console.log('EDRO: Finish get PLayer.onPlaying().');
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.onpause=function()
					{
					console.log('EDRO: Get Player.Pause()');
					//console.log(objPlayer.objAudio);
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.classList.remove('playing');
						objPlayer.objCurrentBlock.classList.remove('errorAudio');
						if(objPlayer.bIzWhileHumanEvent==false)
							{
							if(objPlayer.bIzPlayedOnceEvent)
								{
								console.log('EDRO: Stop playing. Audio was playing, but we got unnormal stop event. We need to resume playing ');
								}
							objPlayer.objVisibleControls.className	+=' overload';
							objPlayer.objCurrentBlock.className	+=' overload';
							//objPlayer.objAudio.load();

							console.log('EDRO: Run Player.webAudio.api.load(). Trying to fix connction autoatically.');
							objPlayer.objAudio.load();
							//objPlayer.objAudio.play();
							//objPlayer.play();
							}
						}
					console.log('EDRO: Finish get Player.Pause()');
					objPlayer.bIzWhileOnHumanEvent=false;
					}
				this.objAudio.onerror=function()
					{
					console.log('EDRO: Get Player.error()');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.className	+=' errorAudio';

					objPlayer.objPlayingBlock		=document.getElementById(objPlayer.strPlayingID);
					if(objPlayer.objPlayingBlock)
						{
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.className	+=' errorAudio';
						}
					if(objPlayer.bIzPlayedOnceEvent)
						{
						console.log('EDRO: Audio was playing, but connection was lost. Trying to fix connction error autoatically.');

						//console.log('EDRO: Run Player.webAudio.api.pause().');
						//objPlayer.objAudio.pause();

						console.log('EDRO: Trying to resume');

						console.log('EDRO: Run Player.webAudio.api.load(). ');
						objPlayer.objAudio.load();
						
						}
					console.log('EDRO: Finish get Player.error(). Error is unfixable.');
					}
				this.objAudio.onabort=function()
					{
					console.log('EDRO: Get Player.abort()');
					console.log('EDRO: Finish get Player.abort().');
					}
				console.log('EDRO: Finish run Player.constructor().');
				}
			play(obj, strAudio)
				{
				console.log('EDRO: Run Player.play().');
				objPlayer.bIzWhileHumanEvent	=true;
				objPlayer.bIzPlayedOnceEvent	=false;

				if(objPlayer.strPlayingID!=false)
					{
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
					objPlayer.strCurrentID			=obj.parentNode.parentNode.id;
					objPlayer.objAudio.src			=b64clr(strAudio);
					}
				objPlayer.objCurrentBlock		=document.getElementById(objPlayer.strCurrentID);
				
				objPlayer.objCurrentBlock.className	+=' loadingAudio';
				
				objPlayer.strPlayingID			=objPlayer.strCurrentID;

				console.log('EDRO: Run Player.webAudio.api.load().');
				objPlayer.objAudio.load();

				console.log('EDRO: Finish run Player.play().');
				}
			stop(strIsHumanOr='Unknown')
				{
				console.log('EDRO: Run Player.stop() .');
				objPlayer.bIzWhileHumanEvent	=true;
				objPlayer.bIzPlayedOnceEvent	=false;

				console.log('EDRO: Run Player.webAudio.pause() .');
				objPlayer.objAudio.pause();

				console.log('EDRO:Run Finish Player.stop() .');
				}
			updateOnReload()
				{
				console.log('EDRO: Run Player.updateOnReload() .');
				if(objPlayer.objVisibleControls.classList.contains('playing'))
					{
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					}
				if(objPlayer.objVisibleControls.classList.contains('loadingAudio'))
					{
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.className	+=' loadingAudio';
						}
					}
				console.log('EDRO: Finish run Player.updateOnReload() .');
				}
			}
		
